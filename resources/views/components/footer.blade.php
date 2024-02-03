<footer class="p-3 mt-4 footer">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
 {{--        @if (Auth::user())
        @guest --}}
        <li class="nav-item"><a href="{{route('become.revisor')}}" class="nav-link px-2 text-light">{{__('ui.lavoraConNoi')}}</a></li>
    {{--     @endguest
        @endif --}}
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">{{__('ui.caratteristiche')}}</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">{{__('ui.prezzi')}}</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li>
    </ul>
    <p class="text-center text-light">© 2023 Company, Inc</p>
</footer>