<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer ;
use App\Models\Book ;

class WriterController extends Controller
{
    public function index(Request $request){
        $data = Writer::select("*");
        $dataBook = Book::paginate(10);
        if($request->has("search")){
            $dataBook = Book::whereRelation("writer", "name", "like", "%" . $request->search . "%")->paginate(10);
            $data = $data->where("name", "like", "%" . $request->search . "%")->orWhere("contact", "like", "%" . $request->search . "%");
        }        
        
        return view('home', ["title" => "Home", 
        "data" => $data->paginate(10), "dataBook" => $dataBook]);
    }

    public function showWriterById($id){
        $writer = Writer::find($id);
        return view('writerDetail', ["title" => "Home", 
        "writer" => $writer]);
    }
}
