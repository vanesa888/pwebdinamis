
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<title>Tambah Blog</title>
        @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<!-- Navbar -->
      @include('template.Navbar')
<!-- /.navbar-->

   <!-- Main Sidebar Container -->
         @include('template.sidebar-left')
  
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hai Dunia</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">tambah blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <h3>Halaman Tambah Blog</h3>
        {{--isi--}}
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Main Footer -->
     @include('template.Footer')
<div>
<!-- ./wrapper-->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
</body>
</html>
