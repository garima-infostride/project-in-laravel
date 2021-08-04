@extends('frontend.layouts.main');

@section('main-container');
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>
          @if($events)
          @foreach ($events as $value )
            @if($value->section_title=='first_title')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </h2>
        <p>
          @if($events)
          @foreach ($events as $value )
            @if($value->section_title=='first_text')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @if($post)
            @foreach ($post as $value)
              @if ($value->section_title=='event_second_section')
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="{{ URL::asset("uploads/{$value->image}") }}" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $value->title }}</h5>
                      {!! $value->description !!}
                      
                    </div>
                  </div>
              </div>
              @endif
            @endforeach
            @endif
        </div>
      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

 @endsection