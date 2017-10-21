<?php echo form_open('c_beli/simpan', 'class="form-horizontal"'); ?> 
<div class="panel panel-primary">
    <div class="panel-heading"><i class="icon-signal"></i> </div>
     
      <div class="panel-body">
     
      <div class="form-group">
                   <label for="tanggal" class="col-sm-2 control-label">Tanggal <span class="required-input">*</span></label>
                <div class="col-sm-6">                                   
                  <input type="text" name="day" value="<?php echo $tanggal; ?>" placeholder="Tanggal" class ='datetimepicker-month form-control' required >   
                  </div>
              </div> 

              <div class="form-group">
                <label for="kd_barang" class="col-sm-2 control-label">Kode Barang <span class="required-input">*</span></label>
                <div class="col-sm-6">
                <input type="text" name="kode" value="<?php echo $kd_barang; ?>" placeholder="Nama Barang" class ='form-control input-sm  required' disabled>   
                 </div>
              </div>
               
               <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama Barang <span class="required-input">*</span></label>
                <div class="col-sm-6">
                <input type="text" name="name" value="<?php echo $nama; ?>" placeholder="Saldo" class ='form-control input-sm  required' disabled required>   
                 </div>
              </div> 
              
             <div class="form-group">
                   <label for="beli" class="col-sm-2 control-label">Saldo <span class="required-input">*</span></label>
                <div class="col-sm-6">                                   
                  <input type="text" name="buy" value="<?php echo $beli; ?>" placeholder="Saldo" class ='form-control input-sm  required' required >   
                </div>
              </div>
 

              
<div class="form-group well">
<div class="col-sm-offset-2 col-sm-4">        
<input type="hidden" name="st" value="<?php echo $st ?>" /> 
<input type="hidden" name="id" value="<?php echo $id_beli ?>" />
<button class="btn btn-primary" type="submit" value="submit" name="submit"><i class="icon-save"></i> Save</button>
<a href="<?php echo site_url('c_beli/index'); ?>" <button class="btn btn-default" type="submit" value="submit" name="submit"><i class="icon-chevron-left"></i>Kembali</button></a> 

</div>
<?php echo form_close(); ?> 
</div> 
<div id="push"></div> 
</div>