<?php

namespace App\Http\Controllers\Auth;

use App\SocialProvier;
use Illuminate\Support\Facades\DB;
use App\anggotas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
     
     
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider, Request $request)
    {
        try
        {
            $socialUser = Socialite::driver($provider)->user();
        }
        catch (\Exception $e)
        {
            return ('/');
        }

        $socialProvider = SocialProvier::where('provider_id',$socialUser->getId())->first();
        if (!$socialProvider)
        {
            $user = anggotas::firstOrCreate(
                ['email'    =>  $socialUser->getEmail()],
                ['name'    =>  $socialUser->getName()]
            );

            $user->socialProviders()->create(
                ['provider_id'  =>  $socialUser->getId(), 'provider'  => $provider]
            );            
        }
        else       

            $user = $socialUser->getEmail();

             $data = DB::table('anggotas')
                            ->select('id')
                            ->where('email', '=',$user)
                            ->get();
            $id = collect($data[0]);
            $id = $id->get('id');

            $request->session()->put('id_anggota', $id);
            $request->session()->put('email', $user);
 

        // auth()->login($user);

        return redirect('/home');
        // $user->token;
    }
}
