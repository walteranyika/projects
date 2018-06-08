@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">New Project</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('save-project') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('adm') ? ' has-error' : '' }}">
                            <label for="adm">Your Admission Number</label>
                            <input type="text" class="form-control" id="adm" name="adm" value="{{ old('adm') }}" placeholder="Your Admission Number" required>
                            @if ($errors->has('adm'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('adm') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel">Your Phone Number</label>
                            <input type="tel" class="form-control" id="tel" name="tel" value="{{ old('tel') }}" placeholder="Your Phone Number" required>
                            @if ($errors->has('tel'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="lecturer">Select Your Lecturer</label>
                            <select class="form-control" id="lecturer" name="lecturer">
                                <option value="Mr. Wanyama">Mr. Wanyama</option>
                                <option value="Mrs. Alela">Mrs. Alela</option>
                                <option value="Mr. Ephraim">Mr. Ephraim</option>
                                <option value="Mr. Walter">Mr. Walter</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title">Project Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Title For Your Project" required>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="program">Select Program</label>
                            <select class="form-control" id="program" name="program">
                                <option value="MIT">MIT</option>
                                <option value="Android">Android</option>
                                <option value="Python">Python</option>
                                <option value="USSD">USSD</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                            <label for="desc">Describe What Your Project Does</label>
                            <textarea class="form-control" rows="5" id="desc" name="desc">{{old('desc')}}</textarea>
                            @if ($errors->has('desc'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('img_1') ? ' has-error' : '' }}">
                            <label for="img_1">First Image</label>
                            <input type="file" class="form-control" id="img_1" name="img_1"  placeholder="First Screen grab" required>
                            @if ($errors->has('img_1'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('img_1') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('img_2') ? ' has-error' : '' }}">
                            <label for="img_2">Second Image</label>
                            <input type="file" class="form-control" id="img_2" name="img_2"  placeholder="Second Screen grab" required>
                            @if ($errors->has('img_2'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('img_2') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('img_3') ? ' has-error' : '' }}">
                            <label for="img_3">Third Image</label>
                            <input type="file" class="form-control" id="img_3" name="img_3" placeholder="Third Screen grab" required>
                            @if ($errors->has('img_3'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('img_3') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('img_4') ? ' has-error' : '' }}">
                            <label for="img_4">Fourth Image</label>
                            <input type="file" class="form-control" id="img_4" name="img_4"  placeholder="Fourth Screen grab" required>
                            @if ($errors->has('img_4'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('img_4') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button class="btn btn-block btn-primary" type="submit">Save Project</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
