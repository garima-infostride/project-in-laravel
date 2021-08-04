@extends('frontend.layouts.main');

@section('main-container');

   
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>
                @if ($contact)
                    @foreach ($contact as $value)
                        @if ($value->section_title == 'first_title')
                            {{ $value->data }}
                        @endif
                    @endforeach
                @endif
            </h2>
            <p>
                @if ($contact)
                    @foreach ($contact as $value)
                        @if ($value->section_title == 'first_text')
                            {{ $value->data }}
                        @endif
                    @endforeach
                @endif
            </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div data-aos="fade-up">
            @if ($contact)
                @foreach ($contact as $value)
                    @if ($value->section_title == 'map')
                        {!! $value->data !!}
                    @endif
                @endforeach
            @endif

        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">
                @if ($post)
                    @foreach ($post as $value)
                        @if ($value->section_title == 'contact_second_section')
                            <div class="col-lg-4">
                                {!! $value->description !!}
                            </div>
                        @endif
                    @endforeach
                @endif

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{ route('contact.store') }}" method="post" role="form" class="">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                          
                            @if (Session::has('message_sent'))
                                <div style="color: green" class="error">{{ Session::get('message_sent') }}</div>
                            @endif

                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection
