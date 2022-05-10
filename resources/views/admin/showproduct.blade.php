

<!DOCTYPE html>
<html lang="en">
  <head>
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

        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        }
    </style>
  </head>
  <body>

    @include('admin.sidebar')
      <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper w-100">
                <div class="div_center">
                <h1 class="text-center title mb-5 mt-5">Modifier vos produits</h1>

                @if(session()->has('message'))

                <div class="alert alert-success">

                <button type="button" class="close" data-bs-dismiss="alert">x</button>

                {{session()->get('message')}}

                </div>

                @endif
                <table class="center">

                    <tr style="background-color: gray; text-align:center;">

                        <td  class="border border-white" style="padding:20px;">Nom</td>
                        <td  class="border border-white" style="padding:20px;">Description</td>
                        <td  class="border border-white" style="padding:20px;">Quantité</td>
                        <td  class="border border-white" style="padding:20px;">Categorie</td>
                        <td  class="border border-white" style="padding:20px;">Prix</td>
                        <td  class="border border-white" style="padding:20px;">Promotion</td>
                        <td  class="border border-white" style="padding:20px;">Image</td>
                        <td  class="border border-white" style="padding:20px;">Mettre à jour</td>
                        <td  class="border border-white" style="padding:20px;">Supprimer</td>
                    </tr>

                    @foreach($data as $product)
                    <tr align="center" style="background-color: black;">

                        <td class="border border-white" >{{$product->title}}</td>
                        <td class="border border-white" >{{$product->description}}</td>
                        <td class="border border-white" >{{$product->quantity}}</td>
                        <td class="border border-white" >{{$product->slug}}</td>
                        <td class="border border-white" >{{$product->price}}€</td>
                        <td class="border border-white" >{{$product->discount_price}}€</td>
                        <td class="border border-white" ><img class="w-20" src="/productimage/{{$product->image}}" alt=""></td>
                        <td class="p-4 border border-white">
                            <a class="btn btn-danger" href="{{url('update_product', $product->id)}}">Mettre à jour</a>
                        </td>
                        <td class="border p-4 border-white">
                            <a onclick="return confirm('Etes vous sur?')"  class="btn btn-danger" href="{{url('delete_product', $product->id)}}">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach

                </table>


                </div>
            </div>

        </div>




          <!-- partial -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
