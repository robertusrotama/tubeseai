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
    <title>Input Data Pelatihan</title>

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
                        <h2 class="form-title">Input Data Pelatihan</h2>
                        <form action="/DeletePelatihan" method="post">
                            @csrf
<table>
    <tr>
        <td width="130">ID Pelatihan</td>
        <td><input type="text" name="id"></td>
    </tr>
    <tr>
        <td width="130">Nama Pelatihan</td>
        <td><input type="text" name="nama_pelatihan"></td>
    </tr>
    <tr>
        <td width="130">Tanggal Pelatihan</td>
        <td><input type="date" name="tanggal_pelatihan"></td>
    </tr>
    <tr>
        <td width="130">Waktu Pelatihan</td>
        <td><input type="time" name="waktu_pelatihan"></td>
    </tr>
    <tr>
        <td width="130">Tempat Pelatihan</td>
        <td><input type="text" name="tempat_pelatihan"></td>
    </tr>
    <tr>
        <td width="130">Jumlah Pegawai</td>
        <td><input type="text" name="jumlah_pegawai"></td>
    </tr>
    <tr>
        <td width="130">Marketing</td>
        <td><input type="text" name="Marketing"></td>
    </tr>
    <tr>
        <td width="130">HR</td>
        <td><input type="text" name="HR"></td>
    </tr>
    <tr>
        <td width="130">Finance</td>
        <td><input type="text" name="Finance"></td>
    </tr>
    <tr>
        <td width="130">Operasional</td>
        <td><input type="text" name="Operasional"></td>
    </tr>
    <tr>
        <td width="130">Penyelenggara Pelatihan</td>
        <td><input type="text" name="penyelenggara_pelatihan"></td>
    </tr>
    <tr>
        <td width="130">Anggaran Biaya</td>
        <td><input type="float" name="anggaran_biaya"></td>
    </tr>
    <tr>
        <td width="130">Status</td>
        <td><select name="status">
        <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
        <option value="Disetujui">Disetujui</option>
        <option value="Ditolak">Ditolak</option></td>
        </select>
    </tr>
    <tr>
        <td><div class="form-group form-button">
        <input type="submit" name="data" class="form-submit" value="Kirim"/>
        </div></td>
    </tr>
</table>
</form>


