@extends('layout.base')

@section('content')

 <!-- client section -->
  <section class="client_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="custom_heading">
        Testimonial
      </h2>
    </div>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding">
              <div class="img_box">
                <img src="{{asset('assets/img/client.png')}}" alt="">
              </div>

              <div class="detail_box">
                <h5>
                  <span>
                    M
                  </span>
                  <span>
                    o
                  </span>
                  <span>
                    r
                  </span>
                  <span>
                    s
                  </span>
                  <span>
                    w
                  </span>
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of
                  letters,
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding">
              <div class="img_box">
                <img src="{{asset('assets/img/client.png')}}" alt="">
              </div>

              <div class="detail_box">
                <h5>
                  <span>
                    M
                  </span>
                  <span>
                    o
                  </span>
                  <span>
                    r
                  </span>
                  <span>
                    s
                  </span>
                  <span>
                    w
                  </span>
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of
                  letters,
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding">
              <div class="img_box">
                <img src="{{asset('assets/img/client.png')}}" alt="">
              </div>

              <div class="detail_box">
                <h5>
                  <span>
                    M
                  </span>
                  <span>
                    o
                  </span>
                  <span>
                    r
                  </span>
                  <span>
                    s
                  </span>
                  <span>
                    w
                  </span>
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of
                  letters,
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- end client section -->
  @endsection
