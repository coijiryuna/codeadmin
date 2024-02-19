<!DOCTYPE html>
<html lang="<?= config('App')->defaultLocale ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
  <title><?= $title ?? '' ?> | <?= config('Boilerplate')->appName ?></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- Sweetalert -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.css" integrity="sha512-eRBMRR/qeSlGYAb6a7UVwNFgXHRXa62u20w4veTi9suM2AkgkJpjcU5J8UVcoRCw0MS096e3n716Qe9Bf14EyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Render section Boilerplate css -->
  <?= $this->renderSection('css') ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/alt/adminlte.components.min.css" integrity="sha512-C6GDY2X+A6W2CYRoEykmm+Ta04hV2TqOSer0LJ+TeZCY3+b9i9pDnbwNgvlrpZSZIgBonixchcyVe7Nu8ccauQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/alt/adminlte.light.min.css" integrity="sha512-sH43x9hDH6VYZCimbGd58vYrO4uMdmPn3m8QUgxNYi4MNmj4sbt+fN1jG+TnVA2Q0SA6tvEo6W6P1Z0FA+6AXA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" integrity="sha512-SUJFImtiT87gVCOXl3aGC00zfDl6ggYAw5+oheJvRJ8KBXZrr/TMISSdVJ5bBarbQDRC2pR5Kto3xTR0kpZInA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css" integrity="sha512-IuO+tczf4J43RzbCMEFggCWW5JuX78IrCJRFFBoQEXNvGI6gkUw4OjuwMidiS4Lm9Q2lILzpJwZuMWuSEeT9UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/alt/adminlte.pages.min.css" integrity="sha512-G5uca2T4CI7/9IHrOI1DKXQaqBN17tyNzgL4rMSEavhnKwN82WDWptayW8/VbzI21UCjpErfXv7jRve+iCbb9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/alt/adminlte.plugins.min.css" integrity="sha512-ayIIFF0UuqVTtj88SVYRvEcSf+vs9aLDgte4Fd+jdsFFr3zJYo5wEjFFD0QXCM+3WrVUCyUAW8meKc2kzO5Tow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/alt/adminlte.light.min.css" integrity="sha512-sH43x9hDH6VYZCimbGd58vYrO4uMdmPn3m8QUgxNYi4MNmj4sbt+fN1jG+TnVA2Q0SA6tvEo6W6P1Z0FA+6AXA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/alt/adminlte.extra-components.min.css" integrity="sha512-Rho/nal+5pKgEFMfnMeJ5iynqFe2y/ev+KwrKIzFALivzIkj+3ymOWzhY/T9m5v9pkDUxZevORjoavsYCVbU/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/alt/adminlte.components.min.css" integrity="sha512-C6GDY2X+A6W2CYRoEykmm+Ta04hV2TqOSer0LJ+TeZCY3+b9i9pDnbwNgvlrpZSZIgBonixchcyVe7Nu8ccauQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.3.0/styles/overlayscrollbars.min.css" integrity="sha512-MMVRaRR0pB97w1tzt6+29McVwX+YsQcSlIehGCGqFsC+KisK3d2F/xRxFaGMN7126EeC3A6iYRhdkr5nY8fz3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancyapps-ui/4.0.31/fancybox.min.css" integrity="sha512-u+sKK399eoGQLcJN/LNW9xSi01hDa/yNXcrjPGinWRp2CNxQqFjDgbcqEg3VL4aqAKBMb9x0+slTnLdrZ8geJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancyapps-ui/4.0.31/panzoom.min.css" integrity="sha512-dNwCY1wbx5NKhOpJRiYXLDfc43TnC6FNcn1ixGRvSktuIPNFVeRHdLjd/WBAZO9b4oNb7TY9UNC0kOtg3+jFYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" integrity="sha512-J8blSxQ2Sax1xyaFc7nsQqgeu0BSy8AsDVRtx6RsRQW+g1BAzno3wdWlW0e/RNVaMYGOnRi6nPXv+c8/Tgwr9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--datetime  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->

</head>

<body class="layout-fixed layout-navbar-fixed sidebar-mini <?= config('Boilerplate')->theme['footer']['fixed'] ? 'layout-footer-fixed' : '' ?> <?= config('Boilerplate')->theme['body-sm'] ? 'text-sm' : '' ?>">
  <div class="wrapper">

    <!-- Navbar -->
    <?= $this->include('layout/header') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('layout/mainsidebar') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?= $this->include('layout/contentheader') ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?= $this->renderSection('content') ?>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <!-- <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div> -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <strong><a href="https://github.com/agungsugiarto/boilerplate">Boilerplate</a></strong>
      </div>
      <!-- Default to the left -->
      <strong>&copy; <?= date('Y') ?> <a href="<?= config('Boilerplate')->theme['footer']['vendorlink'] ?>"><?= config('Boilerplate')->theme['footer']['vendorname'] ?></a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/brands.min.js" integrity="sha512-IZeK0c+nwCpZdoWLUoguVYEnBOwOnS3eTyS5Eg57YCk41x2NphG1E/vSa886whDSXG7vGauI8mmbP5PI/VC5LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap 5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- Admin LTE -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js" integrity="sha512-KBeR1NhClUySj9xBB0+KRqYLPkM6VvXiiWaSz/8LCQNdRpUm38SWUrj0ccNDNSkwCD9qPA4KobLliG26yPppJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancyapps-ui/4.0.31/fancybox.umd.js" integrity="sha512-KbN1/HGDfgCQ9jeSs8O4t3Jeq2Gxv24KTWveN9QKrk/84cm5fpU8ankouT5Nsa1Pmx4SNXHZhIavwYMmnb9yHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.1.2/esm/ionicons.min.js" integrity="sha512-2ySmquu6HK3CAvwLllh0R8K8buFPMZsUwWLZIlB7WW8c8ilUtoNyhsmEsQn2U0IV1USr2Oc/9DJzlr4cxAbuxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js" integrity="sha512-yUpN8Ms0SReogyyMOe6drcsPi9Km1bZr2MmBQSPK5FAeEd6sjFXzxyUieQ+tTPOo0DBhI+3NHGQwlfpog5Jdfg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/gcal.min.js" integrity="sha512-7a/GdV+Yb2nLt7zgXbufsOsTJ3NHu4zF1Vdtsn50oRjdeVwAU8EcE4twos9YAnj9MhpvFnEewM4QsbLhSeAH0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- sweetalert2 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.all.min.js" integrity="sha512-UfSxwRR8LlT3e4VLW1fx76+guLBWBALrK5mo7aJ92ZGiqGiR2Cu2AWgQ1FMLthwh2MbBVR0PqUCNiG6/QzsQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Preload Scriptt -->
  <script>
    $('.sidebar-toggle').on('click', function(event) {
      event.preventDefault();
      if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
        sessionStorage.setItem('sidebar-toggle-collapsed', '')
      } else {
        sessionStorage.setItem('sidebar-toggle-collapsed', '1')
      }
    });
    (function() {
      if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
        var body = document.getElementsByTagName('body')[0];
        body.className = body.className + ' sidebar-collapse'
      }
    })()
  </script>
  <!-- Render section boilerplate js -->
  <?= $this->renderSection('js') ?>
  <script>
    $.ajaxSetup({
      headers: {
        '<?= config('Security')->headerName ?>': $('meta[name="<?= config('Security')->tokenName ?>"]').attr('content'),
      }
    })
  </script>
  <!-- Sweeat alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.all.min.js"></script>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });

    <?php if (session('sweet-success')) { ?>
      Toast.fire({
        icon: 'success',
        title: '<?= session('sweet-success.') ?>'
      });
    <?php } ?>
    <?php if (session('sweet-warning')) { ?>
      Toast.fire({
        icon: 'warning',
        title: '<?= session('sweet-warning.') ?>'
      });
    <?php } ?>
    <?php if (session('sweet-error')) { ?>
      Toast.fire({
        icon: 'error',
        title: '<?= session('sweet-error.') ?>'
      });
    <?php } ?>
  </script>
</body>

</html>