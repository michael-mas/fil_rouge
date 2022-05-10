<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2 class="text-center mt-5">
            Nos derniers <span>produits</span>
          </h2>
       </div>

       @if(session()->has('message'))

       <div class="alert alert-success">

       <button type="button" class="close" data-bs-dismiss="alert">x</button>

       {{session()->get('message')}}

       </div>

       @endif
       <div class="row">


          @foreach($data as $product)
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{url('product_details',$product->id)}}" class="option1">
                      Détails produit
                      </a>
                      <a href="" class="option2">
                      Recettes
                      </a>

                      <form  action="{{url('add_cart',$product->id)}}" method="POST">

                        @csrf

                          <div class="row">

                            <div class="col-md-4">
                                <input style="width: 60px"  type="number" name="quantity" value="1" min="1">
                            </div>
                            <div  class="col-md-4">
                          <input class="option1" type="submit" value="Ajouter au panier">
                        </div>
                        </div>
                      </form>
                   </div>
                </div>
                <div class="img-box">
                   <a href="#"><img class="img-fluid" src="/productimage/{{$product->image}}" alt=""></a>
                </div>
                <div class="detail-box">
                   <h5>
                      {{$product->title}}
                   </h5>

                   @if($product->discount_price!=null)

                   <h6 style="color: red">
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
             </div>
          </div>
          @endforeach


    </div>
    <div class="d-flex justify-content-center">
       {!! $data->links() !!}

   </div>
 </section>


      </div>
    </div>
  </div>

  @include('admin.script')
