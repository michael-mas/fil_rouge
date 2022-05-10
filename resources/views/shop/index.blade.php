@include('user.css')

   @include('user.navbar')



   <div
   style=
"position: relative;
text-align: center;
padding-top: 90px;
margin-bottom:30px;
min-height:100%;"
    class="container ">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between mt-2">
            <a class="btn btn-primary p-2"  href="{{url('/shop')}}">Tout</a>
            @foreach (App\Models\Category::all() as $category)

            <a class="btn btn-primary p-2" href="{{ route('shop.index', ['categories' =>
            $category->slug])}}">{{ $category->name }}</a>
            @endforeach


        </nav>
      </div>

<h1 class="mt-5 mb-5">{{$title}}</h1>

      <div class="row mb-2">
        @foreach ($products as $product)
          <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">
                    @foreach ($product->categories as $category)
                        {{ $category->name }}
                    @endforeach

                </strong>
                <h5 class="mb-0">{{ $product->title }}</h5>
                <p class="mb-auto text-muted">{{ $product->description }}</p>
                <img width="10%" src="/productimage/{{$product->image}}" alt="">
                <strong class="mb-auto font-weight-normal text-secondary">{{ $product->getPrice() }}</strong>
                <a href="{{ route('shop.show', $product->slug) }}" class="stretched-link btn btn-info">Voir l'article</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="{{ $product->image }}" alt="">
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</div>

    @include('user.footer')

    @include('user.script')
