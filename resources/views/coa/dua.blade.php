@extends('layouts.app')
   @section('content')
       <div id="wrapper">
            <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-text mx-3">Best</div>
                </a>

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
                                <h6 class="m-0 font-weight-bold text-primary">No 2</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form>
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Usia</label>
                                            <input type="text" class="form-control" id="usia" name="usia" aria-describedby="emailHelp" placeholder="usia">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" placeholder="Telepon">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hoby</label>
                                            <input type="text" class="form-control" id="hoby" name="hoby" aria-describedby="emailHelp" placeholder="Hoby">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Alamat">
                                        </div>

                                    <a class="btn btn-warning" href="/mcoa">Cancel</a>
                                    <button type="submit" class="btn btn-primary" onclick="alert('nama')">Tampilkan</button>
                                    </form>
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

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        

   @endsection
        
