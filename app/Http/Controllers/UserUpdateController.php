<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserUpdateController extends Controller
{
    public function update($id)
{
    $usersupdate = DB::table('users')->find($id);
    return view('userupdate', compact('usersupdate'));
} 
}
