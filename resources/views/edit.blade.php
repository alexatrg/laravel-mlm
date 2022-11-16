@extends('template')

@section('title', 'MLM')

@section('content')

    <div class="container m-3">
        <a href="/mlm" class="btn btn-primary mb-3">Kembali</a>

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        
        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif

        <form action="/mlm/update" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">ID</span>
                <input type="text" class="form-control" name="id" value="{{ $mlm->id }}" readonly required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Name</span>
                <input type="text" class="form-control" name="name" value="{{ $mlm->name }}" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Address</span>
                <textarea class="form-control" name="address" required>{{ $mlm->address }}</textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Phone</span>
                <input type="text" class="form-control" name="phoneNumber" value="{{ $mlm->phoneNumber }}" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Upline</span>
                <input type="text" class="form-control" name="upline_id" value="{{ $upline_data->name }}" required readonly>
            </div>
             <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Downline</span>
                <input type="text" class="form-control" name="downline_id" value="{{ $mlm->downline_list }}" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>

@endsection