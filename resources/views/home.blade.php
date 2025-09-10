@extends('basic.master')

@section('title')
  Portfolio
@endsection

@section('content')

<!-- Start of Home Section -->

<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-6">
                    <div class="home-img"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title">
                           <h1 class="wow fadeInUp" data-wow-delay="0.6s">Hello, I am <strong>Ahmed Fawzy</strong>, <br>Backend Web Developer</h1>
                           <a href="#about" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">Get Started</a> 
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- End of Home Section -->

<!-- About Section -->

<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-sm-12">
                    <div class="about-thumb">
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>Junior PHP Laravel Backend Developer responsible for maintaining the server-side logic of 
                                   Software Applications. Collaborate with Front End Developers and Mobile Apps 
                                   Developers. Possess a strong understanding of Database Management Systems and 
                                   Restful Api Principles. Optimized website Loading time through Implementing 
                                   Caching Techniques, Resulting in Improved User Experience.
                              </p>
                         </div>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image about-img"></div>
               </div>

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="skill-thumb">
                         <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                              <h1>My Skills</h1>
                         </div>

                         <div class=" wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                           <strong>Backend Development</strong>
                           <span class="color-white pull-right">100%</span>
                           <div class="progress" style="height: 20px;">
                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                           </div>
                            <strong>Front End Design</strong>
                            <span class="color-white pull-right">60%</span>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                            </div>
                

                           <strong>DBMS</strong>
                           <span class="color-white pull-right">90%</span>
                           <div class="progress" style="height: 20px;">
                               <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                           </div>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- End of About Section -->


<!-- Service Section -->

<section id="service" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="0.8s">
                         <i class="fa fa-code"></i>
                         <h3>API Development</h3>
                         <p class="color-white">Expertise in Creating RESTful APIs using Laravel, Ensuring Seamless Integration For Web and Mobile Applications.</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.2s">
                         <i class="fa fa-database"></i>
                         <h3>Database Management</h3>
                         <p class="color-white">Proficient in Designing and Managing MySQL Databases, Optimizing Queries For Performance and Scalability.</p>
                    </div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.6s">
                         <i class="fa fa-lock"></i>
                         <h3>Security Implementation</h3>
                         <p class="color-white">Implementing Robust Security Measures in Laravel Applications to Safeguard Data and Ensure User Privacy.</p>
                    </div>
               </div>

               <div class="bg-white col-md-3 col-sm-6">
                    <div class="wow fadeInUp service-thumb" data-wow-delay="1.8s">
                         <i class="fa fa-cogs"></i>
                         <h3>System Architecture</h3>
                         <p>Designing Scalable and Maintainable System Architectures that meet the Growing Needs of Businesses.</p>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- End of Service Section -->


<!-- Start of Experience Section -->

<section id="experience" class="parallax-section">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-sm-6">
                    <div class="background-image experience-img"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="color-white experience-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                            <h1>Experiences</h1>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Worked on Freelance Project for Emart Company to deliver a user-friendly and high-performing online Shopping 
                                        experience.<small> 2024 Jun - 2024 oct</small></h3>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Laravel Workshop at IT Sharks Academy<small> 2023 May - 2024 Aug</small></h3>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading"> Trainee at CLS Learning Solutions <small> 2023 Sep - 2023 Dec</small></h3>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</section>

<!-- End of Experience Section -->

<!-- Start of Education Section -->

<section id="education" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="color-white education-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>Education</h1>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Bachelor’s Degree in Commerce and Business Administration, 
                                        BIS Program, Helwan University in Cairo <small> 2020 Oct - 2024 Jun</small></h3>
                              </div>
                         </div>

                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="background-image education-img"></div>
               </div>

          </div>
     </div>
</section>

<!-- End of Education Section -->

<!-- Start of Contact Section -->

<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">Say Hello..</h1>
                         </div>

                         <div id="contact-form">
                              <form action="{{ route('contacts.store') }}" method="post">
                                   @csrf
                               
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                       <input name="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" placeholder="Your Name">
                                   </div>
                                   
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                       <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email">
                                   </div>
                                   
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                       <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Write your message..."></textarea>
                                   </div>
                                   
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                       <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                                   </div>
                               </form>
                         </div>

                    </div>
               </div>

               <div class="bg-dark col-lg-6 col-sm-6" style="  background: #E3AE57;">
                    <div class="contact-thumb">
                        <div class="wow fadeInUp contact-info text-start" data-wow-delay="0.8s"> <!-- Added text-start class -->
                            <h3 class="color-white text-center">Contact Me</h3>
                            <p>
                                <i class="fa fa-phone color-white"></i> <span class="color-white">01063574479</span>
                            </p>
                            <p>
                                <i class="fa fa-envelope-o color-white"></i>
                                <a href="mailto:ahmed.moh.fawzy2001@gmail.com" target="_blank" class="color-white ms-2"> 
                                   ahmed.moh.fawzy2001@gmail.com
                                </a>
                            </p>
                            <p>
                              <i class="ion-location color-white"></i> <span class="color-white" style="margin-left:5px">El Maadi , Cairo</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>

          </div>
     </div>
</section>

<!-- End of Contact Section -->

<!-- Start of Download CV Section -->
<section id="download-cv" class="parallax-section" style="background: #f9f9f9; padding: 80px 0;">
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-md-8 text-center">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                         <p class="mt-3 mb-4">You can download my CV for more details about my experience, skills, and projects.</p>
                         <a href="{{ asset('Ahmed Mohamed Fawzy-Backend-Developer.pdf') }}" class="btn btn-primary btn-lg" download>
                              <i class="fa fa-download"></i> Download My CV
                         </a>
                    </div>
               </div>
          </div>
     </div>
</section>
<!-- End of Download CV Section -->

@endsection

@section('scripts')

<script>
     $(document).ready(function() {
          $('.progress-bar').each(function() {
                var width = $(this).attr('aria-valuenow') + '%';
                $(this).css('width', width);
          });
     });
</script>

@endsection
