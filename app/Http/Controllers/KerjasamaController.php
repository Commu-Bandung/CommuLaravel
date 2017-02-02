<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use GuzzleHttp\Client;


class KerjasamaController extends Controller
{
    protected $data = [
                'base_uri'  => 'http://localhost:8000',
                'headers'   => [
                    'api-key'   => 'base64:rtjZaJpgQGoz23tp3l88iaJgGaMh9A9mdWUpsqKAecM='
                ]
    ];

    public function viewKejasama()
    {
        $id =session()->get('id_anggota');

        $client = new Client($this->data);

        $response = $client->get('api/anggota/kerjasamaku/'.$id);

        $body = $response->getBody();

        $kerjasamas = json_decode($body);

        return view('kerjasama')->with(compact('kerjasamas'));
    }
    public function buatKerjasama($id, Request $request)
    {
        $client = new Client($this->data);

                $response = $client->post('api/perusahaan/buatkerjasama',[
                    'form_params'   => [
                        'id_review'          => $id,
                        'produk'             => $request->produk,
                        'jumlah'             => $request->jumlah,
                    ]
                ]);

                $body = $response->getBody();
                $kerjasamas = json_decode($body);

                // print_r($kerjasamas);

                 try{
                    if(($kerjasamas->created) == true)
                    {
                        $success = "aksi review berhasil";

                        return redirect()->route('perusahaan')
                                        ->with(compact('success'));

                    }
                    else
                    {
                        return Redirect::back()->withInput()->with('alert','sudah direspon ');
                    } 

                }
                catch (GuzzleHttp\Exception\ClientException $e) {
                $response = $e->getResponse();
                $result =  $response->getBody();

                    return Redirect::back()->withInput()->with('alert','sudah direspon');

                }

    }

    public function showKerjasamaByperusahaan()
    {
        $id =session()->get('id_perusahaan');

        $client = new Client($this->data);

        $response = $client->get('api/perusahaan/showkerjasama/'.$id);

        $body = $response->getBody();

        $kerjasamas = json_decode($body);
// print_r($kerjasamas);
        return view('kerjasamaperusahaan')->with(compact('kerjasamas'));
    }
}
