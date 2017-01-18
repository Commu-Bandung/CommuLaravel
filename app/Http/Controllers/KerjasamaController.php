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
}
