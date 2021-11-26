@extends('layouts.template-main')
@section('content')
<div class="flash-data-logout" data-flashdatalogout="{{ Session::get('sukses'); }}"></div>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di <span style="text-decoration: underline">KelasIOT</span></div>
            <div class="masthead-heading text-uppercase">Let's Start Learning !</div>
            <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="https://doc-00-3o-docs.googleusercontent.com/docs/securesc/27vg7jm2k9elug8e2b1f0tmole9okleg/qo0qvksjbm4mmt9p6bbejhlh65cutsq3/1637738025000/04669498596338755604/04669498596338755604/1WCtoSL3dpuelU6KdvDyN1WCMlMZnlsYF?e=download&authuser=0&nonce=s49qvps79gcic&user=04669498596338755604&hash=kukh0gktlhndpd3qqib10doo23bhjjuv" target="_blank"><i class="fas fa-download"></i> Guide Book</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="fitur">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Feature<span class="text-info">.</span></h2>  
                <p class="text-muted">Fitur yang disediakan pada website ini</p>              
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <hr class="col-md-8">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-1" src="{{ asset('image/img-main/F-1.png') }}">
                    </span>
                    <h4 class="mt-5">Basic</h4>
                    <p class="text-muted">Menyediakan pembelajaran dasar mengenai Internet of Things. Mulai dari pengertian iot, sejarah iot, cara kerja iot, hingga unsur-unsur pembentuk internet of things. Materi yang tersedia mudah dipahami oleh pembaca.</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-3" src="{{ asset('image/img-main/F-2.png') }}">
                    </span>
                    <h4 class="mt-5">Project</h4>
                    <p class="text-muted">Menyediakan tutorial dalam menggunakan microcontroller, seperti Arduino UNO. Selain itu, membuat suatu alat Smart Things dengan menggunakan sensor, dimulai dari rangkaiannya sampai sketch programnya.</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-3" src="{{ asset('image/img-main/F-3.png') }}">
                    </span>
                    <h4 class="mt-5">Quiz</h4>
                    <p class="text-muted">Menyediakan pertanyan mengenai dasar Internet of Things yang sudah dipelajari sebelumnya. User dapat mengerjakan Quiz berulang-ulang agar dapat mengukur tingkat ingatan dalam mempelajari Internet of Things.</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-3" src="{{ asset('image/img-main/F-4.png') }}">
                    </span>
                    <h4 class="mt-5">Component</h4>
                    <p class="text-muted">Menyediakan informasi mengenai alat-alat yang digunakan dalam membuat sebuah smart things, seperti microcontroler Arduino UNO, NodeMCU dll. Ataupun berbagai jenis sensor seperti DHT11, HCSR04 dll.</p>
                    <hr class="col-md-8">
                </div>                   
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Gallery<span class="text-info">.</span></h2>
                <p class="text-muted mb-5">Gallery foto internet of things.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" data-target="#modal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('image/img-main/G-1.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Arduino UNO<span class="text-info">.</span></div>
                            <div class="text-muted">Microcontroller</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" data-target="#modal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('image/img-main/G-2.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Arduino UNO<span class="text-info">.</span></div>
                            <div class="text-muted">Microcontroller</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" data-target="#modal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('image/img-main/G-3.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Arduino UNO<span class="text-info">.</span></div>
                            <div class="text-muted">Microcontroller</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" data-target="#modal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('image/img-main/G-4.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Components<span class="text-info">.</span></div>
                            <div class="text-muted">Smart Things</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" data-target="#modal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('image/img-main/G-5.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Components<span class="text-info">.</span></div>
                            <div class="text-muted">Smart Things</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" data-target="#modal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('image/img-main/G-6.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Components<span class="text-info">.</span></div>
                            <div class="text-muted">Smart Things</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal 1 -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-uppercase"><span class="text-info">|</span><small> Arduino UNO</small></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Project Details Go Here-->                                                
                        <img class="img-fluid d-block mx-auto" src="{{ asset('image/img-main/G-1.jpg') }}" alt="" />
                        <h5 class="my-2">Desc :</h5>
                        <p class="my-2" style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quasi, libero obcaecati voluptate deleniti commodi! Tempora, est quos praesentium impedit similique eos laudantium corrupti incidunt sit ullam explicabo dolorem in?
                        Ab dicta quo maxime quis accusantium blanditiis porro excepturi veniam corrupti odit. Atque illo quam reprehenderit exercitationem, architecto dolore totam saepe ipsa aperiam amet corporis delectus sit laudantium eius assumenda.
                        Perspiciatis maiores quo debitis cupiditate a, tempore iste. Dolorum quasi, quo earum cumque necessitatibus cum ducimus? Explicabo, amet nesciunt nobis debitis consequuntur maxime odio eum reprehenderit ullam, quidem recusandae culpa!</p>                            
                    </div>              
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal 2 -->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-uppercase"><span class="text-info">|</span><small> Arduino UNO</small></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Project Details Go Here-->                                                
                        <img class="img-fluid d-block mx-auto" src="{{ asset('image/img-main/G-2.jpg') }}" alt="" />
                        <h5 class="my-2">Desc :</h5>
                        <p class="my-2" style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quasi, libero obcaecati voluptate deleniti commodi! Tempora, est quos praesentium impedit similique eos laudantium corrupti incidunt sit ullam explicabo dolorem in?
                        Ab dicta quo maxime quis accusantium blanditiis porro excepturi veniam corrupti odit. Atque illo quam reprehenderit exercitationem, architecto dolore totam saepe ipsa aperiam amet corporis delectus sit laudantium eius assumenda.
                        Perspiciatis maiores quo debitis cupiditate a, tempore iste. Dolorum quasi, quo earum cumque necessitatibus cum ducimus? Explicabo, amet nesciunt nobis debitis consequuntur maxime odio eum reprehenderit ullam, quidem recusandae culpa!</p>                            
                    </div>              
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal 3 -->
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-uppercase"><span class="text-info">|</span><small> Arduino UNO</small></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Project Details Go Here-->                                                
                        <img class="img-fluid d-block mx-auto" src="{{ asset('image/img-main/G-3.jpg') }}" alt="" /> 
                        <h5 class="my-2">Desc :</h5>
                        <p class="my-2" style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quasi, libero obcaecati voluptate deleniti commodi! Tempora, est quos praesentium impedit similique eos laudantium corrupti incidunt sit ullam explicabo dolorem in?
                        Ab dicta quo maxime quis accusantium blanditiis porro excepturi veniam corrupti odit. Atque illo quam reprehenderit exercitationem, architecto dolore totam saepe ipsa aperiam amet corporis delectus sit laudantium eius assumenda.
                        Perspiciatis maiores quo debitis cupiditate a, tempore iste. Dolorum quasi, quo earum cumque necessitatibus cum ducimus? Explicabo, amet nesciunt nobis debitis consequuntur maxime odio eum reprehenderit ullam, quidem recusandae culpa!</p>                           
                    </div>              
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal 4 -->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-uppercase"><span class="text-info">|</span><small> Components</small></h2></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Project Details Go Here-->                                                
                        <img class="img-fluid d-block mx-auto" src="{{ asset('image/img-main/G-4.jpg') }}" alt="" />  
                        <h5 class="my-2">Desc :</h5>
                        <p class="my-2" style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quasi, libero obcaecati voluptate deleniti commodi! Tempora, est quos praesentium impedit similique eos laudantium corrupti incidunt sit ullam explicabo dolorem in?
                        Ab dicta quo maxime quis accusantium blanditiis porro excepturi veniam corrupti odit. Atque illo quam reprehenderit exercitationem, architecto dolore totam saepe ipsa aperiam amet corporis delectus sit laudantium eius assumenda.
                        Perspiciatis maiores quo debitis cupiditate a, tempore iste. Dolorum quasi, quo earum cumque necessitatibus cum ducimus? Explicabo, amet nesciunt nobis debitis consequuntur maxime odio eum reprehenderit ullam, quidem recusandae culpa!</p>                          
                    </div>              
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal 5 -->
            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-uppercase"><span class="text-info">|</span><small> Components</small></h2></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Project Details Go Here-->                                                
                        <img class="img-fluid d-block mx-auto" src="{{ asset('image/img-main/G-5.jpg') }}" alt="" /> 
                        <h5 class="my-2">Desc :</h5>
                        <p class="my-2" style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quasi, libero obcaecati voluptate deleniti commodi! Tempora, est quos praesentium impedit similique eos laudantium corrupti incidunt sit ullam explicabo dolorem in?
                        Ab dicta quo maxime quis accusantium blanditiis porro excepturi veniam corrupti odit. Atque illo quam reprehenderit exercitationem, architecto dolore totam saepe ipsa aperiam amet corporis delectus sit laudantium eius assumenda.
                        Perspiciatis maiores quo debitis cupiditate a, tempore iste. Dolorum quasi, quo earum cumque necessitatibus cum ducimus? Explicabo, amet nesciunt nobis debitis consequuntur maxime odio eum reprehenderit ullam, quidem recusandae culpa!</p>                           
                    </div>              
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal 6 -->
            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-uppercase"><span class="text-info">|</span><small> Components</small></h2></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Project Details Go Here-->                                                
                        <img class="img-fluid d-block mx-auto" src="{{ asset('image/img-main/G-6.jpg') }}" alt="" /> 
                        <h5 class="my-2">Desc :</h5>
                        <p class="my-2" style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quasi, libero obcaecati voluptate deleniti commodi! Tempora, est quos praesentium impedit similique eos laudantium corrupti incidunt sit ullam explicabo dolorem in?
                        Ab dicta quo maxime quis accusantium blanditiis porro excepturi veniam corrupti odit. Atque illo quam reprehenderit exercitationem, architecto dolore totam saepe ipsa aperiam amet corporis delectus sit laudantium eius assumenda.
                        Perspiciatis maiores quo debitis cupiditate a, tempore iste. Dolorum quasi, quo earum cumque necessitatibus cum ducimus? Explicabo, amet nesciunt nobis debitis consequuntur maxime odio eum reprehenderit ullam, quidem recusandae culpa!</p>                           
                    </div>              
                  </div>
                </div>
              </div>
            </div>

@endsection