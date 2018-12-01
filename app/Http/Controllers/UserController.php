<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "firstname" => "required|min:1|max:255",
            "lastname" => "required|min:1|max:255",
            "mail" => "required|min:1|max:255|email|unique:users",
            "password" => "required|min:8|confirmed",
        ]);

        $role = Role::where("name", "=", "user")->first();

        User::create([
            "firstname" => $request->input("firstname"),
            "lastname" => $request->input("lastname"),
            "mail" => $request->input("mail"),
            "password" => Hash::make($request->input("password")),

            "role_id" => $role->id,
        ]);

            echo "L'utilisateur {$request->mail} a été créer";
            return redirect("/");

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

    public function login()
    {
        return view("users.login");
    }

    public function doLogin(Request $request)
    {
        $email = $request -> input("mail");
        $password = $request -> input('password');

        $user = User::where("mail", "=", $email)->first();
        if($user)
        {
            if(Hash::check($password, $user-> password))
            {
                Session::put("user", $user);
                return redirect("/");
            }
            return back()->withErrors("Invalid email or password");    
        }

    }

    public function logout()
    {

        Session::flush();

        return redirect("/");
    }
}
