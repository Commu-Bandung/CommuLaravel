<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use GuzzleHttp\Client;

class PengajuanController extends Controller
{
    protected $data = [
                'base_uri'  => 'http://localhost:8000',
                'headers'   => [
                    'api-key'   => 'base64:rtjZaJpgQGoz23tp3l88iaJgGaMh9A9mdWUpsqKAecM='
                ]
    ];

    public function pengajuan(Request $request)
    {
        
    }
}
