<?php require_once 'connection.php'; ?>
<?php include 'processing/auth.php';?>
<?php include 'processing/out.php';?>
<?php login();?>
<?php out(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formed - Помощь</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/global.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- Google tag (gtag.js) -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div id="toast-container" class="toast-bottom-right" style="display: none">
        <div class="toast toast-error" aria-live="assertive" >
            <div class="toast-message">
                Нужно авторизоваться.
            </div>
        </div>
    </div>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
      <div class="loader"></div>
<!--    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background:#148A8A;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
<!--      <li class="nav-item d-none d-sm-inline-block">-->
<!--        <a href="index.php" class="nav-link">Главная</a>-->
<!--      </li>-->
<!--      <li class="nav-item d-none d-sm-inline-block">-->
<!--        <a href="#" class="nav-link">Контакты</a>-->
<!--      </li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline" method="POST" action="/index.php?search_result">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" name="search_field" placeholder="Поиск" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    <!--   <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->

      <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600">
                                    <?php
                                        if (!isset($_COOKIE['login']))
                                            echo "Гость";
                                        else
                                            echo $_COOKIE['login']; ?>
                                </span>
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" width="30">

                            </a>
                            <!-- Dropdown - User Information -->
                            <?php
                                        if (isset($_COOKIE['login'])) {?>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Выйти
                                </a>
                            </div>
                            <?php } else {?>
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item"  href="/login.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Войти
                                </a>
                            </div>
                            <?php } ?>
                        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside  class="main-sidebar sidebar-dark-primary  sidebar-no-expand"  >
    <!-- Brand Logo -->
     <a href="index.php" class="brand-link" style="background:#148A8A;">
     <!--<span  style="margin-left:15px;">РНПЦ МТ</span>-->
         <img src="dist/img/logo-formed-logo.png" height="35px" width="200px"/>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: #FFFFFF;">





      <!-- SidebarSearch Form -->
   <!--   <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Поиск" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
<?php require_once __DIR__ . '/elements/sidebar_menu.php' ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <!-- <h1 class="m-0">Dashboard</h1> -->
            <?php
             if ($con == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    // echo "Соединение с ".$database.".sql"." установлено успешно" ;
}

?>

<!-- <?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
 ?> <form action="index.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 $fio = htmlspecialchars($fio);
 $email = htmlspecialchars($email);
 $fio = urldecode($fio);
 $email = urldecode($email);
 $fio = trim($fio);
 $email = trim($email);
 if (mail("hancharou@rnpcmt.by, bogdan@rnpcmt.by", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: $email \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?> -->
          </div><!-- /.col -->
 <!--          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!--ПОДКЛЮЧЕНИЕ API -->



    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
                <!-- /.row -->
        <!-- Main row -->
          <h2>Контакты разработчиков</h2>
        <div class="row" >

          <!-- Left col -->
          <section class="col-lg-3" style="padding-left: 2%">
                <p style="display:inline;">Сыдыков Никита Мураджанович</p><br/>
                ведущий специалист<br/>
                тел.: +375 17 311-50-93<br />
                e-mail: <a href="mailto:sydykav@rnpcmt.by">sydykav@rnpcmt.by</a>


          </section>
          <section class="col-lg-3">
                <p class="card-text" style="display:inline;">Гончаров Владислав Игоревич</p><br/>
                ведущий специалист<br/>
                тел.: +375 17 311-50-93<br />
                e-mail: <a href="mailto:hancharou@rnpcmt.by">hancharou@rnpcmt.by</a><br /><br />

          </section>

    </section>





    <!-- КОНЕЦ ПОДКЛЮЧЕНИЕ API -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> &copy; 2023 <a href="https://rnpcmt.by/">РНПЦ МТ</a></strong>

    <div class="float-right d-none d-sm-inline-block">
      <b>Версия</b> 1.1.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- logoutModal FORMS-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Выход</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Текущий сеанс будет завершен.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Отмена</button>
                    <a class="btn btn-primary" href="/index.php?logout">Выйти</a>
                </div>
            </div>
        </div>
    </div>

<!-- logoutModal FORMS-->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>


<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
    $('.toastrDefaultError').click(function () {
        let guest = document.querySelector("span[class='mr-2 d-none d-lg-inline text-gray-600']");
        if(guest.innerHTML.trim() === "Гость") {
            let alert = document.getElementById('toast-container');
            $('[class="nav-item dropdown no-arrow"]').addClass("show");
            $('[class="dropdown-menu dropdown-menu-right shadow animated--grow-in"]').addClass("show");
            alert.style = "display: block";
            new Promise(resolve => setTimeout(resolve, 5000)).then(() => {alert.style = "visibility: hidden; opacity: 0; transition: visibility 0.5s, opacity 0.5s linear;";});
        }
    });

        $('#toast-container').click(function () {
        this.style="display: none";
    });
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  let item = document.querySelector(".nav-item");
  if(window.screen.width > 1279) {
    item.style = "display: none";
  }

      let itemMenu = document.querySelector("[href='help.php']");
      itemMenu.style = "color: #148A8A;";



</script>

</body>
</html>
