<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use GuzzleHttp\Client;

class AuthController extends Controller
{
    protected $data = [
                'base_uri'  => 'http://localhost:8000',
                'headers'   => [
                    'api-key'   => 'base64:rtjZaJpgQGoz23tp3l88iaJgGaMh9A9mdWUpsqKAecM='
                ]
    ];

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $request->session()->put('email', $email);
        $request->session()->put('password', $password);

        $client = new Client($this->data);

        $response = $client->post('api/auth/login/anggota',[
            'form_params'   => [
                'email' => $email,
                'password'  => $password
            ]
        ]);

        $body = $response->getBody();

        $res = json_decode($body);

         try {
                if(($res->login) == true)
                {
                    return redirect()->route('home')
                                    ->with('success','login success');
                }
                else
                {
                    return Redirect::back()->withInput()->with('alert','login email atau password salah');
                } 
            }
            catch (GuzzleHttp\Exception\ClientException $e) {
                $response = $e->getResponse();
                $result =  $response->getBody();

                    return Redirect::back()->withInput()->with('alert','login email dan password tidak ada');

            }
    }

    public function logout()
    {
        session()->flush();
        return view('auth/login');
    }


}
