<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $todos= Todo::all();
      $todos= Todo::orderBy('created_at','desc')->get();
       return view('todos.indax')->with('todos',$todos);
       //printf($todos);
       //echo $todos;
       //return $todos;
       //var_dump($todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create a form view
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
          'text' => 'required',

        ]);

       // create todo
        $todo=new Todo();
        $todo->text=$request->input('text');
        $todo->due=$request->input('due');
        $todo->body=$request->input('body');
        $todo->save();
        //alternave

        return redirect('/')->with('success','todo created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     // return $id;
     //query for find by id
     $todo=Todo::find($id);
     return view('todos.show')->with('todo',$todo);
   //  return $todo->text;
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
        $todo=Todo::find($id);
        return view('todos.edit')->with('todo',$todo);

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
          $todo=Todo::find($id);
          $todo->text=$request->input('text');
          $todo->due=$request->input('due');
          $todo->body=$request->input('body');
          $todo->save();
          $todo->delete();
          return redirect('/')->with('success','todo updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //     //step one
       $todo=Todo::find($id);
       $todo->delete();
        return redirect('/')->with('success','Deleted successfully');

    }
}
