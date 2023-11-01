@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ROST</h3>
                    </a>
                </div>
                <div class="card-body">
                    <p>Your admin request is pending.Check back soon...</p>
                </div>
                <a href="{{ route('home') }}"><button type="submit" class="btn btn-primary py-3 w-100 mb-4">Back to Site</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
