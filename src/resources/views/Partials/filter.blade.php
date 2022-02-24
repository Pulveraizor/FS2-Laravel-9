<form action="{{route('Products.index')}}" method="GET">
    <div class="col mt-2">

        <div class="input-group input-group mb-3">
            <span class="input-group-text" for="search">Search</span>
            <input type="text" class="form-control" id="search" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="search">
        </div>
        <div class="brand p-2">
            <div class="heading d-flex justify-content-between align-items-center">
                <h6 class="text-uppercase">Brand</h6>
            </div>
            @foreach($brands as $brand)
            <div class="d-flex justify-content-between mt-2">
                <div class="form-check"> <input class="form-check-input" type="checkbox" value="{{$brand->brand}}" id="flexCheckDefault" name="brand"> <label class="form-check-label" for="flexCheckDefault">{{$brand->brand}}</label> </div>
            </div>
            @endforeach
        </div>
        <div class="type p-2 mb-2">
            <div class="heading d-flex justify-content-between align-items-center">
                <h6 class="text-uppercase">Category</h6>
            </div>
            
            @foreach($categories as $item)
            <div class="d-flex justify-content-between mt-2">
                <div class="form-check"> <input class="form-check-input" type="checkbox" value="{{$item->id}}" id="flexCheckDefault" name="category"> <label class="form-check-label" for="flexCheckDefault">{{$item->category}}</label> </div>
            </div>
            @endforeach
        </div>
        @include('Products.sort')
        <button class="btn btn-secondary col-12">Filter</button>
    </div>

</form>
