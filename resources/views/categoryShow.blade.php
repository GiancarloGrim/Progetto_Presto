<x-layout>






    <div class="container-fluid">
        <div class="row">
            <div class="col-12 m-3 d-flex justify-content-center text-center">
                <x-header title="{{__('ui.categoriaScelta')}} : {{$category->name}}"/>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row shadow m-5 p-4 bg-row Scale">
            @forelse ($category->announcements as $announcement)
            <div class="col">
                <div id="myCard" class="col-12 d-flex justify-content-center">
                    <div  class="card bg-dark text-light m-5" style="width: 18rem;">
                        <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-img">{{$announcement->title}}</h5>
                            <hr>
                            <p class="card-text">{{$announcement->body}}</p>
                            <hr>
                            <p class="card-text">{{$announcement->category->name}}</p>
                            <p class="card-text">{{__('ui.prezzo')}}: {{$announcement->price}}</p>
                            <p class="card-text">{{__('ui.pubblicato')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                            <p class="card-text">{{__('ui.autore')}}: {{$announcemnt->user->name ?? ''}}</p>
                            <a href="{{route('announcements.show', compact('announcement'))}}" class="btn btn-outline-success button d-flex justify-content-center">{{__('ui.visualizza')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="container">
                <div class="row form">
                    <div class="col-12 d-flex justify-content-center align-items-center p-3 shadow fs-5">
                        <p class="p-4 text-light">{{__('ui.nonCiSonoAnnunciPerQuestaCategoria')}}:</p>
                        <a href="{{route('announcements.create')}}"><button class="btn btn-outline-success button">{{__('ui.nuovoAnnuncio')}}</button></a>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>





</x-layout>