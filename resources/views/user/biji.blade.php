@extends('layouts.app')
@section('content')
    <div class="container row justify-content-center">
        <div class="col-5">
            <div class="card">
                <h2 class="card-title pt-4 px-5">Paket Bijian</h2>
                <div class="card-body">

                    <form action="{{ route('pktbiji') }}" method="POST" id="orderForm">
                        @csrf
                        <div class="mb-3">
                            <label for="product">Pilih Produk:</label>
                            <select name="product" id="product" onchange="calculateTotal()">
                                <option value="">Pilih Produk</option>
                                @foreach ($paket as $product)
                                    <option value="{{ $product->id }}" data-harga="{{ $product->harga }}">
                                        {{ $product->namapaket }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" name="jumlah" id="jumlah" onchange="calculateTotal()" min="1"
                                value="1">
                            <a href="{{ route('pktbiji') }}" class="btn btn-info">Tambah</a>
                        </div>
                        <a class="btn btn-danger ms-4" href="{{ route('homeusr') }}">Back</a>
                        <button type="submit" class="btn btn-primary ms-5">Order</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-title">
                    <h4>Daftar Item</h4>
                </div>
                <div class="card-body">
                    @foreach (barang as $item)
                        <ul id="daftarItem">
                            <li></li>
                        </ul>
                    @endforeach
                    <h5>Total Harga: <span id="totalHarga"></span></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
