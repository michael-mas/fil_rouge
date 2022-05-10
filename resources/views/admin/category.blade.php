
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>

        .div_center{
            text-align: center;
            padding-top: 40px;
        }

        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
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

                @if(session()->has('message'))

                <div class="alert alert-success">

                <button type="button" class="close" data-bs-dismiss="alert">x</button>

                {{session()->get('message')}}

                </div>

                @endif

                <div class="div_center">

                    <h2 class="h2_font">Ajouter Categorie</h2>

                    <form action="{{url('/add_category')}}" method="POST">

                        @csrf

                        <input class="w-25 text-dark" type="text" name="category" placeholder="Entrer un nom de categorie">

                        <input class="w-25 text-dark" type="text" name="slug" placeholder="Entrer un nom de categorie">

                        <input class="w-25 text-dark" type="text" name="code" placeholder="Entrer un nom de categorie">

                        <input type="submit" class=" btn btn-primary" name="submit" value="Ajouter">




                    </form>
                </div>

                <table class="center">

                    <tr style="background-color: gray; text-align:center;">
                        <td class="border border-white">Nom Categorie</td>
                        <td class="border border-white">Action</td>
                    </tr>


                    @foreach($data as $data)
                    <tr>
                        <td  class="border border-white">{{$data->name}}</td>
                        <td  class="border border-white">
                            <a onclick="return confirm('Etes vous sur?')" href="{{url('delete_category',$data->id)}}" class="btn btn-primary">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>


          <!-- partial -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
