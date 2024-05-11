<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DW Shortener</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body {
        width: 100%;
    }
</style>

<body>
    <div class="row bg-dark">
        <header class="col-lg-12">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </header>
    </div>

    <article class="row">
        <aside class="col-lg-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a target="_self" class="nav-link {{ ($key == "dashboard") ? "active":""}}" id="v-pills-home-tab" role="tab"
                    href="/dashboard">Dashboard</a>
                <a target="_self" class="nav-link {{ ($key == "links") ? "active":""}}"  role="tab" href="/links">Links</a>
                <a target="_self" class="nav-link {{ ($key == "analytics") ? "active":""}} "  id="v-pills-messages-tab" role="tab"
                    href="/analytics">Analytics</a>
                <a target="_self" class="nav-link {{ ($key == "settings") ? "active":""}}" id="v-pills-settings-tab" role="tab"
                    href="/settings">Settings</a>
            </div>
        </aside>

        <section class="col-lg-10">
            <div class="row">
                @yield('content')
            </div>
        </section>
    </article>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        function updateUrl(tabName) {
            console.log("Updating URL to: ", "/" + tabName);
            window.history.pushState("", "", "/" + tabName);
        }
    </script>
</body>

</html>