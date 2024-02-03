<x-layout>
    <x-header title="{{__('ui.registrati')}}"/>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <div class="row justify-content-center m-5">
            <div class="col-12 align-contant-center d-flex justify-content-center">
                <div class="container_form button border-2">
                    <div class="title">{{__('ui.registrati')}}</div>
                    <form class="form" method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">{{__('ui.nomeUtente')}}</span>
                                <input name="name" type="text" placeholder="{{__('ui.inserisciIlTuoNome')}}" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input name="email" type="text" placeholder="{{__('ui.inserisciLaTuaEmail')}}" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input name="password" type="password" placeholder="{{__('ui.inserisciUnaPassword')}}" required>
                            </div>
                            <div class="input-box mb-5">
                                <span class="details">{{__('ui.confermaPassword')}}</span>
                                <input name="password_confirmation" type="password" placeholder="{{__('ui.confermaLaPassword')}}" required>
                            </div>
                        </div>
                        <div class="button mt-5">
                            <input type="submit" value="{{__('ui.registrati')}}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>