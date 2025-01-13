@extends('template.main')
@section('content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Petugas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">daftar petugas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- kasih route -->
                                <a href="{{ route('tampil.daftar') }}" class="btn btn-sm btn-primary">Tambah petugas</a>
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Nama Petugas</th>
                                            <th>Role</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Nama Petugas</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ( $pwtugas as $k )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->id_petugas }}</td>
                                        <td>{{ $k->username }}</td>
                                        <td>{{ $k->nama_petugas }}</td>
                                        <td>{{ $k->level }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-secondary">show</a>
                                            <!-- kasih route -->
                                            <button type="button" href="{{ route('tampil.edit' ,$k->id_petugas ) }}" class="btn btn-warning">
                                                <i class="fa fa-edit"></I>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id}}">
                                                hapus
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>        
@endsection