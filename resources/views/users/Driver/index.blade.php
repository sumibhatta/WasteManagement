@extends('layouts.master')

@section('title', 'Driver')

@section('content')
<section class="section">
<div class="section-header">
    <div class="section-header-back">
        <a href="{{'home'}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Driver This Week</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{'home'}}">Dashboard</a></div>
        <div class="breadcrumb-item">Driver Info</div>
    </div>
</div>
<div class="card mt-5 justify-content-center">
    <div class="card-body">
        <div class="d-inline-flex">
            <div class="user-item p-5">
                <img alt="image" src="assets/img/avatar/avatar-2.png" class="img-fluid w-50">
                <div class="user-details">
                    <div class="user-name">Kusnaedi</div>
                    <div class="text-job text-muted">Main Driver</div>
                    <div class="user-cta">
                        <button class="btn btn-primary btn-block call-btn">Call</button>
                    </div>
                </div>
            </div>
            <div class="user-item p-5">
                <img alt="image" src="assets/img/avatar/avatar-2.png" class="img-fluid w-50">
                <div class="user-details">
                    <div class="user-name">Kusnaedi</div>
                    <div class="text-job text-muted">Main Driver</div>
                    <div class="user-cta">
                        <button class="btn btn-primary btn-block call-btn">Call</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
