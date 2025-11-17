@extends('layouts.app')

@section('title', isset($product) ? 'Edit Produk' : 'Tambah Produk')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    {{ isset($product) ? '✏️ Edit Produk' : '➕ Tambah Produk Baru' }}
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" 
                      method="POST">
                    @csrf
                    
                    <x-form-input 
                        label="Nama Produk" 
                        name="name" 
                        type="text"
                        :value="$product->name ?? ''"
                        :required="true"
                    />
                    
                    <x-form-input 
                        label="Deskripsi Produk" 
                        name="description" 
                        type="textarea"
                        :value="$product->description ?? ''"
                        :required="true"
                    />
                    
                    <x-form-input 
                        label="Harga (Rp)" 
                        name="price" 
                        type="number"
                        :value="$product->price ?? ''"
                        :required="true"
                    />
                    
                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-success btn-lg">
                            💾 {{ isset($product) ? 'Update Produk' : 'Simpan Produk' }}
                        </button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary btn-lg">
                            ❌ Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection