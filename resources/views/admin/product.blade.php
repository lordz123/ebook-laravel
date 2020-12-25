@extends('layouts.app')
@section('content')
<div class="container">
   <a href="{{route('store.product')}}"><button class="btn btn-success">Add Product</button></a>
    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>img</th>
            <th>img</th>
            <th>img</th>
            <th>img</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>status</th>
        </tr>
        <tr>
            <td>1</td>
            <td>img.png</td>
            <td>img.png</td>
            <td>img.png</td>
            <td>img.png</td>
            <td>dark</td>
            <td>A book cover the dark side</td>
            <td>$99</td>
            <td>NEW</td>
        </tr>
    </table>
</div>
@endsection
