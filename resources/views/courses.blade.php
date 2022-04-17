@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('COURSES') }}</div>

                <div class="card-body">
                    <div class="row">
             
                    @foreach($courses as $course)
                    <div class="col-md-4">
                        <h1>{{$course->title}}</h1>
                        <p>{{$course->description}}</p>
                        <img src="{{'storage'.$course->thumbnil}}" class="img-fluid" alt="">
                        <br>
                        <br>
                        <div class="btn-group">
                        <a class="btn btn-warning" href="{{ route('course.edit',$course->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('course.destroy',$course->id) }}">Delete</a>
                        <a class="btn btn-warning" href="{{ route('course.add_details',$course->id) }}">Add Details</a>
                        
                        </div>


                    </div>
                    



                    @endforeach
                    
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
