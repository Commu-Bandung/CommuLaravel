<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use GuzzleHttp\Client;

class profileController extends Controller
{
    protected $data = [
                'base_uri'  => 'http://localhost:8000',
                'headers'   => [
                    'api-key'   => 'base64:rtjZaJpgQGoz23tp3l88iaJgGaMh9A9mdWUpsqKAecM='
                ]
    ];

    public function showProfile()
    {
        $id = session()->get('id_anggota');

        $client = new Client($this->data);

        $response = $client->get('api/anggota/profile/'.$id);

        $body = $response->getBody();

        $profiles = json_decode($body);
        
        return view('profile')->with(compact('profiles')); 
        
    }
    public function editProfile()
    {
        $id = session()->get('id_anggota');
        
        $client = new Client($this->data);

        $response = $client->get('api/anggota/profile/'.$id);

        $body = $response->getBody();

        $profiles = json_decode($body);
        
        return view('editprofile')->with(compact('profiles'));
    }
    public function updateprofile(Request $request)
    {
        $id = session()->get('id_anggota');

        $client = new Client($this->data);

        $response = $client->put('api/anggota/update/'.$id, [
            'form_params'   => [
                'nama'          => $request->nama,
                'komunitas'     => $request->komunitas,
                'kampus'        => $request->kampus,
                'alamatKampus'  => $request->alamat,
                'deskripsi'     => $request->deskripsi
            ]
        ]);
        $body = $response->getBody();

        $res = json_decode($body);

        if (isset($res->updated) == true)
        {
            return Redirect::to('profil')->with('success', 'User updated successfully!');
        }
        else 
        {
            return Redirect::back()->withInput()->with('alert', 'User update error');
        }

    }

    public function showprofileAdmin()
    {
        $id = session()->get('id_admin');
        
        $client = new Client($this->data);

        $response = $client->get('api/admin/profile/'.$id);

        $body = $response->getBody();

        $profiles = json_decode($body);
        
        return view('profileadmin')->with(compact('profiles')); 
    }
    public function editProfileAdmin()
    {
         $id = session()->get('id_admin');
        
        $client = new Client($this->data);

        $response = $client->get('api/admin/profile/'.$id);

        $body = $response->getBody();

        $profiles = json_decode($body);
        
        return view('editprofileadmin')->with(compact('profiles')); 
    }
    public function updateProfileAdmin(Request $request)
    {
        $id = session()->get('id_admin');

        $client = new Client($this->data);

        $response = $client->put('api/admin/update/'.$id, [
            'form_params'   => [
                'nama'          => $request->nama,
                'email'         => $request->email,
                'password'      => $request->password,
            ]
        ]);
        $body = $response->getBody();

        $res = json_decode($body);

        if (isset($res->updated) == true)
        {
            return Redirect::to('profiladmin')->with('success', 'User updated successfully!');
        }
        else 
        {
            return Redirect::back()->withInput()->with('alert', 'User update error');
        }


    }
}
