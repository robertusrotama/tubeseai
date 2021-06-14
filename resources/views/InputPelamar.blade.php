<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input</title>

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

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

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
    <title>Input Data Pegawai</title>

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
                    <div class="signup-form">
                        <h2 class="form-title">Input Data Pelamar</h2>
                        <form action="/DataPelamar" method="post">
                        @csrf
<table>
    <tr>
        <td width="130">Nama Kandidat</td>
        <td><input type="text" name="nama_kandidat"></td>
    </tr>
    <tr>
        <td width="130">No HP</td>
        <td><input type="text" name="nomor_telp"></td>
    </tr>
    <tr>
        <td width="130">Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td width="130">Pengalaman</td>
        <td><input type="text" name="experience"></td>
    </tr>
    <tr>
        <td width="130">Pendidikan</td>
        <td><input type="text" name="education"></td>
    </tr>
    <tr>
        <td width="130">Status</td>
        <td><select name="status"}>
            <option value="Lolos">Lolos</option>
            <option value="Ditolak">Ditolak</option>
        </td></select>
        </td>
    </tr>
    <tr>
        <td><div class="form-group form-button">
        <input type="submit" name="data" class="form-submit" value="Kirim"/>
        </div></td>
    </tr>
</table>
</form>