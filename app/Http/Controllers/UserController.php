<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $products = Product::all();
        return view('admin.dashboard', compact('users', 'products'));
    }

    public function delete($id){
        $selectedUser = User::findOrFail($id);
        $selectedUser->delete();
        return redirect('/admin')->with('success', 'User Deleted');
    }

}
