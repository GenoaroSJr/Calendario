<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Cover Template · Bootstrap v5.1</title>

    <!-- CSS -->
    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/cover.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0 text-info">Calendar APP</h3>
            </div>
        </header>

        <main class="px-3">
            <div class="container-fluid">
                <h1 class="text-info">Register your future tasks here:</h1>
            </div>

            <div class="container-fluid">
                <nav>
                    <ul class="pagination pagination-sm justify-content-center">
                        <li class="page-item"><a class="page-link text-white bg-dark" href="/now">Now</a></li>
                        <li class="page-item"><a class="page-link text-white bg-dark" href="/events">Events</a>
                        </li>
                        <li class="page-item"><a class="page-link text-white bg-dark" href="/register">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="container">
                @yield('main')
            </div>

        </main>

        <footer class="mt-auto text-white-50">
            <p>Application developed by: <a href="https://github.com/GenoaroSJr" class="text-info">Genoaro S.
                    Jr.</a>
            </p>
        </footer>
    </div>

</body>
<script>
    var now = new Date();
    window.setInterval(printTime, 1000); // chama essa função a cada 1 segundo

    function printTime() {
        now.setSeconds(now.getSeconds() + 1);

        var time = document.getElementById('time');
        time.innerHTML = now.getHours().toString().padStart(2, '0') + ":" +
            now.getMinutes().toString().padStart(2, '0') + ":" +
            now.getSeconds()
            .toString().padStart(2, '0');
    }
</script>

</html>
