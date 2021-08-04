@extends('frontend.layouts.main');

@section('main-container');
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>
          @if($pricing)
          @foreach ($pricing as $value )
            @if($value->section_title=='first_title')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </h2>
        <p>
          @if($pricing)
          @foreach ($pricing as $value )
            @if($value->section_title=='first_text')
              {{ $value->data }}
            @endif
          @endforeach
          @endif
        </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @if($post)
          @foreach ($post as $value)
            @if ($value->section_title=='pricing_second_section')
              <div class="col-lg-3 col-md-6">
                <div class="box">
                  <h3>{{ $value->title }}</h3>
                  {!! $value->description !!}
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">{{ $value->button_text }}</a>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
          @endif
        </div>
      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  @endsection