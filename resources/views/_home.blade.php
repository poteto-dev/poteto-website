@extends('welcome')
@section('title', 'Home')

@section('content')

  <section class="section-1">
    <div class="container">
      <nav class="navbar navbar-light bg-white pt-3">
        <a class="navbar-brand font-ms" href="#">
          <img src="{{ asset('img/poteto_favicon.png') }}" class="undraggable d-inline-block align-top" alt="">
          <span class="navbar-title display-4 ml-md-2">Omni Poteto</span>
        </a>
        <a href="https://github.com/poteto-dev">
          <img src="{{ asset('svg/icon/github.svg') }}" class="undraggable ml-auto github-svg d-none d-md-block" width="40" height="40" alt="">
        </a>
      </nav>
      <div class="row section-1__row">
        <div class="col-md-6">
          <div class="card card-body border-0">
            <div class="my-auto">
              <h1 class="font-bb">Build your app and grow your business with us.</h1>
              <p class="font-br ls-03 my-5">We work as a team with our respective expertise. With existing capabilities, we are ready to help develop your business based on the needs of the current era.</p>
              <div class="card card-body">
                <input class="font-br" type="email" placeholder="Your email">
                <button type="button" class="btn font-bb ls-03">Contact our team</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-body bg-transparent border-0">
            <img class="undraggable bounce" src="{{ asset("svg/section/section-1.svg") }}" width="518" height="360">
          </div>
        </div>
      </div>
    </div>
  </section>

  <img class="undraggable wave" src="{{ asset("svg/section/separator_1-2.svg") }}">

  <section class="section-2">
    <div class="container">
      <div class="row section-2__row">
        <div class="col-md-6">
          <div class="card card-body bg-transparent border-0" data-aos="zoom-in">
            <img class="undraggable section-2__content bounce" src="{{ asset("svg/section/section-2.svg") }}" width="518" height="360">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-body bg-transparent border-0">
            <div class="section-2__content">
              <h1 class="font-bb" data-aos="fade-down">Our Expertise</h1>
              <p class="font-br ls-03 mt-5" data-aos="fade-down-left">Basically, we use the best programming tools and languages for the development process.</p>
              <p class="font-bb ls-03" data-aos="fade-left">Languages:</p>
              <div class="align-items-center justify-content-start" data-aos="zoom-in-left">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/kotlin.svg") }}" data-toggle="tooltip" title="Kotlin">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/dart.svg") }}" data-toggle="tooltip" title="Dart">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/java.svg") }}" data-toggle="tooltip" title="Java">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/clojure.svg") }}" data-toggle="tooltip" title="Clojure">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/php.svg") }}" style="height: 25px" data-toggle="tooltip" title="Php">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/sass.svg") }}" data-toggle="tooltip" title="Sass">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/javascript.svg") }}" data-toggle="tooltip" title="Javascript">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lang/typescript.svg") }}" data-toggle="tooltip" title="Typescript">
              </div>
              <p class="font-bb ls-03 mt-3" data-aos="zoom-out-left">Framework & libraries:</p>
              <div class="align-items-center justify-content-start" data-aos="zoom-out-left">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lib/vue.svg") }}" data-toggle="tooltip" title="Vue">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lib/laravel.svg") }}" data-toggle="tooltip" title="Laravel">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lib/flutter.svg") }}" data-toggle="tooltip" title="Flutter">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lib/bootstrap.svg") }}" data-toggle="tooltip" title="Bootstrap">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lib/tailwindcss.svg") }}" data-toggle="tooltip" title="Tailwind">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/lib/jquery.svg") }}" style="width: 100px;" data-toggle="tooltip" title="JQuery">
              </div>
              <p class="font-bb ls-03 mt-3" data-aos="zoom-in-right">Tools used:</p>
              <div class="align-items-center justify-content-start" data-aos="zoom-in-up">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/tools/git.svg") }}" data-toggle="tooltip" title="Git">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/tools/postman.svg") }}" data-toggle="tooltip" title="Postman">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/tools/mariadb.svg") }}" data-toggle="tooltip" title="MariaDB" style="width: auto">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/tools/mysql.svg") }}" data-toggle="tooltip" title="MySQL" style="width: auto">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/tools/postgresql.svg") }}" data-toggle="tooltip" title="PostgreSQL">
                <img class="lang-icon mr-2 mt-2 mt-md-0" src="{{ asset("svg/icon/tools/docker.svg") }}" data-toggle="tooltip" title="Docker" style="width: auto">
              </div>
              <p class="font-br ls-03 mt-4" data-aos="zoom-out-up">Besides programming, we also have expertise in design.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <img class="undraggable wave" src="{{ asset("svg/section/separator_2-3.svg") }}">

  <section class="section-3">
    <div class="container">

    </div>
  </section>

@endsection

@section('javascript')
  <script>
    $( document ).ready(function() {
      $('img[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'top',
        html: true
      });
    });

    AOS.init();

    var docWidth = document.documentElement.offsetWidth;
    [].forEach.call(
      document.querySelectorAll('*'),
      function(el) {
        if (el.offsetWidth > docWidth) {
          console.log(el);
        }
      }
    );
  </script>
@endsection
