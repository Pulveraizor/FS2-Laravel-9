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
    <div class="container mt-5">
        <table class="table table-borderless main">
            <thead>
                <tr class="head">
                    <th scope="col">Order ID</th>
                    <th scope="col">Created</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Total</th>
                    <th scope="col">Payment Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                <tr class="rounded bg-white">
                    <td class="order-color">{{$item['id']}}</td>
                    <td>{{$item['created']}}</td>
                    <td class="d-flex align-items-center">
                        <img src="https://thumbs.dreamstime.com/b/profile-placeholder-image-gray-silhouette-no-photo-person-avatar-default-pic-used-web-design-127393540.jpg" class="rounded-circle" width="20">
                        <span class="ms-3">
                            {{$item['name']}}
                        </span>
                    </td>
                    <td>{{"\${$item['total']}"}}</td>
                    <td>{{$item['status']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('Partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
