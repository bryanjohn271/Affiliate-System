<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aff_country;
use App\Aff_status;
use App\Aff_account;
use App\User;
use App\aff_role_access;



class CreateAccountController extends Controller
{

	  public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');

    }


 	public function showregisterform()
 	{
 		$country = aff_country::all();    
        $account = aff_status::where('level', 'LIKE', '%user%')->get();
 		return view('user.accounts.register',compact('country', 'account'));  

 	}


 	public function regsiteraccounts(Request $request)
 	{
 				/*$this->validation($request);
 				Aff_account::create($request->all());*/
 				//return $request->all();

 				$user = new aff_account;

		        $user->first_name = $request->first_name;
		        $user->last_name = $request->last_name;
		        $user->email = $request->email;
		        $user->account_id = $request->account_type;
		        $user->country_id = $request->country;
		        $user->password = bcrypt($request->password);
		    
		        $user->save();

		        $lastinsert = $user->id;

		        $role_access = new aff_role_access;
		        $role_access->aff_status_id = $request->account_type;
		        $role_access->user_id = $lastinsert;
		        $role_access->save();


 				return redirect('/dashboard');
 	}

	public function validation($request)
 	{
 			return $this->validate($request,[
					'first_name' => 'required|string|max:255',
					'last_name' => 'required|string|max:255',
					'email' => 'required|string|email|max:255|unique:aff_accounts',
					//'email' => 'required|string|email|max:255',
					'password' => 'required|string|min:6|confirmed',
					'account_type' => 'required|numeric',
					'country' => 'required|numeric',

 				]);		

 	}

   
}
