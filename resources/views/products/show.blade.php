@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0">👁️ Detail Produk</h3>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200" class="text-muted">ID Produk</th>
                        <td><span class="badge bg-primary">{{ $product->id }}</span></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Nama Produk</th>
                        <td><h5>{{ $product->name }}</h5></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Deskripsi</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th class="text-muted">Harga</th>
                        <td>
                            <span class="badge bg-success fs-5">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                        </td>
                    </tr>
                </table>
                
                <div class="d-flex gap-2 mt-4">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">
                        ✏️ Edit Produk
                    </a>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        ⬅️ Kembali ke Daftar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection