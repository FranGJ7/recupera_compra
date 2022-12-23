<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{


public function destroy($id)
{
    DB::table('users')->where('id', $id)->delete();

    return redirect()->route('dashboard')->with('success', 'User deleted successfully');
}
public function index(Request $request)
{
    $users = DB::table('users')
        ->where('name', 'like', '%'.$request->search.'%')
        ->orWhere('email', 'like', '%'.$request->search.'%')
        ->get();
    return view('dashboard', ['users' => $users]);
}


} 
   