@extends('admin')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Transaksi</h1>
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
                    <div class="panel-heading">

                        <a href="{{ route('transaksi.create') }}" class="btn btn-default">Tambah
                            Transaksi</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama barang</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($transaksis as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->barang->nama_barang }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>{{ $data->total_bayar }}</td>
                                        <td>
                                            <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('transaksi.edit', $data->id) }}"
                                                    class="btn btn-default">Edit</a>
                                                <a href="{{ route('transaksi.show', $data->id) }}"
                                                    class="btn btn-default">Show</a>
                                                <button type="submit" class="btn btn-danger delete-confirm">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
