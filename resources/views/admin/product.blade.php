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
        <tr>
            <td>1</td>
            <td>img.png</td>
            <td>7ways.pdf</td>
            <td>dark</td>
            <td>A book cover the dark side</td>
            <td>$99</td>
            <td>new action button</td>
        </tr>
    </table>
</div>
@endsection
