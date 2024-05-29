@extends('layouts/main')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/edit-profile" method="post">
                @csrf
                <div class="text-center">
                    <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="user-avatar" class="user-avatar img-fluid" id="preview-avatar">
                    <div>
                        <label for="avatar" style="cursor: pointer;">
                            <input id="avatar" name="avatar" type="file" style="display: none;" accept="image/png,image/jpeg" onchange="previewImage();">
                            <a>Ubah gambar</a>
                        </label>
                        <script>
                            function previewImage() {
                                var file = document.getElementById("avatar").files;
                                if (file.length > 0) {
                                    var fileReader = new FileReader();
                                    
                                    fileReader.onload = function (event) {
                                        document.getElementById("preview-avatar").setAttribute("src", event.target.result);
                                    };
                                    
                                    fileReader.readAsDataURL(file[0]);
                                }
                            }
                        </script>
                    </div>
                </div>
                <label for="username">Username</label>
                <input type="text" name="username" value="{{ Auth::user()->username }}" class="form-control" id="username">
                <label for="email">Email </label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="email" readonly>
                <a href="/password" class="btn btn-primary d-grid mt-3">Ganti Password (soon)</a>
                <a href="/logout" class="btn btn-danger d-grid mt-3">Logout</a>
                <button type="submit" class="btn btn-primary d-grid mt-3 float-right">Save</button>
            </form>
        </div>
    </div>
@endsection
