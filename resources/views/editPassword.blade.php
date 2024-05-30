@extends('layouts/main')
@section('content')
    <div class="card">
        <div class="card-body">
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
