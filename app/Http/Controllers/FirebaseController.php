<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Session;


class FirebaseController extends Controller
{    
    protected $auth, $database;

    public function __construct()
    {
        $this->auth = app('firebase.auth');
        $this->database = app('firebase.database');
    }

    protected function validator(array $data) {
        return Validator::make($data, [
           'username' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
           'phonenumber' => ['required', 'regex:/^(\+62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{4}[\s-]?\d{2,5}$/']
        ]);
     }

    public function signUp(Request $request)
    {
        try {
            $this->validator($request->all())->validate();

            $userProperties = [
                'email' => $request->email,
                'phoneNumber' => $request->phonenumber,
                'password' => $request->password,
                'displayName' => $request->username,
                'photoUrl' => Avatar::create($request->username)->toBase64(),
            ];

            // $newUser = $this->auth->createUserWithEmailAndPassword($email, $pass);
            $createdUser = $this->auth->createUser($userProperties);

            return redirect("/login");

        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'The email address is already in use by another account.':
                    dd("Email sudah digunakan.");
                    break;
                case 'A password must be a string with at least 6 characters.':
                    dd("Kata sandi minimal 6 karakter.");
                    break;
                default:
                    dd($e->getMessage());
                    break;
            }
        }
    }

    public function login(Request $request){
        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($request->email, $request->password);
            
            //user session
            
            $user = new User($signInResult->data());
            Session::put('user',$user);
            //uid Session
            $loginuid = $signInResult->firebaseUserId();
            Session::put('uid',$loginuid);
            // dd($user);
            return redirect("/home");
        } catch (\Throwable $e) {
            dd($e->getMessage());
        }
    }

    public function getLoginData(Request $request){
        try {
            // Provider type
            $provider = $request->data['providerUserInfo'][0]['providerId'];
            Session::put('provider', $provider);

            // //uid Session
            $user = [
                "displayName" => $request->data['displayName'],
                "photoUrl" => $request->data['photoUrl'],
                'localID'=> $request->data['localId'],
            ];
            Session::put('user',$user);
            // //uid Session
            $loginuid = $request->uid;
            Session::put('uid',$loginuid);

            return response("Save Data Completed", 200);
        } catch (\Throwable $e) {
            // dd($e->getMessage());
            return response("failed save data", 400);
        }
    }

    

    public function flushSession(){
        Session::flush();
        return redirect("/");
    }
}
