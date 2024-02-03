<div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center p-3">
                <h1 class="d-flex justify-content-center align-items-center rounded-4">{{__('ui.creaIlTuoAnnuncio')}}</h1>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="flex flex-row justify-center my-2 alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
    </form>

    <div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-12 align-contant-center d-flex justify-content-center">
            <div class="container_form button border-2">
                <form wire:submit.prevent="store" class="form" action="#">
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span for="title" class="details">{{__('ui.titoloAnnuncio')}}</span>
                            <input wire:model.live.blur="title" type="text" placeholder="{{__('ui.inserisciIlTuoNome')}}" required>
                        </div>
                        <div class="input-box">
                            <span for="price" class="details">{{__('ui.prezzo')}}</span>
                            <input wire:model.live.blur="price" id="price" type="text" placeholder="{{__('ui.inserisciIlPrezzo')}}">
                        </div>
                        <div class="input-box">
                            <span for="title" class="details">{{__('ui.categoria')}}</span>
                            <select wire:model.defer="category" id="category" class="form-control">
                                <option value="">{{__('ui.scegliLaCategoria')}}</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-box">
                            <span for="title" class="details">{{__('ui.descrizione')}}</span>
                            <input wire:model.live.blur="body" type="text" placeholder="{{__('ui.inserisciUnaDescrizione')}}" required>
                        </div>
                        <div class="mb-3">
                            <input wire:model='temporary_images' type="file" name="images"multiple placeholder="{{__('ui.inserisciImmagine')}}" class="form-control @error('temporary_images.*') is-invalid @enderror">
                            @error('temporary_images.*')
                            {{$message}}
                            @enderror
                        </div>
                        @if (!empty($images))
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12">
                                    <p>{{__('ui.anteprimaImmagine')}}:</p>
                                    <div class="row border border-4 border-info rounded shadow py-4">
                                        @foreach ($images as $key => $image)
                                            <div class="col my-3">
                                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.cancellaImmagine')}}</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="button">
                        <input type="submit" value="{{__('ui.crea')}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
