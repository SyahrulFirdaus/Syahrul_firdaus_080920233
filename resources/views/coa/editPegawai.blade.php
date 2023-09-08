@extends('layouts.app')
   @section('content')
       <div id="wrapper">
            <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-text mx-3">Best</div>
                </a>

                <hr class="sidebar-divider my-0">
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
                            <h6 class="collapse-header">SOAL</h6>
                            <a class="collapse-item" href="/mcoa/vdua">No 2</a>
                            <a class="collapse-item" href="/mcoa/vPegawai">No 3</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider">

            </ul>

            <div id="content-wrapper" class="d-flex flex-column mt-4">
                <div id="content">
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="/mcoa/vPegawai/{{ $coa->id }}" method="POST">
                                        @method('put')
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                                            <input type="text" class="form-control" id="pegawai_nama" name="pegawai_nama" aria-describedby="nikHelp" value="{{ $coa->pegawai_nama }}" @required(true)>
                                            <div id="namaHelp" class="form-text">Input name</div>
                                        </div>             
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                            <input type="text" class="form-control" id="pegawai_jabatan" name="pegawai_jabatan" aria-describedby="nikHelp" value="{{ $coa->pegawai_jabatan }}" @required(true)>
                                            <div id="namaHelp" class="form-text">Input jabatan</div>
                                        </div>           
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Umur</label>
                                            <input type="number" class="form-control" id="pegawai_umur" name="pegawai_umur" aria-describedby="nikHelp" value="{{ $coa->pegawai_umur }}" @required(true)>
                                            <div id="namaHelp" class="form-text">Input age</div>
                                        </div>  
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="pegawai_alamat" name="pegawai_alamat" aria-describedby="nikHelp"value="{{ $coa->pegawai_alamat }}" @required(true)>
                                            <div id="namaHelp" class="form-text">Input address</div>
                                        </div>  
                                    <a class="btn btn-warning" href="/mcoa">Cancel</a>
                                    <button type="submit" class="btn btn-primary" value="save">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Best 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

   @endsection
        
