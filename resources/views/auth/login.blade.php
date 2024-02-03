<x-layout>
    <x-header title="{{__('ui.accedi')}}"/>
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
                        <form class="form m-5" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="user-details">
                                <div class="input-box mb-3">
                                    <span class="details form-label">Email</span>
                                    <input name="email" type="email" placeholder="{{__('ui.inserisciLaTuaEmail')}}" required>
                                </div>
                                <div class="input-box mb-5">
                                    <span class="details form-label">Password</span>
                                    <input name="password" type="password" placeholder="{{__('ui.inserisciUnaPassword')}}" required>
                                </div>
                            </div>
                            <div class="button mt-5">
                                <input type="submit" value="{{__('ui.accedi')}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>