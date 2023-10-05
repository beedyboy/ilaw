@extends('layouts.app')
@section('title', 'About')
@section('content')

<section class="abt-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="head-se-01">
                       <h3>ABOUT US</h3>
                       <ol>
                           <li>Home<i class="fas fa-angle-double-right"></i></li>
                           <li>About us</li>
                       </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="_po_jy_fr">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="_cs_we_er">
                        <div class="img-09">
                            <img src="{{ asset('images/welcome-img.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="_pl_io_de">
                    <div class="_ty_we_xs">
    <h2>Welcome to Ryan Jeffery & Associates</h2>
    <p>At  Ryan Jeffery & Associates, we are committed to providing exceptional legal services tailored to your needs. Our team of experienced attorneys is dedicated to upholding the highest standards of excellence in the practice of law.</p>
    <p>With a focus on client satisfaction, we strive to deliver effective legal solutions that address your unique challenges. We understand the intricacies of the legal system and are here to guide you every step of the way.</p>
    <p>Our mission is to protect your rights, advocate for your interests, and ensure that you receive the legal representation you deserve. Trust us to be your partners in achieving your legal goals.</p>
</div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="box-001">
                                    <i class="fas fa-registered"></i>
                                    <h3>Request A Lawyer</h3>
                                    <p>Need legal assistance? Our team of dedicated attorneys is here to help you navigate your legal challenges with confidence. 
                                         Whether you're facing a personal injury claim, family dispute, criminal charges, or any other legal issue, we are ready to provide you with expert guidance and representation.</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                            <div class="box-001">
                                <i class="far fa-file-alt"></i>
                                <h3>Case Investigation</h3>
                                <p>Thorough case investigation is the cornerstone of our legal practice. Our dedicated team of investigators meticulously examines every detail of your case to build a strong foundation for your legal strategy. </p>
                            </div>
                            </div>

                            <div class="col-md-4">
                                <div class="box-001">
                                    <i class="fas fa-address-card"></i>
                                    <h3>Search Directory</h3>
                                    <p>Explore our extensive legal directory to find the right attorney for your specific needs. Our directory features a diverse range of legal experts, each with their own unique areas of expertise. Whether you're looking for a criminal defense attorney, a real estate lawyer, or assistance in any other legal field, our directory simplifies the process of finding the perfect attorney for your case</p>
                                </div>
                            </div>
                        </div>
                        <a href="/contact-us">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fas fa-mug-hot"></i>
                      <div class="counting" data-count="967">0</div>
                      <h5>Attorneys</h5>
                    </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fas fa-gavel"></i>
                      <div class="counting" data-count="800">0</div>
                      <h5>Case Won</h5>
                    </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fas fa-balance-scale-right"></i>
                      <div class="counting" data-count="200">0</div>
                      <h5>Legal Way</h5>
                    </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="_lk_bg_cd">
                        <i class="fas fa-mug-hot"></i>
                      <div class="counting" data-count="2067">0</div>
                      <h5>Happy Clients</h5>
                    </div>
              </div>
            </div>
        </div>
    </section>

    <section class="bg-02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-01">
                    <h2>Meet our team</h2>
                    <p>Get to know the dedicated professionals who make our law firm stand out:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="team-main-box">
                    <img src="{{ asset('images/team/3.jpg') }}">
                    <div class="team-content-box">
                        <!-- <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul> -->
                        <h3>Williams</h3>
                        <b>Attorneys</b>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="team-main-box">
                    <img src="{{ asset('images/team/2.jpg') }}">
                    <div class="team-content-box">
                        <!-- <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul> -->
                        <h3>Anderson john</h3>
                        <b>Criminal Consultant</b>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="team-main-box">
                    <img src="{{ asset('images/team/4.jpg') }}">
                    <div class="team-content-box">
                        <!-- <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul> -->
                        <h3>Sarah Se</h3>
                        <b>Family Consultant</b>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="team-main-box">
                    <img src="{{ asset('images/team/1.jpeg') }}">
                    <div class="team-content-box">
                        <!-- <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul> -->
                        <h3>Williams</h3>
                        <b>Divorce Consultant</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection