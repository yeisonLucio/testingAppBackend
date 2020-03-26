<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAll(){

        $users = user::all();

        return response()->json(['status'=>'success',
                                 'users'=>$users->toArray()],
                                 200);
    }

    public function findUser(Request $request, $id){
        $user = user::find($id);

        return response()->json(['status'=>'success',
                                 'user'=>$user->toArray()],
                                 200);
    }
    


}
