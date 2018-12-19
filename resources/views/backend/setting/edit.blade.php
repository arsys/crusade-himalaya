@extends('layouts.backend')
@section('content')
    <div class="col-lg-offset-1 col-md-10">
        {{ Form::model($contact, ['route' => ['setting.update', $contact->id],'class'=>'form form-validate', 'method' => 'PATCH']) }}
        <div class="card">
            <div class="card-head style-primary">
                <header>Site Settings</header>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group {{$errors->has('site_name') ? 'has-error' : ''}}">
                            {{ Form::text('site_name', null, ['class' => 'form-control', 'id'=>'site_name']) }}
                            @if($errors->has('site_name'))
                                <span class="help-block">{{ $errors->first('site_name') }}</span>
                            @endif
                            {{ Form::label('site_name', 'Site Name ') }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group {{$errors->has('facebook') ? 'has-error' : ''}}">
                            {{ Form::text('facebook', null, ['class' => 'form-control', 'id'=>'facebook']) }}
                            @if($errors->has('facebook'))
                                <span class="help-block">{{ $errors->first('facebook') }}</span>
                            @endif
                            {{ Form::label('facebook', 'Facebook ') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group {{$errors->has('tagline') ? 'has-error' : ''}}">
                            {{ Form::text('tagline', null, ['class' => 'form-control', 'id'=>'tagline']) }}
                            @if($errors->has('tagline'))
                                <span class="help-block">{{ $errors->first('tagline') }}</span>
                            @endif
                            {{ Form::label('tagline', 'Tagline ') }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group {{$errors->has('twitter') ? 'has-error' : ''}}">
                            {{ Form::text('twitter', null, ['class' => 'form-control', 'id'=>'twitter']) }}
                            @if($errors->has('twitter'))
                                <span class="help-block">{{ $errors->first('twitter') }}</span>
                            @endif
                            {{ Form::label('twitter', 'Twitter ') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                            {{ Form::text('address', null, ['class' => 'form-control', 'id'=>'address']) }}
                            @if($errors->has('address'))
                                <span class="help-block">{{ $errors->first('address') }}</span>
                            @endif
                            {{ Form::label('address', 'Address ') }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group {{$errors->has('instagram') ? 'has-error' : ''}}">
                            {{ Form::text('instagram', null, ['class' => 'form-control', 'id'=>'instagram']) }}
                            @if($errors->has('instagram'))
                                <span class="help-block">{{ $errors->first('instagram') }}</span>
                            @endif
                            {{ Form::label('instagram', 'Instagram ') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group  {{$errors->has('city') ? 'has-error' : ''}}">
                            {{ Form::text('city', null, ['class' => 'form-control input-md m-b-sm', 'id'=>'city']) }}
                            <label for="city">City</label>
                            @if ($errors->has('city'))
                                <span class="help-block">{{$errors->first('city')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group  {{$errors->has('googleplus') ? 'has-error' : ''}}">
                            {{ Form::text('googleplus', null, ['class' => 'form-control input-md m-b-sm', 'id'=>'googleplus']) }}
                            <label for="googleplus">Google+</label>
                            @if ($errors->has('googleplus'))
                                <span class="help-block">{{$errors->first('googleplus')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group  {{$errors->has('phone') ? 'has-error' : ''}}">
                            {{ Form::text('phone', null, ['class' => 'form-control input-md m-b-sm', 'id'=>'phone']) }}
                            <label for="phone">Phone</label>
                            @if ($errors->has('phone'))
                                <span class="help-block">{{$errors->first('phone')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group  {{$errors->has('youtube') ? 'has-error' : ''}}">
                            {{ Form::text('youtube', null, ['class' => 'form-control input-md m-b-sm', 'id'=>'youtube']) }}
                            <label for="youtube">Youtube</label>
                            @if ($errors->has('youtube'))
                                <span class="help-block">{{$errors->first('youtube')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group  {{$errors->has('website') ? 'has-error' : ''}}">
                            {{ Form::text('website', null, ['class' => 'form-control input-md m-b-sm', 'id'=>'website']) }}
                            <label for="website">Website</label>
                            @if ($errors->has('website'))
                                <span class="help-block">{{$errors->first('website')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group  {{$errors->has('whats_app') ? 'has-error' : ''}}">
                            {{ Form::text('whats_app', null, ['class' => 'form-control input-md m-b-sm', 'id'=>'whats_app']) }}
                            <label for="whats_app">Whats app</label>
                            @if ($errors->has('whats_app'))
                                <span class="help-block">{{$errors->first('whats_app')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Google Map </h4>
                        <div class="form-group {{$errors->has('map') ? 'has-error' : ''}}">
                                <textarea name="map"
                                          id="map {{$errors->has('map') ? 'inputError' : ''}}"
                                          cols="30" rows="5" required style="width: 100%; resize: none;">{{$contact->map}}</textarea>
                            @if($errors->has('map'))
                                <span class="help-block">{{ $errors->first('map') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Google Tag</h4>
                        <div class="form-group {{$errors->has('gtag') ? 'has-error' : ''}}">
                                <textarea name="gtag"
                                          id="gtag {{$errors->has('gtag') ? 'inputError' : ''}}"
                                          cols="30" rows="5" required style="width: 100%; resize: none;">{{$contact->gtag}}</textarea>
                            @if($errors->has('gtag'))
                                <span class="help-block">{{ $errors->first('gtag') }}</span>
                            @endif

                        </div>
                    </div>                    
                </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    {{ Form::submit('Save', ['class' => 'btn btn-lg  btn-block  btn-primary ink-reaction'] )}}
                </div>
            </div>
            {!! Form::close() !!}
        </div><!--end .col -->
    </div>
    </div>
@stop