<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DW Shortener</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CDD Datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    {{-- CSS Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- primer1 terang = #8bc44c
        primer2 gelap = #045c34
        sekunder = #00a54f --}}
    {{-- CSS Local Public --}}
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</head>

<body>
    <div class="row container-fluid full-height-container">
        {{-- LEFT SECTION --}}
        <div class="col-lg-2 left-section">
            <div class="row side-profile">
                <div class="side-logo">
                    <h3>DuWa Shortener</h3>
                </div>
                <div class="side-user">
                    <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="Avatar" class="user-avatar">
                    <h5>{{ Auth::user()->username }}</h5>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <hr>
            </div>
            @include('layouts.sidenavs')
            <div class="row side-footer">
                <p>Template by Patrik - 2024</p>
            </div>
        </div>

        {{-- RIGHT SECTION --}}
        <div class="col-lg-10 right-section bg-light">
            <header class="row head-section align-items-center justify-content-center">
                <div class="col-lg-2 nav align-items-center">
                    <ul class="nav justify-content-lg-left">
                        <li class="nav-item">
                            <h3 class="nav-link active" href="#">{{ strtoupper($key) }}</h3>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10 navbar">
                    <ul class="nav justify-content-end ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Notification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Upgrade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Night
                                Mode</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout" tabindex="-1">Log Out</a>
                        </li>
                    </ul>
                </div>
            </header>

            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
