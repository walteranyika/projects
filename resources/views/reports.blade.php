@extends('layouts.admin')

@section('lightbox')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>
@endsection

@section('content')
    <div style="padding-right:20px;padding-left:20px;">
        <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Students Data</div>

                <div class="panel-body">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Student Names</th>
                            <th>Adm Number</th>
                            <th>Phone</th>
                            <th>Project Title</th>
                            <th>Program</th>
                            <th>Email</th>
                            <th>Presented?</th>
                            <th>Lecturer</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ucwords($project->user->name)}}</td>
                                <td>{{$project->images}}</td>
                                <td>{{$project->tel}}</td>
                                <td>{{$project->title}}</td>
                                <td>{{$project->program}}</td>
                                <td>{{$project->user->email}}</td>
                                <td>{{$project->presented}}</td>
                                <td>{{$project->lecturer}}</td>
                                <td>{{$project->created_at->format('d-m-Y')}}</td>
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
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'pageLength','excel','columnsToggle'
                ],
                lengthMenu: [
                    [ 10, 25, 50,100, -1 ],
                    [ '10 rows', '25 rows', '50 rows','100 rows' ,'Show all' ]
                ]
            });
        } );
    </script>
@endsection
