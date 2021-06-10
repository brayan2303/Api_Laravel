<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoriesController extends Controller
{
    public function getcategory(){
        return response()->json(category::all(),200);
    }

    public function getCategoryForId($id){
        $category = category::find($id);
        if(is_null($category)){
            return response()->json(['Mensaje'=>'Registro es null'],404);

        }
        return response()->json($category::find($id),200);
    }

    public function insertCategory(Request $request){
        $category = category:: create($request->all());
        return response($category,200);
    }

    public function updateCategory(Request $request, $id){
        $category = category::find($id);
        if(is_null($category)){
            return response()->json(['Mensaje'=>'Registro es null'],404);

        }
        $category->update($request->all());
        return response($category,200);
    }

    public function deleteCategoty($id){
        $category = category::find($id);
        if(is_null($category)){
            return response()->json(['Mensaje'=>'Registro es null'],404);

        }
        $category->delete();
        return response()->json(['Mensaje'=> 'Registro eliminado'],200);
    }
}
