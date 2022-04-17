@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('about_db') }}" enctype="multipart/form-data">
                        @csrf
                        

                        <div class="row mb-3">
                            <label for="about" class="col-md-4 col-form-label text-md-end">about</label>

                            <div class="col-md-6">
                                <input id="about" type="text" class="form-control @error('about') is-invalid @enderror" name="about"   @if(isset($about->about)) value="{{$about->about}}" @endif required autocomplete="about" autofocus>

                                @error('about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Publish
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
