<script>
function selectChange() {
    if (document.getElementById("kd_harga").value == "5"){
        document.getElementById("select").value = "6500";
		document.getElementById("select2").value ="5500";
    }     
    else if(document.getElementById("kd_harga").value == "10"){
		 document.getElementById("select").value = "11000";
		 document.getElementById("select2").value = "10500";
		 }
	else if(document.getElementById("kd_harga").value == "20"){
		 document.getElementById("select").value = "21000";
		 document.getElementById("select2").value = "20000";
		 }
	else if(document.getElementById("kd_harga").value == "25"){
		 document.getElementById("select").value = "24500";
		 document.getElementById("select2").value = "25000";
		 }
	else if(document.getElementById("kd_harga").value == "50"){
		 document.getElementById("select").value = "49000";
		 document.getElementById("select2").value = "50000";
		 }
	else if (document.getElementById("kd_harga").value == "100"){
		 document.getElementById("select").value = "98000";
		 document.getElementById("select2").value = "100000";
		 }	 
}
</script>
<?php echo form_open('c_trans/simpan', 'class="form-horizontal"'); ?> 
<div class="panel panel-primary">
    <div class="panel-heading"><i class="icon-signal"></i> </div>
    <div class="panel-body">
		<div class="form-group">
               <label for="kode_harga" class="col-sm-2 control-label">Kode Harga <span class="required-input">*</span></label>
			  <div class="col-sm-2">                                   
        	  <select class="form-control select2 placeholder " name="kd_harga" id="kd_harga" onchange="selectChange()">
			  <option></option>
			  <option value="5">5</option>
			  <option value="10">10</option>
			  <option value="20">20</option>	
			  <option value="25">25</option> 
			  <option value="50">50</option> 
			  <option value="100">100</option>	       
			 </select> 
			  </div> 
			 </div>
		
		<div class="form-group">
                   <label for="harga" class="col-sm-2 control-label">Harga Jual<span class="required-input">*</span></label>
                <div class="col-sm-2">                                   
                  <input type="text" name="select" id="select" placeholder="Harga Jual" class="uneditable-input" readonly="true">   
            </div>
            </div>
		<div class="form-group">
                   <label for="beli" class="col-sm-2 control-label">Harga Beli<span class="required-input">*</span></label>
                <div class="col-sm-2">                                   
                  <input type="text" name="select2" id="select2" placeholder="Harga Beli" class="uneditable-input" readonly="true">   
			</div>
            </div>	
			 		
              <div class="form-group">
                <label for="tang" class="col-sm-2 control-label">Tanggal <span class="required-input">*</span></label>
                <div class="col-sm-6">                                   
                <input type="text" name="tanggal" value="<?php echo $tanggal; ?>" placeholder="Tanggal" class ='datetimepicker-month form-control' required>   
                 </div>
              </div>
              
            <div class="form-group">
                   <label for="nomor" class="col-sm-2 control-label">Nomor <span class="required-input">*</span></label>
                <div class="col-sm-6">                                   
                  <input type="text" name="numb" value="<?php echo $nomor; ?>" placeholder="Nomor" class ='form-control input-sm  required'required >   
                </div>
              </div>
              
<div class="form-group well">
<div class="col-sm-offset-2 col-sm-4">        
<input type="hidden" name="st" value="<?php echo $st ?>" /> 
<input type="hidden" name="id" value="<?php echo $id_trans ?>" />
<button class="btn btn-primary" type="submit" value="submit" name="submit"><i class="icon-save"></i> Save</button>
<a href="<?php echo site_url('c_trans/index'); ?>" <button class="btn btn-default" type="submit" value="submit" name="submit"><i class="icon-chevron-left"></i>Kembali</button></a> 

</div>
<?php echo form_close(); ?> 
</div>- 
<div id="push"></div> 
</div>

<!--pakek id <script>#</script>
pakek class<script>.</script>-->
