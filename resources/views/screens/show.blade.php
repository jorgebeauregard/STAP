<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Screen</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('slider/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('slider/css/full-slider.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
        <?php $i = 0; ?>
            @foreach ($screen->ads()->get() as $ad)
            @if($i == 0)
            <div class="item active">
                @else
                <div class="item">
                    @endif
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url({{Storage::url($ad->path)}});"></div>
                </div>
                <?php $i++; ?>
                @endforeach
            </div>

        </header>

        <!-- jQuery -->
        <script src="{{asset('slider/js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('slider/js/bootstrap.min.js')}}"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
