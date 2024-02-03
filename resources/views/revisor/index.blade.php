<x-layout>
    {{-- <x-header class="text-center justify-content-center" title="{{__('ui.annunciDaRevisionare')}}"/> --}}

    <div class="container">
        <div class="row p-5">
            <div class="col-12 d-flex justify-content-center p-2 header card">
                <h1 class="d-flex justify-content-center p-3 fs-1 text-dark text-img">{{$announcement_to_check ? __("ui.anuncioDaRevisionare") : __("ui.nonCiSonoAnnunciPerQuestaCategoria")}}</h1>
            </div>
        </div>
    </div>

    @if ($announcement_to_check)
    <div class="container">
        <div class="row justify-content-center p-5 shadow m-5 p-4 bg-row">
            <div class="col-12 col-md-4 d-wrap justify-content-center">

                <div class="carousel slide" data-bs-ride="carousel">
                    @if ($announcement_to_check->images)
                        <div class="carousel-inner">
                            @foreach ($announcement_to_check->images as $image)
                                <div class="carousel item @if($loop->first)active @endif">
                                    <img src="{{$image->getUrl(400, 300)}}" class="img-fluid p-0 my-3 rounded" alt="">
                                </div>
                                <div class="col-8">
                                    <div class="card-body text-white">
                                        <h5 class="tc-accent">Revisione Immagini:</h5>
                                        <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                        <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                        <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                        <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                        <p>Contenuto Inappropriato: <span class="{{$image->racy}}"></span></p>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="card-body text-start">
                                        <h5 class="text-white">Tags</h5>
                                        <div class="p-0 text-white">
                                            @if ($image->labels)
                                            @foreach ($image->labels as $label)
                                            <p class="d-inline">{{$label}},</p>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        {{-- </div>
                        <div class="col-8">
                            <div class="card-body text-white">
                                <h5 class="tc-accent">Revisione Immagini:</h5>
                                <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                <p>Contenuto Inappropriato: <span class="{{$image->racy}}"></span></p>
                            </div> --}}

                        </div>
                        <div class="col-12">
                            <div class="card-body text-start">
                                <h5 class="text-white">Tags</h5>
                                <div class="p-2">
                                    @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                    <p class="d-inline">{{$label}},</p>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                        </div>
                    </div>
                    @endif
                </div>

                <div id="myCard" class="card bg-dark text-light m-2 p-5" style="width: 40rem;">
                    <div class="card-body">
                        <h5 class="card-title text-img">{{$announcement_to_check->title}}</h5>
                        <hr>
                        <p class="card-text">{{$announcement_to_check->body}}</p>
                        <hr>
                        <p>{{$announcement_to_check->price}}</p>
                        <a class="nav-link active border border-success rounded-3 bg-dark" href="{{route('categoryShow', ['category'=>$announcement_to_check->category])}}">{{$announcement_to_check->category->name}}</a>
                        <p>{{$announcement_to_check->created_at->format('d/m/Y')}} - Autore: {{$announcement_to_check->user->name ?? ''}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <form class="form justify-content-center d-wrap" action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="button">
                        <input type="submit" value="Accetta">
                    </div>
                </form>
                <form class="form" action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="button">
                        <input type="submit" value="Rifiuta">
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--     <div class="container">
        <div class="row justify-content-center m-5">
            <div class="col-12 col-md-4 align-contant-center d-flex justify-content-center">
                <div class="container_form button border-2">
                    <form class="form" action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="button">
                            <input type="submit" value="Accetta">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-4 align-contant-center d-flex justify-content-center">
                <div class="container_form button border-2">
                    <form class="form" action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="button">
                            <input type="submit" value="Rifiuta">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    @endif


</x-layout>
