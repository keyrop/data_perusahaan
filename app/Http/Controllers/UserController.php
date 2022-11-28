<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;// import model user
use App\Http\Requests\userRequest;

class UserController extends Controller
{
    public function tampil() {
        $data_user = User::all();
        return view("user.tampil-user")
        ->with("data_user", $data_user);
    }

    public function formInput() // Hanya Tampilan Form
    {
        return view( "user.form");
    }

    public function simpan(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->get("name");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user_all")); 
    }

    public function formEdit($id)
    {
        return view("user.form-update")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get("name");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user_all")); 
    }

    Public function hapus($id)
    {
        User::destroy($id);
        return redirect(route("user_all"));
    }

    public function show($id) {
        $data_user = User::find($id);
        return view("user.show")->with("data_user", $data_user);
    }


}
