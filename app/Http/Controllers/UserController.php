<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function delete($id){
        $selectedUser = User::findOrFail($id);
        $selectedUser->delete();
        return redirect('/admin')->with('success', 'User Deleted');
    }

}
