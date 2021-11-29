<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;

class ToDoController extends Controller
{

    public function GetData(Request $request)
    {
        $table = new todolist;
        $table->Insert([
            'todosomething' => $request->dosomething,
            'status' => 1
        ]);
        
        return back();
    }


    public function View(Request $request, $theme)
    {
        $list = todolist::all();

        return view('index')->with(['theme' => $theme, 'list' => $list]);
    }


    public function Update(Request $request, $id)
    {
        $item = todolist::find($id)->Update(['status' => 0]);

        return back();
    }


    public function Destroy(Request $request, $id)
    {
        $item = todolist::find($id)->Destroy(['id' => $id]);

        return back();
    }
}
