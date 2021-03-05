<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->name = $this->findUsername();

    }


    public function findUsername()
    {
        $login = request()->input('login');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }
 
    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->name;
    }

    

// public function softDelete(Request $request)
//     {
//         if(Auth::attempt([
//             'email' => $request->get('email'),
//             'password' => $request->get('password')
//         ])){
//            //Login success and get user's info to check
//             if (\auth()->user()->deleted_at != null){
//                // Put your code in case use has been soft deleted
//             //    User::find(6)->delete();
//              $user = User::find($id)->delete();
//              //dd($user);
//              }
//         } else {
//            // Login fail
//            echo "Deleted  User Not Access to login";
//    }
//     }
}
