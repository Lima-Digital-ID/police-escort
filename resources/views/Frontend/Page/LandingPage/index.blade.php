@extends('Frontend.Layouts.template')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>Police Escort</h1>
                    <h2 style="text-transform: capitalize">
                        we will take you to your destination safely
                    </h2>
                    <a href="https://www.youtube.com/watch?v=glcu-QMvZG0&pp=ygUncG9saWNlIGVzY29ydCBqYXZhdm9sY2FubyB0b3VyIG9wZXJhdG9y"
                        class="glightbox play-btn mb-4"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                    <p>
                        Tourist police assistance is available to international visitors
                        at major tourist attractions, not only to prevent crime, but also
                        to provide tour information and resolve any inconvenient issues.
                        If you experience any misconduct or discrimination as a tourist,
                        ask for help from the officers wearing navy jackets and black
                        berets.
                    </p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <h4>Our Mission</h4>
                        <p>
                            Tourist Police is pledged to be gentle, courteous and welcoming
                            in all destinations across the country and committed to- Ensure
                            safety and security, Offer pleasant environment, Enhance sense
                            of confidence, Provide legal assistance, Preserve the
                            biodiversity and Show the highest standard of professionalism.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h4>Our Vision</h4>
                        <p>
                            Offer tourists a safe, secured and pleasant environment to enjoy
                            the diversity of Bondowoso.
                        </p>
                    </div>
                    <!-- <div class="col-lg-6 pt-4 pt-lg-0">
                                                                                                                                                                                              <p>
                                                                                                                                                                                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                                                                                                                                                                                aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                                                                                                                                                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                                                                                                                                                                cupidatat non proident, sunt in culpa qui officia deserunt
                                                                                                                                                                                                mollit anim id est laborum.
                                                                                                                                                                                              </p>
                                                                                                                                                                                              <a href="#" class="btn-learn-more">Learn More</a>
                                                                                                                                                                                            </div> -->
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                        ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                        quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia fugiat sit in iste officiis commodi quidem hic quas.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Provide assistance with inconveniences</a></h4>
                            <p>
                                Facilitate in resolving any inconvenient experiences that may
                                occur at tour sites.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4>
                                <a href="">Offer tour information and interpretation assistance</a>
                            </h4>
                            <p>Interpretation service is available in English.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Enforce law and order</a></h4>
                            <p>
                                Prevent and control misconducts such as overcharging of
                                services and/or merchandise, operation of illegal taxis and
                                call vans, and other acts of discrimination against tourists.
                            </p>
                        </div>
                    </div>
                    <!--
                                                                                                                                                                                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                                                                                                                                                                              <div class="icon-box">
                                                                                                                                                                                                <div class="icon"><i class="bx bx-world"></i></div>
                                                                                                                                                                                                <h4><a href="">Nemo Enim</a></h4>
                                                                                                                                                                                                <p>
                                                                                                                                                                                                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                                                                                                                                                                  blanditiis
                                                                                                                                                                                                </p>
                                                                                                                                                                                              </div>
                                                                                                                                                                                            </div>

                                                                                                                                                                                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                                                                                                                                                                              <div class="icon-box">
                                                                                                                                                                                                <div class="icon"><i class="bx bx-slideshow"></i></div>
                                                                                                                                                                                                <h4><a href="">Dele cardo</a></h4>
                                                                                                                                                                                                <p>
                                                                                                                                                                                                  Quis consequatur saepe eligendi voluptatem consequatur dolor
                                                                                                                                                                                                  consequuntur
                                                                                                                                                                                                </p>
                                                                                                                                                                                              </div>
                                                                                                                                                                                            </div>

                                                                                                                                                                                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                                                                                                                                                                                              <div class="icon-box">
                                                                                                                                                                                                <div class="icon"><i class="bx bx-arch"></i></div>
                                                                                                                                                                                                <h4><a href="">Divera don</a></h4>
                                                                                                                                                                                                <p>
                                                                                                                                                                                                  Modi nostrum vel laborum. Porro fugit error sit minus sapiente
                                                                                                                                                                                                  sit aspernatur
                                                                                                                                                                                                </p>
                                                                                                                                                                                              </div>
                                                                                                                                                                                            </div> -->
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Galery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                        ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                        quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia fugiat sit in iste officiis commodi quidem hic quas.
                    </p>
                </div>

                <!-- <div class="row">
                                                                                                                                                                                            <div class="col-lg-12 d-flex justify-content-center">
                                                                                                                                                                                              <ul id="gallery-flters">
                                                                                                                                                                                                <li data-filter="*" class="filter-active">All</li>
                                                                                                                                                                                                <li data-filter=".filter-app">App</li>
                                                                                                                                                                                                <li data-filter=".filter-card">Card</li>
                                                                                                                                                                                                <li data-filter=".filter-web">Web</li>
                                                                                                                                                                                              </ul>
                                                                                                                                                                                            </div>
                                                                                                                                                                                          </div> -->

                <div class="row gallery-container">
                    <div class="col-lg-4 col-md-6 gallery-item">
                        <img src="{{ asset('/Frontend') }}/img/police/image_1.jpg" class="img-fluid glightbox"
                            alt="" />
                        <!-- <div class="gallery-info">
                                                                                                                                                                                                <h4>App 1</h4>
                                                                                                                                                                                                <p>App</p>
                                                                                                                                                                                                <a
                                                                                                                                                                                                  href="{{ asset('/Frontend') }}/img/portfolio/portfolio-1.jpg"
                                                                                                                                                                                                  data-gallery="galleryGallery"
                                                                                                                                                                                                  class="gallery-lightbox preview-link"
                                                                                                                                                                                                  title="App 1"
                                                                                                                                                                                                  ><i class="bx bx-plus"></i
                                                                                                                                                                                                ></a>
                                                                                                                                                                                                <a
                                                                                                                                                                                                  href="gallery-details.html"
                                                                                                                                                                                                  class="details-link"
                                                                                                                                                                                                  title="More Details"
                                                                                                                                                                                                  ><i class="bx bx-link"></i
                                                                                                                                                                                                ></a>
                                                                                                                                                                                              </div> -->
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item">
                        <img src="{{ asset('/Frontend') }}/img/police/image_2.jpg" class="img-fluid glightbox"
                            alt="" />
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item">
                        <img src="{{ asset('/Frontend') }}/img/police/image_3.jpg" class="img-fluid glightbox"
                            alt="" />
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item">
                        <img src="{{ asset('/Frontend') }}/img/police/image_4.jpg" class="img-fluid glightbox"
                            alt="" />
                    </div>
                    <div class="col-lg-4 col-md-6 gallery-item">
                        <img src="{{ asset('/Frontend') }}/img/police/image_2.jpg" class="img-fluid glightbox"
                            alt="" />
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item">
                        <img src="{{ asset('/Frontend') }}/img/police/image_3.jpg" class="img-fluid glightbox"
                            alt="" />
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item">
                        <img src="{{ asset('/Frontend') }}/img/police/image_4.jpg" class="img-fluid glightbox"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End gallery Section -->

        <!-- ======= Blog Section ======= -->
        <!-- <section id="blog" class="blog">
                                                                                                                                                                                            <div class="container">
                                                                                                                                                                                                <div class="section-title">
                                                                                                                                                                                                    <h2>Blog</h2>
                                                                                                                                                                                                    <p>
                                                                                                                                                                                                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                                                                                                                                                                                                        ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                                                                                                                                                                                                        quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                                                                                                                                                                                        Quia fugiat sit in iste officiis commodi quidem hic quas.
                                                                                                                                                                                                    </p>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                    <div class="col-lg-4 col-md-6 mt-3">
                                                                                                                                                                                                        <div class="card">
                                                                                                                                                                                                            <img src="{{ asset('/Frontend') }}/img/police/image_1.jpg" class="card-img-top" alt="..." />
                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                <h5 class="card-title">Title Content</h5>
                                                                                                                                                                                                                <p class="card-text">
                                                                                                                                                                                                                    Some quick example text to build on the card title and make
                                                                                                                                                                                                                    up the bulk of the card's content.
                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                <a href="#" class="btn btn-primary">More ...</a>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="col-lg-4 col-md-6 mt-3">
                                                                                                                                                                                                        <div class="card">
                                                                                                                                                                                                            <img src="{{ asset('/Frontend') }}/img/police/image_1.jpg" class="card-img-top" alt="..." />
                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                <h5 class="card-title">Title Content</h5>
                                                                                                                                                                                                                <p class="card-text">
                                                                                                                                                                                                                    Some quick example text to build on the card title and make
                                                                                                                                                                                                                    up the bulk of the card's content.
                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                <a href="#" class="btn btn-primary">More ...</a>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="col-lg-4 col-md-6 mt-3">
                                                                                                                                                                                                        <div class="card">
                                                                                                                                                                                                            <img src="{{ asset('/Frontend') }}/img/police/image_1.jpg" class="card-img-top" alt="..." />
                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                <h5 class="card-title">Title Content</h5>
                                                                                                                                                                                                                <p class="card-text">
                                                                                                                                                                                                                    Some quick example text to build on the card title and make
                                                                                                                                                                                                                    up the bulk of the card's content.
                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                <a href="#" class="btn btn-primary">More ...</a>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </section> -->
        <!-- End Blog Section -->

        <!-- ======= Faq Section ======= -->
        <!-- <section id="faq" class="faq">
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                          <div class="row">
                                                                                                                                                                                            <div
                                                                                                                                                                                              class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
                                                                                                                                                                                            >
                                                                                                                                                                                              <div class="content">
                                                                                                                                                                                                <h3>Frequently Asked <strong>Questions</strong></h3>
                                                                                                                                                                                                <p>
                                                                                                                                                                                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                                                                                                                                                                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                                                                                                                                                  Duis aute irure dolor in reprehenderit
                                                                                                                                                                                                </p>
                                                                                                                                                                                              </div>

                                                                                                                                                                                              <div class="accordion-list">
                                                                                                                                                                                                <ul>
                                                                                                                                                                                                  <li>
                                                                                                                                                                                                    <a
                                                                                                                                                                                                      data-bs-toggle="collapse"
                                                                                                                                                                                                      class="collapse"
                                                                                                                                                                                                      data-bs-target="#accordion-list-1"
                                                                                                                                                                                                      >Non consectetur a erat nam at lectus urna duis?
                                                                                                                                                                                                      <i class="bx bx-chevron-down icon-show"></i
                                                                                                                                                                                                      ><i class="bx bx-chevron-up icon-close"></i
                                                                                                                                                                                                    ></a>
                                                                                                                                                                                                    <div
                                                                                                                                                                                                      id="accordion-list-1"
                                                                                                                                                                                                      class="collapse show"
                                                                                                                                                                                                      data-bs-parent=".accordion-list"
                                                                                                                                                                                                    >
                                                                                                                                                                                                      <p>
                                                                                                                                                                                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis
                                                                                                                                                                                                        urna id volutpat lacus laoreet non curabitur gravida.
                                                                                                                                                                                                        Venenatis lectus magna fringilla urna porttitor rhoncus
                                                                                                                                                                                                        dolor purus non.
                                                                                                                                                                                                      </p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                  </li>

                                                                                                                                                                                                  <li>
                                                                                                                                                                                                    <a
                                                                                                                                                                                                      data-bs-toggle="collapse"
                                                                                                                                                                                                      data-bs-target="#accordion-list-2"
                                                                                                                                                                                                      class="collapsed"
                                                                                                                                                                                                      >Feugiat scelerisque varius morbi enim nunc?
                                                                                                                                                                                                      <i class="bx bx-chevron-down icon-show"></i
                                                                                                                                                                                                      ><i class="bx bx-chevron-up icon-close"></i
                                                                                                                                                                                                    ></a>
                                                                                                                                                                                                    <div
                                                                                                                                                                                                      id="accordion-list-2"
                                                                                                                                                                                                      class="collapse"
                                                                                                                                                                                                      data-bs-parent=".accordion-list"
                                                                                                                                                                                                    >
                                                                                                                                                                                                      <p>
                                                                                                                                                                                                        Dolor sit amet consectetur adipiscing elit pellentesque
                                                                                                                                                                                                        habitant morbi. Id interdum velit laoreet id donec
                                                                                                                                                                                                        ultrices. Fringilla phasellus faucibus scelerisque
                                                                                                                                                                                                        eleifend donec pretium. Est pellentesque elit
                                                                                                                                                                                                        ullamcorper dignissim. Mauris ultrices eros in cursus
                                                                                                                                                                                                        turpis massa tincidunt dui.
                                                                                                                                                                                                      </p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                  </li>

                                                                                                                                                                                                  <li>
                                                                                                                                                                                                    <a
                                                                                                                                                                                                      data-bs-toggle="collapse"
                                                                                                                                                                                                      data-bs-target="#accordion-list-3"
                                                                                                                                                                                                      class="collapsed"
                                                                                                                                                                                                      >Dolor sit amet consectetur adipiscing elit?
                                                                                                                                                                                                      <i class="bx bx-chevron-down icon-show"></i
                                                                                                                                                                                                      ><i class="bx bx-chevron-up icon-close"></i
                                                                                                                                                                                                    ></a>
                                                                                                                                                                                                    <div
                                                                                                                                                                                                      id="accordion-list-3"
                                                                                                                                                                                                      class="collapse"
                                                                                                                                                                                                      data-bs-parent=".accordion-list"
                                                                                                                                                                                                    >
                                                                                                                                                                                                      <p>
                                                                                                                                                                                                        Eleifend mi in nulla posuere sollicitudin aliquam
                                                                                                                                                                                                        ultrices sagittis orci. Faucibus pulvinar elementum
                                                                                                                                                                                                        integer enim. Sem nulla pharetra diam sit amet nisl
                                                                                                                                                                                                        suscipit. Rutrum tellus pellentesque eu tincidunt.
                                                                                                                                                                                                        Lectus urna duis convallis convallis tellus. Urna
                                                                                                                                                                                                        molestie at elementum eu facilisis sed odio morbi quis
                                                                                                                                                                                                      </p>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                  </li>
                                                                                                                                                                                                </ul>
                                                                                                                                                                                              </div>
                                                                                                                                                                                            </div>

                                                                                                                                                                                            <div
                                                                                                                                                                                              class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                                                                                                                                                                                              style="background-image: url('{{ asset('/Frontend') }}/img/faq.jpg')"
                                                                                                                                                                                            >
                                                                                                                                                                                              &nbsp;
                                                                                                                                                                                            </div>
                                                                                                                                                                                          </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                      </section> -->
        <!-- End Faq Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contact</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                        ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                        quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia fugiat sit in iste officiis commodi quidem hic quas.
                    </p>
                </div>
            </div>

            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15807.147727885476!2d113.819917!3d-7.9173117!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dcd6a0fadf05%3A0x491466c55a1dfd2f!2sSATLANTAS%20POLRES%20Bondowoso!5e0!3m2!1sid!2sid!4v1685780639449!5m2!1sid!2sid"
                    width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="container" id="booking">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="ri-map-pin-line"></i>
                                <h4>Location:</h4>
                                <p>
                                    Jl. Ahmad Yani No.37, Lumbung, Badean, Kec. Bondowoso,
                                    Kabupaten Bondowoso, Jawa Timur 68215
                                </p>
                            </div>

                            <div class="email">
                                <i class="ri-mail-line"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="ri-phone-line"></i>
                                <h4>Call:</h4>
                                <p>+62 332 421645</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <h4>Booking Form</h4>
                        <form action="{{ route('landing-page.store') }}" method="post" role="form"
                            class="php-email-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="">Phone</label>
                                    <input type="number" class="form-control" name="phone" id="phone"
                                        placeholder="Your Phone" required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Pickup</label>
                                    <input type="text" name="pickup" class="form-control" id="pickup"
                                        placeholder="Pickup Point" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="">Drop</label>
                                    <input type="text" class="form-control" name="drop" id="drop"
                                        placeholder="Drop Point" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control" name="date" id="date"
                                        placeholder="Date" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="">Police Escort</label>
                                    <input type="number" class="form-control" name="police_escort_qty"
                                        id="police_escort_qty" placeholder="Police Escort" required />
                                </div>
                                <hr>
                                <h4>Vehicle Type Form</h4>
                                <div id="vehicle-type">
                                    @php
                                        $no = 0;
                                    @endphp
                                    @for ($i = 0; $i < $countItem; $i++)
                                        @php
                                            $no++;
                                        @endphp
                                        @include('Frontend.Page.LandingPage.select', [
                                            'no' => $no,
                                            'i' => $i,
                                            'vehicleType' => $vehicleType,
                                        ])
                                    @endfor
                                </div>
                                <br>
                                <div class="col-md-12 mt-3 mt-md-3">
                                    <div class="row">
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <div class="text-center">
                                                <button type="button" id="addVehicle">Add Vehicle Type</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <div class="text-center">
                                                <button type="submit">Submit Booking</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection
@push('custom-js')
    <script>
        var addButton = $('#addVehicle');
        var wrapper = $('#vehicle-type');
        $(addButton).click(function() {
            var no = parseInt($(".row-item:last").attr('data-no'))
            $.ajax({
                type: 'get',
                url: "{{ route('landing-page.select') }}",
                data: {
                    no: no
                },
                success: function(data) {
                    wrapper.append(data)
                    no++
                }
            })
        });

        function remove(no) {
            var selector = '.row-item[data-no="' + no + '"]';
            $(selector).remove()
        }
    </script>
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('status') }}',
            })
        </script>
    @endif
@endpush
