@extends('layout.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('kategoris.store') }}" method="POST">
    @csrf
  
    <div class="row">

        <div class="col-md-6">
        <div class="form-group">
            <strong >Kode</strong>
            <input  type="text" name="kode" class="form-control" placeholder="Kode" >
          
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            <strong >Nama</strong>
            <input  type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        </div>


    <div class="text-right" >
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a class="btn btn-primary" href="{{ route('kategoris.index') }}"> Back</a>

    </div>
   
</form>
@endsection