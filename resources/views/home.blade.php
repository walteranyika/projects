@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ucwords(Auth::user()->name)}}</div>

                <div class="panel-body">
                    <h2>Requirements and Instructions</h2>
                    <p>You can now upload your awesome project to the system. You need to have the following items ready for uploading</p>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading text-info">Application Name</h4>
                            <p class="list-group-item-text">The application name of your app or system e.g True Caller</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading text-info">Description</h4>
                            <p class="list-group-item-text">Elaborate description of your application. A good description would look like this:</p>
                            <br>
                            <p class="list-group-item-text text-center text-success">An Application for identifying unknown calls, block spam calls and spam SMS. It filters out the unwanted, and lets you connect with people who matter.
                                Truecaller is the only app you need to make your communication safe and efficient.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading text-info">Four Screenshots</h4>
                            <p class="list-group-item-text">You will need four screenshots of the application taken from your device or emulator</p>
                        </a>

                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading text-info">Extras</h4>
                            <p class="list-group-item-text">You can  delete and reupload your project as long as you have not presented.</p>
                            <p class="list-group-item-text">You can upload as many projects to the portal.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
