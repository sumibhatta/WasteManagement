<div class="col-12 col-md-6 col-lg-6 offset-md-2 offset-lg-3 mt-5">
    <div class="card">
        <div class="card-header justify-content-center">
            <h3>Add a new {{ $page_name }}</h3>
            {{-- <h3>Add a new {{ substr(Route::current()->getName(), 0, -7) }}</h3> --}}
        </div>

        <form action="{{ route($page_name . '.store') }}" method="post" enctype="multipart/form-data">
            @csrf

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
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <!-- Name ENds -->

                <!-- Phone Number -->
                <div class="form-group">
                    <label>Phone Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input type="text" id="phone" name="phone" class="form-control phone-number">
                    </div>
                </div>
                <!-- Phone Number Ends -->

                <!-- Email -->
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" required>
                    </div>
                </div>
                <!-- Email Ends -->

                <!-- Address Starts -->
                <div class="form-group">
                    <label>Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                        </div>
                        <input type="text" id="address" name="address" class="form-control address">
                    </div>
                </div>
                <!-- Address ENds -->

                {{-- Garbage Type --}}
                @if ($page_name == 'admin.customer')
                <div class="form-group">
                    <label>Garbage Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>
                        <select id="garbagetype" class="custom-select" name="garbagetype" class="form-control garbagetype">
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
                @endif
                {{-- Garbage Type --}}

                <!-- Button Starts -->
                <div class="row mb-0 form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
            <!-- Button ENds -->
        </form>
    </div>
</div>
