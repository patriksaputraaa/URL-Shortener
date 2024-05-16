@extends('layouts.main')

@section('title', 'Add New Link')
@section('content')
    <div class="card">
        <div class="card-header">Short your very long url here:</div>
        <div class="card-body">
            {{-- enctype="multipart/form-data"--> untuk form jika ada gambar biar support --}}
            <form action="/links/saveLink" method="post">
                @csrf
                <div class="form-group">
                    <label>Short URL</label>
                    <input type="text" name="short_url" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Long URL</label>
                    <input type="text" name="long_url" class="form-control" required>
                </div>
                <div class="form-group">
                    <select name="test" id="" class="form-control">
                        <option value="0">>--Pilih Genre--<</option>
                        <option value="Action">Action</option>
                        <option value="Comedy">Comedy</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="file" name="gambar" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection