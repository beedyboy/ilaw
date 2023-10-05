@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<section class="abt-01">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-se-01">
                    <h3>CONTACT US</h3>
                    <ol>
                        <li>Home<i class="fas fa-angle-double-right"></i></li>
                        <li>Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-02-b contact-01">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-001">
                    <h2>Get In Touch</h2>
                    <p> Have questions or need legal assistance? We're here to help. Contact us today.
                    </p>
                </div>
            </div>
        </div>
        <div class="row my_row_y mar-01">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
 

            <form method="POST" action="{{ url('/contact-us') }}">
            @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="name" name="name" placeholder="Enter Your Name" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="phone" name="phone" placeholder="Phone Number" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="text" placeholder="Subject" class="form-control">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="description" cols="30" rows="8" required="" data-error="Write your message" placeholder="Case Description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="btn-001">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="mab-01">
    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107" height="450" frameborder="0" allowfullscreen=""></iframe>
</section>

@endsection