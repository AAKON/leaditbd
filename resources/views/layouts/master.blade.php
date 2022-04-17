<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LeadItBd</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/leaditfav.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <header id="header" class="fixed-top d-flex align-items-center header-transparent">

    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="{{asset('assets/img/leaditicon.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="/">হোম</a></li>
          <li><a href="/#about_leaditbd">আমোদের সম্পর্কে</a></li>
          <li><a href="/#map_div">যোগাযোগ</a></li>
          <li class="dropdown"><a href="/#course_div"><span>কোর্স
          </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            @foreach($courses as $key =>$course)
              <li>
                <a href="{{route('course_details',$course->id)}}">{{$course->title}}</a>
              </li>
            @endforeach
            </ul>
          </li>
          <li><a href="#">স্কলারশিপ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <!-- <img class="bi bi-list mobile-nav-toggle" src="{{asset('assets/img/dropicon.png')}}" alt="" srcset=""> -->
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <body>
    


  @yield('content')

 
  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>প্রয়োজনীয় লিঙ্ক</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about_leaditbd">
                আমাদের সম্পর্কে 
              </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">গ্যালারী</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">যোগাযোগ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/privacy">প্রাইভেসি পলিসি </a></li>
            </ul> 
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>আমাদের সার্ভিস </h4>
            <ul>
            @foreach($courses as $key =>$course)
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('course_details',$course->id)}}">{{$course->title}}</a></li>
          
            @endforeach 
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>যোগাযোগ </h4>
            <p> 
              বিজয় সরনির মোড় <br>
           ১৪৫, এআরএস মার্কেট, ১ম ফ্লর,বিজয় সরণী<br>
             ধাকা,বাংলাদেশ <br><br>
              <strong>মোবাইল:</strong>০১৮৩২২০২২৩৩<br>
              <strong>ইমেইল:</strong>leaditbd@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>আমাদের সম্পর্কে </h3>
            <p>আমাদের লক্ষ্য হাজার হাজার যুবক যুবতিকে প্রযুক্তিগত শিক্ষায় শিক্ষিত করে ফ্রিলান্সিঙ্গের মাধ্যমে নিজের পায় দাড় করানো।</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> 
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>LEAD It Bangladesh</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>