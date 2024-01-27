<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class AdminController extends Controller
{



    public function admin():View{

        return view('admin.table_medecin');
    }
}
