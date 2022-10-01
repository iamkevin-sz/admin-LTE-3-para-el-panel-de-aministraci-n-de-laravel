<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function dashboard(){

        $data = [
            'title' => 'dashboard'
        ];
        return view('admin.dashboard', $data);
    }


    public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success', 'se cerro con exito');
    }
}


