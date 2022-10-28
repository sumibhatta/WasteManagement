@extends('admin.layouts.master')

@section('admincontent')

<div class="col-12 col-md-6 col-lg-6 offset-md-2 offset-lg-3 mt-5">
    <div class="card">
        <div class="card-header justify-content-center">
            <h3>Create</h3>
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
                {{-- MOnth --}}
                <div class="form-group">
                    <label>Month</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user-circle"></i>
                            </div>
                        </div>
                        <select id="month" name="month" class="form-select rounded-0 custom-select form-control month">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="Decemeber">Decemeber</option>
                          </select>
                    </div>
                </div>
                
                  {{-- MOnth ENds --}}
                  {{-- Year --}}
                  <div class="form-group">
                    <label>Year</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-user-circle"></i>
                            </div>
                        </div>
                        <select id="year" name="year" class="form-select rounded-0 form-select rounded-0 custom-select form-control year">
                            @php
                              for($i= (date("Y") - 20); $i < (date("Y") + 5); $i++ ):
                              $year = $i;
                            @endphp

                            <option 
                            <?= $i == date('Y')? "selected" : '' ?>
                            >
                            <?= $i ?>
                            </option>
                              
                              @php
                              endfor;
                              @endphp
                          </select>
                    </div>
                </div>
                                          {{-- Year Ends --}}
                

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