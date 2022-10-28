@extends('admin.layouts.master')

@section('admincontent')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-header justify-content-center">
                <h3>Payments</h3>
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
                                <th scope="col">Status</th>
                                <th scope="col">Garbage Type</th>
                                <th scope="col">Last Paid</th>
                                <th scope="col">Edit</th>
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
                                    <td>{{ $item->status }}</td>
                                    <td scope="col">{{ $item->garbagetype }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    @if ($item->status == "0")
                                    <td> <a class="btn btn-primary disabled" href="{{ route('admin.payment.edit', $item->id) }}">New Bill</a> </td>
                                    @else
                                    <td> <a class="btn btn-primary" href="{{ route('admin.payment.edit', $item->id) }}">New Bill</a> </td>
                                        
                                    @endif

                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
