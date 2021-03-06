

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="row">
         <div class="col-md-12 col-sm-10 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-map-marker"></i></span>

            <div class="info-box-content">
                  <center><h1><b>INPUT DATA PELANGGAN</b></h1></center>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      
    </section>

    <!-- Main content -->
<section class="content">
<div class="box">
  <div class="box-header">
      <div class="container">    
  <div class="row">
    <div class="col-sm-7">
            
      <div class="panel panel-primary">
        <div class="panel-heading">Lokasi Pelanggan Indihome</div>
        <div class="panel-body">
          
          <?php echo $map['html']; ?>
          <?php echo $map['js']; ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Form Input Data Pelanggan</div>
        <div class="panel-body">
          <?php 
          //notifikasi error
          echo validation_errors('<div class="alert alert-warning" id="warning-alert" >','</div>');
          
          //notifikasi sukses
          if ($this->session->flashdata('sukses')) {
             echo '<div class="alert alert-success" id="success-alert">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          //form open
          echo form_open(base_url('c_map/updatepelanggan'.$pelanggan->NO_INET), 'class="form-horizontal" entype="multipart/formdata"');   
           ?>

           <form class="form-horizontal"> 
              <div class="form-group">
              <label class="col-sm-4 control-label"> No Internet </label> 
              <div class="col-sm-8">
              <input id="GetNoInetTelkom" type="text" name="NO_INET" class="form-control" placeholder="No Internet" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Nama </label> 
              <div class="col-sm-8">
              <div id="NamaPelTel">
                <div id="RemoveNamaPelTel">
                  <input type="text" name="NAMA" class="form-control" placeholder="Nama" required>
                </div> 
              </div>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Jalan </label> 
              <div class="col-sm-8">
              <div id="JalanPelTel">
                <div id="RemoveJalanPelTel">
                  <input type="text" name="JALAN" class="form-control" placeholder="Jalan" required>
                </div> 
              </div>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> No Jalan </label> 
              <div class="col-sm-8">
              <div id="NoJalanPelTel">
                <div id="RemoveNoJalanPelTel">
                  <input type="text" name="NOJALAN" class="form-control" placeholder="No Jalan" required>
                </div> 
              </div>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Distrik </label> 
              <div class="col-sm-8">
              <div id="DistrikPelTel">
                <div id="RemoveDistrikPelTel">
                  <input type="text" name="DISTRIK" class="form-control" placeholder="Distrik" required>
                </div> 
              </div> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Kota </label> 
              <div class="col-sm-8">
              <div id="KotaPelTel">
                <div id="RemoveKotaPelTel">
                  <input type="text" name="KOTA" class="form-control" placeholder="Kota" required>
                </div> 
              </div> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Latitude </label> 
              <div class="col-sm-8">
              <input type="text" name="latitude" class="form-control" placeholder="Latitude " required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Longitude </label> 
              <div class="col-sm-8">
              <input type="text" name="longitude" class="form-control" placeholder="Longitude" required> 
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label"> Add On </label> 
              <div class="col-sm-8">
              <input type="text" name="ADD_ON" class="form-control" placeholder="Add On" > 
              </div>
              </div>


              <div class="form-group">
              <label class="col-sm-4 control-label"> </label> 
              <div class="col-sm-8">
              <button class="btn btn-primary" type="submit">Simpan</button>
              <button class="btn btn-success" onClick="refreshPage()">Reset</button>
              </div>
              </div>


           </form>


           <?php  echo form_close(); ?>


        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</body>

