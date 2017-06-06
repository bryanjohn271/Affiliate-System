<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\aff_country;
use App\aff_status;
use App\aff_account;
use App\aff_role_access;

class AccountsController extends Controller
{


        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
      

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$user = aff_account::all();  
        $user = aff_account::select('aff_accounts.id','aff_accounts.first_name','aff_accounts.last_name','aff_accounts.email','aff_statuses.status_name','aff_countries.country_name')->join('aff_statuses', 'aff_accounts.account_id', '=', 'aff_statuses.id')->join('aff_countries', 'aff_accounts.country_id', '=', 'aff_countries.id')->get();  
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = aff_country::all();    
        $account = aff_status::where('level', 'LIKE', '%user%')->get();
        return view('user.create', compact('country', 'account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new aff_account;
        $this->validate($request,[
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:aff_accounts',
                'password' => 'required|string|min:6|confirmed',
                'account_type' => 'required|numeric',
                'country' => 'required|numeric',
                                       
            ]);

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


        $user = aff_account::select('aff_accounts.id','aff_accounts.first_name','aff_accounts.last_name','aff_accounts.email','aff_statuses.status_name','aff_countries.country_name')->join('aff_statuses', 'aff_accounts.account_id', '=', 'aff_statuses.id')->join('aff_countries', 'aff_accounts.country_id', '=', 'aff_countries.id')->get();  
        return view('user.index', compact('user'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
