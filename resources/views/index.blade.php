<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row text-center mt-4">
        <p class="lead">Check console.log about clientRequests</p>
    </div>
</div>

<script src="{{asset('axios/axios.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script>
    const pageRoutes = {
        'getPrice': '{{route('crypto.get_price')}}'
    }
</script>

<script src="{{asset('module/get_price.js')}}"></script>

</body>
</html>
