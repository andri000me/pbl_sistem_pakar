<!DOCTYPE html>
<html>
<head>
  <title>.:: ADMIN ::.</title>
  <!-- meta -->
  <?php echo @$_meta; ?>

  <!-- css --> 
  <?php echo @$_css; ?>

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- header -->
    <?php echo @$_header; ?> <!-- nav -->

    <!-- sidebar -->
    <?php 
    if ($userdata->id_level == 1){ 
      echo @$_sidebar_admin; 
    }else{
      echo @$_sidebar_pakar;
    }
    ?>

    <!-- content -->
    <?php echo @$_content; ?> <!-- headerContent --><!-- mainContent -->

    <!-- footer -->
    <?php echo @$_footer; ?>

    <div class="control-sidebar-bg"></div>
  </div>

  <!-- js -->
  <?php echo @$_js; ?>
</body>
</html>