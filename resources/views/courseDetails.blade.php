@extends('layouts.master')

@section('content')




  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries" >

            <article class="entry entry-single">

              <div class="entry-img">
               @if(isset($course->course_details->cover_photo)) 
               <img src="{{url('storage'.$course->course_details->cover_photo)}}" alt="" style="width:100%";max-height:400px>
               @endif
              </div>

              <h1 >
                {{$course->title}}
              </h1>
              <hr>

              <!-- <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div> -->

              <div class="entry-content">
                <blockquote style="text-align:left;background-color:#66FFFF">                 
             
                  @if(isset($course->course_details->details)){!!$course->course_details->details!!}@endif
              
                </blockquote>

                <h5>যা শেখানো হবে</h5>
                <blockquote style="text-align:left;background-color:#82FFFF">  
                  
                      @if(isset($course->course_details->what_u_learn)){!!$course->course_details->what_u_learn!!}@endif
                  
                </blockquote>

                <h5>কোর্সটি করার পূর্ব শর্ত</h5>
                <blockquote style="text-align:left;background-color:#9EFFFF">  
                @if(isset($course->course_details->what_u_learn)) {!!$course->course_details->knowledge_requirment!!}@endif
                
               
                </blockquote>

                <h5>প্রয়োজনীয় সফটওয়্যার </h5>
                <blockquote style="text-align:left;background-color:#C7FFFF">  
                @if(isset($course->course_details->what_u_learn)) {!!$course->course_details->required_software!!}
                 @endif
               
                </blockquote>

                <h5>কোর্সের মেয়াদ </h5>
                <blockquote style="text-align:left;background-color:#E3FFFF">  
                @if(isset($course->course_details->what_u_learn))
                 {!!$course->course_details->duration!!}
                 @endif
                </blockquote>

              

            </article><!-- End blog entry -->



          </div><!-- End blog entries list -->



        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
@endsection