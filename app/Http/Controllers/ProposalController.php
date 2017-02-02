<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use GuzzleHttp\Client;

class ProposalController extends Controller
{
    protected $data = [
                'base_uri'  => 'http://localhost:8000',
                'headers'   => [
                    'api-key'   => 'base64:rtjZaJpgQGoz23tp3l88iaJgGaMh9A9mdWUpsqKAecM='
                ]
    ];

    public function pengajuan(Request $request)
    {

        if($request->hasFile('proposal')) {
            $proposal = $request->file('proposal');
            $ext = $proposal->getClientOriginalExtension();

            if($request->file('proposal')->isValid()) {
                $proposal_nama = date('YmdHis');
                $proposal_name = $proposal_nama. ".$ext";
                $upload_path = 'proposalupload';
                $request->file('proposal')->move($upload_path,$proposal_name);

                $id_anggota = session()->get('id_anggota');
                $proposal = $proposal_nama;
                $event = $request->event;
                $kategori = $request->kategori;
                $deskripsi = $request->deskripsi;

                $client = new Client($this->data);

                $response = $client->post('api/anggota/ajukan',[
                    'form_params'   => [
                        'id_anggota' => $id_anggota,
                        'proposal'   => $proposal,
                        'kategori'   => $kategori,
                        'deskripsi'  => $deskripsi,
                        'event'      => $event,
                    ]
                ]);

                $body = $response->getBody();
                $res = json_decode($body);

                try{
                    if(($res->created) == true)
                    {
                        $event = collect($res->data);
                        $event = $event->get('event');

                        return redirect()->route('responajuan')
                                        ->with('success','pengajuan success');

                    }
                    else
                    {
                        return Redirect::back()->withInput()->with('alert','pengajuan gagal');
                    } 

                }
                catch (GuzzleHttp\Exception\ClientException $e) {
                $response = $e->getResponse();
                $result =  $response->getBody();

                    return Redirect::back()->withInput()->with('alert','pengajuan gagal');

                }


            }
        }

        
    }

    public function viewReview()
    {
        $id =session()->get('id_anggota');

        $client = new Client($this->data);

        $response = $client->get('api/anggota/pengajuanku/'.$id);

        $body = $response->getBody();

        $pengajuans = json_decode($body);


        return view('viewreview')->with(compact('pengajuans'));
    }
    public function download($file)
    {
        $files = public_path(). "/proposalupload/".$file.".pdf";

         $headers = array(
              'Content-Type: application/pdf',
            );

        return response()->download($files, $file, $headers);
        
    }

    public function showAllpengajuan()
    {
        
        $client = new Client($this->data);

        $response = $client->get('api/pengajuans');

        $body = $response->getBody();

        $pengajuans = json_decode($body);

        return view('validasiproposal')->with(compact('pengajuans')); 
    }
    public function validasi($id, Request $request)
    {

        $client = new Client($this->data);

                $response = $client->put('api/admin/validasi/'.$id,[
                    'form_params'   => [
                        'id_pengajuan'             => $id,
                        'status_valid'             => $request->status_valid,
                    ]
                ]);

                $body = $response->getBody();
                $res = json_decode($body);

                // print_r($res);

                 try{
                    if(($res->validasi) == true)
                    {
                        $event = collect($res->data);

                        return redirect()->route('validasi')
                                        ->with('success','respon validasi success');

                    }
                    else
                    {
                        return Redirect::back()->withInput()->with('alert','validasi gagal');
                    } 

                }
                catch (GuzzleHttp\Exception\ClientException $e) {
                $response = $e->getResponse();
                $result =  $response->getBody();

                    return Redirect::back()->withInput()->with('alert','pengajuan gagal');

                }
    }
    public function viewForReview()
    {
        $client = new Client($this->data);

        $response = $client->get('api/perusahaan/pengajuan');

        $body = $response->getBody();

        $pengajuans = json_decode($body);

        return view('viewpengajuan')->with(compact('pengajuans')); 
    }
    public function ReviewPrposal(Request $request, $id)
    {
        $id_perusahaan =session()->get('id_perusahaan');

        $client = new Client($this->data);

                $response = $client->post('api/perusahaan/review',[
                    'form_params'   => [
                        'id_pengajuan'             => $id,
                        'status'                   => $request->status,
                        'id_perusahaan'            => $id_perusahaan,
                    ]
                ]);

                $body = $response->getBody();
                $pengajuans = json_decode($body);

                // print_r($res);

                 try{
                    if(($pengajuans->created) == true)
                    {
                        $success = "respon review berhasil";

                        return redirect()->route('viewpengajuan')
                                        ->with(compact('success'));
                                        // ->with('success','respon review success');

                    }
                    else
                    {
                        return Redirect::back()->withInput()->with('alert','sudah direview ');
                    } 

                }
                catch (GuzzleHttp\Exception\ClientException $e) {
                $response = $e->getResponse();
                $result =  $response->getBody();

                    return Redirect::back()->withInput()->with('alert','sudah divalidasi');

                }
    }
    public function detailProposal($id)
    {
        $client = new Client($this->data);

        $response = $client->get('api/pengajuans/detail/'.$id);

        $body = $response->getBody();

        $pengajuans = json_decode($body);
        return view('viewpengajuandetail')->with(compact('pengajuans')); 
    }

    public function listProposalDiterima()
    {
        $id =session()->get('id_perusahaan');
        
        $client = new Client($this->data);

        $response = $client->get('api/perusahaan/diterima/'.$id);

        $body = $response->getBody();

        $pengajuans = json_decode($body);

        return view('viewpengajuanditerima')->with(compact('pengajuans')); 
    
    }
    public function detailreview($id)
    {
        
        $client = new Client($this->data);

        $response = $client->get('api/perusahaan/diterima/detail/'.$id);

        $body = $response->getBody();

        $pengajuans = json_decode($body);

        // print_r($pengajuans);
        return view('pilihrespon')->with(compact('pengajuans')); 

    }
}
