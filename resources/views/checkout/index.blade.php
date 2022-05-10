<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


  <head>

  @include('user.css')
  </head>

  <body>
    @include('user.navbar')


    <div
    class="container"
    style="
    position: relative;
	text-align: center;
	padding-top: 90px;">
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container mt-5 text-center">
        <h2>Laravel PayPal Integration Example</h2>
        <a href="{{ route('make.payment') }}" class="btn btn-primary mt-3">Pay $224 via Paypal</a>
    </div>
  </body>
</html>


    </div>
    @include('user.footer')


    @include('user.script')

    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>


  </body>

</html>
