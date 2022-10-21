<div class="col-12 col-md-8 col-lg-8 offset-md-1 offset-lg-2 mt-5">
                <div class="card">
                    <div class="card-header justify-content-center">
                        <h3>{{ $page_title }}</h3>
                    </div>
                    <div class="card-body">
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email Address</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Physical Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($alldata as $item)
                        <tr>
                          <th scope="row">{{ $loop->index+1}}</th>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->address}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
                                   
</div>
