<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function index()
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);

        return view('users.index')->with(["users" => $users]);
    }
    public function create()
    {

        return view('users.create');
    }
    public function store(Request $request)
    {
        return dd( $request->all() );
    }
    public function show($id)
    {

        return view('users.show')->with(  [ "id" => $id ]);
    }



       //
       public function edit($id)
       {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
            $user=$users[$id-1];
            return view('users.edit')->with( [ "user" => $user  ]);


    }

       public function update(Request $req)
       {
                   return dd($req->all());


    }
       public function destroy($id)
       {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        $user=$users[$id-1];

            return 'Remove the specified resource with id '.$user['id'].'
            from storage.
            ';


    }

}
