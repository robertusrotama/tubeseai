<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Human Resources <sup></sup></div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <span>Data Divisi HR</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="/ReadPelamar" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span>Data Pelamar</span>
    </a>
<li class="nav-item">
    <a class="nav-link collapsed" href="/DataPegawai" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span>Data Pegawai</span>
    </a>
<li class="nav-item">
    <a class="nav-link collapsed" href="/DataGaji" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span>Data Untuk Gaji Pegawai</span>
    </a>
<li class="nav-item">
    <a class="nav-link collapsed" href="/ReadPresensi" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span>Data Presensi Pegawai</span>
     </a>
<li class="nav-item">
    <a class="nav-link collapsed" href="/Read" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span>Data Pelatihan Pegawai</span>
    </a>
<li class="nav-item">
    <a class="nav-link collapsed" href="/ReadCuti" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span>Data Cuti Pegawai</span>
    </a>
<li class="nav-item">
    <a class="nav-link collapsed" href="/DeletePelatihan" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span>Data Pelatihan</span>
    </a>
</ul>
<!-- End of Sidebar -->
    <title>List Data Cuti Pegawai</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
    
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                        <h2 class="form-title">List Data Pelamar</h2>
                        <form action="" method="post">

<table border="1" width="600px">
    <thead class = "thead-dark">
        <tr>
            <th>ID</th>
            <th>Nama Kandidat</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Pengalaman</th>
            <th>Pendidikan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($candidate as $data)
    <tr>
        <td>{{ $data->id }}</td> 
        <td>{{ $data->nama_kandidat }}</td>
        <td>{{ $data->nomor_telp}}</td>
        <td>{{ $data->alamat}}</td>
        <td>{{ $data->experience }}</td>
        <td>{{ $data->education }}</td>
        <td>{{ $data->status }}</td>
    </tr>
    @endforeach
    </tbody>

</table>

<div class="form-group form-button">
    <td><a href="/InputPelamar" class="form-submit">Tambah Data Pelamar</a></td>
</div>