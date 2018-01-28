<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
  use App\Sitesettings;

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

    use RegistersUsers;
    
    
    
     public function destroy($id) { 
         
         if($id==2) {
             
                  return back(); 

         }
         else{
     $nerd = User::find($id);
    $nerd->delete();
         }
     return back(); 
 
 
 }
 
 	            /**************************************************************************************************************************/

    
    
		 public function All_auth ()
    {
  
 
    $Sitesettings =   Sitesettings::all();
     $Boats =  User::paginate(10);
 

     return view('admin.All_auth_user', [ 'Sitesettings' => $Sitesettings,'Boats' => $Boats ]);

  
 
    }
    
    
    	            /**************************************************************************************************************************/

    
   public function in()
    {
 $register="";
 
     return view('auth.register', ['register' => $register  ]);
 
 }
    	            /**************************************************************************************************************************/

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'api_token' => str_random(70),

        ]);
    }
}
