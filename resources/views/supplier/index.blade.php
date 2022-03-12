@extends('admin')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Supplier</h1>
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
                    <div class="card-header">

                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="{{ route('supplier.create') }}" class="btn btn-default">Tambah
                            Supplier</a>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>Nama Supplier</th>
                                                    <th>Aksi</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no=1; @endphp
                                @foreach ($supplier as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_supplier }}</td>
                                        <td>
                                            <form action="{{route('supplier.destroy',$data->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('supplier.edit',$data->id)}}" class="btn btn-default">Edit</a>
                                                <a href="{{route('supplier.show',$data->id)}}" class="btn btn-default">Show</a>
                                                <button type="submit" class="btn btn-danger delete-confirm">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- /.col-lg-6 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
