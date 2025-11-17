@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>📋 Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success btn-lg">
        ➕ Add New Product
    </a>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th width="50">ID</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th width="150">Harga</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><strong>{{ $product->name }}</strong></td>
                        <td>{{ Str::limit($product->description, 60) }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" 
                               class="btn btn-sm btn-info">👁️ View</a>
                            <a href="{{ route('products.edit', $product->id) }}" 
                               class="btn btn-sm btn-warning">✏️ Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3 text-muted">
    <small>Total: {{ $products->count() }} produk</small>
</div>
@endsection