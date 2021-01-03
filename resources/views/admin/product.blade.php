@extends('layouts.app')
@section('content')
<div class="container">
   <a href="{{route('product.create')}}"><button class="btn btn-success">Add Product</button></a><br><br>

    <table class="table table-striped ">
        <tr>
            <th>id</th>
            <th>img</th>
            <th>book</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>action</th>
        </tr>
        @foreach($book as $books)
        <tr>
            <td>{{$books->id}}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $books->cover }}" class="img-thumbnail" width="75" /></td>
            {{-- <td><a href="{{Storage::url($books->book)}}">{{$books->book}}</a></td> --}}
            <td><a href="{{URL::to('/')}}/books/{{$books->book}}">{{$books->book}}</a></td>
            <td>{{$books->name}}</td>
            <td>{{$books->description}}</td>
            <td>{{$books->price}}</td>
            <td>
                <a href="{{route('download',$books->book)}}" class="btn btn-primary">download</a>
                <button class="btn btn-primary">Edit</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
