@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{ $message }}
        </div>
    @endif
<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="cover">Image</label>
            <input type="file" name="cover" class="form-control-file" id="image1">
        </div>
        <div class="form-group">
            <label for="book">Book</label>
            <input type="file" name="book" class="form-control-file" id="book">
        </div>
        <div class="form-group">
          <label for="name">Name of the book</label>
          <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter email">
          <small id="nameHelp" class="form-text text-muted">Create a beautiful name for your book.</small>
        </div>
        <div class="form-group">
            <label for="description">Description of the book</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price of the book</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Enter the price of your ebook" aria-describedby="priceHelp">
            <small id="priceHelp" class="form-text text-muted">This price currency is US dollar ($).</small>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit"/>
      </form>
</div>
@endsection
