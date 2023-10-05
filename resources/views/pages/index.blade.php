@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slider/1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="_nb_mc">
                                    <h2>Our Attorneys Always Provide The Excellent Service</h2>
                                    <p>At Ryan Jeffery & Associates, our attorneys always provide excellent service. With a deep commitment to our clients and a wealth of legal expertise, our dedicated team is here to guide you through every legal challenge. We understand that each case is unique, and we tailor our approach to meet your specific needs.

                                        Feel free to customize this text to match your law firm's unique strengths and values.
                                    </p>
                                    <a href="#">Contact us</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="_kl_gh_er">
                                    <img src="{{ asset('images/slider/1.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider/3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="_nb_mc">
                                    <h2>Personalized Legal Solutions</h2>
                                    <p>Every case is different, and we recognize the importance of tailoring our services to your unique needs. Our team takes the time to understand your situation, providing personalized legal solutions that are both effective and efficient. Your peace of mind is our priority.
                                    </p>
                                    <a href="#">Contact us</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="_kl_gh_er">
                                    <img src="{{ asset('images/slider/3.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider/2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="_nb_mc kl_bd_we">
                                    <h2>Committed to Your Success</h2>
                                    <p>Your success is our ultimate goal. Whether it's resolving a complex legal issue, protecting your rights, or helping you achieve your legal objectives, we are unwavering in our commitment to your success.
                                    </p>
                                    <a href="#">Contact us</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="_kl_gh_er">
                                    <img src="{{ asset('images/slider/2.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
                        <h2>Welcome to Lawyers</h2>
                        <p>We are honored to have you here, and we're ready to assist you with all your legal needs. Our team of dedicated attorneys is committed to providing you with the highest quality legal services. From the moment you walk through our virtual doors, consider us your trusted partner in your legal journey.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-001">
                                <i class="fas fa-registered"></i>
                                <h3>Request A Lawyer</h3>
                                <p>When legal issues arise, you need a skilled attorney by your side. Our 'Request A Lawyer' service makes it easy for you to connect with the right legal expert for your specific case. Whether you're facing a personal injury claim, need assistance with family law matters, or require counsel in any other area of law, our experienced attorneys are just a click away.</p>
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

<section class="services-01">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-01">
                    <h2>Our Services</h2>
                    <p>we offer a wide range of legal services tailored to meet your unique needs. Our team of experienced attorneys is dedicated to providing exceptional representation in various areas of law, including;</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-landmark"></i>
                    <h3>FREE CONSULTING</h3>
                    <p>Experience a free initial consultation with our legal experts. We'll discuss your situation, answer your questions, and provide valuable insights into your legal options</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-concierge-bell"></i>
                    <h3>SPECIAL SERVICES</h3>
                    <p>Our commitment to excellence extends to our special services. Whether you require personalized legal strategies, complex case management, or unique legal solutions, we have the expertise and resources to address your specific needs.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-user-tie"></i>
                    <h3>DISCUSS STRATEGY BUILDS</h3>
                    <p>Crafting a winning legal strategy is crucial. We collaborate with you to develop a tailored plan that aligns with your goals and objectives. Together, we'll build a solid foundation for your case.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-american-sign-language-interpreting"></i>
                    <h3>MEDIATION</h3>
                    <p>Resolve disputes amicably through mediation. Our skilled mediators facilitate open communication and guide parties toward mutually beneficial agreements, saving you time, money, and stress.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-gavel"></i>
                    <h3>CILVIL LAW</h3>
                    <p>Navigating the complexities of civil law requires experienced representation. Our attorneys are well-versed in civil matters, ensuring your rights and interests are protected throughout the legal process.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-users"></i>
                    <h3>FAMILY DISPUTES</h3>
                    <p>Family disputes can be emotionally challenging. We provide compassionate legal support to help you navigate issues such as divorce, child custody, and more, with sensitivity and care.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-anchor"></i>
                    <h3>CRIMINAL CHARGES</h3>
                    <p>Facing criminal charges can be daunting. Our criminal defense team will vigorously defend your rights, ensuring a fair trial and exploring every legal avenue to protect your future.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ser-box">
                    <i class="fas fa-money-check"></i>
                    <h3>INHERITANCE</h3>
                    <p>We understand the importance of preserving your legacy and ensuring that your assets are distributed according to your wishes or applicable laws.</p>
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
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul>
                        <h3>Williams</h3>
                        <b>Attorneys</b>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="team-main-box">
                    <img src="{{ asset('images/team/2.jpg') }}">
                    <div class="team-content-box">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul>
                        <h3>Anderson john</h3>
                        <b>Criminal Consultant</b>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="team-main-box">
                    <img src="{{ asset('images/team/4.jpg') }}">
                    <div class="team-content-box">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul>
                        <h3>Sarah Se</h3>
                        <b>Family Consultant</b>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="team-main-box">
                    <img src="{{ asset('images/team/1.jpg') }}">
                    <div class="team-content-box">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                        </ul>
                        <h3>Williams</h3>
                        <b>Divorce Consultant</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-03">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-01">
                    <h2>Latest news</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <article class="_kl_cd">
                    <div class="_i-tr">
                        <img src="{{ asset('images/blog/1.jpg') }}">
                    </div>
                    <div class="_oi_er_we">
                        <h3>By Whom Your Business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <article class="_kl_cd">
                    <div class="_i-tr">
                        <img src="{{ asset('images/blog/1.jpg') }}">
                    </div>
                    <div class="_oi_er_we">
                        <h3>By Whom Your Business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <article class="_kl_cd">
                    <div class="_i-tr">
                        <img src="{{ asset('images/blog/1.jpg') }}">
                    </div>
                    <div class="_oi_er_we">
                        <h3>By Whom Your Business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <article class="_kl_cd">
                    <div class="_i-tr">
                        <img src="{{ asset('images/blog/1.jpg') }}">
                    </div>
                    <div class="_oi_er_we">
                        <h3>By Whom Your Business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <article class="_kl_cd">
                    <div class="_i-tr">
                        <img src="{{ asset('images/blog/1.jpg') }}">
                    </div>
                    <div class="_oi_er_we">
                        <h3>By Whom Your Business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <article class="_kl_cd">
                    <div class="_i-tr">
                        <img src="{{ asset('images/blog/1.jpg') }}">
                    </div>
                    <div class="_oi_er_we">
                        <h3>By Whom Your Business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection