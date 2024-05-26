<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        try {

            $user = User::where('id', 18)->firstOrFail();
        } catch (\Exception $e) {

        }
    }
}
