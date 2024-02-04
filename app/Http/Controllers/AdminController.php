<?php

namespace App\Http\Controllers;

use App\Models\Hopital;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function admin():View{
        $hopitals = Hopital::all();
        return view('admin.dashboard', compact('hopitals'));
    }

    public function medecin(){
        return view("admin.medecin");
    }

    public function hopital(){
        return view("admin.hopital");
    }

    public function edit($id){
        $hopital = Hopital::findOrFail(3);
        return view("admin.edit_hopital", compact('hopital'));
    }

    public function update(Request $request, $id){
        Hopital::find($id)->update($request->all());
        return redirect('admin')->with(['message', 'mise a jour reusssi']);
    }
}
