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
                                            <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                                            <input type="text" class="form-control" id="tempat" name="tempat" aria-describedby="emailHelp" placeholder="Tempat Lahir">
                                            <input type="text" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp" placeholder="Tanggal">
                                            <input type="text" class="form-control" id="bulan" name="bulan" aria-describedby="emailHelp" placeholder="Bulan">
                                            <input type="text" class="form-control" id="tahun" name="tahun" aria-describedby="emailHelp" placeholder="Tahun">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Alamat">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="no_telp" name="no_telp" aria-describedby="emailHelp" placeholder="Telepon">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id=""> Laki-Laki
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id=""> Perempuan
                                            </div>                                                              
                                        </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Agama</label>
                                                <select class="form-select" aria-label="Default select example" name="agama">
                                                    <option selected>Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Hindu">Hindu</option>

                                                  </select>                         
                                            </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hoby</label>
                                            <input type="checkbox" name="hobby" value="Baca Buku" id=""> Baca Buku <input
                                            type="checkbox" name="hobby" value="Olahraga" id=""> Olah Raga <input type="checkbox"
                                            name="hobby" value="Main Game" id=""> Main Game <input type="checkbox" name="hobby"
                                            value="Hiking" id=""> Hiking</td>                                        </div>

                                    <a class="btn btn-warning" href="/mcoa">Cancel</a>
                                    <button type="submit" class="btn btn-primary" onClick="ValidasiData()">Tampilkan</button>
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

        <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
    <script>
        function ValidasiData() {
            const nama = $("[name='nama']").val();
            const tempat = $("[name='tempat']").val();
            const tanggal = $("[name='tanggal']").val();
            const bulan = $("[name='bulan']").val();
            const tahun = $("[name='tahun']").val();
            const alamat = $("[name='alamat']").val();
            const no_telp = $("[name='no_telp']").val();
            const jenis_kelamin = $("[name='jenis_kelamin']").val();
            const agama = $("[name='agama']").val();
            const check = document.getElementsByName('hobby');
            var arr = "";
            for (var i = 0, n = check.length; i < n; i++) {
                if (check[i].checked) {
                    arr += "," + check[i].value;
                }
            }
            // 
            if (arr) arr = arr.substring(1);
            const hobbi = arr;
            alert(
                `Nama Lengkap : ${nama} \nTempat, Tanggal Lahir : ${tempat}, ${tanggal}-${bulan}-${tahun} \nAlamat : ${alamat} \nNo.Telp/HP : ${no_telp} \nAgama : ${agama} \nHobi : ${hobbi}`
                )
        }
    </script>

        

   @endsection
        
