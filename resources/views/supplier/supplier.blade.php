@extends('supplier.main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LARAVEL</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">LARAVEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#s">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesupplier" aria-expanded="true" aria-controls="collapsesupplier">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Supplier</span>
                </a>
                <div id="collapsesupplier" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Supplier:</h6>
                        <a class="collapse-item" href="tambahsupplier">Tambah Data Supplier</a>
                        <a class="collapse-item" href="datasupplier">Data Supplier</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecustomer" aria-expanded="true" aria-controls="collapsecustomer">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Customer</span>
                </a>
                <div id="collapsecustomer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Customer:</h6>
                        <a class="collapse-item" href="tambahcustomer">Tambah Data Customer</a>
                        <a class="collapse-item" href="datacustomer">Data Customer</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproduk" aria-expanded="true" aria-controls="collapseproduk">
                    <img src="assets/img/icons8-store-50.png" width="10%"></img>
                    <span>Produk</span>
                </a>
                <div id="collapseproduk" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Produk:</h6>
                        <a class="collapse-item" href="satuanproduk">Satuan Produk</a>
                        <a class="collapse-item" href="kategoriproduk">Kategori Produk</a>
                        <a class="collapse-item" href="databrand">Data Brand</a>
                        <a class="collapse-item" href="hargapenjualan">Harga Penjualan</a>
                        <a class="collapse-item" href="dataproduk">Data Produk</a>
                        <a class="collapse-item" href="cetakbarcode">Cetak Barcode/PriceTag</a>
                        <a class="collapse-item" href="diskonproduk">Diskon Produk</a>
                        <a class="collapse-item" href="hargabertingkat">Harga Bertingkat</a>
                        <a class="collapse-item" href="mutasihadiah">Mutasi Hadiah</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseinventory" aria-expanded="true" aria-controls="collapseinventory">
                    <img src="assets/img/icons8-store-50.png" width="10%"></img>
                    <span>Inventory</span>
                </a>
                <div id="collapseinventory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Inventory:</h6>
                        <a class="collapse-item" href="pergudangan">Pergudangan</a>
                        <a class="collapse-item" href="historistok">Histori Stok</a>
                        <a class="collapse-item" href="stockopname">Stock Opname</a>
                        <a class="collapse-item" href="stockadjustment">Stock Adjustment</a>
                        <a class="collapse-item" href="stockmutation">Stock Mutation</a>
                        <a class="collapse-item" href="mutasigudangoutlet">Mutasi Gudang Outlet</a>
                        <a class="collapse-item" href="konsolidasistokoutlet">Konsolidasi Stok Outlet</a>
                        <a class="collapse-item" href="konsolidasistokgudang">Konsolidasi Stok Gudang</a>
                        <a class="collapse-item" href="stokgudang">Stok Gudang</a>
                        <a class="collapse-item" href="stokoutlet">Stok Outlet</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseperusahaan" aria-expanded="true" aria-controls="collapseperusahaan">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Perusahaan</span>
                </a>
                <div id="collapseperusahaan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Perusahaan:</h6>
                        <a class="collapse-item" href="dataprofilperusahaan">Data Profil Perusahaan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseoutlet" aria-expanded="true" aria-controls="collapseoutlet">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Outlet</span>
                </a>
                <div id="collapseoutlet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Outlet:</h6>
                        <a class="collapse-item" href="dataoutlet">Data Outlet</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebuktikas" aria-expanded="true" aria-controls="collapsebuktikas">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Bukti Kas</span>
                </a>
                <div id="collapsebuktikas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Bukti Kas:</h6>
                        <a class="collapse-item" href="buktikasmasuk">Bukti Kas Masuk (BKM)</a>
                        <a class="collapse-item" href="buktikaskeluar">Bukti Kas Keluar (BKK)</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepurchase" aria-expanded="true" aria-controls="collapsepurchase">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Purchase</span>
                </a>
                <div id="collapsepurchase" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Purchase:</h6>
                        <a class="collapse-item" href="permintaanpembelian">Permintaan Pembelian</a>
                        <a class="collapse-item" href="pesananpembelian">Pesanan Pembelian</a>
                        <a class="collapse-item" href="peneriamaanbarang">Penerimaan Barang</a>
                        <a class="collapse-item" href="fakturpembelian">Faktur Pembelian</a>
                        <a class="collapse-item" href="pembayaranfaktur">Pembayaran faktur</a>
                        <a class="collapse-item" href="pengembalianpembelian">Pengembalian Pembelian</a>

                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepenjualan" aria-expanded="true" aria-controls="collapsepenjualan">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Penjualan</span>
                </a>
                <div id="collapsepenjualan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Penjualan:</h6>
                        <a class="collapse-item" href="lihatpenjualan">Lihat Penjualan</a>
                        <a class="collapse-item" href="discountglobal">Discount Global</a>
                        <a class="collapse-item" href="paymentmethod">Payment Method</a>
                        <a class="collapse-item" href="cashflowclose">Cashflow Close</a>
                        <a class="collapse-item" href="returpenjualan">Retur Penjualan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemesinkasir" aria-expanded="true" aria-controls="collapsemesinkasir">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Mesin Kasir</span>
                </a>
                <div id="collapsemesinkasir" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Mesin Kasir:</h6>
                        <a class="collapse-item" href="tambahmesinkasir">Tambah Mesin Kasir</a>
                        <a class="collapse-item" href="lihatmesinkasir">Lihat Mesin Kasir</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapserole" aria-expanded="true" aria-controls="collapserole">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Bukti Kas</span>
                </a>
                <div id="collapserole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Role & Permissions:</h6>
                        <a class="collapse-item" href="datarole">Data Role</a>
                        <a class="collapse-item" href="datapermissions">Data Permissions</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselaporan" aria-expanded="true" aria-controls="collapselaporan">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Laporan</span>
                </a>
                <div id="collapselaporan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Laporan:</h6>
                        <a class="collapse-item" href="sales">Sales</a>
                        <a class="collapse-item" href="purchase">purchase</a>
                        <a class="collapse-item" href="inventory">Inventory</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseakunting" aria-expanded="true" aria-controls="collapseakunting">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Akunting</span>
                </a>
                <div id="collapseakunting" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Akunting:</h6>
                        <a class="collapse-item" href="pembukuan">Pembukuan</a>
                        <a class="collapse-item" href="jurnalpenjualan">Jurnal Penjualan</a>
                        <a class="collapse-item" href="jurnalpembelian">Jurnal Pembelian</a>
                        <a class="collapse-item" href="stokakunting">Stok</a>
                        <a class="collapse-item" href="buktikas">Bukti Kas</a>
                        <a class="collapse-item" href="keuangan">Keuangan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser" aria-expanded="true" aria-controls="collapseuser">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Users & Management</span>
                </a>
                <div id="collapseuser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom User & Management:</h6>
                        <a class="collapse-item" href="tambahuser">Tambah Users</a>
                        <a class="collapse-item" href="datauser">Data Users</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepengaturan" aria-expanded="true" aria-controls="collapsepengaturan">
                    <img src="assets/img/icons8-checked-user-male-50.png" width="10%"></img>
                    <span>Pengaturan</span>
                </a>
                <div id="collapsepengaturan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Pengaturan:</h6>
                        <a class="collapse-item" href="pengaturanstokproduk">Pengaturan Stok Produk</a>
                        <a class="collapse-item" href="pengaturanpengingatstok">Pengaturan Pengingat Stok</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login">Login</a>
                        <a class="collapse-item" href="register">Register</a>
                        <a class="collapse-item" href="forgot">Forgot Password</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="table">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">superadmin</span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h4 mb-0 text-gray-800">Informasi</h3>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left shadow h-100 py-2" style="background-color:#008B8B;">
                                <div class="card-body" style="background-color:#008B8B;">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <span style="color: #ffffff;">Supplier</span>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span style="color:#ffffff;">{{ $supplier->count() }}</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left shadow h-100 py-2" style="background-color: #206bc4">
                                <div class="card-body" style="background-color: #206bc4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <span style="color: #ffffff;">Customer</span>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span style="color: #ffffff;">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left shadow h-100 py-2" style="background-color: #f76707">
                                <div class="card-body" style="background-color: #f76707">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><span style="color: #ffffff; ">OUTLET</span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span style="color: #ffffff;">0</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="assets/img/icons8-flag-50 (2).png" width="40%"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left shadow h-100 py-2" style="background-color: #D63939;">
                                <div class="card-body" style="background-color: #D63939;">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <span style="color:#ffffff;">PENGGUNA</span>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span style="color:#ffffff;">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- End of Footer -->
            <a href="#" class="btn btn-success btn-sm py-2 px-3" data-toggle="modal" data-target="#editModal">
                <i>Add / Update</i>
            </a>
            <div class="card-body border-bottom py-3">
                <div class="table-responsive">
                    {{-- @if (count($supplier) > 0) --}}
                        <table class="table card-table table-vcenter text-nowrap datatable table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Kode Supplier</th>
                                    <th>Nama Supplier</th>
                                    <th>Nomor Telp</th>
                                    <th>Alamat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supplier as $suppliers)
                                    <tr>
                                        <td>{{ $suppliers->id }}</td>
                                        <td>{{ $suppliers->nama_supplier }}</td>
                                        <td>{{ $suppliers->no_telp_supplier }}</td>
                                        <td>{{ $suppliers->alamat_supplier }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="btn-list">
                                                    <a href="http://localhost:8000/supplier/{{ $suppliers->id }}" class="btn btn-info view-supplier">
                                                        <li class="fas fa-eye"></li>
                                                    </a>
                                                    <a href="#" class="btn btn-success btn-sm py-2 px-3" data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $suppliers->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{-- @else
                        <p>Data supplier kosong.</p>
                    @endif --}}
                </div>
            </div>
            
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Detail Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if (count($supplier) > 0)
                <div class="modal-body">
                    <div class="card-body border-bottom py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Kode Supplier</h4>
                                <p>{{ $suppliers->kd_supplier }}</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Nama Supplier</h4>
                                <p>{{ $suppliers->nama_supplier }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h4>Nomor Telp</h4>
                                <p>{{ $suppliers->no_telp_supplier }}</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Alamat</h4>
                                <p>{{ $suppliers->alamat_supplier }}</p>
                            </div>
                        </div>
                    </div>
                    <div id="viewSupplierDetails"></div>
                </div>
                @else
                <div class="modal" id="emptyDataModal" tabindex="-1" role="dialog" aria-labelledby="emptyDataModalLabel" aria-hidden="true">
                    <!-- Tampilkan modal data kosong -->
                </div>
            @endif
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulir untuk mengedit atau menambah supplier -->
                    @if (count($supplier) > 0)
                    <form action="{{ isset($supplier) ? route('supplier.update', $suppliers->id) : route('supplier.store') }}" method="post">
                        @csrf
                        @if(isset($supplier))
                            @method('put')
                        @endif
                        <div class="form-group">
                            <label for="nama_supplier">ID :</label>
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" placeholder="{{ $suppliers->id }}"> @readonly(true)
                        </div>
                        <div class="form-group">
                            <label for="nama_supplier">Nama Supplier:</label>
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" placeholder="Masukkan Nama Supplier">
                        </div>
                        <div class="form-group">
                            <label for="no_telp_supplier">No. Telepon Supplier :</label>
                            <input type="text" class="form-control" id="no_telp_supplier" name="no_telp_supplier" placeholder="Masukkan No. Telepon Supplier">
                        </div>
                        <div class="form-group">
                            <label for="alamat_supplier">Alamat Supplier :</label>
                            <textarea class="form-control" id="alamat_supplier" name="alamat_supplier" rows="3" placeholder="Masukkan Alamat Supplier"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($supplier) ? 'Update' : 'Simpan' }}</button>
                    </form>
                    
                    @else
                <div class="modal" id="emptyDataModal" tabindex="-1" role="dialog" aria-labelledby="emptyDataModalLabel" aria-hidden="true">
                    <!-- Tampilkan modal data kosong -->
                </div>
            @endif
                </div>
            </div>
        </div>
    </div>
    

    @if (count($supplier) > 0)
    <div class="modal fade" id="deleteModal{{ $suppliers->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $suppliers->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel{{ $suppliers->id }}">Konfirmasi Hapus Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus supplier "{{ $suppliers->nama_supplier }}"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="{{ route('supplier.destroy', $suppliers->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="modal" id="emptyDataModal" tabindex="-1" role="dialog" aria-labelledby="emptyDataModalLabel" aria-hidden="true">
        <!-- Tampilkan modal data kosong -->
    </div>
@endif


    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <!-- Tambahkan ini di bagian bawah file blade Anda -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>
</html>