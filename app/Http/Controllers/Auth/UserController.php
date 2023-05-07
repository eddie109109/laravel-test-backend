<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        error_log("can get to index()!!!!");
        $users = DB::table('users')->get()->toArray();
        error_log(gettype($users));
        return response()->json([
            'users' => $users
        ], 200);
    }
}
