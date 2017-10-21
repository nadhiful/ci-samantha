<!-- Bagian inilah yang memerintahkan jQuery untuk mengirimkan request -->
<!--
<script type='text/javascript'>
   var site = "</?php echo site_url();?>";
   $(function(){
      $('.autocomplete').autocomplete({
         // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
          serviceUrl: site+'/c_harga/search',
          // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
          onSelect: function (suggestion) {
              alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
          }
      });  
   });
</script>-->
<?php echo form_open('c_harga/simpan', 'class="form-horizontal"'); ?> 
<div class="panel panel-primary">
    <div class="panel-heading"><i class="icon-signal"></i> </div>
     
      <div class="panel-body">
     
      <div class="form-group">
                   <label for="kode_harga" class="col-sm-2 control-label">Kode Harga <span class="required-input">*</span></label>
                <div class="col-sm-6">                                   
                  <input type="text" name="kd_harga" value="<?php echo $kode_harga; ?>" placeholder="Kode Harga" class ='form-control input-sm required' id="autocomplete" required>
				  <!---<input type="text" class="autocomplete" id="autocomplete1"/>-->
              </div>
			  </div> 

             <div class="form-group">
                   <label for="harga_beli" class="col-sm-2 control-label">Harga Beli <span class="required-input">*</span></label>
                <div class="col-sm-6">                                   
                  <input type="text" name="har_beli" value="<?php echo $harga_beli; ?>" placeholder="Harga Beli" class ='form-control input-sm  required' required >   
                </div>
              </div>

              <div class="form-group">
                   <label for="harga_jual" class="col-sm-2 control-label">Harga Jual <span class="required-input">*</span></label>
                <div class="col-sm-6">                                   
                  <input type="text" name="har_jual" value="<?php echo $harga_jual; ?>" placeholder="Harga Jual" class ='form-control input-sm  required' required >   
                </div>
              </div>
              
<div class="form-group well">
<div class="col-sm-offset-2 col-sm-4">        
<input type="hidden" name="st" value="<?php echo $st ?>" /> 
<input type="hidden" name="id" value="<?php echo $id_harga ?>" /> 
<button class="btn btn-primary" type="submit" value="submit" name="submit"><i class="icon-save"></i> Save</button>
<a href="<?php echo site_url('c_harga/index'); ?>"<button class="btn btn-default" type="submit" value="submit" name="submit"><i class="icon-chevron-left"></i> Kembali</button></a> 

</div>
<?php echo form_close(); ?> 
</div> 
<div id="push"></div> 
</div>