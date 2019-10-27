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
      </nav>
      <div class="row section-1__row">
        <div class="col-md-6">
          <div class="card card-body border-0">
            <div class="my-auto">
              <h1 class="font-bb">Build your app and grow your business with us.</h1>
              <p class="font-br ls-03 my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa debitis delectus dignissimos eligendi eum harum iusto laborum nesciunt nulla numquam pariatur reiciendis repellendus, sed sint sunt veritatis? Illo, totam.</p>
              <button type="button" class="btn btn-lg font-bb ls-03">Contact our team</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-body border-0">
            <img class="undraggable" src="{{ asset("assets/img/section1.svg") }}" width="518" height="360">
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
