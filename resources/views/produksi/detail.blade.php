@extends('layout.template')

@section('title', 'Produksi')

<link rel="stylesheet" href="{{ asset('css/produksi.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="fw-bolder text-capitalize">{{ $product->productName }}</h2>
        <img class="img-fluid" src="{{ asset('storage/' . $product->foto) }}" alt="">
        <h5 class="text-capitalize">Jumlah: {{ $product->quantity }} pcs</h5>
        <div class="d-flex">
            <a class="btn btn-success" href="{{ url('/produksi/edit/' . $product->id) }}" role="button">Edit</a>
            <a class="btn btn-danger mx-2" href="{{ url('/produksi/hapus/' . $product->id) }}"
                onclick="return confirm('Apa kamu yakin?')" role="button">Hapus</a>
        </div>
    </div>
@endsection
