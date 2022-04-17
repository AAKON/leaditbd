@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('course.add_details_db') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($course->id))
                            <input hidden name="course_id" type="number" value="{{$course->id}}">
                        @endif
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Details</label>

                            <div class="col-md-6">
                            <textarea id="details" type="text" class="form-control @error('details') is-invalid @enderror" name="details"   required autocomplete="requirment" autofocus>
                            @if(isset($course->course_details->details)) 
                            {{$course->course_details->details}}
                             @endif
                            </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="what_u_learn" class="col-md-4 col-form-label text-md-end">What you'll learn</label>

                            <div class="col-md-6">
                                <textarea id="what_u_learn" type="text" class="form-control @error('what_u_learn') is-invalid @enderror"
                                 name="what_u_learn"   required autocomplete="what_u_learn" autofocus>
                                 @if(isset($course->course_details->what_u_learn)) 
                                 {{$course->course_details->what_u_learn}}
                                 @endif
                                </textarea>
                                @error('what_u_learn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="knowledge_requirment" class="col-md-4 col-form-label text-md-end">Required Knowledge</label>

                            <div class="col-md-6">
                            <textarea id="knowledge_requirment" type="text" class="form-control @error('knowledge_requirment') is-invalid @enderror" name="knowledge_requirment"    required autocomplete="knowledge_requirment" autofocus>
                            @if(isset($course->course_details->knowledge_requirment))
                             {{$course->course_details->knowledge_requirment}}
                            @endif
                            </textarea>
                                @error('knowledge_requirment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="required_software" class="col-md-4 col-form-label text-md-end">Required Software</label>

                            <div class="col-md-6">
                            <textarea id="required_software" type="text" class="form-control @error('required_software') is-invalid @enderror" name="required_software"   required autocomplete="required_software" autofocus>
                            @if(isset($course->course_details->required_software)) 
                            {{$course->course_details->required_software}}
                            @endif
                            </textarea>
                                @error('required_software')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duration" class="col-md-4 col-form-label text-md-end">duration</label>

                            <div class="col-md-6">
                            <textarea id="duration" type="text" class="form-control @error('duration') is-invalid @enderror" name="duration"   required autocomplete="requirment" autofocus>
                            @if(isset($course->course_details->duration)) 
                            {{$course->course_details->duration}}
                             @endif
                            </textarea>
                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if(isset($course->course_details->cover_photo))
                        <div style="text-align:center" class="row mb-3 center">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <img style="width:50%" src="{{url('storage'.$course->course_details->cover_photo)}}" alt="">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        @endif
                        
                        <div class="row mb-3">
                        
                            <label for="thumbnil" class="col-md-4 col-form-label text-md-end">Cover Photo</label>
                            
                            <div class="col-md-6">
                                <input id="cover_photo" type="file" class="form-control @error('cover_photo') is-invalid @enderror" name="cover_photo" autofocus>
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
