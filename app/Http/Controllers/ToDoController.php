<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
class ToDoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = ToDo::all();
        return view('todos', compact('todos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('adjunto')) {
            $file = $request->file('adjunto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/adjuntos/', $name);
        }   
        $toDo = new ToDo();
        $toDo->title = $request->input('title');
        $toDo->description = $request->input('description');
        $toDo->completed = false;
        $toDo->adjunto = $name;

        $toDo->save();

        return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('detail', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDo = Todo::find($id);
        $toDo->delete();
        $todos = ToDo::all();
        return view('todos', compact('todos'));
    }
}
