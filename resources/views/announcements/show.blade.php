<x-layout>

    <x-header title="{{__('ui.dettaglio')}}"/>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="text-img">{{$announcement->title}}</h1>
            </div>
        </div>
    </div>







    {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            @if ($announcement->images)
            <div class="carousel-inner">
                @foreach ($announcement->images as $image)
                <div class="carousel item @if($loop->first)active @endif">
                    <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="">
                </div>
                @endforeach
            </div>
            @else
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                </div>
            </div>
            @endif
        </div>
    </div> --}}









    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="col-12 d-flex justify-content-center">
                <div class=" rounded rounded-4 bg-dark text-light m-5 p-5" style="width: 90vw;">
                    <div class="d-flex justify-content-center">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    @if ($announcement->images)
                                    <div class="carousel-inner d-flex">
                                        @foreach ($announcement->images as $image)
                                        <div class="carousel item @if($loop->first)active @endif">
                                            <img src="{{$image->getUrl(400, 300)}}" class="img-fluid rounded {{-- h-100 w-100 --}} p-2" style="min-height: 25vh; max-height: 80vh; max-width: 25vw; min-width: 18vw;">
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                                        </div>
                                    </div>
                                    @endif
                                </div>

                            </div>
{{--                             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> --}}
                        </div>
                    </div>

                    <div class="card-body p-5 m-5">
                        <h5 class="card-title text-img">{{$announcement->title}}</h5>
                        <hr>
                        <p class="card-text">{{$announcement->body}}</p>
                        <hr>
                        <p>{{__('ui.prezzo')}}: {{$announcement->price}}{{__('ui.valuta')}}</p>
                        <p>{{__('ui.categoria')}}: <a href="{{route('categoryShow', ['category'=>$announcement->category])}}">{{$announcement->category->name}}</a></p>
                        <p>{{__('ui.autore')}}: {{$announcement->user->name ?? ''}} {{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>






</x-layout>