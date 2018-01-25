
<section class="content">
 <div class="row">
  <div class="col-xs-12">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Table With Full Features</h3><br>
      <br>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-tambah-pakar">
        <i class="fa fa-plus"> &nbsp;Tambah Pakar</i>
      </button>
    </div>
    <div class="box-body">
     <table id="example1" class="table table-bordered table-striped">
      <thead>
       <tr>
        <th>No.</th>
        <th>Nama Pakar</th>
        <th>Spesialis</th>
        <th>Rumah Sakit</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
     <tr>
      <td>1.</td>
      <td>Internet
       Explorer 4.0
     </td>
     <td>Win 95+</td>
     <td> 4</td>
     <td style="align-self: center">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-view-pakar">View</button>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-pakar">Update</button>
      <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-delete-pakar">Delete</button>
    </td>
  </tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>



<div class="modal fade" id="modal-view-pakar">
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
                  Rudi
                </div>
              </div>
              <div class="form-group">
                <label for="spesialis" class="col-sm-3 ">Spesialis</label>

                <div class="col-sm-9">
                  Penyakit Anak Kulit
                </div>
              </div>
              <div class="form-group">
                <label for="Asal Rs" class="col-sm-3 ">Asal RS</label>

                <div class="col-sm-9">
                 Rumah Sakit Indramayu
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3 ">Email</label>

                <div class="col-sm-9">
                  Rudi@gmail.com
                </div>
              </div>
              <div class="form-group">
                <label for="Alamat" class="col-sm-3 ">Alamat</label>
                <div class="col-sm-9">
                 Indramayu
                </div>
              </div>
              <div class="form-group">
               <label for="email" class="col-sm-3 ">Foto</label>
               <div class="col-sm-9">
                <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" style="width: 150px" alt="User Image">
              </div>
            </div>
          </div>
        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-update-pakar">
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
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-delete-pakar">
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
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>