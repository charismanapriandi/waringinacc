<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/animation.css">
</head>

<body>
    @include('layouts.sideMenu')
    <div class="content-container">
        <nav>
            <p class="page-title text-center p-4">
                @yield('title')
            </p>
        </nav>
        @yield('content')
    </div>


    <script>
        const btnSidebar = document.querySelector('.btn-sidebar');
        const sidebar = document.querySelector('.sidebar-container');
        const btnClose = document.querySelector('.btn-close-sidebar');
        const content = document.querySelector('.content-container');

        btnSidebar.addEventListener('click', function(e) {
            btnSidebar.style.left = "220px";
            btnClose.style.left = "220px";
            sidebar.style.left = "0";
            btnSidebar.style.display = "none";
            content.style.paddingLeft = "220px";
            content.style.transition = "all .3s ease 0s";
        });
        btnClose.addEventListener('click', function(e) {
            btnSidebar.style.left = "0";
            btnClose.style.left = "0";
            sidebar.style.left = "-220px";
            btnSidebar.style.display = "block"
            content.style.paddingLeft = "0";
            content.style.transition = "all .3s ease 0s";

        });

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
