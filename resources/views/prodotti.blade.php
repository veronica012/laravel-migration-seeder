@extends('layouts.app')

@section('page-title', 'Products')

@section('content')
    <div class="container">
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Clothing Item</th>
                    <th scope="col">Color</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
