@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Student Names</th>
                            <th>Project Title</th>
                            <th>Program</th>
                            <th>Email</th>
                            <th>Presented?</th>
                            <th>Date Created</th>
                            <th>Lecturer</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($projects as $project)
                               <tr>
                                   <td></td>
                                   <td>{{ucwords($project->user->name)}}</td>
                                   <td>{{$project->title}}</td>
                                   <td>{{$project->program}}</td>
                                   <td>{{$project->user->email}}</td>
                                   <td>{{$project->presented}}</td>
                                   <td>{{$project->created_at->diffForhumans()}}</td>
                                   <td>{{$project->lecturer}}</td>
                                   <td><a class="btn btn-block btn-primary" href="details/{{$project->id}}">Details</a></td>
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
        var t = $('#example').DataTable( {
            "columnDefs": [ {
                "searchable": false,
                "orderable": false,
                "targets": 0
            } ],
            "order": [[ 1, 'asc' ]]
        } );

        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>
@endsection
