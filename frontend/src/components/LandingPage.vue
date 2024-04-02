<template>
  <div id="app">
    <section id="hero">
      <div class="hero-container">
        <h1>Welcome to DILG Oriental Mindoro</h1>
        <h2>We ensure that your information is safe and protected</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </section>
    <!-- End Hero -->

    <header id="header" class="d-flex align-items-center" style="height: 70px;">
      <div class="container-fluid d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="index.html">InvenTrack</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Signin</a></li>
            <li><a class="nav-link scrollto" href="#services">Signup</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">About</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <div class="header-social-links d-flex align-items-center">
          <a href="https://www.facebook.com/dilgormin" class="facebook"
            ><i class="bi bi-facebook"> Facebook</i></a
          >
          <a href="#" class="instagram"><i class="bi bi-instagram"> Instagram</i></a>
        </div>
      </div>
    </header>

    <main>
      <!-- ======= About Section ======= -->
      <section id="about" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Signin</h2>
            <img src="./img/new.png" alt="" style="width: 10%; height: 10%" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="icon-box">
                  <form class="row g-3" @submit.prevent="signin">
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" v-model="username" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" v-model="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12" align="center">
                      <button class="btn btn-danger w-50" type="submit" style="color: white">Login</button>
                    </div>
                            
                    <div class="col-12" align="center">
                      <p class="small mb-0">Don't have an account? <a href="signup">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container">
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="232"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Employees</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="520"
                data-purecounter-duration="2"
                class="purecounter"
              ></span>
              <p>PPE</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="1463"
                data-purecounter-duration="3"
                class="purecounter"
              ></span>
              <p>Inventory</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="15"
                data-purecounter-duration="4"
                class="purecounter"
              ></span>
              <p>Request</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <!-- ======= Our Values Section ======= -->
      <section id="our-values" class="our-values">
        <div class="container">
  
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card" style='background-image: url("./assets2/img/our-values-1.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Mission</a></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="card" style='background-image: url("./assets2/img/our-values-2.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Plan</a></h5>
                  <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url("./assets2/img/our-values-3.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Vision</a></h5>
                  <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url("./assets2/img/our-values-4.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Care</a></h5>
                  <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>
      <!-- End Our Values Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Signup</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid
              fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam
              cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
              officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="icon-box">
                  <form class="row g-3 needs-validation" @submit.prevent="signup" enctype="multipart/form-data">

                    <div v-if="message === 'error'">Invalid response</div>
                    <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" v-model="username" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="fullname" class="form-label">Your Fullname</label>
                    <input type="fullname" name="fullname" class="form-control" id="fullname" v-model="fullname" required>
                    <div class="invalid-feedback">Please enter your full name!</div>
                    </div>

                    <div class="col-12">
                    <label for="position" class="form-label">Your Position</label>
                    <input type="position" name="position" class="form-control" id="position" v-model="position" required>
                    <div class="invalid-feedback">Please enter your full name!</div>
                    </div>

                    <div class="col-12">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" id="email" v-model="email" required>
                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <!-- <div class="col-12">
                    <label for="usertype" class="form-label">User Type</label>
                    <input type="usertype" name="usertype" class="form-control" id="usertype" v-model="usertype" required>
                    <div class="invalid-feedback">Please enter a the user type!</div>
                    </div> -->

                    <div class="col-12">
                      <label for="image" class="form-label">Upload Image</label>
                      <input type="file" class="form-control" id="image" @change="handleFileUpload" accept="image/*">
                    </div>

                    <div class="col-12">
                      <label class="form-label">Image Preview</label>
                      <img :src="imagePreview" v-if="imagePreview" alt="Image Preview" style="max-width: 320px; max-height: 240px;">
                    </div>

                    <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" v-model="password" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                    <label for="passwordConfirm" class="form-label">Confirm Password</label>
                    <input type="password" name="passwordConfirm" class="form-control" id="passwordConfirm" v-model="passwordConfirm" required>
                    <div class="invalid-feedback">Please enter the same password above!</div>
                    </div>


                    <div v-if="message === 'passwordMismatch'">Passwords do not match</div>

                    <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>
                    </div>
                    <div class="col-12">
                    <button class="btn btn-danger w-100" type="submit" style="color: white">Create Account</button>
                    </div>
                    <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="signin">Log in</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Testimonials</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid
              fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam
              cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
              officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora
                    entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam
                    eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img
                    src="./assets2/img/testimonials/testimonials-1.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem
                    cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                    noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img
                    src="./assets2/img/testimonials/testimonials-2.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum
                    nulla quem veniam duis minim tempor labore quem eram duis noster aute
                    amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img
                    src="./assets2/img/testimonials/testimonials-3.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos
                    export minim fugiat minim velit minim dolor enim duis veniam ipsum
                    anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img
                    src="./assets2/img/testimonials/testimonials-4.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                    tempor noster veniam enim culpa labore duis sunt culpa nulla illum
                    cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img
                    src="./assets2/img/testimonials/testimonials-5.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container">
          <div class="text-center">
            <h3>Call To Action</h3>
            <p>
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
              eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </section>
      <!-- End Cta Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid
              fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam
              cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
              officiis commodi quidem hic quas.
            </p>
          </div>

          <ul id="portfolio-flters" class="d-flex justify-content-center">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>

          <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-1.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a
                  href="./assets2/img/portfolio/portfolio-1.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="App 1"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-2.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a
                  href="./assets2/img/portfolio/portfolio-2.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Web 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-3.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a
                  href="./assets2/img/portfolio/portfolio-3.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="App 2"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-4.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a
                  href="./assets2/img/portfolio/portfolio-4.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Card 2"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-5.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a
                  href="./assets2/img/portfolio/portfolio-5.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Web 2"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-6.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a
                  href="./assets2/img/portfolio/portfolio-6.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="App 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-7.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a
                  href="./assets2/img/portfolio/portfolio-7.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Card 1"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-8.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a
                  href="./assets2/img/portfolio/portfolio-8.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Card 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img">
                <img
                  src="./assets2/img/portfolio/portfolio-9.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a
                  href="./assets2/img/portfolio/portfolio-9.jpg"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Web 3"
                  ><i class="bx bx-plus"></i
                ></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"
                  ><i class="bx bx-link"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h3>Valera</h3>
              <p>
                Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi
                fuga maxime saepe commodi placeat.
              </p>
            </div>
          </div>

          <div class="row footer-newsletter justify-content-center">
            <div class="col-lg-6">
              <form action="" method="post">
                <input type="email" name="email" placeholder="Enter your Email" /><input
                  type="submit"
                  value="Subscribe"
                />
              </form>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>Valera</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/valera-free-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>
  </div>
</template>

<script>
import axios from 'axios';
import router from '@/router'


import { initializeApp } from "firebase/app";
import { getMessaging, getToken, onMessage } from "firebase/messaging";


        const firebaseConfig = {
        apiKey: "AIzaSyBYJFAEo7DoVcirECtaIzoqqAYn2OLW2qk",
        authDomain: "ci4-backend-firebase.firebaseapp.com",
        projectId: "ci4-backend-firebase",
        storageBucket: "ci4-backend-firebase.appspot.com",
        messagingSenderId: "876476699989",
        appId: "1:876476699989:web:6c7fa2d9fe158d32530bdc",
        measurementId: "G-NC5RW3RMWM"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);


        const messaging = getMessaging();

        onMessage(messaging, (payload) => {
        console.log('Message received. ', payload);
        // ...
        });

        getToken(messaging, { vapidKey: 'BGC0t0CBZEcyecRGyJXhY7CyvVyoMtwfBk9jkDR8JUyQyHG6OnTX7Ej-veEyaLOHHrtq34u8mhfpe5HRADwba4o' }).then((currentToken) => {
        if (currentToken) {
            // Send the token to your server and update the UI if necessary
            console.log("Token is:",currentToken)
            // ...
        } else {
            // Show permission request UI
            console.log('No registration token available. Request permission to generate one.');
            // ...
        }
        }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
        // ...
        });


  export default {
    computed:{
      imagePreview() {
            return this.uploadedImage;
        }
    },
      data() {
          return{
              username: '',
              fullname: '',
              position: '',
              status:'',
              email: '',
              image: '',
              imagePreview: '',
              password: '', 
              passwordConfirm: '', 
              message: [],
          }
      },
      methods: {
        handleFileUpload(event) {
          const file = event.target.files[0];
            if (file) {
                this.uploadedImage = URL.createObjectURL(file);
                this.selectedImageFile = file;
                this.imagePreview = this.uploadedImage;
            }
        },
        async signin(){
            const signdata = await axios.post("signin",{
                username: this.username,
                fullname: this.fullname,
                position: this.position,
                status: this.status,
                password: this.password
            });
            this.message = signdata.data.msg;
            if(signdata.data.msg === 'okay'){
                if(signdata.data.usertype === 'admin'){
                    sessionStorage.setItem("token", signdata.data.token);
                    router.push('/dashboard');
                }else if(signdata.data.usertype === 'user'){
                    if(signdata.data.verify === 'Successful'){
                        if(signdata.data.status === 'Approved'){
                        sessionStorage.setItem("token", signdata.data.token);
                        // sessionStorage.setItem("fullname", signdata.data.fullname);
                        // sessionStorage.setItem("position", signdata.data.position);
                        router.push('/empdashboard');
                        }else if(signdata.data.status === 'Declined'){
                            alert('Your account has been declined!');
                        }else{
                            alert('Your account has not yet been approved!');
                        }
                    }
                    else if(signdata.data.verify === 'Failed'){
                        alert('You have failed to verify your account!');
                    }
                    else{
                        alert('Your account has not yet been verified!');
                    }
                }else if(signdata.data.usertype === 'officer'){
                    sessionStorage.setItem("token", signdata.data.token);
                    router.push('/offadmin');
                }
            }else{
                alert("Wrong credentials"); 
                router.push('/');
            }
        },


        async signup() { 
          if (this.password === this.passwordConfirm) { 
            const formData = new FormData();
            formData.append('username', this.username);
            formData.append('fullname', this.fullname);
            formData.append('position', this.position);
            formData.append('email', this.email);
            formData.append('image', this.selectedImageFile);
            formData.append('password', this.password);

            const data = await axios.post('/signup', formData, {
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            });

            // const data = await axios.post("signup", { 
            //   username: this.username,
            //   fullname: this.fullname,
            //   position: this.position,
            //   email: this.email,
            //   image: this.selectedImageFile,
            //   password: this.password 
            // }); 

            this.message = data.data.msg; 
            if (data.data.msg === 'okay') { 
              this.sendVerificationEmail(data.data.token);
              alert('Registered successfully. Check your email for verification.');
              router.push('');
            } 
          } else { 
            this.message = "passwordMismatch"; 
          } 
        },

        async sendVerificationEmail(token) {
          const response = await axios.post('send-verification-email', {
            email: this.email,
            token: token,
          });
          
          if (response.data.msg === 'emailSent') {
            alert('Verification email sent. Please check your inbox.');
          } else {
            alert('Failed to send verification email.');
          }
        },
      }
  }
</script>
