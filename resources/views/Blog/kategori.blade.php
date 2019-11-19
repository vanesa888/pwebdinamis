
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<title>Data Blog</title>
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
              <li class="breadcrumb-item active">kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <h3>Halaman Kategori</h3>
       <!--card body-->
       <div class="card-body"> 
        <table class="table table-bordered">
          <tbody> 
           <tr>
              <th> Nama </th>
              <th style="width: 25%">
              <center> Aksi </center> </th>
              
           </tr> 
           
           @foreach ($varAngka as $isinya) 
           <tr> 
              
                <td>{{$isinya}}</td>
                  <td>
                     <a href="{{$isinya}}">
                    <i class="fas fa-eye red">Lihat</i>
                     </a>

                     |
                 
                     <a href="{{$isinya}}">
                     <i class="fas fa-edit blue">Edit</i>
                     </a>
                  
                     |

                     <a href="{{$isinya}}">
                     <i class="fas fa-trash-alt green">Hapus</i>
                     </a>
                  </td>
                
           </tr>       
           @endforeach
         </tbody>  
        </table>   
        </div>
    </div> 
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Main Footer -->
     @include('template.Footer')
<div>
<!-- ./wrapper-->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
      @include('template.Script')

</body>
</html>
