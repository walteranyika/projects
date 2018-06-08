@extends('layouts.admin')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Approve Student Projects For Presentations</div>

                <div class="panel-body">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Student Names</th>
                                <th>Project Title</th>
                                <th>Program</th>
                                <th>Lecturer</th>
                                <th>Can Present?</th>
                                <th>Approve</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($projects as $project)
                               <tr>
                                   <td>{{ucwords($project->user->name)}}</td>
                                   <td>{{$project->title}}</td>
                                   <td>{{$project->program}}</td>
                                   <td>{{$project->lecturer}}</td>
                                   @if($project->can_present=="No")
                                       <td><p class="text-danger">{{$project->can_present}}</p></td>
                                       <td><a class="btn btn-block btn-primary" href="approve/{{$project->id}}">Approve</a></td>
                                   @else
                                       <td><p class="text-primary">{{$project->can_present}}</p></td>
                                       <td>Approved</td>
                                   @endif
                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endsection
