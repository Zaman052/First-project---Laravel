<html>
<head>
<script src="{{asset('js/app.js')}}">
</script>
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="image">
<img src="{{url('images/Eagle.png')}}" alt="">
</div>
                   
<div class="content">
@section('content')
@show
</div>
</body>
</html>