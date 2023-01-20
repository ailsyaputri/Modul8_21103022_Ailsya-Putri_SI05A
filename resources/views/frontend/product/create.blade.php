@extends('layouts.admin.master')
@section('title')
    Create New Product
@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="card p-3 rounded shadow-sm">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
                <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-list"></i>
                    List Product</a>
            </div>
        </div>
    </div>
@endsection
