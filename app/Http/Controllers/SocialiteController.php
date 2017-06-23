<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the Google/Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try{
            $user = Socialite::driver('google')->user();
        }catch (ClientException $exception){
            dd($exception->getMessage());
        }

        if ($user->user['domain'] == "beitsafe.com" || $user->user['domain'] == "arkinfotec.com" ) {

            if (\App\User::where('email',$user->email)->count() > 0 ) {
                \Auth::login(\App\User::where('email', $user->email)->first());
                return redirect(url('home'));
            } else {
                $newuser = \App\User::create([
                    'email' => $user->email,
                    'name' => $user->name,
                    'password' => ''
                ]);

                \Auth::login($newuser);

                return redirect(url('home'));
            }

        } else {
            return redirect(url('errors/domain'));
        }
    }
    public function index()
    {
        return view('home');
    }
}
