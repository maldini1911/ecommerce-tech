<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>Sky Tech</title>
			<link rel="shortcut icon" href="{{url('/')}}/design/design/img/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
            <link rel="stylesheet" href="{{url('/')}}/design/design/css/jquery.bxslider.min.css" />
            <link rel="stylesheet" type="text/css" href="{{url('/')}}/design/design/css/pgwslider.css">
            <link rel="stylesheet" href="{{url('/')}}/design/design/css/font-awesome.min.css" />
            <link rel="stylesheet" href="{{url('/')}}/design/design/css/hover-min.css" />
            <link rel="stylesheet" href="{{url('/')}}/design/design/css/style.css" />

            <!--
                ======    \\  //  \\   //
                    //    \\ //   \\  //
                   //     \\//    \\ //
                 //       \\ \\    //
                //=====   \\ \\  //
            -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        </head>

        <body class="home">

<!-- start loading-->

<div class="load">

        <div class="container">

            <div class="img">

                <img class="img-responsive" src="{{url('/')}}/design/design/img/battery-icon.gif" width="250px" />

            </div>

        </div>

</div>

<!-- end loading-->
@include('sweet::alert')
