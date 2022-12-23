<?php
/*
namespace App\Http\Controllers; 
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $users = DB::table('users')
            ->where('name', 'like', '%'.$request->search.'%')
            ->orWhere('email', 'like', '%'.$request->search.'%')
            ->get();
        return view('search', ['users' => $users]);
    }

    public function destroy($id)
{
    DB::table('users')->where('id', $id)->delete();

    return redirect()->route('dashboard')->with('success', 'User deleted successfully');
}
} 
