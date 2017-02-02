<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use GuzzleHttp\Client;



class BantuanController extends Controller
{
    protected $data = [
                'base_uri'  => 'http://localhost:8000',
                'headers'   => [
                    'api-key'   => 'base64:rtjZaJpgQGoz23tp3l88iaJgGaMh9A9mdWUpsqKAecM='
                ]
    ];

    public function viewBantuan()
    {
        $id =session()->get('id_anggota');

        $client = new Client($this->data);

        $response = $client->get('api/anggota/viewbantuan/'.$id);

        $body = $response->getBody();

        $bantuans = json_decode($body);

        return view('bantuan')->with(compact('bantuans'));
    }

    public function addBantuan(Request $request, $id)
    {
        if($request->hasFile('bukti')) {
            $bukti = $request->file('bukti');
            $ext = $bukti->getClientOriginalExtension();

            if($request->file('bukti')->isValid()) {
                $bukti_nama = date('YmdHis');
                $bukti_name = $bukti_nama. ".$ext";
                $upload_path = 'buktiupload';
                $request->file('bukti')->move($upload_path,$bukti_name);

                $bukti          = $bukti_nama;
                $jumlah_dana    = $request->jumlah_dana;

                $client = new Client($this->data);

                $response = $client->post('api/perusahaan/bantuan',[
                    'form_params'   => [
                        'id_review'     => $id,
                        'jumlah_dana'   => $jumlah_dana,
                        'bukti'         => $bukti,
                    ]
                ]);

                $body = $response->getBody();
                $res = json_decode($body);
// print_r($res);
                try{
                    if(($res->created) == true)
                    {
                        $bantuans = collect($res->data);

                        return redirect()->route('perusahaan')
                                        ->with('success','bantuan success');

                    }
                    else
                    {
                        return Redirect::back()->withInput()->with('alert','bantuan sudah dilakukan');
                    } 

                }
                catch (GuzzleHttp\Exception\ClientException $e) {
                $response = $e->getResponse();
                $result =  $response->getBody();

                    return Redirect::back()->withInput()->with('alert','bantuan sudah dilakukan');

                }


            }
        }
    }

    public function showBantuanByperusahaan()
    {
        $id =session()->get('id_perusahaan');

        $client = new Client($this->data);

        $response = $client->get('api/perusahaan/semuabantuan/'.$id);

        $body = $response->getBody();

        $bantuans = json_decode($body);
// print_r($bantuans);
        return view('bantuanperusahaan')->with(compact('bantuans'));
    }
    
}
