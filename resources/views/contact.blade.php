@extends('layouts.app')

@section('title', 'Contact Us - Hairnic')

@section('content')
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-map-marker-alt fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Office Address</h5>
                            <h5 class="fw-light text-white">123 Street, New York, USA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-phone-alt fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Call Us</h5>
                            <h5 class="fw-light text-white">+012 345 67890</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="contact-info-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-envelope fa-3x text-dark mb-4"></i>
                            <h5 class="text-white">Mail Us</h5>
                            <h5 class="fw-light text-white">info@example.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-5"><span class="fw-light text-dark">If You Have Any Query,</span> Please Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
                    <p class="mb-4">Feel free to contact us. We'll get back to you as soon as possible.</p>
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <x-button class="w-100 py-3">
                                        Send Message
                                    </x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <iframe class="w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.4421962403643!2d-73.98784368459383!3d40.7512940793275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a145!2sEmpire%20State%20Building!5e0!3m2!1sen!2s!4v1619524992238!5m2!1sen!2s"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    @endsection