<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front-assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front-assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('front-assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>THE BEST</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('index')}}" class="nav-item nav-link">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('courses')}}" class="nav-item nav-link">Courses</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->





    <div class="container">
        <div class="breadcrumb-nav small text-secondary ms-4 mt-5 mb-3">
            <a href=""><i class="bi bi-house-door me-2"></i></a> My Courses
        </div>
        <div>
            <div class="row py-4 px-4">
                <div class="col col-12 col-md-6 inline mb-4">
                    <div class="ms-4">
                        <h1 class="mb-5">{{$course->name}}</h1>
                        <p><span ><i class="fa fa-file text-primary me-2"></i>Chapters : 1 </span>
                            <span class="ms-4"><i class="fa fa-user text-primary me-2"></i>Lectures : 1</span>
                        </p>
                        <p class="text-muted ">php<span class="small ms-4">Learn at your own pace</span></p>
                    </div>
                </div>

                <div class="col col-12 col-md-6 ">
                    <div class=""><img src="{{$course->image}}" alt="" class="img-fluid rounded" width="250" height="50"></div>
                 </div>
            </div>
        </div>

    </div>

    <!-- course preview  -->
     <div class="container">
        <div class=" py-3 px-3">
            <div class="courseDescrip mx-3 mt-2 px-4 py-4 shadow rounded">
                <h3>Web Development</h3>
                <hr>
                <h4>Description</h4>
                <p class="mt-3">{{$course->description}}</p>
                <div class="py-2">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="col-12 col-md-8" id="delete_Method">
            <div class="card">
                <div class="card-body">
                    <h3 class="py-2 px-2" style="color:#173282;">Chapters</h3>
                    @foreach($chapters as $chapter)
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <div class="container-fluid row d-flex align-items-center h-100">
                                    <div class="col-12 col-md-6 py-0 px-0">
                                        <h6 class="fw-bold text-primary ps-3 py-3">
                                            <span class="fw-bold bg-primary bg-gradient  text-white px-2 py-1 me-3">{{$chapter->title}} </span>
                                        </h6>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                        </button>
                                    </div>
                                </div>
                            </h2>

                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-info-subtle">
                                    <div class="row row-cols-1 px-3 py-3 g-2">
                                        <!-- Add New Lecture Button -->
                                        <div class="col mb-3">
                                            <div class="row">
                                                <div class="col-12 col-md-8">
                                                    <h3 class="">Lectures</h3>
                                                </div>
                                            </div>
                                        </div>
                    
                                        @foreach($lectures as $lecture)
                                         <!-- Lecture Items -->
                                        <div class="col rounded-3 bg-white py-3 my-2">
                                            <div class="row">
                                                <div class="col-12 col-md-8">
                                                    <h6 class="me-4 mb-3 mb-md-0">
                                                        <span class="fw-bold bg-dark bg-gradient rounded-circle text-white px-2 py-1 me-3">{{$lecture->title}}</span>
                                                    </h6>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <span class="float-md-end">
                                                        <a href="{{route('videolesson',$course->id)}}" class="py-1 px-2 btn btn-outline-primary btn-sm" title="View Lecture">
                                                            <i class="fas fa-solid fa-eye"></i>
                                                        </a>
                                            
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                    



                                    </div>
                                </div>      
                            </div>



                        </div>
                
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
                    </div>
                </div>

            </div>
        </div>
     </div>

        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+95 987835784</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>moe550120@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('front-assets/img/course-1.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('front-assets/img/course-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('front-assets/img/course-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('front-assets/img/course-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('front-assets/img/course-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('front-assets/img/course-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">THEBEST Education School</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Amoe</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com">Sr.Hein</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front-assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('front-assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front-assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('front-assets/js/main.js')}}"></script>
</body>