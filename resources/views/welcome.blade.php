<x-layout>



{{--     <div class="container-fluid">
        <div class="row bg-row mb-5 p-2 text-light justify-content-between align-items-center" style="box-shadow: 0px 170px 120px 90px white;
    }">
    <div class="col-6 text-center">
        <a class="nav-link dropdown-toggle active rounded-3 border-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <h1 class="fs-2">{{__('ui.benvenuto')}} {{Auth::user()->name}}</h1>
        </a>
        <ul class="dropdown-menu bg-dark active border border-success rounded-3">
            <li><a class="dropdown-item text-light" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
            </div>


            <div class="col-3 text-center d-flex">
                <a class="nav-link dropdown-toggle active rounded-3 border-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <h4>I tuoi Articoli:</h4></h1>
                </a>
                <ul class="dropdown-menu bg-dark active border border-success rounded-3">
                    <a class="nav-link dropdown-toggle active rounded-3 border-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success button px-5 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Vai agli Articoli
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

            </div>

        </div>
    </div> --}}


    {{-- <x-carousel/> --}}



    {{--         <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="TRE">

                </div>
                <iframe id="videoFrame" class="RRR" width="100%" height="645px" src="https://www.youtube.com/embed/hHqW0gtiMy4?fs=1&autoplay=1&mute=1&loop=1" title="Vintage Swing Music Playlist - 1930s 1940s songs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div> --}}


        <div class="position-relative">
        <div class="d-flex justify-content-center text-center">



            <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade bg-body" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="false">
                <div class="video-filter"></div>
                <div class="carousel-inner-header">
                    <div class="carousel-item active">
                        <h1 class="Carousel_Title  pb-5 mb-5">CERCA</h1>
                        <p class="Carousel_Title1  py-1 fs-3 mb-5">Trova ciò che vorresti con un semplice click</p>
                        <video autoplay muted loop>
                            <source src="{{Storage::url('media/cerca.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="carousel-item">
                            <h1 class="Carousel_Title  pb-5 mb-5">VENDI</h1>
                            <p class="Carousel_Title1  py-1 fs-3 mb-5">Semplifica il processo di vendita e libera spazio nella tua vita</p>
                            <video autoplay muted loop>
                                <source src="{{Storage::url('media/vendi.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="carousel-item">
                                <h1 class="Carousel_Title  pb-5 mb-5">COMPRA</h1>
                                <p class="Carousel_Title1  py-1 fs-3 mb-5">Scopri, scegli, possiedi. Soddisfa ogni tuo desiderio senza sforzo</p>
                                <video autoplay muted loop>
                                    <source src="{{Storage::url('media/compra.mp4')}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> --}}
                        </div>




                        <div class="d-flex justify-content-center">
                            <div class="container-arrow" id="arrow_header">
                                <a href="#stats"><i class="fa-solid fa-angle-down arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="scrollDiv" class="triangle"></div>
        </div>





        <x-header title='Presto.it'/>




        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif


    <div class="container">
        <div class="row text-center justify-content-between p-5">
            <div class="col-12 col-md-3 my-3  shadow card rounded-5 incNumSha">
                <span class="text-light fs-1" id="number1" data-counter="{{$count}}">0</span>
                <p class="text-light">{{__('ui.prodottiCaricati')}}</p>
            </div>
            <div class="col-12 col-md-3 my-3 shadow card rounded-5 incNumSha">
                <span class="text-light fs-1" id="number2">0</span>
                <p class="text-light">{{__('ui.utentiSoddisfatti')}}</p>
            </div>
            <div class="col-12 col-md-3 my-3 shadow card rounded-5 incNumSha">
                <span class="text-light fs-1" id="number3">0</span>
                <p class="text-light">{{__('ui.recensioni')}}</p>
            </div>
        </div>
    </div>

        <div class="container d-flex  justify-content-center">
            <div class="row custom-row rounded-4 shadow m-5 p-4 bg-row Scale">
                <h1 class="text-center mb-4">{{__('ui.ultimiArticoli')}}</h1>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($announcements as $announcement)
                        <div class="swiper-slide {{-- @if ($loop->first) active @endif --}}">
                            <div id="myCard" class=" d-flex justify-content-center">
                                <div  class="card bg-dark text-light mb-5 rounded-4" style="width: 18rem;">
                                    <div class="bor">
                                        <div class="bor123">
                                            <div class="bor321">
                                                <div class="img-top">
                                                    <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title text-img">{{$announcement->title}}</h5>
                                                    <hr>
                                                    <p class="card-text text-center">{{$announcement->body}}</p>
                                                    <hr>
                                                    <p class="card-text text-center">{{__('ui.categorie')}}: {{$announcement->category->name}}</p>
                                                    <p class="card-text text-center">{{__('ui.pubblicato')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                                                    <p class="card-text text-center">{{__('ui.autore')}}: {{$announcement->user->name ?? ''}}</p>
                                                    <p class="card-text text-center">{{__('ui.prezzo')}}: {{$announcement->price}}$</p>
                                                    <a href="{{route('announcements.show', compact('announcement'))}}" class="btn btn-outline-success button d-flex justify-content-center">{{__('ui.visualizza')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>






        <div class="container d-flex  justify-content-center">
            <div class="row custom-row rounded-4 shadow m-5 p-4 bg-row Scale">
                <h1 class="text-center mb-4">Articoli più venduti</h1>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($announcements as $announcement)
                        <div class="swiper-slide {{-- @if ($loop->first) active @endif --}}">
                            <div id="myCard" class=" d-flex justify-content-center">
                                <div  class="card bg-dark text-light mb-5 rounded-4" style="width: 18rem;">
                                    <div class="bor">
                                        <div class="bor123">
                                            <div class="bor321">
                                                <div class="img-top">
                                                    <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title text-img">{{$announcement->title}}</h5>
                                                    <hr>
                                                    <p class="card-text text-center">{{$announcement->body}}</p>
                                                    <hr>
                                                    <p class="card-text text-center">{{__('ui.categorie')}}: {{$announcement->category->name}}</p>
                                                    <p class="card-text text-center">{{__('ui.pubblicato')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                                                    <p class="card-text text-center">{{__('ui.autore')}}: {{$announcement->user->name ?? ''}}</p>
                                                    <p class="card-text text-center">{{__('ui.prezzo')}}: {{$announcement->price}}$</p>
                                                    <a href="{{route('announcements.show', compact('announcement'))}}" class="btn btn-outline-success button d-flex justify-content-center">{{__('ui.prezzo')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>



        {{-- todo da fare lavora con noi--}}
        {{--<section class="container my-5 container-about-us">
            <div class="row">
                
                <div class="col-12 col-md-5">
                    <h5 class="text-uppercase text-success fs-2 mb-4">{{__('ui.work')}}</h5>
                    <h2 class="titolo-au text-uppercase fw-bolder">{{__('ui.join')}}</h2>
                    <p class="fs-5 fw-medium">{{__('ui.enter')}} 
                        <hr>
                        {{__('ui.p1')}}</p>
                        <p class="{{-- fs-5 fw-medium ">{{__('ui.p2')}}</p>
                        <div class="row">
                            <div class="col-3">
                                <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-success fs-4 me-3"></i>{{__('ui.tic1')}}</p>
                                <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-success fs-4 me-3"></i>{{__('ui.tic2')}}</p>
                            </div>
                            <div class="col-3 mx-5 px-5">
                                <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-success fs-4 me-3"></i>{{__('ui.tic3')}}</p>
                                <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-success fs-4 me-3"></i>{{__('ui.tic4')}}</p>
                            </div>
                        </div>
                        
                        
                        <a href="{{route('become.revisor')}}" class="btn mt-3">
                            {{__('ui.unisciti')}}
                        </a>
                        
                    </div>
                </div>
            </section>--}}



            {{-- todo il nostro team --}}

            <div class="container container-our-team">
                <div class="row text-center">
                    <div class="col-12 text-arancio">
                        <h5 class="fs-2">{{__('ui.titolo-team')}}</h5>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12 text-nero mt-3 d-flex justify-content-center">
                        <h1 class=" title-last-product titolo-au fw-bolder">{{__('ui.team')}}</h1>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 mb-5">
                        <div class="card card-our-team">
                            <img src="/media/im4.jpeg" class="card-img-top img-card-our-team mx-2 my-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{__('ui.team1')}}</h5>
                                <h6 class="card-subtitle mb-2 text-white">{{__('ui.job')}}</h6>
                                <p class="card-text text-white">{{__('ui.profile1')}}</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-3 mb-5">
                        <div class="card card-our-team">
                            <img src="/media/im2.jpeg" class="card-img-top img-card-our-team mx-2 my-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{__('ui.team2')}}</h5>
                                <h6 class="card-subtitle mb-2 text-white">{{__('ui.job1')}}</h6>
                                <p class="card-text text-white">{{__('ui.profile2')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-5">
                        <div class="card card-our-team">
                            <img src="/media/im3.jpeg" class="card-img-top img-card-our-team mx-2 my-2" alt="...">
                            <div class="card-body text-white">
                                <h5 class="card-title">{{__('ui.team3')}}</h5>
                                <h6 class="card-subtitle mb-2 text-white">{{__('ui.job1')}}</h6>
                                <p class="card-text">{{__('ui.profile3')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-5">
                        <div class="card card-our-team">
                            <img src="/media/im1.jpeg" class="card-img-top img-card-our-team mx-2 my-2" alt="...">
                            <div class="card-body text-white">
                                <h5 class="card-title">{{__('ui.team4')}}</h5>
                                <h6 class="card-subtitle mb-2 text-white">{{__('ui.job')}}</h6>
                                <p class="card-text">{{__('ui.profile4')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






    </x-layout>
