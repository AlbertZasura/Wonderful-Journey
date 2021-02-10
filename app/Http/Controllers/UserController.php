<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|numeric|digits_between:1,255',
            'password' => 'required|confirmed|min:5|max:255',
        ]);

        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'role' => 'Member'
        ]);
        
        Auth::login($user);
        return redirect('/register')->with(['success' => 'Sign Up Successfully']);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('pages.profil', ['user' => $user]);
    }

    public function showUser()
    {
        // if (Auth::check() == false) {
        //     return redirect('/login');
        // }
        $users = User::where('role','Member')->get();
        return view('pages.user', ['users' => $users]);
    }

    public function showAdmin()
    {
        // if (Auth::check() == false) {
        //     return redirect('/login');
        // }
        $users = User::where('role','Admin')->get();
        return view('pages.admin', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|numeric|digits_between:1,255'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect("/profil")->with(['success' => 'Update Successfully']);
    }

    public function check(Request $request)
    {
        if(! Auth::attempt(['role'=>$request->role,'email' => $request->email, 'password' => $request->password])){
            return back()->with(['error' => 'Wrong Email and Password']);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->home();
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect("/user");
    }
}
