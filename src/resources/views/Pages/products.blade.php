<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    @include('Partials.header')


    <div class="container-fluid">
        <div class="row">

            <div class="col-3 mt-2">
                @include('Partials.filter')
            </div>

            <div class="col-9 mt-2">
                <div class="row d-flex flex-row">
                    @foreach ($items as $item)
                    <div class="col-md-4 mt-2 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-actions"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                            </div>
                            <div class="card-body bg-light text-center">
                                <div class="mb-2">
                                    <h6 class="font-weight-semibold mb-2">
                                        <a href="{{ route('Products.show', $item->id) }}" class="text-default mb-2" data-abc="true">{{"$item->brand $item->model"}}</a>
                                    </h6>
                                    @foreach ($categories as $category)
                                    @if ($item->category_id == $category->id)
                                    <a href="/?category={{$category->id}}" class="text-muted" data-abc="true">
                                        {{$category->category}}
                                    </a>
                                    @endif
                                    @endforeach
                                </div>
                                <h3 class="mb-0 font-weight-semibold">{{$item->price}} EUR</h3>
                                <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                                <div class="text-muted mb-3">34 reviews</div> <button type="button" class="btn btn-secondary">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>

        </div>
    </div>

    @include('Partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
