<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;

class PkController extends Controller
{
    public function pk(){
        return view('pk.home');
    }


    public function pkUsers()
    {
        return view('pk.user.allUser');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllUser()
    {
        return Datatables::of(User::all())->make(true);
    }
}
