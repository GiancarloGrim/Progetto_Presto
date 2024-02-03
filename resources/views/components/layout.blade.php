<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'Presto.it'}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--     <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{$style ?? ''}} --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body>


        <x-navbar/>

        <x-ProgressiveBarr/>

        <x-form/>

        <div class="min-vh-100">
            {{$slot}}
        </div>

        <x-card/>

        <a href="{{route('home')}}" class="btn"><i class="fa-regular fa-circle-up fa-2xl" style="color: #000000;"></i></a>

        {{-- <x-carousel/> --}}



        <x-footer/>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>






    </body>

</html>