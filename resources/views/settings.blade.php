@extends('layouts/main')
@section('content')
    @if (@session('alert'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('alert') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="/update-profile" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="text-center">
                    <img src="{{ asset('storage/avatars/' . Auth::user()->avatar) }}" alt="user-avatar"
                        class="user-avatar img-fluid" id="preview-avatar">
                    <div>
                        <label for="avatar" style="cursor: pointer;">
                            <input id="avatar" name="avatar" type="file" style="display: none;"
                                accept="image/png,image/jpeg" onchange="previewImage();">
                            <a href="#" onclick="document.getElementById('avatar').click();">Ubah gambar</a>
                        </label>
                        <script>
                            function previewImage() {
                                var file = document.getElementById("avatar").files;
                                if (file.length > 0) {
                                    var fileReader = new FileReader();

                                    fileReader.onload = function(event) {
                                        document.getElementById("preview-avatar").setAttribute("src", event.target.result);
                                    };

                                    fileReader.readAsDataURL(file[0]);
                                }
                            }
                        </script>
                    </div>
                </div>
                <label for="username">Username</label>
                <input type="text" name="username" value="{{ Auth::user()->username }}" class="form-control"
                    id="username">
                <br>
                <label for="email">Email </label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="email"
                    readonly>
                <br>
                <label for="email">Password </label>
                <input type="password" name="password" value="{{ Auth::user()->password }}" class="form-control"
                    id="password" readonly>
                <a href="/password" class="btn btn-primary d-grid mt-3">Ganti Password</a>
                <a href="/logout" class="btn btn-danger d-grid mt-3">Logout</a>
                <button type="submit" class="btn btn-primary d-grid mt-3 float-right">Save</button>
            </form>
        </div>
    </div>
@endsection
