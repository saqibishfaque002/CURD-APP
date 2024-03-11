@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-end">
            <a class="btn btn-primary" href="{{ route('orders.create') }}">Add</a>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($ordersData->count() > 0)
                        @foreach ($ordersData as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->contact }}</td>
                            <td><a href="{{ route('orders.edit', $data->id) }}" class="btn btn-primary m-1">Edit</a>
                                <form action="{{ route('orders.destroy', ['order' => $data->id]) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary m-1">Delete</button>
                                </form>                                
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <h2>No orders added yet! </h2>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection