<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">Profile
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/profile/1/edit">Edit</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">Skill
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/skill/create">Create</a></li>
                    <li><a href="/skill/">List</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">Gig
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/gig/create">Create</a></li>
                    <li><a href="/gig/">List</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    @yield('content')



    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
</body>
</html>
