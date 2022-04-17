@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($course->id))
                            <input hidden name="course_id" type="number" value="{{$course->id}}">
                        @endif
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  @if(isset($course->title)) value="{{$course->title}}" @endif required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"   @if(isset($course->description)) value="{{$course->description}}" @endif required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @if(isset($course->thumbnil))
                        <div style="text-align:center" class="row mb-3 center">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <img style="width:50%" src="{{url('storage'.$course->thumbnil)}}" alt="">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        @endif
                        
                        <div class="row mb-3">
                        
                            <label for="thumbnil" class="col-md-4 col-form-label text-md-end">thumbnil</label>
                            
                            <div class="col-md-6">
                                <input id="thumbnil" type="file" class="form-control @error('thumbnil') is-invalid @enderror" name="thumbnil" autofocus>
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
