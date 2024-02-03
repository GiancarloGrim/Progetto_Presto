<x-layout>

    <x-header title="{{__('ui.tuttiGliAnnunci')}}"/>


    <div class="container d-flex justify-content-center">
        <div class="row shadow custom-row m-5 p-4 bg-row Scale rounded-4">

            @forelse ($announcements as $announcement)
            <div id="myCard" class="col-12 col-md-4 d-flex justify-content-center">
                <div  class="card bg-dark text-light mb-5 rounded-4" style="width: 18rem;">
                    <div class="bor">
                        <div class="bor123">
                            <div class="img-top">
                                <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-img">{{$announcement->title}}</h5>
                                <hr>
                                <p class="card-text">{{$announcement->body}}</p>
                                <hr>
                                <p class="card-text">{{$announcement->category->name}}</p>
                                <p class="card-text">Prezzo: {{$announcement->price}}</p>
                                <p class="card-text">Publicato: {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? ''}}</p>
                                <a href="{{route('announcements.show', compact('announcement'))}}" class="btn btn-outline-success button d-flex justify-content-center">Visualizza</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3">
                        <p class="lead">Non ci sono annunci per questa ricerca.</p>
                    </div>
                </div>
            @endforelse
            <div class="container">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-center">
                        <div>{{$announcements->links()}}</div>
                    </div>
                </div>
            </div>


        </div>
    </div>






</x-layout>