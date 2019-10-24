@extends('welcome')
@section('title', 'Home')

@section('content')

  <section class="section-1">
    <nav class="navbar fixed-top navbar-light bg-transparent pt-3">
      <div class="container">
        <a class="navbar-brand font-ms" href="#">
          <img src="{{ asset('img/poteto_favicon.png') }}" class="d-inline-block align-top" alt="">
          <span class="navbar-title display-4 ml-2">Omni Potato</span>
        </a>
      </div>
    </nav>
    <div class="row">
      <div class="col-md-6">
        <div class="card card-body border-0 p-5">
          <h1 class="font-bb my-auto mx-5 pl-5">Build your app and grow your business with us.</h1>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-body border-0">
          <img class="section-1__svg my-auto" src="{{ asset("assets/img/section1.svg") }}">
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
