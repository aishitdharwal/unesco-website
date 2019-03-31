@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome <br>
                    @if ($submit == 'essay' || $submit == 'photo')
                    	@if(!empty($url))
                        			<p style="color: green">You have {{$ran}} Uploaded your file. To view visit <a href="{{$url}}" target="_blank">here</a></p><br>
                        			<p style="color: green">Go <a href="{{$link}}">Home</a></p>
                        @endif
                        @if(empty($url))
                    	<form method="POST" enctype="multipart/form-data" action="/store/{{$submit}}">
                        @csrf
                        	<div class="form-group row">
                            	<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Project Name') }}</label>

                            	<div class="col-md-6">
                                	<input id="name" type="text" name="project_name" required autofocus>
                            	</div>
                            </div>
                            <div class="form-group row">
                            	<label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            	<div class="col-md-6">
                                	<input id="description" type="text" name="description" required autofocus>
                            	</div>
                        	</div>
                        	<div class="form-group row mb-0">
                    			<div class="col-md-8 offset-md-4">
                    				<p style="color: red">@if(!empty($err)) {{$err}} @endif</p>
                        			<input id="{{$submit}}" type="file" name="{{$submit}}" accept="application/pdf" required autofocus>
                        		</div>
                    		</div>
                    		<div class="form-group row mb-0">
                    			<div class="col-md-8 offset-md-4">
                        			<button type = "submit" class="btn btn-primary" style=" margin-top: 20px;width: 70%;">
                                    {{ __('Submit') }}
                        			</button>
                        		</div>
                    		</div>

                    	</form>
                    	@endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
