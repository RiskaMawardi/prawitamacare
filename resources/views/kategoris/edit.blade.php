@extends('layout.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit kategori</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kategoris.index') }}"> Back</a>
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
  <br>
    <form action="{{ route('kategoris.update',$kategori->id) }}" method="POST">
        @csrf
   
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Kode</strong>
                    <input type="text" name="kode" value="{{ $kategori->kode }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nama </strong>
                    <input type="text" name="nama" value="{{ $kategori->nama}}" class="form-control">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
        </div>
    </form>
@endsection