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
                                            <a href="{{ route('tampil.view' ,$k->id_petugas ) }}" class="btn btn-sm btn-secondary">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </a>
                                            <!-- kasih route -->
                                            <a href="{{ route('tampil.edit' ,$k->id_petugas ) }}" class="btn btn-warning">
                                                <i class="fa fa-edit"></I>
                                            </a>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id_petugas}}">
                                                <i class="fa fa-trash"></I>
                                            </button>
                                            <div class="modal fade" id="exampleModal{{$k->id_petugas}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin akan menghapus data {{$k->id_petugas}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                        <form action="{{ route('petugas.destroy', $k->id_petugas) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>        
@endsection