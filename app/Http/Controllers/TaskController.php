<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //

    public function index()
    {
        $tasks= DB::table('tasks')->get();
     return view('tasks.index',compact('tasks'));
    }

    public function store(Request $request)
    {
       // dd($request);
        DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        DB::table('tasks')->where('id','=',$id )->delete();
        return redirect()->back();

    }

    public function edit($id){
        $edit =DB::table('tasks')->find($id);

        $tasks =DB::table('tasks')->get();

        return view('tasks.edit',compact('tasks','edit'));




    }
    public function update(Request $request,$id){


        $affected = DB::table('tasks')-> where('id', $id)->update(['name'=>$request->name,
            'created_at' => now(),
            'updated_at' => now(),]);
        return redirect('/');



    }
}

