
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Boucherie du Marché</title>

<!-- Bootstrap core CSS -->
<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

<!-- Additional CSS Files -->
<link rel="stylesheet" href="/assets/css/fontawesome.css">
<link rel="stylesheet" href="/assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="/assets/css/owl.css">
<link rel="stylesheet" href="/assets/css/product.css">





    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{url('/')}}"><img style="margin-top: -1rem!important;" class="mr-5" width="60px"  src="/admin/assets/images/logo-mini.svg" alt="logo" /></a><a class="navbar-brand ml-5" href="{{url('/')}}"><h2>Boucherie du <em>MArché</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Accueil
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Nous</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/shop')}}">Shop
                  <span class="sr-only">(current)</span>
                </a>
              </li>

              @if (Route::has('login'))
              <li class="nav-item">
                  @auth

                  <li class="nav-item">
                    <a class="nav-link d-flex flex-row" href="{{url('showcart')}}"><i class="fa fa-shopping-cart mr-1 mt-1" aria-hidden="true"></i>[{{$count}}]
                    </a>
                  </li>

                        <x-app-layout>

                        </x-app-layout>


                  @else
                      <a href="{{ route('login') }}" class="nav-link" >Connexion</a>
                    </li>

                      @if (Route::has('register'))
                      <li class="nav-item">
                          <a href="{{ route('register') }}"class="nav-link" >Inscription</a>
                        </li>
                      @endif
                  @endauth
                @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <div
   style=
"position: relative;
text-align: center;
padding-top: 90px;
margin-bottom:30px;
min-height:100%;"
    class="container ">
 <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted"  href="{{url('/shop')}}">Tout</a>
            @foreach (App\Models\Category::all() as $category)

            <a class="p-2 text-muted" href="{{ route('shop.index', ['categories' =>
            $category->slug])}}">{{ $category->name }}</a>
            @endforeach


        </nav>
      </div>


  <div class="row mb-2">
      <div class="col-md-12">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Catégorie 1</strong>
            <h5 class="mb-0">{{ $product->title }}</h5>
            <hr>
            <p class="mb-auto text-muted">{{ $product->description }}</p>
            <strong class="mb-auto font-weight-normal text-secondary">{{ $product->getPrice() }}</strong>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="w-20" src="/productimage/{{$product->image}}" alt="">
          </div>
        </div>
      </div>
  </div>
</div>

</div>

@include('user.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="/assets/js/custom.js"></script>
  <script src="/assets/js/owl.js"></script>
  <script src="/assets/js/slick.js"></script>
  <script src="/assets/js/isotope.js"></script>
  <script src="/assets/js/accordions.js"></script>



  <script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }


  </script>
