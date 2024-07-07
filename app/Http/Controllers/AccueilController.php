<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccueilController extends Controller
{
    public function acceuil()
    {
        $adExist = DB::table('admins')->where('id', '1')->get();
        if(count($adExist) == 0){
            DB::table('admins')->insert([
                'id' => 1,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin'
            ]);
        }
        
        
       
        return view('index');
    }

    public function test(){
        return view('test');
    }
}
