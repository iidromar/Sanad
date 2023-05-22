@extends('layouts')
@section('content')

    <div class="content-wrapper">
        <div class="row">
    <div style="position: relative; left: 28px; top: 28px;" class="col-md-6 col-xl-11">
        <div class="card bg-primary text-white mb-3">
            <div class="card-header">Scenario</div>
            <div class="card-body">
                <p class="card-text">{{ $final_response }}</p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
