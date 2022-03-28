<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <style>

    </style>

    <style>
        body {
            font-family: Poppins;
        }

        .home-page {
            background-color: rgb(244, 248, 248);
        }

        .task {
            border-radius: 9px;
            border: none;
            min-height: 20vh;
            padding: 1.5rem;
            margin: 0.5rem;
        }

    </style>
</head>

<body class="antialiased">
    <div class="">
        <div class="home-page">
            <div class="container-fluid">
                {{-- Home-page head --}}
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col">
                            <nav class="navbar navbar-light bg-light">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#">
                                        <img src="https://avatars.githubusercontent.com/u/52756312?v=4" alt=""
                                            width="30" height="24" class="d-inline-block align-text-top">
                                        Taskman
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                {{-- Home-page body --}}
                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-3">
                        <div class="card task" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">todo tasks</h5>
                                content.</p>
                                <img src="https://cdni.iconscout.com/illustration/premium/thumb/task-management-2517534-2107801.png"
                                    class="card-img-top" alt="...">
                                <p class="card-text">With supporting text below as a natural lead-in to additional

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card task" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
