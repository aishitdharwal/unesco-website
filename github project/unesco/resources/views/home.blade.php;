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

                    Welcome
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <a href="http://localhost:8000/video"> <button class="btn btn-primary" style=" margin-top: 20px;width: 70%;">
                                    {{ __('Submit Film Video') }}
                        </button></a>
                    </div>
                    <div class="col-md-8 offset-md-4">
                        <a href="http://localhost:8000/essay"> <button class="btn btn-primary" style=" margin-top: 20px;width: 70%;">
                                    {{ __('Submit Essay') }}
                        </button></a>
                    </div>
                    <div class="col-md-8 offset-md-4">
                        <a href="http://localhost:8000/photo"> <button class="btn btn-primary" style=" margin-top: 20px;width: 70%;margin-bottom: 20px">
                                    {{ __('Submit Photo') }}
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
