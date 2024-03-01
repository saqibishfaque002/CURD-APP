@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('orders.update', $editData->id) }}" method="POST">@csrf
            @method('PUT')
            <div class="form-group mb-1">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{ $editData->name }}">
            </div>
            <div class="form-group mb-1">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $editData->email }}">
            </div>
            <div class="form-group mb-1">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" name="contact" id="contact" aria-describedby="contactHelp" placeholder="Enter contact" value="{{ $editData->contact }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
