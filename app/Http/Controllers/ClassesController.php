<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function all(){
//        $classes = Classes::all();
//        dd($classes);
//        $classes= Classes::where("cid",'like','TH9')->get();
//        $classes = Classes::orderBy("name","asc")->get();
//        $classes = Classes::orderBy("name","asc")
//            ->select('name','room')
//            ->limit(5)
//            ->skip(5)
//            ->get();
        $classes = Classes::Simplepaginate(5);
        return view("class.list-class",[
            "classes"=>$classes
        ]);
    }
}
