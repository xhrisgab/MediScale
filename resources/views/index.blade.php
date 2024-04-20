<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MediScale</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />

  {{-- <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" /> --}}

  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('assets/img/logo.png')}}" alt="" />
            <span>
              Medi
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/products"> Product </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/clients"> Client </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- hero section -->
    <section class="hero_section">
      <div class="hero_detail">
        <h1>
          <span>
            h
          </span>
          <span>
            e
          </span>
          <span>
            r
          </span>
          <span>
            b
          </span>
          <span>
            a
          </span>
          <span>
            l
          </span>
        </h1>
        <h3>
          Natural product
          </h2>
      </div>
      <div class="hero_btn-box">
        <a href="/contact">
          Contact Us
        </a>
      </div>
    </section>
    <!-- end hero section -->
  </div>
  <!-- end hero area -->


  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="about_container" id="about">
      <div class="container">
        <div class="detail">
          <h2 class="custom_heading">
            About Us
          </h2>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of g it
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="detail-2">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of g it
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-center text-center">
        <h2 class="custom_heading ">
          Why choose Us
        </h2>
        <p class="">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
      </div>
    </div>
    <div class="why_container my-4">
      <div class="img_box">
        <img src="{{asset('assets/img/why-img.jpg')}}" alt="">
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="">
        Read More
      </a>
    </div>
  </section>

  <!-- end why section -->
  @include('layout.footer')

      {{-- Scripts --}}
     <!-- Template Javascript -->
     <script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
 </body>

 </html>
