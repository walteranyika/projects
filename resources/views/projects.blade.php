@extends('layouts.app')
@section('content')
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">
        @foreach($projects as $project)
            <div class="col-sm-4">
                <div class="card">
                      <div class="card-container">
                        <h1 class="card-project">{{$project->title}}</h1>
                        <p class="card-title">{{$project->program}}</p>
                        <p>{{$project->body}}</p>
                        <a href="#">{{$project->lecturer}}</a>
                        <p>Presented? : {{$project->presented}}</p>
                        <p><a class="pics-btn" href="gallery/{{$project->id}}">Images</a></p>
                        @if($project->presented=="No")
                          <a href="delete/{{$project->id}}">Delete Project</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
