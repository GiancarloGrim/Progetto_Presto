<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



I CONTATORI DA SISTEMAREE E IL CAROUSEL


BOTTONE PER ANDARE GIUUU







<header class="position-relative">
    <div class="d-flex justify-content-center text-center">
        
        <div class="container-titolo">
            <div class="container">
                @if (session('message_logout'))
                <div class="alert alert-success">
                    {{ session('message_logout') }}
                </div>
                @endif
                @if (session('message_newsletter'))
                <div class="alert alert-success">
                    {{ session('message_newsletter') }}
                </div>
                @endif
            </div>
            <h1 class="mb-3 titolo-header">Presto</h1>
            <h5 class="mb-4 sottotitolo-header">
                {{__('ui.slogan')}}
            </h5>
        </div>
    </div>
    
    
    <div class="d-flex justify-content-center text-center">
        <form action="{{route('announcement_search')}}" method="get" class="container-searchbar">
            <input type="search" name="searched" class=" search-header me-3 " placeholder='Es. T-shirt' aria-label="Search">
            <button class="btn-search text-nero" type="submit">{{__('ui.cerca')}}</button>
        </form>
    </div>
    
    
    
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade bg-body" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
        <div class="video-filter"></div>
        <div class="carousel-inner-header">
            <div class="carousel-item active">
                <video autoplay muted loop>
                    <source src="./media/AdobeStock_221975011.mov" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="carousel-item">
                    <video autoplay muted loop>
                        <source src="./media/AdobeStock_209011994.mov" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="carousel-item">
                        <video autoplay muted loop>
                            <source src="./media/AdobeStock_437450604.mov" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
                
                {{-- <div class="d-flex justify-content-center">
                    <div class="container-triangle">
                        <div class="triangle"></div>
                    </div>
                </div> --}}
                
                <div class="d-flex justify-content-center">
                    <div class="container-arrow" id="arrow_header">
                        <a href="#stats"><i class="fa-solid fa-angle-down arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="triangle"></div>
</header>