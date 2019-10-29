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
          <div class="card card-body border-0">
            <img class="undraggable" src="{{ asset("svg/section/section-1.svg") }}" width="518" height="360">
          </div>
        </div>
      </div>
    </div>
  </section>

  <img class="undraggable wave" src="{{ asset("svg/section/separator_1-2.svg") }}">

  <section class="section-2">
    <div class="container">
      <div class="row h-100">
        <div class="col-md-6 h-100">
          <div class="card card-body bg-transparent border-0 h-100">
            <img class="undraggable section-2__img" src="{{ asset("svg/section/section-2.svg") }}" width="518" height="360">
          </div>
        </div>
        <div class="col-md-6 h-100">
          <div class="card card-body bg-transparent border-0 h-100">
            <div class="my-auto">
              <h1 class="font-bb">Our Expertise</h1>
              <p class="font-br ls-03 mt-3">Basically, we use the best programming tools and languages for the development process.</p>
              <p class="font-bb ls-03">Languages:</p>
              <div class="align-items-center justify-content-start">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lang/kotlin.svg") }}" data-toggle="tooltip" title="kotlin">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lang/dart.svg") }}" data-toggle="tooltip" title="dart">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lang/java.svg") }}" data-toggle="tooltip" title="java">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lang/php.svg") }}" style="height: 25px" data-toggle="tooltip" title="php">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lang/sass.svg") }}" data-toggle="tooltip" title="sass">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lang/javascript.svg") }}" data-toggle="tooltip" title="javascript">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lang/typescript.svg") }}" data-toggle="tooltip" title="typescript">
              </div>
              <p class="font-bb ls-03 mt-3">Framework & libraries:</p>
              <div class="align-items-center justify-content-start">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lib/vue.svg") }}" data-toggle="tooltip" title="vue">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lib/laravel.svg") }}" data-toggle="tooltip" title="laravel">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lib/flutter.svg") }}" data-toggle="tooltip" title="flutter">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lib/clojure.svg") }}" data-toggle="tooltip" title="clojure">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lib/bootstrap.svg") }}" data-toggle="tooltip" title="bootstrap">
                <img class="lang-icon mr-2" src="{{ asset("svg/icon/lib/jquery.svg") }}" style="width: 100px;" data-toggle="tooltip" title="typescript">
              </div>
              <p class="font-br ls-03 mt-4">Besides programming, we also have expertise in design.</p>
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
          $('img[title="kotlin"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="dart"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="java"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="php"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="sass"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="javascript"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="typescript"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });

          $('img[title="vue"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="laravel"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="flutter"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="clojure"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="bootstrap"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
          $('img[title="jquery"]').tooltip({
              animated: 'fade',
              placement: 'top',
              html: true
          });
      });

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
