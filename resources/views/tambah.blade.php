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

        <form action="/mlm/store" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">ID</span>
                <input type="text" class="form-control" name="id" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Name</span>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Address</span>
                <textarea class="form-control" name="address" required></textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Phone</span>
                <input type="text" class="form-control" name="phoneNumber" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Upline</span>
                <select type="text" name="upline_id" id="upline_id" placeholder="Select Upline Name">
                    <option class="p-2" value="" disabled selected>Select Upline Name</option>
                    @foreach ($mlm as $p)
                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text col-1 text-body">Downline</span>
                <select type="text" name="downline_id[]" id="downline_id" placeholder="Select Downline Name">
                    @foreach ($mlm as $p)
                        <option value="{{ $p->name }}">{{ $p->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>

     <script type="text/javascript">
        $('#upline_id').select2({
            theme: "bootstrap",
        });
        
        $('#downline_id').select2({
            multiple: true,
            maximumSelectionLength: 2
        });
    </script>

@endsection