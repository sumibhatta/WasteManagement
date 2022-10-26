@extends('admin.layouts.master')

@section('admincontent')

<div class="col-12 col-md-8 col-lg-8 offset-md-1 offset-lg-2 mt-5">
    <div class="card">
        <div class="card-header justify-content-center">
            <h3>Salary</h3>
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
                            <th scope="col">Address</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Paid at</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($salarydata as $item)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->salary}}</td>
                                <td>{{ date('M d, Y',strtotime($item->updated_at))}}</td>
                                <td> <a class="btn btn-primary"
                                    href="{{ route('admin.salary.edit', $item->id) }}">Edit</a> </td>                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection

{{-- <button onclick="myFunction()">Try it</button> --}}

{{-- @push('scripts')
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
@endpush --}}
