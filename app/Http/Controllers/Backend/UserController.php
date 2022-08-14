<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userView()
    {
        $data = User::orderBy('created_at', 'DESC')->get();

        return view('backend.user.view', ['data' => $data]);
    }

    public function userAdd()
    {
        return view('backend.user.add');

    }

    public function userStore(Request $req)
    {

         
            $validateData  = $req->validate([

                   'email' => 'required|unique:users',
                   'name' => 'required',
                   'role' => 'required',
                   'password' => 'required', 
 
            ]);


            $data = new User();

            $data->	user_type = $req->role;
            $data->	email = $req->email;
            $data->	name = $req->name;
            $data->	password = bcrypt($req->password);

            $data->save();


            return redirect()->route('user.view');



    }
}
