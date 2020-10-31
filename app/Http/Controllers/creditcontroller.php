<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\creditmodel;

class creditcontroller extends Controller
{
   public function credit()
   {
     return response()->json(creditmodel::get(), 200);
   }
   public function creditbyid($id)
   {
     return response()->json(creditmodel::find($id), 200);
   }
   public function creditCreate(Request $req){
     $information = creditmodel::create($req->all());
     return response()->json($information, 201);
   }
   public function creditEdit(Request $req, creditmodel $task)
   {
      $task->update($req->all());
      return response()->json($task, 200);
   }
   public function creditDelete(Request $req, creditmodel $task)
   {
      $task->delete();
      return response()->json('', 204);
   }
}
