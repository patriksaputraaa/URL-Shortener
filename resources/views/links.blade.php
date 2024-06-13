@extends('layouts/main')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/links/add-link" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="long_url" id="long-url-text">
                <button type="submit"><i class="bi bi-plus-square-fill"> Short it!</i></button>
            </form>
        </div>
    </div>
    @if (@session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alert') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5>Your links but with API</h5>
            <input type="text" name="keywords" id="keywords">
            <table id="" class="" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Long URL</th>
                        <th>Short URL</th>
                        <th>Created at</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($links as $idx => $link)
                        <tr>
                            <td>{{ $idx + 1 }}</td>
                            <td>{{ $link->long_url }}</td>
                            <td>duwa.id/{{ $link->short_url ? $link->short_url : 'Tidak tersedia' }}</td>
                            <td>{{ $link->created_at }}</td>
                            <td>
                                <a href="/links/edit/{{ $link->short_url }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/links/delete/{{ $link->short_url }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card table-data">
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Long URL</th>
                        <th>Short URL</th>
                        <th>Created at</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($links as $idx => $link)
                        <tr>
                            <td>{{ $idx + 1 }}</td>
                            <td>{{ $link->long_url }}</td>
                            <td>duwa.id/{{ $link->short_url ? $link->short_url : 'Tidak tersedia' }}</td>
                            <td>{{ $link->created_at }}</td>
                            <td>
                                <a href="/links/edit/{{ $link->short_url }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/links/delete/{{ $link->short_url }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
