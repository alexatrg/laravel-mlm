@extends('template')

@section('title', 'MLM')

@section('content')

    <div class="container m-3">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary mb-3" href="/mlm">Home</a>
                <a class="btn btn-primary mb-3" href="/mlm/tambah">Tambah</a>

                <form action="/mlm/cari" method="GET">
                    <div class="input-group mb-3">
                        <select type="text" class="form-control select" name="cari" id="cari" placeholder="Select Member Name">
                        <option class="p-2" value="" disabled selected>Select Member Name</option>
                        @foreach ($mlm as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                    {{-- <div class="input-group mb-3">
                        <input type="text" class="form-control" name="cari" placeholder="Search" value="{{ old('cari') }}" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div> --}}
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mlm as $p)
                        <tr>
                            <td>
                                {{ $loop->index + $mlm->firstItem() }} 
                            </td>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->address }}</td>
                            <td>{{ $p->phoneNumber }}</td>
                            <td>
                                <a class="btn btn-primary" href="/mlm/edit/{{ $p->id }}">Edit</a>
                                <a class="btn btn-danger" href="/mlm/hapus/{{ $p->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-center">
                <a class="btn btn-primary" href="/mlm?page={{ $mlm->currentPage() - 1 }}">Previous</a>
                <a class="btn btn-primary" href="/mlm?page={{ $mlm->currentPage() + 1 }}">Next</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });

        $('#cari').select2({
            theme: "bootstrap",
        });
    </script>
    
@endsection

   
