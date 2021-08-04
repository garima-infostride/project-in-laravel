@extends('frontend.layouts.main');

@section('main-container');
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>
          @if($courses)
          @foreach ($courses as $value )
            @if($value->section_title=='first_title')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </h2>
        <p>
          @if($courses)
          @foreach ($courses as $value )
            @if($value->section_title=='first_text')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @if($post)
            @foreach ($post as $value)
              @if ($value->section_title=='course_second_section')
  
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
                </div> <!-- End Course Item-->
              @endif
            @endforeach
            @endif
          </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

  @endsection