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
                            <th scope="col" id="test">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Physical Address</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldata as $item)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td> <a class="btn btn-primary"
                                        href="{{ route($page_name . '.edit', $item->id) }}">Edit</a> </td>
                                <td> <a type="button" data-toggle="modal"
                                        data-target=".DeleteButton"class="btn btn-danger text-white delete"
                                        id="{{ $item->id }}">Delete</a>

                                    <!-- Modal -->
                                    <div class="modal fade DeleteButton" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered modal-lg">
                                            <form id="deleteModel" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="fas fa-times" data-dismiss="modal"
                                                            aria-label="Close"></button>
                                                        <h2 class="modal-title text-danger text-center"
                                                            id="exampleModalLabel">Confirm Delete</h2>
                                                        <p class="text-center">Are you sure you want to delete?</p>

                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-primary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
{{-- <button onclick="myFunction()">Try it</button> --}}

@push('scripts')
    <script type="text/javascript">
        //  function myFunction()
        //           {
        //                 alert("Alert")
        //             }


        $(document).ready(function() {

            $('.delete').on('click', function() {
                const id = this.id;
                $('#deleteModel').attr('action', '{{ route($page_name . '.destroy', '') }}' + "/" + id);
            });

        });
    </script>
@endpush
