<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=> 'register'
        ]);
    }

    public function store(Request $request){
       $validatedData = $request->validate([
        'name' => ['required','max:255'],
        'email' => ['required','min:3','max:255','unique:users','email:dns'],
        'password' => ['required','min:3','max:255']
       ]);

       // $validatedData['password'] = bcrypt($validatedData['password']);
       $validatedData['password'] = Hash::make($validatedData['password']);
       User::create($validatedData);

       $request->session()->flash('success','Registrasi Selesai ! langsung login');

       return redirect('/login');
    }
}
