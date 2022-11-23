<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function createBook(Request $request){
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'synopsis' => 'required',
            'picture' => 'required|image',
            'writer_id' => 'required'
        ];

        $messages = [
            "writer_id.required" => "Writer name is Required"
        ];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $validated = $validator->validated();
        $imageName = time().'.'.$request->picture->extension();  
        $request->picture->move(public_path('img'), $imageName);
        $data["coverphoto"] = $imageName;
        
        
    
        Book::create($data);

        return redirect()->route('allDataPage')->with("added", "Book has been inserted");
    }
}
