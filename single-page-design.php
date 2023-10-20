<?php
/**
 * THis is custume template file
 * 
 * Template Name: single page design
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Goni
*/

get_header(); ?>
<!-- intro section ================================================== -->
<section id="intro">
   <div class="intro-overlay"></div>
   <div class="intro-content">
      <div class="row">
         <div class="col-twelve">
            <h5>Hello, World.</h5>
            <h1>I'm Dev Danidhariya</h1>
            <p class="intro-position">
               <span>Tech lead</span>
               <span>WordPress Enthusiast​</span>
               <span>PHP Developer</span>
            </p>
            <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
         </div>
      </div>
   </div>
   <!-- /intro-content -->
   <ul class="intro-social">
      <li><a target="_blank" href="https://www.facebook.com/dev.danidhariya.9"><i class="fa fa-facebook"></i></a></li>
      <li><a target="_blank" href="https://twitter.com/devdanidhariya"><i class="fa fa-twitter"></i></a></li>
      <li><a target="_blank" href="https://www.linkedin.com/in/devdanidhariya/"><i class="fa fa-linkedin-square"></i></a></li>
      <li><a target="_blank" href="https://www.instagram.com/er_danidhariya/"><i class="fa fa-instagram"></i></a></li>
      <li><a target="_blank" href="mailto:devdanidhariya@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
   </ul>
   <!-- /intro-social -->
</section>
<!-- /intro -->
<!-- about section
         ================================================== -->
<section id="about" class="about-anim" >
   <div class="row section-intro">
      <div class="col-twelve">
         <h5>About</h5>
         <h2>Let me introduce myself.</h2>
         <div class="intro-info">
            <div class="row">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Devidas.jpg" alt="Profile Picture" />
               <p class="lead">My name is Devidas Danidhariya. I complited my Becholer of enginering in 2014 in computer enginenring from Gujarat Technological University. I started my career as a WordPress plugin and theme developer when I was in my second year of engineering.</p>
               <p>After i completed my BE. I join WeTheDevelop as a PHP developer. My last job was at Beard Design(Opposite) Mumbai as Sr WordPress Engineer. In beardesing, we developed most popular websites like the-can, examperper and roomone, etc. Currently, I work with wpoets technology as a <b>Tech Lead</b>.</p>
            </div>
         </div>
      </div>
   </div>
   <!-- /section-intro -->
   <div class="row about-content">
      <div class="col-six tab-full">
         <h3>Profile</h3>
         <p>I have  7+ year’s experience in backend development. Looking forward to work in a company with great technology exposure. I Love coding and cooking!</p>
         <ul class="info-list">
            <li>
               <strong>Job:</strong>
               <span>Tech Lead</span>
            </li>
            <li>
               <strong>LANGUAGES:</strong>
               <span>English, Hindi, Gujarati</span>
            </li>
            <li>
               <strong>Email:</strong>
               <span><a href="mailto:devdanidhariya@gmail.com">devdanidhariya@gmail.com</a></span>
            </li>
         </ul>
         <ul class="skill-bars">
            <li>
               <div class="progress percent90"><span>90%</span></div>
               <strong>Git</strong>
            </li>
            <li>
               <div class="progress percent50"><span>50%</span></div>
               <strong>AWS</strong>
            </li>
         </ul>
         <!-- /info-list -->
      </div>
      <div class="col-six tab-full">
         <h3>Skills</h3>
         <p>Strong knowledge of PHP, MySQL, JavaScript and WordPress CMS, with working knowledge of HTML5 and CCS3.</p>
         <ul class="skill-bars">
            <li>
               <div class="progress percent90"><span>90%</span></div>
               <strong>PHP</strong>
            </li>
            <li>
               <div class="progress percent95"><span>95%</span></div>
               <strong>Wordpress</strong>
            </li>
            <li>
               <div class="progress percent90"><span>90%</span></div>
               <strong>MySQL</strong>
            </li>
            <li>
               <div class="progress percent95"><span>95%</span></div>
               <strong>JavaScript/jQuery</strong>
            </li>
            <li>
               <div class="progress percent50"><span>50%</span></div>
               <strong>React Native</strong>
            </li>
            <li>
               <div class="progress percent80"><span>80%</span></div>
               <strong>CSS3/Bootstrap</strong>
            </li>
         </ul>
         <!-- /skill-bars -->
      </div>
   </div>
   <div class="row button-section">
      <div class="col-twelve">
         <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
         <!-- <a href="#" title="Download CV" class="button button-primary">Download CV</a> -->
      </div>
   </div>
</section>
<!-- /process-->
<!-- resume Section
         ================================================== -->
<section id="resume" class="grey-section">
   <div class="row resume-timeline">
      <div class="col-twelve resume-header">
         <h2>Work Experience</h2>
      </div>
      <!-- /resume-header -->
      <div class="col-twelve">
         <div class="timeline-wrap">
            <div class="timeline-block">
               <div class="timeline-ico">
                  <i class="fa fa fa-briefcase"></i>
               </div>
               <div class="timeline-header">
                  <h3>Tech Lead</h3>
                  <p>March 2017 - Present</p>
                  <p>Pune, India</p>
               </div>
               <div class="timeline-content">
                  <h4>WPoets Technology LLP</h4>
                  <p>We are bunch of WordPress Experts. We provide WordPress development, hosting and marketing services to bloggers, startups, small businesses and enterprises.</p>
               </div>
            </div>
            <!-- /timeline-block -->
            <div class="timeline-block">
               <div class="timeline-ico">
                  <i class="fa fa fa-briefcase"></i>
               </div>
               <div class="timeline-header">
                  <h3>PHP/Wordpress Developer</h3>
                  <p>Jan 2016 - Mar 2017</p>
                  <p>Mumbai, India</p>
               </div>
               <div class="timeline-content">
                  <h4>Beard Design</h4>
                  <p>A Design Studio focused on brand strategy + identity design, print + packaging Design and UX + UI Design for web and mobile apps.</p>
               </div>
            </div>
            <!-- /timeline-block -->
            <div class="timeline-block">
               <div class="timeline-ico">
                  <i class="fa fa fa-briefcase"></i>
               </div>
               <div class="timeline-header">
                  <h3>PHP Developer</h3>
                  <p>June 2014 - Jan 2017</p>
                  <p>Rajkot, India</p>
               </div>
               <div class="timeline-content">
                  <h4>WeTheDevelopers</h4>
                  <p>WeTheDevelopers, a leading Web Design and Website Development Company based in India (Rajkot & Ahmedabad - Gujarat).</p>
               </div>
            </div>
            <!-- /timeline-block -->
         </div>
         <!-- /timeline-wrap -->
      </div>
      <!-- /col-twelve -->
   </div>
   <!-- /resume-timeline -->
   <div class="row resume-timeline">
      <div class="col-twelve resume-header">
         <h2>Education</h2>
      </div>
      <!-- /resume-header -->
      <div class="col-twelve">
         <div class="timeline-wrap">
            <div class="timeline-block">
               <div class="timeline-ico">
                  <i class="fa fa-graduation-cap"></i>
               </div>
               <div class="timeline-header">
                  <h3>Bachelor Degree</h3>
                  <p>July 2010 - June 2014</p>
               </div>
               <div class="timeline-content">
                  <h4>g.k. bharad institute of engineering
                     Engineer’s Degree
                  </h4>
               </div>
            </div>
            <!-- /timeline-block -->
         </div>
         <!-- /timeline-wrap -->
      </div>
      <!-- /col-twelve -->
   </div>
   <!-- /resume-timeline -->
</section>

<!-- Portfolio Section
   ================================================== -->
<section id="portfolio">

   <div class="row section-intro">
      <div class="col-twelve">
         <h5>Portfolio</h5>
         <h2>Check Out Some of My Works.</h2>
      </div>
   </div> <!-- /section-intro-->

   <div class="row portfolio-content">

      <div class="col-twelve">

         <!-- portfolio-wrapper -->
         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/the-ken.png" alt="the-ken">
                  <a href="#the-ken" class="overlay">
                     <div class="folio-item-table">
                        <div class="folio-item-cell">
                           <h3 class="folio-title">The-Ken</h3>
                           <span class="folio-types">
                              The Ken - Business, Startups, Technology and Healthcare news from India.
                           </span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/pretestplus.png" alt="Clouds">
                  <a href="#pretest-plus" class="overlay">
                     <div class="folio-item-table">
                        <div class="folio-item-cell">
                           <h3 class="folio-title">Pretest Plus</h3>
                           <span class="folio-types">CAT, ISEB Pretest, CEM Select &amp; UKiset Online Practice Tests
                           </span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/walnutedu.png" alt="Shutterbug">
                  <a href="#walmiki" class="overlay">
                     <div class="folio-item-table">
                        <div class="folio-item-cell">
                           <h3 class="folio-title">walmiki</h3>
                           <span class="folio-types">Online learning platform</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/officingnow.png" alt="officingnow">
                  <a href="#officingnow" class="overlay">
                     <div class="folio-item-table">
                        <div class="folio-item-cell">
                           <h3 class="folio-title">Officing Now</h3>
                           <span class="folio-types">Office Spaces - Ready to Use - Flexible - Monthly, Daily, Hourly Basis</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/exampaperplus.png" alt="exampaperplus">
                  <a href="#exampaperplus" class="overlay">
                     <div class="folio-item-table">
                        <div class="folio-item-cell">
                           <h3 class="folio-title">Exam Papers plus</h3>
                           <span class="folio-types">
                              Buy Practice exam paper 
                           </span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/creo.jpg" alt="Creo">
                  <a href="#creo" class="overlay">
                     <div class="folio-item-table">
                        <div class="folio-item-cell">
                           <h3 class="folio-title">Creo</h3>
                           <span class="folio-types">Smpartphone website</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <!-- modal popups - begin ============================================================= -->
            <div id="the-ken" class="popup-modal slider mfp-hide">

               <div class="media">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/modals/m-the-ken.jpg" alt="" />
               </div>

               <div class="description-box">
                  <h4>The-ken</h4>
                  <p>The Ken is a pioneering re-imagination of business journalism by a team of independent journalists with decades of experience. Worked with The Ken to reimagine the reading experience on screen. The goal of was to bring the rich and engaging reading experience of print magazines to the screen.</p>
                  <div class="categories"></div>
               </div>

               <div class="link-box">
                  <a href="https://the-ken.com/" target="_blank">See Website</a>
                  <a href="#" class="popup-modal-dismiss">Close</a>
               </div>

            </div> <!-- /modal-01 -->

            <div id="walmiki" class="popup-modal slider mfp-hide">

               <div class="media">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/modals/walnutedu-quiz.png" alt="" />
               </div>

               <div class="description-box">
                  <h4>Walmiki</h4>
                  <p>Walmiki, is an online platform it offers features such as innovative learning videos and quizzes. Features of Walmiki is MCQ based test system. Lakhs of quality questions. Practice mode and class test mode for home and school use. Teacher modules for tracking and analyzing class progress. Chapter based lectures in form of videos. Students can view lectures any number of times. Parents can replay their child’s tests, increasing transparency. Progress over a period can be monitored as test scores are saved.</p>

                  <div class="categories">E-Learning platform</div>
               </div>

               <div class="link-box">
                  <a href="https://walnutedu.net/">See Website</a>
                  <a href="#" class="popup-modal-dismiss">Close</a>
               </div>

            </div> <!-- /modal-02 -->

            <div id="pretest-plus" class="popup-modal slider mfp-hide">

               <div class="media">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/modals/m-pretestplus.png" alt="pretestplus" />
               </div>

               <div class="description-box">
                  <h4>Pretest Plus</h4>
                  <p>Pretest Plus is an online platform for students to answer mock tests for the CAT, UKiset and 13+ Pre-test school entrance exams in the UK. Built an e-commerce website to sell the tests and a web app for students to take the tests online.<br/>On the technology side, it consists of:<br/>
                     <ul>
                        <li>A custom WooCommerce based eCommerce System.</li>
                        <li>A PHP backend to manage users, create tests, assign tests, serve and answer tests and analyze the aggregate results.</li>
                        <li>Dashboards for the Administrator, School Accounts, Parent Account and Student Accounts – with the appropriate level of controls and functionality.</li>
                        <li>A Mandrill based mailing system to send out notifications and updates about the status of tests.</li>
                        <li>A comprehensive admin backend with overriding controls for the entire system</li>
                     </ul></p>

                  <div class="categories">Online Exam Platform</div>
               </div>

               <div class="link-box">
                  <a href="https://pretestplus.co.uk/" target="_blank">See Website</a>
                  <a href="#" class="popup-modal-dismiss">Close</a>
               </div>

            </div> <!-- /modal-03 -->

            <div id="officingnow" class="popup-modal slider mfp-hide">

               <div class="media">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/modals/m-officingnow.png" alt="" />
               </div>

               <div class="description-box">
                  <h4>Officing <i>Now</i></h4>
                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                  <div class="categories">Branding</div>
               </div>

               <div class="link-box">
                  <a href="https://www.officingnow.com/">See Website</a>
                  <a href="#" class="popup-modal-dismiss">Close</a>
               </div>

            </div> <!-- /modal-04 -->

            <div id="exampaperplus" class="popup-modal slider mfp-hide">

               <div class="media">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/exampaperplus.png" alt="exampaperplus" />
               </div>

               <div class="description-box">
                  <h4>Exam Papers plus</h4>
                  <p>Exam Paper Plus is a UK based startup that provides practice papers for competitive academic exams
as Digital Downloads. It produces engaging and effective practice papers that help prepare students for 7+,
8+, 9+, 10+, 11+ and 13+ exams across the UK.<br><br><b>On the technology side, it consists of:<br><br></b>Built a clean and bold e-commerce website for them with focus on the offerings and a simple process
to buy the practice papers as Digital Downloads</p>

                  <div class="categories">Web Development</div>
               </div>

               <div class="link-box">
                  <a href="https://exampapersplus.co.uk/" target="_blank">See Website</a>
                  <a href="#" class="popup-modal-dismiss">Close</a>
               </div>

            </div> <!-- /modal-05 -->

            <div id="creo" class="popup-modal slider mfp-hide">

               <div class="media">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/modals/m-creo.jpg" alt="" />
               </div>

               <div class="description-box">
                  <h4>Creo</h4>
                  <p>Creo is an ambitious smart devices company with a mission to create better experiences through hardware and software integration. Their first product, the Mark 1, is a smartphone that creates a unique Android experience by building features into the OS and constantly evolving it.</p>
                  <div class="categories">Branding</div>
               </div>

               <div class="link-box">
                  <a href="#">See Website</a>
                  <a href="#" class="popup-modal-dismiss">Close</a>
               </div>

            </div> <!-- /modal-06 -->


            <!-- modal popups - end ============================================================= -->

         </div> <!-- /portfolio-wrapper -->

      </div> <!-- /twelve -->

   </div> <!-- /portfolio-content -->

</section> <!-- /portfolio -->

<section  id="stats" class="count-up">
         <div class="row">
            <div class="col-twelve">
               <div class="block-1-4 block-s-1-3 block-tab-1-2 block-mob-full stats-list">
                  <!-- <div class="bgrid stat">
                     <div class="icon-part">
                        <i class="icon-pencil-ruler"></i>
                     </div>
                     <h3 class="stat-count">
                        50
                     </h3>
                     <h5 class="stat-title">
                        Projects Completed
                     </h5>
                  </div> -->
                   <!-- /stat 					 -->
                  <!-- <div class="bgrid stat">
                     <div class="icon-part">
                        <i class="icon-users"></i>
                     </div>
                     <h3 class="stat-count">
                        35
                     </h3>
                     <h5 class="stat-title">
                        Happy Clients
                     </h5>
                  </div> -->
                   <!-- /stat  -->
                  <div class="bgrid stat">
                     <div class="icon-part">
                        <i class="fa fa-github"></i>
                     </div>
                     <h3 class="stat-count">
                        5
                     </h3>
                     <h5 class="stat-title">
                       Github repositories
                     </h5>
                  </div>
                   <!-- /stat 									 -->
                  <div class="bgrid stat">
                     <div class="icon-part">
                        <i class="fa fa-stack-overflow"></i>
                     </div>
                     <h3 class="stat-count">
                        48
                     </h3>
                     <h5 class="stat-title">
                        Question Answers
                     </h5>
                  </div>
                   <!-- /stat  -->
                  <div class="bgrid stat">
                     <div class="icon-part">
                        <i class="fa fa-wordpress"></i>
                     </div>
                     <h3 class="stat-count">
                        21
                     </h3>
                     <h5 class="stat-title">
                        Replied To WordPress Topics
                     </h5>
                  </div>
                   <!-- /stat  -->
                  <div class="bgrid stat">
                     <div class="icon-part">
                        <i class="icon-clock"></i>
                     </div>
                     <h3 class="stat-count">
                        14000
                     </h3>
                     <h5 class="stat-title">
                        Hours
                     </h5>
                  </div>
                   <!-- /stat  -->
               </div>
                <!-- /stats-list  -->
            </div>
             <!-- /twelve  -->
         </div>
          <!-- row  -->
      </section>
<!-- /stats -->
<!-- contact
         ================================================== -->
<section id="contact">
   <div class="row section-intro">
      <div class="col-twelve">
         <h5>Contact</h5>
         <h2>I'd Love To Hear From You.</h3>
         <p class="lead">I'm currently accepting new projects and would love to hear about yours. Please take a few minutes to tell me about it.</p>
      </div>
   </div>
   <!-- /section-intro -->
   <div class="row contact-form">
      <div class="col-twelve">
         <!-- form -->
         <form name="contactForm" id="contactForm" method="post" action="">
            <input type="hidden" name="action" value="contact_form_submit" />
            <fieldset>
               <div class="form-field">
                  <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
               </div>
               <div class="form-field">
                  <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
               </div>
               <div class="form-field">
                  <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
               </div>
               <div class="form-field">
                  <textarea name="contactMessage" id="contactMessage" placeholder="Message" rows="10" cols="50" required=""></textarea>
               </div>
               <div class="form-field">
                  <button class="submitform">Submit</button>
                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>
                     <div class="s-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                     </div>
                  </div>
               </div>
            </fieldset>
         </form>
         <!-- Form End -->
         <!-- contact-warning -->
         <div id="message-warning">
         </div>
         <!-- contact-success -->
         <div id="message-success">
            <i class="fa fa-check"></i><br>
         </div>
      </div>
      <!-- /col-twelve -->
   </div>
   <!-- /contact-form -->
   <div class="row contact-info">
      <div class="col-four tab-full">
         <div class="icon">
            <i class="icon-pin"></i>
         </div>
         <h5>Where to find me</h5>
         <p>Pune, India</p>
      </div>
      <div class="col-four tab-full collapse">
         <div class="icon">
            <i class="icon-mail"></i>
         </div>
         <h5>Email Me At</h5>
         <p><a href="mailto:devdanidhariya@gmail.com">devdanidhariya@gmail.com</a></p>
      </div>
      <div class="col-four tab-full">
         <div class="icon">
            <i class="icon-phone"></i>
         </div>
         <h5>Call Me At</h5>
         <p>Phone: <a href="tel:+91 9033240723">+91 90332 40723</a></p>
      </div>
   </div>
   <!-- /contact-info -->
</section>
<!-- /contact -->
<?php get_footer(); ?>