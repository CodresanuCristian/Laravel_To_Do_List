<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoModel;

class ToDoController extends Controller
{
    public function NewRecord(Request $request)
    {
        $newRecord = new ToDoModel;
        $newRecord->todobody = $request->inputText;
        // STATUS -> 0(unfinish) and 1(finish)
        $newRecord->status = 0;
        $newRecord->save();

        return back();
    }


    public function View()
    {
        $list = ToDoModel::all();

        return view('todoapp')->with(['list' => $list]);
    }


    public function Update(Request $request, $id)
    {
        $item = ToDoModel::find($id)->Update(['status' => 1]);

        return back();
    }


    public function Destroy(Request $request, $id)
    {
        $item = ToDoModel::find($id)->Destroy(['id' => $id]);

        return back();
    }
}
