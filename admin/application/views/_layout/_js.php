<!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>

<!-- My Ajax -->
<?php include './assets/js/ajax.php'; ?>

<script>
	$(function () {
		$('#example1').DataTable()
	})
</script>

<div class="modal fade" id="modal-tambah-pakar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Tambah Pakar</h4>
			</div>
			<div class="modal-body">
        <div class="box-header">
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="Nama_Pakar" class="col-sm-3 ">Nama Pakar</label>
                <div class="col-sm-9">
                  <input type="Nama Pakar" class="form-control" id="nama_pakar" placeholder="Nama Pakar">
                </div>
              </div>
              <div class="form-group">
                <label for="spesialis" class="col-sm-3 ">Spesialis</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="spesialis" placeholder="Spesialis">
                </div>
              </div>
              <div class="form-group">
                <label for="Asal Rs" class="col-sm-3 ">Asal RS</label>

                <div class="col-sm-9">
                  <input type="text<" class="form-control" id="asal_rs" placeholder="Asal RS">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3 ">Email</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="Alamat" class="col-sm-3 ">Alamat</label>
                <div class="col-sm-9">
                  <textarea class="form-control" rows="3" id="Alamat" placeholder="Alamat"></textarea>
                </div>
              </div>
              <div class="form-group">
               <label for="email" class="col-sm-3 ">Foto</label>
               <div class="col-sm-9">
                <input type="file" id="exampleInputFile">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah Pakar</button>
      </div>
    </div>
  </div>
</div>


<!-- ########################################################################################################################### -->

