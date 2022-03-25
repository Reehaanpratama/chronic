 @extends('layouts.app')
 @section('content')
 <div class="content-header">
 </div>
 @endsection
 @section('css')
 <style>
     @media print {
         #printPageButton {
             display: none;
         }
     }

 </style>
 @endsection
 @section('content')
 <div class="col-lg-12">
     <div class="card">
         <div class="card-header">
             <button id="printPageButton" onclick="window.print();" class="btn btn-primary"><i class="fa fa-print">Print</i></button>
         </div>
         <!-- /.card-heading -->
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table" border="1" id="example">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Tanggal</th>
                             <th>Status</th>
                             <th>Jumlah Harga</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $no = 1; ?>
                         @foreach ($pesanans as $pesanan)
                         <tr>
                             <td>{{ $no++ }}</td>
                             <td>{{ $pesanan->tanggal }}</td>
                             <td>
                                 @if ($pesanan->status == 1)
                                 Sudah Pesan
                                 {{-- & Belum dibayar --}}
                                 @else
                                 Sudah dibayar
                                 @endif
                             </td>
                             <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                             {{-- <td>
                                         <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                             </td> --}}
                         </tr>


                     </tbody>
                 </table>
             </div>
             <!-- /.table-responsive -->
         </div>
         <!-- /.card-body -->
     </div>

 </div>
 @endsection
