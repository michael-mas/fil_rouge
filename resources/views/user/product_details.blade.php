<!DOCTYPE html>
<html lang="en">
    <base href="/public">
  <head>

  @include('user.css')
  <style>
      body{
        background-color:rgb(236, 244, 244)
      }
  </style>
  </head>

  <body>
    @include('user.navbar')

    <div
    class="container"
    style="
    position: relative;
	text-align: center;
	padding-top: 90px;">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title font-weight-bold">{{$product->title}}</h3>
                <h6 class="card-subtitle mb-2">{{$product->slug}}</h6>
                <hr class="mb-3">
                @if(session()->has('message'))

                <div class="alert alert-success">

                <button type="button" class="close" data-bs-dismiss="alert">x</button>

                {{session()->get('message')}}

                </div>

                @endif
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center"><img src="/productimage/{{$product->image}}" class="img-fluid img-responsive border"></div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <h2 class="font-weight-bold  box-title mt-5">Description de produit</h2>
                        <p class="mb-2">{{$product->description}}</p>

                        <hr>

                        <div class="mt-3 mb-3 d-flex flex-row justify-content-center align-items-center">
                        @if($product->discount_price!=null)

                        <h6 class="mr-5" style="color: red">
                         Promo
                         <br>
                         {{$product->discount_price}}€
                      </h6>
                        <h6 style="text-decoration:line-through; color: rgb(37, 15, 97);">
                         Prix
                         <br>
                         {{$product->price}}€
                        </h6>

                        @else

                        <h6 style="color: rgb(37, 15, 97)">
                         Prix
                         <br>
                         {{$product->price}}€
                      </h6>

                         @endif
                        </div>
                        <hr>
                        <h1 class="mb-2">Ajouter au panier</h1>
                        <form  action="{{url('add_cart',$product->id)}}" method="POST">

                            @csrf

                              <div class="row d-flex justify-content-center">

                                <div class="col-md-1">
                                    <input style="height:38px; width: 60px; border-radius:10px"  type="number" name="quantity" value="1" min="1">
                                </div>
                                <div  class="col-md-2">


                              <input class="btn btn-danger btn-rounded text-dark" type="submit" value="🛒+">
                            </div>
                            </div>
                          </form>
                        <hr class="mt-2">
                        <p><i class="mt-2 mb-2 fa fa-check text-success"></i>Viande halal</p>
                        <hr>
                        <h2 class="font-weight-bold box-title mt-3">Recettes</h2>
                        <ul class="list-unstyled">
                            <li><i class="mt-4 fa fa-cutlery text-success mr-1"></i><a href="https://www.auxdelicesdupalais.net/boeuf-bourguignon-sans-alcool-facile.html"><i class="text-success"></i>Boeuf bourguignon Halal</li></a>
                            <li><i class="mt-4 fa fa-cutlery text-success mr-1 mb-4"></i><a href="https://www.topsante.com/nutrition-et-recettes/recettes/boeuf-saute-aux-pruneaux-et-a-la-coriandre"><i class="text-success"></i>Boeuf halal sauté aux pruneaux et à la coriandre</li></a>
                        </ul>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <hr>
                        <h3 class="box-title mt-5 mb-3 font-weight-bold ">Infos générales</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-primary table-striped table-product">
                                <tbody class="border">
                                    <tr>
                                        <td width="390" class=" font-weight-bold">Poid</td>
                                        <td >600g</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold" width="390">Taux gras</td>
                                        <td  >5%</td>
                                    </tr>
                                    <tr>
                                        <td class=" font-weight-bold" >Origine</td>
                                        <td >France</td>
                                    </tr>
                                    <tr>
                                        <td class=" font-weight-bold" >Categorie</td>
                                        <td >C</td>
                                    </tr>
                                    <tr>
                                        <td class=" font-weight-bold" >Stock</td>
                                        <td >{{$product->quantity}}</td>
                                    </tr>
                                </tbody>
                            </table>
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
