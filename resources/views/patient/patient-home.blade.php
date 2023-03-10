@extends('layouts.user')
@section('content')
    <!-- header section starts  -->

    <header class="header">

        <nav class="navbar">
            <a href="#">home</a>
            <a href="#">services</a>
            <a href="#">about</a>
            <a href="#">doctors</a>
            <a href="#">review</a>
            <a href="#">blogs</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="{{asset('storage/image/home-img.svg')}}" alt=""/>
        </div>

        <div class="content">
            <h3>stay safe, stay healthy</h3>
            <h2><b>Insert Biopsy Image Here</b></h2>

            <form method="POST" action="{{route('change.biopsy')}}" style="background-color: #374151; border-color: #16a085;" enctype="multipart/form-data">
                @csrf
                <input type="file" class="box form-control @error('biopsy') is-invalid @enderror" name="biopsy"
                       style="height: 30px"/>
                <div class="images-box">
                    <img class="spin" src="{{asset('storage/image/brain.png')}}" alt="">
                </div>
                @error('biopsy')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <button class="btn" id="submit" type="submit">
                    {{-- <a class="dropdown-item" href="{{ route('patient.profile') }}">--}}
{{--                    <a class="dropdown-item" href="#">--}}
                        Check now<span class="fas fa-chevron-right"> </span>
{{--                    </a>--}}
                </button>

            </form>

        </div>


    </section>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1040+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>500+</h3>
            <p>bed facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>available hospitals</p>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span></h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>free checkups</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"><span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="{{asset('storage/image/about-img.svg')}}" alt=""/>
            </div>

            <div class="content">
                <h3>we take care of your healthy life</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in
                    assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus
                    nesciunt.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates
                    voluptatibus a nihil temporibus deserunt vel?</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- doctors section starts  -->

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span>doctors</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="{{asset('storage/image/doc-1.jpg')}}" alt=""/>
                <h3>john deo</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('storage/image/doc-2.jpg')}}" alt=""/>
                <h3>john deo</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('storage/image/doc-3.jpg')}}" alt=""/>
                <h3>john deo</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('storage/image/doc-4.jpg')}}" alt=""/>
                <h3>john deo</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('storage/image/doc-5.jpg')}}" alt=""/>
                <h3>john deo</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('storage/image/doc-6.jpg')}}" alt=""/>
                <h3>john deo</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- doctors section ends -->


    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="{{asset('storage/image/pic-1.png')}}" alt=""/>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil
                    aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente
                    minus voluptatem, reiciendis consequuntur optio dolorem!</p>
            </div>

            <div class="box">
                <img src="{{asset('storage/image/pic-2.png')}}" alt=""/>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil
                    aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente
                    minus voluptatem, reiciendis consequuntur optio dolorem!</p>
            </div>

            <div class="box">
                <img src="{{asset('storage/image/pic-3.png')}}" alt=""/>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil
                    aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente
                    minus voluptatem, reiciendis consequuntur optio dolorem!</p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{asset('storage/image/blog-1.jpg')}}" alt=""/>
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('storage/image/blog-2.jpg')}}" alt=""/>
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('storage/image/blog-3.jpg')}}" alt=""/>
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> anas@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> anas@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> 6 October, Egypt - 400104 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by <span> team </span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->






    <!-- scroll top button  -->
    <a href="#" class="top">
        <i class="fas fa-heartbeat"></i>
    </a>
    <style>

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .spin {

            animation-duration: 2.5s;
            animation-fill-mode: both;
            animation-iteration-count: infinite;
            animation-name: spin;
        }
    </style>

@endsection
