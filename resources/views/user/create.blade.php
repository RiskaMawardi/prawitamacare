@extends('layout.master')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('simpan_user') }}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('name') class="text-danger" 
                        @enderror>Nama @error('name')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="email" type="name" name="name" value="{{ old('name') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('level') class="text-danger" 
                        @enderror>Level @error('level')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="level" id="level">
                          <option value disable>Pilih  Level</option>
                          <option value="admin">Admin</option>
                          <option value="bendahara">Bendahara</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('password') class="text-danger" 
                        @enderror>Password @error('password')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="password" type="password" name="password" value="{{ old('password') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('email') class="text-danger" 
                        @enderror>Email @error('email')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control">
                      </div>
                    </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('user') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush
