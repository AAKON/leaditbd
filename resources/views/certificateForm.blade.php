@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('certificate_db') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($certificate->id))
                            <input hidden name="certificate_id" type="number" value="{{$certificate->id}}">
                        @endif
                        <div class="row mb-3">
                            <label for="certificate_no" class="col-md-4 col-form-label text-md-end">Certificate No</label>

                            <div class="col-md-6">
                                <input id="certificate_no" type="text" class="form-control @error('certificate_no') is-invalid @enderror" certificate_no="certificate_no"  @if(isset($certificate->certificate_no)) value="{{$certificate->certificate_no}}" @endif required autocomplete="certificate_no" autofocus>

                                @error('certificate_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  @if(isset($certificate->name)) value="{{$certificate->name}}" @endif required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age"   @if(isset($certificate->age)) value="{{$certificate->age}}" @endif required autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sex" class="col-md-4 col-form-label text-md-end">Sex</label>

                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex"   @if(isset($certificate->sex)) value="{{$certificate->sex}}" @endif required autocomplete="sex" autofocus>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="completion_date" class="col-md-4 col-form-label text-md-end">Completion Date</label>

                            <div class="col-md-6">
                                <input id="completion_date" type="text" class="form-control @error('completion_date') is-invalid @enderror" name="completion_date"   @if(isset($certificate->completion_date)) value="{{$certificate->completion_date}}" @endif required autocomplete="completion_date" autofocus>

                                @error('completion_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="performance" class="col-md-4 col-form-label text-md-end">Performance</label>

                            <div class="col-md-6">
                                <input id="performance" type="text" class="form-control @error('performance') is-invalid @enderror" name="performance"   @if(isset($certificate->performance)) value="{{$certificate->performance}}" @endif required autocomplete="performance" autofocus>

                                @error('performance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @if(isset($certificate->photo))
                        <div style="text-align:center" class="row mb-3 center">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <img style="width:50%" src="{{url('storage'.$certificate->photo)}}" alt="">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        @endif
                        
                        <div class="row mb-3">
                        
                            <label for="photo" class="col-md-4 col-form-label text-md-end">Photo</label>
                            
                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" autofocus>
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
