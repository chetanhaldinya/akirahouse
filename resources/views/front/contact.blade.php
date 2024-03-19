@extends('front.layouts.base')
@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-170 rpt-110 pb-190 rpb-125 rel z-1 bgs-cover bgc-black text-center"
        style="background-image: url({{ asset('front/assets/images/bg-header-banner.jpg') }})">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Page Banner End -->
    <div class="share-icons">
        {{-- <a target="_blank" href="" class="btn share-button" data-share="facebook"><i class="fab fa-facebook"></i></a> --}}
        <a target="_blank"
            href="https://api.whatsapp.com/send?phone=919057033777&text=Hello%20there!%20Please share your rental flats qutations"
            class="btn share-button" data-share="whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a target="_blank" href="https://www.instagram.com/akirahomess" class="btn share-button" data-share="instagram"><i
                class="fab fa-instagram"></i></a>
    </div>

    <!-- Contact Form Area start -->
    <section class="contact-page-area py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="our-location-part rmb-55 wow fadeInUp delay-0-2s">
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="section-title mb-60">
                                    <span class="sub-title mb-15">Contact Us</span>
                                    <h2>Need Any Consultations to Booked your Seat</h2>
                                </div>
                            </div>
                        </div>
                        <ul class="nav location-tab mb-40 wow fadeInUp delay-0-2s">
                            <li><a href="#india" data-bs-toggle="tab" class="active show">India (Jaipur)</a></li>
                        </ul>
                        <div class="tab-content wow fadeInUp delay-0-2s">
                            <div class="tab-pane fade active show" id="india">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="flaticon-location-1"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Location</span>
                                        <span class="text">Akira Space, Paramhans Marg, 3nd block, Mansrover,
                                            Jaipur</span>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="flaticon-email-marketing"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Email Address</span>
                                        <span class="text">
                                            <a href="mailto:support@akirahomes.com">support@akirahomes.com</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Make A Call</span>
                                        <span class="text">
                                            <a href="calto:+91 9057033777">+91 9057033777</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Chat With Us</span>
                                        <span class="text">
                                            <a href="https://wa.me/+917689864686">+91 9057033777</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-page-form wow fadeInUp delay-0-2s">
                        <div class="section-title mb-15">
                            <h3>Send Us Message</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div id="successAlertBox"> </div>

                        {!! Form::open([
                            'route' => 'front.contact-us.store',
                            'method' => 'POST',
                            'class' => 'form',
                            'id' => 'contactUsForm',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <input type="hidden" name="type" class="form-control" value="customer">
                        <div class="row gap-20 pt-15">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('name', null, [
                                        'placeholder' => 'Full Name',
                                        'class' => 'form-control',
                                    ]) !!}
                                   @if ($errors->has('name'))
                                   <span style="color:red">{{ $errors->first('name') }}</span>
                               @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('phone', null, [
                                        'placeholder' => 'Phone',
                                        'class' => 'form-control',
                                    ]) !!}
                                    @if ($errors->has('phone'))
                                    <span style="color:red">{{ $errors->first('phone') }}</span>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('email', null, [
                                        'placeholder' => 'Email',
                                        'class' => 'form-control',
                                    ]) !!}
                                   @if ($errors->has('email'))
                                   <span style="color:red">{{ $errors->first('email') }}</span>
                               @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('subject', null, [
                                        'placeholder' => 'Subject',
                                        'class' => 'form-control',
                                    ]) !!}
                                  @if ($errors->has('subject'))
                                  <span style="color:red">{{ $errors->first('subject') }}</span>
                              @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                    @if ($errors->has('message'))
                                    <span style="color:red">{{ $errors->first('message') }}</span>
                                @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group pt-5 mb-0">
                                    <button type="submit" id="submitContactForm" style="cursor: pointer;" class="theme-btn">Send Message<i
                                            class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines for-bg-white">
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
            </div>
    </section>
    <!-- Contact Form Area end -->


    {{-- <!-- Location Map Area Start -->
<div class="contact-page-map pb-120 rpb-90 wow fadeInUp delay-0-2s">
    <div class="container-fluid">
        <div class="our-location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m10!1m3!1d142190.2862584524!2d-74.01298319978558!3d40.721725351435126!2m1!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1663473911885!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- Location Map Area End --> --}}

@push('scripts')

{{-- <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
{!! JsValidator::formRequest('App\Http\Requests\Front\ContactUsRequest', '#contactUsForm') !!} --}}

@endpush
@endsection
