@extends('frontend.layouts.main');

@section('main-container');


  <!-- ======= Hero Section ======= -->
  
  <div class="row">
    <div class="col-12">
      <div class="main-bg">
        @if($home)
  @foreach ($home as $value )
    @if($value->section_title=='banner_image') 
    <style type="text/css">
        .main-bg{
            align-items: center;
        }
    </style>
    <img id="hero" class="d-flex justify-content-center align-items-center" src="{{ URL::asset("uploads") }}/{{ $value->data }}" alt="">
     @endif
  @endforeach
  @endif
      </div>
    </div>
  </div>

  {{-- <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="{{url('/courses')}}" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero --> --}}

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @if ($post)
            
          @foreach ($post as $value)
          @if ($value->section_title=='second_section')
          
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ URL::asset("uploads/{$value->image}") }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            
            <h3>
              {{ $value->title }}
            </h3>
           
            <p class="fst-italic">
              {!! $value->description !!}
            </p>
          
          </div>
          
          @endif
          @endforeach
          @endif
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          @if($post)
          @foreach ($post as $value)
            @if ($value->section_title=='third_section')
                
          <div class="col-lg-3 col-6 text-center">
            <span >{{ $value->title }}</span>
            <p>{!! $value->description  !!} </p>
          </div>
          @endif
          @endforeach
          @endif
        </div>

      </div>
    </section><!-- End Counts Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3> @if($home)
              @foreach ($home as $value )
                @if($value->section_title=='third_title')
                {{ $value->data }}
                @endif
              @endforeach
              @endif</h3>
            <p> @if($home)
              @foreach ($home as $value )
                @if($value->section_title=='third_text')
                {{ $value->data }}
                @endif
              @endforeach
              @endif
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              @if($post)
                @foreach ($post as $value)
                  @if ($value->section_title=='forth_section')
                      <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                          <i class="bx bx-receipt"></i>
                          <h4>{{ $value->title }}</h4>
                          <p>{!! $value->description !!}</p>
                        </div>
                      </div>    
                  @endif
                @endforeach
              @endif
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->


    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p>@if($home)
            @foreach ($home as $value )
              @if($value->section_title=='forth_title')
              {{ $value->data }}
              @endif
            @endforeach
            @endif</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @if($post)
          @foreach ($post as $value)
            @if ($value->section_title=='fifth_section')
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                  <img src="{{ URL::asset("uploads/{$value->image}") }}"class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>{{ $value->button_text }}</h4>
                      <p class="price">{{ $value->fees }}</p>
                    </div>
                    {!! $value->description !!}
                  </div>
                </div>
              </div>
            @endif
          @endforeach
          @endif
        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p>@if($home)
            @foreach ($home as $value )
              @if($value->section_title=='fifth_title')
              {{ $value->data }}
              @endif
            @endforeach
            @endif</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @if($post)
          @foreach ($post as $value)
            @if ($value->section_title=='sixth_section')

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{ URL::asset("uploads/{$value->image}") }}" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>{{ $value->title }}</h4>

                    {!! $value->description !!}
                  </div>
                </div>
              </div>

            @endif
          @endforeach
          @endif
        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection
