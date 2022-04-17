@extends('layouts.master')

@section('content')





  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center" >

    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      @foreach($courses as $key =>$course)
      <div @if($key == 0) class="carousel-item active" @else class="carousel-item" @endif>
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{$course->title}}</h2>
          <p class="animate__animated animate__fadeInUp">{{$course->description}}</p>
          <a href="{{route('course_details',$course->id)}}" class="btn-get-started animate__animated animate__fadeInUp">বিস্তারিত জানুন</a>
        </div> 
      </div>
      @endforeach

  

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">


  <section id="about_leaditbd" style="text-align:center;background-image:url('assets/img/itback.png');background-size: auto;" class="services section-bg">
      <div class="container">
        <h1>লিড আইটি ইন্সিটিউট</h1>
        <hr>
        <blockquote style="font-weight:bold;padding:20px;">
          <p>
            @if(isset($about))
              {{$about->about}}
            @endif
          </p>
        </blockquote>

      </div>
    </section><!-- End Services Section -->

 
  <section id="course_div" class="portfolio">
      <div class="container">
        <div id="portfolio-flters">
          <h1>আমাদের কোর্সসমুহ</h1>
          <hr>
        </div>
       

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
@foreach($courses as $course)
          
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
          <a href="{{route('course_details',$course->id)}}">
            <div style="text-align:center" class="portfolio-item">
            <h3 style="color:#ffffff;padding:10px">{{$course->title}}</h3>
              <img src="{{'storage'.$course->thumbnil}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div style="padding:20px">
                  <p>{{$course->description}}</p>
                </div>
              </div>
            </div>
            </a>
          </div>
     
@endforeach

        </div>

      </div>
    </section>

    <div style="display:none" id="showinfo">
<h1>hsshadvdasj</h1>
    </div>

    <section class="services section-bg">
      <div class="container section-bg" >

      <div style="text-align:center" class="row d-flex align-items-center header-transparent">
            <div class="col-md-4" ></div>
            <div class="col-md-4 ">
              <h4>Cetificate No</h4>
              <div class="btn-group">
                <input id="certificate_no" class="form-control" name="cert_no"  placeholder="DMxxxxxxx" required></input>
                <button class="btn btn-success" onclick="getCertificateInfo()">Search</button>
              </div>
            </div>
            <div class="col-md-4"></div>
        </div>
      </div>
      <br>
    </section>


    <section id="map_div" class="map">
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%E0%A6%AC%E0%A6%BF%E0%A6%9C%E0%A7%9F%20%E0%A6%B8%E0%A6%BE%E0%A6%B0%E0%A6%BE%E0%A6%A8%E0%A6%BF+(lead%20it%20institute)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/truck-gps/">delivery van gps</a></iframe></div>
    </section>
    

  </main><!-- End #main -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


  <script>
   function getCertificateInfo(){
      $.ajax({
        type: "post",
        url: "/certificate_verify",
        data: {
		        _token: "{{csrf_token()}}",
		        certificate_no: document.getElementById('certificate_no').value,
	        },
        success: function (response) {
          $("#showinfo").popin();
        }
      });
    }
  </script>

  @endsection