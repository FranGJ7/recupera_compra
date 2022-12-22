<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $users = DB::table('users')->get();

    return view('dashboard', ['users' => $users]);
}

public function destroy($id)
{
    DB::table('users')->where('id', $id)->delete();

    return redirect()->route('dashboard')->with('success', 'User deleted successfully');
}
} 
   