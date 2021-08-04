@extends('frontend.layouts.main')

@section('main-container')

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>
          @if($about)
          @foreach ($about as $value )
            @if($value->section_title=='first_title')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </h2>
        <p>
          @if($about)
          @foreach ($about as $value )
            @if($value->section_title=='first_text')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @if($post)
          @foreach ($post as $value)
            @if ($value->section_title=='about_first_section')
              <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ URL::asset("uploads/{$value->image}") }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>{{ $value->title }}</h3>
                {!! $value->description !!}
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
            @if ($value->section_title=='about_second_section')
              <div class="col-lg-3 col-6 text-center">
                <span>{{ $value->title }}</span>
                <p>{!! $value->description !!}</p>
              </div>
            @endif
          @endforeach
          @endif
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            @if($about)
            @foreach ($about as $value )
              @if($value->section_title=='second_title')
                {{ $value->data }}
              @endif
            @endforeach
            @endif
          </h2>
          <p>
            @if($about)
            @foreach ($about as $value )
              @if($value->section_title=='second_text')
                {{ $value->data }}
              @endif
            @endforeach
            @endif 
          </p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @if($post)
            @foreach ($post as $value)
              @if ($value->section_title=='about_third_section')
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="{{ URL::asset("uploads/{$value->image}") }}" class="testimonial-img" alt="">
                      <h3>{{ $value->title }}</h3>
                      <h4>{{ $value->button_text }}</h4>
                      <p> 
                        {!! $value->description !!}
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              @endif
            @endforeach
            @endif
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  @endsection