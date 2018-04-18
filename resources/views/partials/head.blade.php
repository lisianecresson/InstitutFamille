        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Institut d'études de la famille</title>
        
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <!-- styles -->
        <link href="{{ asset ("css/font-awesome.css") }}" rel="stylesheet">
        <link href="{{ asset ("css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset ("css/animate.min.css") }}" rel="stylesheet">
        <link href="{{ asset ("css/owl.carousel.css") }}" rel="stylesheet">
        <link href="{{ asset ("css/owl.theme.css") }}" rel="stylesheet">
        <!-- theme stylesheet -->
        <link href="{{ asset ("css/style.blue.css") }}" rel="stylesheet" id="theme-stylesheet">
        
        <!-- your stylesheet with modifications -->
        <link href="{{ asset ("css/custom.css") }}" rel="stylesheet">
        <link href="{{ asset (mix("css/app.css")) }}" rel="stylesheet">
        
        <script src="{{ asset("js/respond.min.js") }}"></script>
        
        <link rel ="shortcut icon" href="favicon.png">

        <!-- Scripts -->
        <script>
                window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
                ]); ?>
        </script>