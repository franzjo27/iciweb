<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom_css.css ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f62ecbdf9e.js" crossorigin="anonymous"></script>



    <title>Document</title>
</head>

<body>

    <header>
        <div class="conteiner-fluid p-0">
            <div class="pt-2 text-right d-none d-md-block d-lg-block d-xg-block ">
                <a href="https://www.facebook.com/ICInstitutionsPH/"><i class="fa-brands fa-facebook-f fa-lg"></i></a> <a class="ml-3 mr-5" href="https://www.youtube.com/channel/UCsCW9PzReI-629THym4OBPA"><i class="fa-brands fa-youtube fa-lg"></i></a>
            </div>

            <div class="d-none d-md-block d-lg-block d-xg-block ">

                <nav class="navbar navbar-expand-sm  navbar-light ">
                    <a class="navbar-brand " href="#">
                        <h3 class="font-weight-bold" >Immaculate Conception Institutions</h3>
                    </a>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" id="t-color"  href="https://iciap.edu.ph/studentportal/">MyIcon</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" id="t-color"  href="https://iciap.edu.ph/myeclass/">MyE-class</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <nav class="navbar navbar-expand-md" style="background-color:#009AD9">

                <a class="navbar-brand  d-sm-none  d-lg-none" href="#">
                    <h4 style="color:white !important">IC-Institutions</h4>
                </a>

                <a class="navbar-brand  d-none d-sm-block d-md-none d-lg-none d-xl-none" href="#">
                    <h5 style="color:white !important">Immaculate Conception Institutions</h5>
                </a>


                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item">
                            <a class="nav-link" href="#institutions">Institutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#vision">Our Vision</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mission">Our Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#covid19_protocol">Covid 19 Protocols</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact_us">Contact Us</a>
                        </li>
                        

                        <li class="nav-item mt-3 d-sm-none d-lg-none">
                            <a class="nav-link" href="#">MyIcon</a>
                        </li>
                        <li class="nav-item d-sm-none d-lg-none">
                            <a class="nav-link" href="#">MyE-Class</a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </header>

    <section id="videos" class="container-fluid mt-2">

        <div class="row">

            <div class="col-md-4 col-sm-12 mt-5">


                <div class="text-right">
                    <h2 class="text-promotion">
                        Going Above <br />
                        and Beyond
                    </h2>

                    <h4>Experience innovation and technology</h4>
                    <br/>

                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-check"></i> Industry and Professional Instructors
                        </li>
                        <li>
                            <i class="fa fa-check"></i> Clean Facilities and Safety Protocols
                        </li>
                        <li>
                            <i class="fa fa-check"></i> Well-rounded education and <br /> immersive learning
                        </li>
                    </ul>
                </div>

               </div>

            <div class="col-md-8 col-sm-12  ">

                <video autoplay muted loop class="embed-responsive-item" style="width:100%" class="shadow">
                    <source src="<?= base_url() ?>assets/videos/ici.webm">
                </video>

            </div>
        </div>


    </section>


    <section id="institutions" class="mb-5 mt-5">
        <div class="container-fluid ">
            <div class="row mb-5">
                <div class="col-md-12 text-center mt-5">
                    <div class="text-promotion beyond mt-5">
                        Our Institutions
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card mx-3 shadow">
                            <div class="card-body">
                                <div class="institution-level-label">PRIMARY EDUCATION</div>
                                <div>
                                    <img src="<?= base_url() ?>assets/images/ica.png" class="img-fluid" alt="Immaculate Conception Academy">
                                </div>
                                <div class="text-center">
                                    <h5 class="institution-link-header">Immaculate Conception Academy</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card mx-3 shadow">
                            <div class="card-body">
                                <div class="institution-level-label">SECONDARY EDUCATION</div>
                                <div>
                                    <img class="img-fluid" src="<?= base_url() ?>assets/images/icp.png" alt="Immaculate Conception Polytecnic">
                                </div>
                                <div class="text-center">
                                    <h5 class="institution-link-header">Immaculate Conception Polytecnic</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3  mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card mx-3 shadow">
                            <div class="card-body">
                                <div class="institution-level-label">SECONDARY EDUCATION</div>
                                <div>
                                    <img class="img-fluid" src="<?= base_url() ?>assets/images/ici-balagtas.png" alt="Immaculate Conception I-Balagtas">
                                </div>
                                <div class="text-center">
                                    <h5 class="institution-link-header">Immaculate Conception I-Balagtas</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 mb-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card mx-3 shadow">
                            <div class="card-body">
                                <div class="institution-level-label">COLLEGE EDUCATION</div>
                                <div>
                                    <img class="img-fluid" src="<?= base_url() ?>assets/images/ici.png" alt="Immaculate Conception I-College">
                                </div>
                                <div class="text-center">
                                    <h5 class="institution-link-header">Immaculate Conception I-College</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="vision" class="container-fluid ">

        <div class="row mt-50">
            <div class="col-md-7 col-sm-12">
                <img class="img-fluid shadow rounded" src="<?= base_url() ?>assets/images/ici_student.jpg" alt="">
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="text-promotion  beyond text-center">
                    Our Vision
                </div>
                <div class="text-center text-mv ">
                    Immaculate Conception Institutions envision to be the
                    leading schools where education meets the metaverse and
                    continuously upholds community involvement as a lifestyle.
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="mt-50"></div> -->

    <section id="mission" class="container-fluid">

        <div class="row mt-150 mb-5">
            <div class="col-md-5 mt-5 col-sm-12">
                <div class="">
                    <div class="text-promotion beyond text-center">
                        Our Mission
                    </div>
                    <div class="text-center text-mv">
                        Immaculate Conception Institutions are established to give accessible
                        education to individuals in becoming good decision-makers, critical
                        thinkers, and digital citizens who are law-abiding, well-rounded,
                        and God-fearing.|
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12">
                <img class="img-fluid shadow rounded" src="<?= base_url() ?>assets/images/ici_student_all.jpg?update=1" alt="">

            </div>
        </div>
    </section>

    <!-- <div class="mt-50"></div> -->

    <section id="covid19_protocol">

        <div class="text-promotion  beyond text-center mb-5 mt-50">
            Our Covid 19 Response
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <video autoplay muted loop class="embed-responsive-item" style="width:100%" class="shadow">
                        <source src="<?= base_url() ?>assets/videos/ICI College_Health_Protocols.mp4">
                    </video>
                </div>
            </div>
        </div>

    </section>



    <footer>
        <section id="contact_us">

            <div class="container text-light mt-50">
                <div class="col text-center mt-150 pb-5">
                    <h2 > Admission Center and Campuses</h2>
                    <br/>
                    <div class="row mt-5">
                        <div class="col-md-3  col-sm-3">
                            <img style="width:50%;" class="img-fluid" src="<?= base_url() ?>assets/images/ica.png" class="img-fluid" alt="Immaculate Conception Academy">
                            <br>
                            Immaculate Conception Academy
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <img style="width:50%;" class="img-fluid" src="<?= base_url() ?>assets/images/icp.png" alt="Immaculate Conception Polytecnic">
                            <br>
                            Immaculate Conception Polytechnic
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <img style="width:50%;" class="img-fluid" src="<?= base_url() ?>assets/images/ici-balagtas.png" alt="Immaculate Conception I-Balagtas">
                            <br>
                            Immaculate Conception I-Balagtas
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <img style="width:50%;" class="img-fluid" src="<?= base_url() ?>assets/images/ici.png" alt="Immaculate Conception I-College">
                            <br>
                            Immaculate Conception I-College
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid  text-light mt-5">
                <div class="row mt-5">
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="">Immaculate Conception Institution Head Office</h5>
                        <p>Marian Rd. Poblacion, Sta Maria, Bulacan
                            <br>
                            (044) 795-9609
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="">Immaculate Conception Academy</h5>
                        <p>
                            Marian Rd. Poblacion, Sta Maria Bulacan
                            <br>
                            (044)815-7720 | 0942-351-5530
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="">Immaculate Conception <br> I-Balagtas</h5>
                        <p>
                            Colegio De Roma Campus
                            <br>
                            Mc Arthur Hi-Way
                            <br>
                            Senior High school
                            <br>
                            San Juan Balagtas (Bigaa), Bulacan
                            <br>
                            (044) 308-7021 | 0935-810-4600
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="text-center">Immaculate Conception <br> I-College</h5>
                        <p>
                            #47 A. Bonifacio St., Likod Simbahan,
                            <br>
                            Poblacion, Santa Maria Bulacan
                            <br>
                            (044) 642-3808 | 0936-089-2592
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="text-center"> Immaculate Conception Polytechnic </h5>
                        <p>
                            Tech-Voc Educational Center
                            <br>
                            Innovations Bldg, F. Santiago st., Poblacion, Santa Maria, Bulacan
                            <br>
                            0960-5462-2192 | trabahocources.iciap.edu.ph
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="text-center"> Immaculate Conception Polytechnic </h5>
                        <p>
                            Senior High - Santa Maria
                            <br>
                            Marian Rd. Poblacion, Sta Maria, Bulacan
                            <br>
                            (044) 795-9609 | 0906-168-4928
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="text-center">Immaculate Conception Polytechnic</h5>
                        <p>
                            Senior High - Marilao
                            <br>
                            Divine Mercy Campus L. Villarica Rd., Prenza I
                            <br>
                            Marilao, Bulacan
                            <br>
                            0936-662-5435
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <h5 class="text-center">Immaculate Conception Polytechnic</h5>
                        <p>
                            Senior High - Meycauayan
                            <br>
                            Mc Arthur Hi-way, Saluysoy, near new City Hall
                            <br>
                            Meycauayan, Bulacan
                            <br>
                            0969-067-2868
                        </p>
                    </div>


                </div>

            </div>
        </section>
        <section id="sub_footer ">
            <div class="container-fluid ">
                <div class="row mt-150 text-light mb-5">
                    <div class="col-md-3 ">
                        
                            <div class="mt-3 text-right mr-5  pt-2 text-right d-none d-md-block d-lg-block d-xg-block ">
                               <span class="mr-5">Links</span> 
                              
                               <ul class="navbar-nav ml-auto mt-3  mr-5">
                                    <li class="nav-item">
                                        <a class="text-light pt-0 " href="#institutions">Institutions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-light pt-0" href="#vision">Our Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-light pt-0" href="#mission">Our Mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-light pt-0" href="#contact_us">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-light pt-0" href="#covid19_protocol">Covid 19 Protocols</a>
                                    </li>
                                </ul>
                            </div>
                
                       


                    </div>
                    <div class="col-md-8 mt-5 ">
                        <h2 class="text-center">Immaculate Conception Institutions</h2>
                  
                    </div>
                </div>
            </div>
            <div>
                <div class="text-center text-light mt-5 mb-2">
                    © <?php echo date('Y'); ?> Copyright Immaculate Conception Institutions

                </div>
            </div>
        </section>
    </footer>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>