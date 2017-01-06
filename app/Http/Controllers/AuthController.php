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
                    $id = collect($res->data[0]);
                    $id = $id->get('id');
                    $request->session()->put('id_anggota', $id);                    
                    $request->session()->put('email', $email);
                    $request->session()->put('password', $password);

                    return redirect()->route('home')
                                    ->with('success','login success');

                    // return view('home')->with(compact('id',$id));

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
        return redirect()->route('home');
        
    }

    public function register(Request $request)
    {
        $nama           = $request->name; 
        $email          = $request->email;
        $password       = $request->password;
        $komunitas      = $request->komunitas;
        $kampus         = $request->kampus;
        $alamatKampus   = $request->alamatKampus;
        $deskripsi      = $request->deskripsi;

        $client = new Client($this->data);    

        $response = $client->post('api/auth/register',[
            'form_params'   => [
                'nama'          => $nama,
                'email'         => $email,
                'password'      => $password,
                'komunitas'     => $komunitas,
                'kampus'        => $kampus,
                'alamatKampus'  => $alamatKampus,
                'deskripsi'     => $deskripsi
            ]
        ]);

        $body = $response->getBody();

        $res = json_decode($body);

        try {
                if(($res->created) == true)
                {
                    $id = collect($res->data[0]);
                    $id = $id->get('id');
                    $request->session()->put('id_anggota', $id);
                    $request->session()->put('email', $email);
                    $request->session()->put('password', $password);
                    
                    return redirect()->route('home')
                                    ->with('success','registrasi success');
                }
                else
                {
                    return Redirect::back()->withInput()->with('alert','registrasi tidak berhasil, email sudah ada yang punya');
                } 
            }
            catch (GuzzleHttp\Exception\ClientException $e) {
                $response = $e->getResponse();
                $result =  $response->getBody();

                    return Redirect::back()->withInput()->with('alert','registrasi tidak berhasil');

            }



    }


}
  