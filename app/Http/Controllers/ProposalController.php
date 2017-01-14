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
                $proposal_name = date('YmdHis'). ".$ext";
                $upload_path = 'proposalupload';
                $request->file('proposal')->move($upload_path,$proposal_name);

                $id_anggota = session()->get('id_anggota');
                $proposal = $proposal_name;
                $event = $request->event;
                $kategori = $request->kategori;
                $deskripsi = $request->deskripsi;

                $client = new Client($this->data);

                $response = $client->post('api/anggota/ajukan',[
                    'form_params'   => [
                        'id_anggota' => $id_anggota,
                        'proposal'   => $proposal,
                        'event'      => $event,
                        'kategori'   => $kategori,
                        'deskripsi'  => $deskripsi,
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
}
