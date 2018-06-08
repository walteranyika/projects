@extends('layouts.app')
@section('lightbox')
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/lightbox.min.js')}}"></script>

@endsection
@section('content')
<div class="container">
    <h3 class="text-center">{{$project->title}}</h3>
    <p class="text-center">{{$project->body}}</p>
    <div class="row">
        <div class="col-sm-3">
            <a href="{{URL::asset('/images/'.$project->img_1)}}" data-lightbox="tribal">
                <img src="{{URL::asset('/images/'.$project->img_1)}}"  class="img-thumbnail" alt="Cinque Terre">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{URL::asset('/images/'.$project->img_2)}}" data-lightbox="tribal">
                <img src="{{URL::asset('/images/'.$project->img_2)}}"  class="img-thumbnail" alt="Cinque Terre">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{URL::asset('/images/'.$project->img_3)}}" data-lightbox="tribal">
                <img src="{{URL::asset('/images/'.$project->img_3)}}"  class="img-thumbnail" alt="Cinque Terre">
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{URL::asset('/images/'.$project->img_4)}}" data-lightbox="tribal">
                <img src="{{URL::asset('/images/'.$project->img_4)}}"  class="img-thumbnail" alt="Cinque Terre">
            </a>
        </div>
    </div>
</div>
@endsection
