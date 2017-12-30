<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\note;
class notecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,[
            'title'=>'required|unique:notes,title',
            'body'=>'required'
        ]);
        
        $data=$request->all();
        $notes=note::create($data);
        $notebookid=$request->notebook_id;
        return redirect()->route('notebooks.show',compact('notebookid'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note=note::find($id);
        return view('notes.show',compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       $note=note::find($id);
       return view('notes.edit',compact('note'));
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
        $data=$request->all();
        $note=note::find($id);
        $note->update($data);
        
        return redirect()->route('notebooks.show',$note->notebook_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        note::destroy($id);
        
        return back();
    }
    
    public function createnote($id)
    {
        return view('notes.create')->with('id',$id);
        
    }
    
}
