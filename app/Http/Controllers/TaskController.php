<?php

namespace App\Http\Controllers;

use App\Events\StatusEvent;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //show list of user task
    public function index(Request $request)
    {
        $tasks = Task::where('created_by',auth()->user()->id)->when($request->has('status'), function ($q) use ($request) {
            return $q->where('status',$request->get('status'));
        })->get(); 
             
        return view('users.dashboard',['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users =User::all();
        return view('tasks.create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->user()->id; 
        $data['assigned_to'] = $request->assigned_to; 
        Task::create($data);
        

        return redirect()->route('home')->with(['message'=>'Task was created successfully']);

    }

    //show task edit form 
    public function edit($id)
    {   
        $users =User::all();
        $task = Task::findOrFail($id);
        return view('tasks.edit',['task'=>$task,'users'=>$users]);
    }

    //upate task information
    public function update(TaskRequest $request, $id)
    {
        $data = $request->validated();
        
        
        $task = Task::findOrFail($id);
        $user = $task->user;
        $task->update($data);

        if($data['status'] != $task->status){
            event(new StatusEvent($task,$user));
        };
        
        return redirect()->route('home')->with(['message'=>'Task was updated successfully']);
    }

    // delete a task
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('home')->with(['message'=>'Task was deleted successfully']);
    }
    
    //show the assigned task to a user 
    public function assignedTask()
    {
        $tasks = Task::where('assigned_to',auth()->user()->id)->get();
        return view('tasks.assigned',['tasks'=>$tasks]);
    }
}
