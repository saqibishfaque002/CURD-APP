@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('orders.store') }}" method="POST">@csrf
            <div class="form-group mb-1">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter name">
            </div>
            <div class="form-group mb-1">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group mb-1">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" name="contact" id="contact" aria-describedby="contactHelp" placeholder="Enter contact">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
