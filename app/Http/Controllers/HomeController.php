<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin()){
           return redirect()->route('admin');
        }
        return view('home');

    }

    public function showNewProject()
    {
        return view('add-project');
    }

    public function saveProject(Request $request)
    {
          $this->validate($request,[
             'title'=>'required|min:3',
             'desc'=>'required|min:10',
             'tel'=>'required|regex:/(07)[0-9]{8}/',
             'adm'=>'required|regex:/^(\d){2}\/(\d){4}\/(\d){4}$/',
             'img_1'=>'required|mimes:jpeg,bmp,png,jpg',
             'img_2'=>'required|mimes:jpeg,bmp,png,jpg',
             'img_3'=>'required|mimes:jpeg,bmp,png,jpg',
             'img_4'=>'required|mimes:jpeg,bmp,png,jpg',
        ], [
            'adm.regex'=>'Your Admission Number is invalid. Use format 00/0000/0000',
            'tel.regex'=>'Your Phone number is invalid. Use format 0700000000.'
        ]);

        $destinationPath = "images";

        $img_1=$this->getName($request,'img_1');
        $img_2=$this->getName($request,'img_2');
        $img_3=$this->getName($request,'img_3');
        $img_4=$this->getName($request,'img_4');

        Input::file('img_1')->move($destinationPath, $img_1);
        Input::file('img_2')->move($destinationPath, $img_2);
        Input::file('img_3')->move($destinationPath, $img_3);
        Input::file('img_4')->move($destinationPath, $img_4);
        $project =new Project;
        //['program','title','body','images','lecturer'
        $project->program=$request->program;
        $project->title=$request->title;
        $project->body=$request->desc;
        $project->images=$request->adm;
        $project->img_1=$img_1;
        $project->img_2=$img_2;
        $project->img_3=$img_3;
        $project->img_4=$img_4;
        $project->tel=$request->tel;
        $project->lecturer=$request->lecturer;

        $user = Auth::user();
        $user->projects()->save($project);

        return redirect()->route('projects')->with('success','Project was added successfully');


    }

    public function showProjects()
    {
        $projects =Auth::user()->projects;
        return view('projects')->with('projects',$projects);
    }
    public function delete(Project $project)
    {
      if(($project->user_id==Auth::user()->id) and $project->presented=="No" )
      {
          $project->delete();
          return redirect()->route('projects')->with('success','Project was deleted successfully and permanently');
      }else
      {
          return redirect()->route('projects')->with('danger','This project could not be deleted');
      }

    }

    public function gallery(Project $project)
    {
      return view('pictures')->with('project',$project);
    }
    /**
     * @param Request $request
     */
    private function getName(Request $request,$img)
    {

        $newName = rand(1000000,10000000)."_".rand(1000000,10000000);
        $guessFileExtension = $request->file($img)->guessExtension();
        $full_name = $newName . '.' . $guessFileExtension;
        return $full_name;
    }
}











