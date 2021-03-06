<@extends('layout.master')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('pakets.create') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Paket</a>
           <hr>
           <div class="card">
               <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('message') }}
                    </div>
                </div>
                @elseif (session('delete'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('delete') }}
                    </div>
                </div>
                @endif
           <table id="table" class="table table-striped table-bordered table-md">
               <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Action</th>
                   
                </tr>
               </thead>
               <tbody>
                @foreach ($pakets as $paket)
                <tr> 
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $paket->nama }}</td>
                    <td>{{ $paket->nominal }}</td>
                   
                    
                    <td>
                        <a href="{{route('pakets.edit', $paket->id)}}" class="btn btn-outline-warning">Edit</a>
                        <a href="{{route('pakets.delete', $paket->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Delete</a>
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
@endsection

<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
