@extends('layouts/main')
@section('content')
    <div class="card">
        <div class="card-body">
            <input type="text" name="long-url" id="long-url-text">
            <a href="/links/add-link"><i class="bi bi-plus-square-fill"> Short it!</i></a>
        </div>
    </div>
    @if (@session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data berhasil disimpan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card table-data">
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Long URL</th>
                        <th>Short URL</th>
                        <th>Created at</th>
                        <th>Expires at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($links as $idx => $link)
                        <tr>
                            <td>{{ $idx + 1 }}</td>
                            <td>{{ $link->long_url }}</td>
                            <td>{{ $link->short_url }}</td>
                            <td>{{ $link->created_at }}</td>
                            <td>{{ $link->expires_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
