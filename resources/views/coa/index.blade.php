@extends('layouts.app')
@section('content')

        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-text mx-3">Tiketux</div>
                </a>

                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="/mcoa/vreports">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Reports</span></a>
                </li>

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
                            <h6 class="collapse-header">Chart of Account</h6>
                            <a class="collapse-item" href="/mcoa">Master Chart of Account</a>
                            <a class="collapse-item" href="/mcoa/vkategori">Kategori Chart of Account</a>
                            <a class="collapse-item" href="/mcoa/vtransaction">Transaction</a>
                        </div>
                    </div>
                </li>

            </ul>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">
                        <a class="btn btn-primary mb-4 mt-4 pl-3" href="#" data-toggle="modal" data-target="#AddCoa">
                            <i class="fas fa-plus-square pr-1"></i>
                                Add Chart of Account
                        </a>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Ganti Warna</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                     <h1>Pilih Warna</h1>
                                        {{-- <form method="post" action="{{ route('customWarna') }}">
                                            @csrf
                                            <label for="">Pilih warna</label>
                                            <input type="color" id="color" name="color">
                                            <button type="submit">Submit</button>
                                        </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Tiketux 2023</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <div class="modal fade" id="AddCoa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Data Chart of Account</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="/mcoa/store" method="POST">
                            @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Chart of Account Code</label>
                            <input type="text" class="form-control" id="nama" name="kode" aria-describedby="kodeHelp">
                            <div id="kodeHelp" class="form-text">Enter the chart of account code.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Chart of Account Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nikHelp">
                            <div id="namaHelp" class="form-text">Enter the chart of account name.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Select Category</label>
                            <select class="form-select" aria-label="Default select example" name="kategori">
                                @foreach ($roleName as $item)
                                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                           <div id="namaHelp" class="form-text">Select the chart of accounts category.</div>

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