<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="POST" wire:submit.prevent="register">
                    @csrf 
                    <form wire:submit.prevent="register">
                        <label class="form-label">{{__('ui.nomeUtente')}}</label>
                        <input type="text" class="form-control" wire:model="name"/>
                        @error('name') <div>{{ $message }}</div> @enderror
                        
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" wire:model="email"/>
                        @error('email') <div>{{ $message }}</div> @enderror
                        
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" wire:model="password"/>
                        @error('password') <div>{{ $message }}</div> @enderror

                        <label class="form-label">{{__('ui.confermaPassword')}}</label>
                        <input type="password" class="form-control" wire:model="password"/>
                        @error('password') <div>{{ $message }}</div> @enderror

                    <button type="submit" class="btn btn-warning mt-2">{{__('ui.registrati')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
