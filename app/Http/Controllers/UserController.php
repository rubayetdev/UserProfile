<?php

namespace App\Http\Controllers;

use App\Models\TaskSave;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::insert([
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
            'created_at'=>Carbon::now('Asia/Dhaka'),
            'updated_at'=>Carbon::now('Asia/Dhaka')
        ]);

        return redirect()->back();
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email',$email)
            ->where('password',$password)->first();

        if ($user->email == $email && $user->password == $password)
        {
            return redirect()->route('user',['id'=>$user]);
        }
        else
            return redirect()->back();
    }

    public function userpage($id)
    {
        $user = User::find($id);
        return view('user',['id'=>$user]);
    }

    public function insertTask(Request $request)
    {
        TaskSave::insert([
            'user_id' =>$request->input('id'),
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
            'created_at' =>Carbon::now('Asia/Dhaka'),
            'updated_at' =>Carbon::now('Asia/Dhaka'),
        ]);

        return redirect()->back();
    }


}
