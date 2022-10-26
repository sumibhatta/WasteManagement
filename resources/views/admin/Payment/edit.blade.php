@extends('admin.layouts.master')

@section('admincontent')

<div class="col-12 col-md-6 col-lg-6 offset-md-2 offset-lg-3 mt-5">
    <div class="card">
        <div class="card-header justify-content-center">
            <h3>Update Payment</h3>
        </div>

        <form action="{{ route('admin.payment.update', $itemWithId->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Name Starts -->
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user-circle"></i>
                            </div>
                        </div>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $itemWithId->name }}">
                    </div>
                </div>
                <!-- Name ENds -->

                
                {{-- Garbage Type --}}

                    <div class="form-group">
                        <label>Garbage Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-trash-alt"></i>
                                </div>
                            </div>
                            <select id="garbagetype" class="custom-select" name="garbagetype"
                                class="form-control garbagetype">
                                <option selected value="">Select</option>
                                <option value="Household">Household</option>
                                <option value="Institutional">Institutional</option>
                                <option value="Bio-Medical">Bio-Medical</option>
                                <option value="Industry/Factory">Industry/Factory</option>
                                <option value="Agriculture/Foresty">Agriculture/Foresty</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                {{-- Garbage Type --}}
                

                <!-- Button Starts -->
                <div class="row mb-0 form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Pay') }}
                    </button>
                </div>
            </div>
            <!-- Button ENds -->
        </form>
    </div>
</div>


@endsection