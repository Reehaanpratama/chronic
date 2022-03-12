@extends('admin')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Barang</h1>
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
                    <div class="row">
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="{{ route('barang.create') }}" class="btn btn-default">Tambah
                            Barang</a>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Supplier</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga</th>
                                                    <th>Stok</th>
                                                    <th>Warna</th>
                                                    <th>Ukuran</th>
                                                    <th>Cover</th>
                                                    <th>Aksi</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no=1; @endphp
                                    @foreach ($barang as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->supplier->nama_supplier }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->harga }}</td>
                                        <td>{{ $data->stok }}</td>
                                        <td>{{ $data->warna }}</td>
                                        <td>{{ $data->ukuran }}</td>
                                        <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Cover"></td>
                                        <td>
                                            <form action="{{route('barang.destroy',$data->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('barang.edit',$data->id)}}" class="btn btn-default">Edit</a>
                                                <a href="{{route('barang.show',$data->id)}}" class="btn btn-default">Show</a>
                                                <button type="submit" class="btn btn-danger delete-confirm">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
