@extends('frontend.layouts.main');

@section('main-container');
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>
          @if($trainers)
          @foreach ($trainers as $value )
            @if($value->section_title=='first_title')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </h2>
        <p>
          @if($trainers)
          @foreach ($trainers as $value )
            @if($value->section_title=='first_text')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @if($post)
            @foreach ($post as $value)
              @if ($value->section_title=='trainer_second_section')
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
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  @endsection