
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        .title{
            color:white;
            font-size: 40px;
            padding-bottom: 40px;
        }

        label{
            display: inline-block;
            width: 200px;
        }

        .div_center{
            text-align: center;
            padding-top: 40px;
        }
    </style>
  </head>
  <body>

    @include('admin.sidebar')
      <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div_center">
            <h1 class="text-center title">Modifier un produit</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button type="button" class="close" data-bs-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('/update_product_confirm', $product->id)}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px;">
                    <label>Nom</label>

                    <input class="text-dark" type="text" name="title" placeholder="Nom du produit" required="" value="{{$product->title}}">
                </div>

                <div style="padding:15px;">
                    <label>Description</label>

                    <input class="text-dark" type="text" name="des" placeholder="Description du produit" required="" value="{{$product->description}}">
                </div>


                <div style="padding:15px;">
                    <label>Prix</label>

                    <input min="0" class="text-dark" type="number" name="price" placeholder="Prix du produit" required="" value="{{$product->price}}" >
                </div>



                <div style="padding:15px;">
                    <label>Prix promotionnel</label>

                    <input class="text-dark" type="number" name="dis_price" required="" value="{{$product->discount_price}}">
                </div>


                <div style="padding:15px;">
                    <label>Quantité</label>

                    <input class="text-dark" type="number" min="0" name="quantity" placeholder="Quantité du produit" required="" value="{{$product->quantity}}">
                </div>

                <div style="padding:15px;">
                    <label>Categorie</label>

                   <select class="text-dark" name="category" required="" id="">
                       <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                          @foreach($category as $category)
                       <option value="{{$category->name}}">{{$category->name}}</option>
                       @endforeach

                   </select>

                </div>

                <div style="padding:15px;">
                    <label for="">Changer image</label>
                    <img class="mx-auto mb-3 mt-3" height="100" width="100" src="/productimage/{{$product->image}}" alt="">
                    <input  type="file" name="image" ">
                </div>

                <div style="padding:15px;">
                   <input value="Modifier" class="btn btn-success" type="submit" >
                </div>

            </form>

            </div>

            </div>
        </div>
          <!-- partial -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
