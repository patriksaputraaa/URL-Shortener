@extends('layouts/main')

@section('content')
    <div class="row sub-header">
        <div class="col-lg-12">
            <h5>Quick Access</h5>
        </div>
    </div>
    <div class="row item-quick-access">
        <div class="col-lg-3">
            <div class="card" style="width: auto;">
                <div class="card-body">
                    <a href="/links/add-link"><i class="bi bi-link-45deg" style="font-size: 24px;"></i>Short your link!</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: auto;">
                <div class="card-body">
                    <a href="" class="stretched-link"><i class="bi bi-question-circle" style="font-size: 24px;"></i>Help and Support</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row sub-header">
        <div class="col-lg-12">
            <h5>New Updates</h5>
        </div>
    </div>
    @include('components.newsCard')
@endsection
