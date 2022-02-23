@include('user.header')
    <!-- slider start  -->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/car.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We Provide Reliable & Fast delivery</h1>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/car2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We Provide Reliable & Fast delivery</h1>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/car3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We Provide Reliable & Fast delivery</h1>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- slider start end -->

    <!-- About  start end -->
    <section style=" margin: 50px 0;">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-md-6">
                    <h1 class="text-center mb-5">About OES​</h1>
                    <p class="aboutper">Welcome to OES Export Import PVT ltd. Thank you for your interest in our
                        Company.</p>
                    <p class="aboutper">OES Export Import Pvt Ltd able to create its own goodwill and a name for itself.
                        We are primarily exporters of all Wooden Handicraft products, wooden items, glass items,
                        handmade products, photo frames, Handmade Clothes Products, Handmade Decorative Products, all
                        types of wooden temple. The products are of elegance, style and superior quality. We have a
                        well-established global clientele.</p>
                    <p class="aboutper">The company understands the importance of Quality and Timely Delivery of
                        merchandise in this competitive and challenging International Business scenario.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/aboutimg.jpg" width="90%" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- What We Provide start -->
    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="WhatWeProvidesection text-center">
                    <h1 class="mt-5 mb-5">What We Provide</h1>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="{{route('fruits-vegetables')}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('enquriy')}}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control" name="name" 
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control" name="phone" 
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control" name="message"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…
                            </p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title vergtitel text-center">Fruits & Vegetables</h5>
                            <p class="card-text">We are offering fresh and hygienic fruits and vegetables. Fruits and
                                vegetables contain important vitamins, minerals & plant chemicals…</p>
                            <div class="buttongroup">
                                <div class="viewbutton">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </div>
                                <div class="popupbutton">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Your Name" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter Your Email"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter Your Phone No."
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Write Your Message Here"
                                                                id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Provide end -->

    <!-- Product Gallery start -->
    <section class="pb-5" style="background: #e4b062;">
        <div class="container">
            <div class="row">
                <div class="WhatWeProvidesection text-center">
                    <h1 class="mt-5 mb-5">Product Gallery</h1>
                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-3 productgallerycol">
                    <div class="productgallerysection">
                        <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Gallery end -->

    <!-- Product Why You Choose us start -->
    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="WhatWeProvidesection text-center">
                    <h1 class="mt-5 mb-5">Why You Choose us</h1>
                </div>
                <div class="col-md-4">
                    <div class="productgallerycol2">
                        <div class="card whycard text-center">
                            <div>
                                <img src="img/1.png" width="50%">
                            </div>
                            <h4 class="whychoseusheading text-center">We Build Relations</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productgallerycol2">
                        <div class="card whycard text-center">
                            <div>
                                <img src="img/2.png" width="50%">
                            </div>

                            <h4 class="whychoseusheading text-center">We Build Relations</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productgallerycol2">
                        <div class="card whycard text-center">
                            <div>
                                <img src="img/3.png" width="50%">
                            </div>

                            <h4 class="whychoseusheading text-center">We Build Relations</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productgallerycol2">
                        <div class="card whycard text-center">
                            <div>
                                <img src="img/4.png" width="50%">
                            </div>

                            <h4 class="whychoseusheading text-center">We Build Relations</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productgallerycol2">
                        <div class="card whycard text-center">
                            <div>
                                <img src="img/5.png" width="50%">
                            </div>

                            <h4 class="whychoseusheading text-center">We Build Relations</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productgallerycol2">
                        <div class="card whycard text-center">
                            <div>
                                <img src="img/6.png" width="50%">
                            </div>

                            <h4 class="whychoseusheading text-center">We Build Relations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Why You Choose us end -->

    <!-- Love from Clients start  -->
    <section class="pb-5" style="background-color: #e0e6fa;">
        <div class="container">
            <div class="row">
                <div class="WhatWeProvidesection text-center">
                    <h1 class="mt-5 mb-5">Love from Clients</h1>
                </div>
            </div>
            <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title vergtitel text-center">Aman Singh</h5>
                                        <p class="text-center"> CEO </p>
                                        <p class="card-text">We are offering fresh and hygienic fruits and vegetables.
                                            Fruits and
                                            vegetables contain important vitamins, minerals & plant chemicals…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title vergtitel text-center">Aman Singh</h5>
                                        <p class="text-center"> CEO </p>
                                        <p class="card-text">We are offering fresh and hygienic fruits and vegetables.
                                            Fruits and
                                            vegetables contain important vitamins, minerals & plant chemicals…
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title vergtitel text-center">Aman Singh</h5>
                                        <p class="text-center"> CEO </p>
                                        <p class="card-text">We are offering fresh and hygienic fruits and vegetables.
                                            Fruits and
                                            vegetables contain important vitamins, minerals & plant chemicals…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title vergtitel text-center">Aman Singh</h5>
                                        <p class="text-center"> CEO </p>
                                        <p class="card-text">We are offering fresh and hygienic fruits and vegetables.
                                            Fruits and
                                            vegetables contain important vitamins, minerals & plant chemicals…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title vergtitel text-center">Aman Singh</h5>
                                        <p class="text-center"> CEO </p>
                                        <p class="card-text">We are offering fresh and hygienic fruits and vegetables.
                                            Fruits and
                                            vegetables contain important vitamins, minerals & plant chemicals…
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title vergtitel text-center">Aman Singh</h5>
                                        <p class="text-center"> CEO </p>
                                        <p class="card-text">We are offering fresh and hygienic fruits and vegetables.
                                            Fruits and
                                            vegetables contain important vitamins, minerals & plant chemicals…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Love from Clients end  -->

    <!-- Membership & Certification start  -->
    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="WhatWeProvidesection text-center">
                    <h1 class="mt-5 mb-5">Membership & Certification</h1>
                </div>
            </div>
            <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow">
                                    <img src="img/Fruits-Vegetables.jpg" class="card-img-top" alt="...">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Membership & Certification end  -->

    @include('user.footer')
    
