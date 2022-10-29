@extends('layouts.master')
@section('title', 'customer')

@section('content')

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{'home'}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Account Info</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{'home'}}">Dashboard</a></div>
                <div class="breadcrumb-item">Account Info</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">All About Account Info</h2>
            <p class="section-lead">
                You can adjust all Account Info here
            </p>

            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Jump To</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a href="#" class="nav-link active">General Info</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Change Driver</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <form id="setting-form">
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4>Account Info</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Account Info such as, site title, site description, address and so on.
                                </p>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Name</label>
                                    <div class="col-sm-6 col-md-9">
                                        <input type="text" name="site_title" class="form-control" id="site-title">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-description"
                                        class="form-control-label col-sm-3 text-md-right">Email</label>
                                    <div class="col-sm-6 col-md-9">
                                        <input type="email" class="form-control" name="email" id="site-description">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-whitesmoke text-md-right">
                                <button class="btn btn-primary" id="save-btn">Save Changes</button>
                                <button class="btn btn-secondary" type="button">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
