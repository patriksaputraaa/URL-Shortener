@extends('layouts.main')
@section('title', 'Edit Link')
@section('content')
    <div class="card">
        <div class="card-header">Edit your link here:</div>
        <div class="card-body">
            <form action="/links/update/{{ $link->short_url }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Short URL</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">duwa.id/</span>
                        </div>
                        <input type="text" name="short_url" class="form-control" value="{{ $link->short_url }}" required placeholder="Masukkan URL pendekmu" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="form-group">
                    <label>Long URL</label>
                    <input type="text" name="long_url" class="form-control" value="{{ $link->long_url }}" required placeholder="Masukkan URL panjangmu" id="long-url-text">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection