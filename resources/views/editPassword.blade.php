@extends('layouts/main')
@section('content')
    <div class="card">
        <div class="card-body">
            @if (@session('alert'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('alert') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <h5>Edit your password here:</h5>
            <br>
            <form action="/update-password" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="text" name="newpassword" class="form-control" id="newpassword" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm New Password</label>
                    <input type="text" name="confirmpassword" class="form-control" id="confirmpassword" required>
                </div>
                <button type="submit" class="btn btn-primary d-grid">SIMPAN</button>
            </form>
        </div>
    </div>
@endsection
