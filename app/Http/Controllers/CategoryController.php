<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {

       // $categories = category::get();            /* To get all Category title */
          $categories = category::latest()->paginate(5);   /* For pagination of three records */
        return view('categories.list',['categories' => $categories]);
        }
        public function create(){
            return view('categories.new');
        }
        
        public function store(Request $request){
        //validate data
            $request->validate([
                'title' => 'required|unique:categories|max:200'
            ]);
           // dd($request->all());
           // dd($request->title);      /* For accessing title only in json format */
           $category = new category;
           $category->title = $request->title;
           $category->save();           /* For saving data in a database*/

           //return back();
           return redirect('/')->withSuccess('New Category Created ');
        }
        public function edit($id){
             // dd($id);          /* Fetch id in json format */
             $category = Category::where('id',$id)->first();
             //return view('categories.edit',['category'=> $category]);
             return view('categories.edit',compact('category')); /*same code in other way for for displaying category title value in a text box*/
        }
        public function update(Request $request, $id){
            $category = Category::where('id', $id)->first();
            $category->title = $request->title;
            $category->save();
            return redirect('/');
        }
        public function patch(Request $request, $id){
            $category = Category::where('id', $id)->first();
            $category->title = $request->title;
            $category->save();
            return redirect('/');
        }
        public function destroy($id){
            $category = Category::whereId($id)->first();
            $category->delete();
            return redirect('/');
        }
        
}


