@extends('admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Transaksi</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Transaksi</div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                             <div class="form-group">
                                <label for="">Nama Barang</label>
                                <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror" disabled>
                                    @foreach ($barang as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                    @endforeach
                                </select>
                                @error('id_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah barang</label>
                                <input type="text" name="jumlah" value="{{$transaksi->jumlah}}" class="form-control @error('jumlah') is-invalid @enderror" disabled>
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Total Harga </label>
                                <input type="text" value="{{$transaksi->total_bayar}}" name="total_bayar"
                                    class="form-control @error('total_bayar') is-invalid @enderror" disabled>
                                @error('total_bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
