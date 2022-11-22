<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

class ApiController extends Controller
{
    public function lists(Request $id) 
    {
       echo "Category lists";  
      return $categories = category::all();
      //return response()->json($categories);
    }
  
     public function list($id) {
      if (category::where('id', $id)->exists()) {
          $categories = category::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          echo "Category";
          return response($categories, 200);
        } else {
          return response()->json([
            "message" => "Category not found"
          ], 404);
        }
     } 

    public function create(Request $req)
    {   
        $device = new category;
        $device->title=$req->title;
    
        $result=$device->save();
        if($result)
        {
           return["result"=>"Data submitted successfully"];
           
        }
        else{
           return["result"=>"Data not submitted!!"];
        }
    }
    public function update(Request $request,$id){
      $category=category::where('id',$id)->first();
      $category->title = $request->title;
      if($category->save())
      {
        echo"Submitted";
      }
      else{
        echo"Something went wrong!";
      } 
      } 
   
    public function patch(Request $request, $id){
        $category=category::where('id', $id)->first();
        $category->title = $request->title;
        if($category->save())
        {
            echo "Category Updated";
        }
        else {
            echo "Not Updated";
        }
    }

   public function destroy($id)
      {
        $category= category::whereId($id);
       if( $category->delete($id))
       {
        echo"Record deleted successfully";
       }
       else{
        echo"Something Wrong!";
       }
    }

}

