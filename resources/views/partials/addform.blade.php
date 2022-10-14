<div class="col-12 col-md-6 col-lg-6 offset-md-2 offset-lg-3 mt-5">
                <div class="card">
                  <div class="card-header justify-content-center">
                    <h3>Add a new {{substr(Route::current()->getName(),0,-7)}}</h3>
                  </div>
                  <div class="card-body">
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

                    <!-- Image Starts -->
                    <div class="form-group">
                    <label>Upload an Image</label>
                    <div class="input-group">
                           <input class="dropify" name="file" type="file" multiple />
                      </div>
                    </div>
                    <!-- Image ends -->
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
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
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

                    <!-- Button Starts -->
                    <div class="row mb-0 form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Submit') }}
                                </button>
                        </div>
                  </div>
                  <!-- Button ENds -->
</div>


@section('scripts')

<script>
  $('.dropify').dropify();
</script>

@endsection