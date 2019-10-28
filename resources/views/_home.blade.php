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
          <img src="{{ asset('assets/img/github.svg') }}" class="undraggable ml-auto github-svg d-none d-md-block" width="40" height="40" alt="">
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
            <img class="undraggable" src="{{ asset("assets/img/section-1__2.svg") }}" width="518" height="360">
          </div>
        </div>
      </div>
    </div>
  </section>

  <img class="undraggable wave" src="{{ asset("assets/img/wave_1-2.svg") }}">

  <section class="section-2">
    <div class="container">
      <div class="row h-100">
        <div class="col-md-6 h-100">
          <div class="card card-body bg-transparent border-0 h-100">
            <img class="undraggable section-2__img" src="{{ asset("assets/img/section-2.svg") }}" width="518" height="360">
          </div>
        </div>
        <div class="col-md-6 h-100">
          <div class="card card-body bg-transparent border-0 h-100">
            <div class="my-auto">
              <h1 class="font-bb">What can we do?</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('javascript')
  <script>
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
