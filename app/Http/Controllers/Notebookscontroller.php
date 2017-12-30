<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notebook;
use Illuminate\Support\Facades\Auth;
class Notebookscontroller extends Controller
{
    public function index(){
        
       // $notebook=notebook::all();
        
         $user=Auth::user();
    $notebook=$user->notebooks;  //notebooks is notebook() in user model used without () bcoz of no data manipulation only fetching
         return view('notebooks.index',compact('notebook'));
    }
    
    public function create()
    {
        return view('notebooks.create');
    }
    
    public function store(Request $request)
    {   
         $this->validate($request,[
            'name'=>'required|unique:notebooks,name'
            
        ]);
        $user=Auth::user();
        $data=$request->all();
       // $notebook=notebook::create($data);
        $notebook=$user->notebooks()->create($data);
       
        return redirect('notebooks');
    }
    public function edit($id)
    {   
         $user=Auth::user();
         $notebook=$user->notebooks()->find($id);
        //$notebooks=notebook::where('id',$id)->first();
        
        return view('notebooks.edit')->with('notebook',$notebook);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|unique:notebooks,name'
        ]);
       $user=Auth::user(); 
       $notebook=$user->notebooks()->find($id);
       $notebook->update($request->all());
        
        return redirect('notebooks');
    }
    public function delete( $id)
    {   
        
        $user=Auth::user();
       $notebook=$user->notebooks()->find($id);
       $notebook->delete();
        
        return redirect('notebooks');
    }
    
    public function show($id)
    {
        $notebook= notebook::findOrFail($id);
        $notes=$notebook->notes;
        return view('notes.index',compact('notes','notebook'));
        
    }
}
 