@extends('layouts.app')
@section('content')
    
    <div id="wrapper">
         <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-text mx-3">Tiketux</div>
                </a>
                <hr class="sidebar-divider my-0">
                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Main Menu
                </div>
                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Menu</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                           <h6 class="collapse-header">CRUD</h6>
                            <a class="collapse-item" href="/mcoa">CRUD</a>
                        </div>
                    </div>
                </li>
            </ul>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content"> 
                    <div class="container-fluid">
                        <a class="btn btn-primary mb-4 mt-4" href="#" data-toggle="modal" data-target="#AddTransaction">
                             <i class="fas fa-plus-square pr-1"></i>
                                Tambah Pegawai
                        </a>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Table Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No Pegawai</th>
                                                <th>Nama_Pegawai</th>
                                                <th>Jabatan</th>
                                                <th>Umur</th>
                                                <th>Alamat</th>
                                                <th>Hapus</th>
                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            ?>
                                            @foreach ($roleTransaction as $item)
                                            <tr>
                                                <td><b>TRS-MMXXIII-{{ $item->id }}</b></td>
                                                <td>{{ $item->pegawai_nama }}</td>
                                                <td>{{ $item->pegawai_jabatan }}</td>
                                                <td>{{ $item->pegawai_umur }}</td>
                                                <td>{{ $item->pegawai_alamat }}</td>
                                                <td>
                                                    <a class="btn btn-primary mb-4" href="/mcoa/{{ $item-> id }}/editTransaction">
                                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Edit
                                                    </a>
                                                </td>
                                                <td> 
                                                    <form action="/mcoa/vtransaction/{{ $item-> id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                                                    </form>
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

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>

            </div>
        </div>

     <div class="modal fade" id="AddTransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah data pegawai</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="/mcoa/storeTransaction" method="POST">
                            @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" id="pegawai_nama" name="pegawai_nama" aria-describedby="nikHelp" required>
                            <div id="namaHelp" class="form-text">Input your name.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="pegawai_jabatan" name="pegawai_jabatan" aria-describedby="nikHelp" required>
                            <div id="namaHelp" class="form-text">masukan jabatan anda.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="pegawai_umur" name="pegawai_umur" aria-describedby="nikHelp" required>
                            <div id="namaHelp" class="form-text">masukan umur anda.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="pegawai_alamat" name="pegawai_alamat" aria-describedby="nikHelp" required>
                            <div id="namaHelp" class="form-text">masukan alamat anda.</div>
                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" value="save">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    
     
@endsection