<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nasabah;


class DashboardController extends Controller
{
    public function index()
    {

        $users = User::get();
        $nasabahs = Nasabah::get();

        return view('dashboard', compact('users','nasabahs'));
    }
}
