

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
            <h1 class="text-center title">Ajouter un produit</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button type="button" class="close" data-bs-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px;">
                    <label>Nom</label>

                    <input class="text-dark" type="text" name="title" placeholder="Nom du produit" required="">
                </div>

                <div style="padding:15px;">
                    <label>Description</label>

                    <input class="text-dark" type="text" name="des" placeholder="Description du produit" required="">
                </div>


                <div style="padding:15px;">
                    <label>Prix</label>

                    <input min="0" class="text-dark" type="number" name="price" placeholder="Prix du produit" required="">
                </div>



                <div style="padding:15px;">
                    <label>Prix promotionnel</label>

                    <input class="text-dark" type="number" name="dis_price">
                </div>


                <div style="padding:15px;">
                    <label>Quantité</label>

                    <input class="text-dark" type="number" min="0" name="quantity" placeholder="Quantité du produit" required="">
                </div>

                <div style="padding:15px;">
                    <label>Categorie</label>

                   <select class="text-dark" name="category" required="" id="">
                       <option value="" selected="">Ajouter une categorie</option>

                       @foreach($category as $category)
                       <option value="{{$category->name}}">{{$category->name}}</option>
                       @endforeach
                   </select>

                </div>

                <div style="padding:15px;">
                    <label for="">Image</label>
                    <input required="" type="file" name="image">
                </div>

                <div style="padding:15px;">
                   <input value="Ajouter" class="btn btn-success" type="submit" >
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
