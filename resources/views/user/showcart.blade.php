<!DOCTYPE html>
<html lang="en">
    <base href="/public">
  <head>

  @include('user.css')
  <style>
      @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
  </style>

  </head>

  <body>
    @include('user.navbar')




        <div
        style=
    "position: relative;
    text-align: center;
    padding-top: 90px;
    margin-bottom:30px;"
         class="container ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card">
                <div class="card-body p-4">

                  <div class="row">

                    <div class="col-lg-7">
                      <h5 class="mb-3"><a href="#!" class="text-body"><i
                            class="fa fa fa-long-arrow-left me-2"></i>Revenir à la boutique</a></h5>
                      <hr>

                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                          <p class="mb-1">Panier</p>


                          <p class="mb-0">Tu as {{$count}} produits</p>
                          @if(session()->has('message'))

                          <div class="alert alert-success">

                          <button type="button" class="close" data-bs-dismiss="alert">x</button>

                          {{session()->get('message')}}

                          </div>

                          @endif
                        </div>
                        <div>
                          <p class="mb-0"><span class="text-muted">Trié par:</span> <a href=""
                              class="text-body">prix <i class="fa fa-angle-down mt-1"></i></a></p>
                        </div>
                      </div>
                      <form action="{{url('order')}}" method="POST">

                        @csrf
                        @php $sum = 0;  @endphp
                      @foreach ($cart as $carts)
                      @php $sum = $sum + $carts->price;  @endphp

                      <div class="card mb-3 mb-lg-0">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                              <div>
                                <img
                                src="/productimage/{{$carts->image}}"
                                  class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                              </div>
                              <div class="ms-3">
                                <h5>

                                    <input style="width:10px" type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">

                                    {{$carts->product_title}}

                                </h5>
                              </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                              <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">

                                    <input style="width:10px" type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">

                                    {{$carts->quantity}}

                                </h5>
                              </div>
                              <div style="width: 80px;">
                                <h5 class="mb-0">

                                    <input style="width:10px" type="text" name="price[]" value="{{$carts->price}}" hidden="">

                                    {{$carts->price}}€

                                </h5>
                              </div>
                              <a onclick="return confirm('Etes vous sur?')" href="{{url('deletecart',$carts->id)}}" style="color: #cecece;"><i class="fa fa-trash"></i></a>

                            </div>
                          </div>
                        </div>
                      </div>

                      @endforeach

                      <button class="btn btn-success mt-2">Confirmer commande</button>

                    </form>




                    </div>
                    <div class="col-lg-5">

                      <div class="card bg-secondary text-white rounded-3">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">Détail de la carte</h5>

                          </div>

                          <p class="small mb-2">Type de carte</p>
                          <a href="#!" type="submit" class="text-white"><i
                              class="fa fa-cc-mastercard fa-2x me-2"></i></a>
                          <a href="#!" type="submit" class="text-white"><i
                              class="fa fa-cc-visa fa-2x me-2"></i></a>
                          <a href="#!" type="submit" class="text-white"><i
                              class="fa fa-cc-amex fa-2x me-2"></i></a>
                          <a href="#!" type="submit" class="text-white"><i class="fa fa-cc-paypal fa-2x"></i></a>

                          <form class="mt-4">
                            <div class="form-outline form-white mb-4">
                              <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                                placeholder="titulaire de la carte" />
                              <label class="form-label" for="typeName">Titulaire de la carte</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                              <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                                placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                              <label class="form-label" for="typeText">Numero de carte</label>
                            </div>

                            <div class="row mb-4">
                              <div class="col-md-6">
                                <div class="form-outline form-white">
                                  <input type="text" id="typeExp" class="form-control form-control-lg"
                                    placeholder="MM/AAAA" size="7" id="exp" minlength="7" maxlength="7" />
                                  <label class="form-label" for="typeExp">Expiration</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-outline form-white">
                                  <input type="password" id="typeText1" class="form-control form-control-lg"
                                    placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                  <label class="form-label" for="typeText">Cvv</label>
                                </div>
                              </div>
                            </div>

                          </form>

                          <hr class="my-4">



                          <button type="button" class="btn btn-info btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                              <span>Total: {{$sum}} €</span>
                              <span>Commander <i class="fa fa-long-arrow-alt-right ms-2"></i></span>
                            </div>
                          </button>
                          <a class="nav-link" href="{{url('/paiement')}}">Produits
                          </a>

                        </div>
                      </div>

                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>




    @include('user.footer')


    @include('user.script')
    @include('admin.script')



  </body>

</html>
