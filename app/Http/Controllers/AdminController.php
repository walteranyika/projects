<?php

namespace App\Http\Controllers;

use App\Project;
use App\Role;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('IsAdmin');
    }

    public function index()
    {
        $projects =Project::all();
        return view('admin')->with('projects',$projects);
    }
    public function approvals()
    {
        $match=['presented'=>'No'];
        $projects =Project::where($match)->get();
        return view('approvals')->with('projects',$projects);
    }
    public function approve(Project $project)
    {
        //dd($project);
        if ($project!=null){
            $project->can_present="Yes";
            $project->update();
            $names = $project->user->name;
            $message= "$names was successfully approved for presentation";
            return redirect()->route('approvals')->with('success',$message);
        }else
        {
            return redirect()->route('approvals');
        }
    }
    public function presentations()
    {
        $matchThese = ['can_present' => 'Yes', 'presented' => 'No'];
        $projects =Project::where($matchThese)->get();
        //dd($projects);
        return view('presentations')->with('projects',$projects);
    }
    public function presented(Project $project)
    {
        $dt = new DateTime;
        $project->presented="Yes";
        $project->presented_at= $dt->format('Y-m-d H:i:s');
        $project->update();
        $names = $project->user->name;
        $title=$project->title;
        $message= "Project $title  by $names was successfully approved as presented.";
        return redirect()->route('presentations')->with('success',$message);
    }
    public function details(Project $project)
    {
        return view('details')->with('project',$project);
    }
    public function reports()
    {
        $projects =Project::all();
        return view('reports')->with('projects',$projects);
    }

    public function users()
    {   //modify
        $match=['role_id'=>1];
        $users =User::where($match)->get();
        return view('users')->with('users',$users);
    }

    public function all_users()
    {   //modify
        $match=['role_id'=>2];
        $users =User::where($match)->get();
        return view('list-users')->with('users',$users);
    }
    public function adminify(User $user)
    {   //modify
       $user->role_id=1;
       $user->update();
       $message= "User $user->name has successfully been made an administrator";
       return redirect()->route('users')->with('success',$message);
    }
    public function deactivate(User $user)
    {   //modify
       $user->role_id=2;
       $user->update();
       $message= "User $user->name has successfully been removed as from administrators list";
       return redirect()->route('users')->with('success',$message);
    }
}
