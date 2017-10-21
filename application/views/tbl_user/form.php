<?php echo form_open('c_user/simpan', 'class="form-horizontal"'); ?> 

<div class="panel panel-primary">
    <div class="panel-heading"><i class="glyphicon glyphicon-signal"></i> </div>
     
<div class="panel-body">
                           
<div class="form-group">
<label for="kode_harga" class="col-sm-2 control-label">Nama Depan <span class="required-input">*</span></label>
<div class="col-sm-6">     
<input type="text" name="f_name" value="<?php echo $fname; ?>" placeholder="First Name" class ='form-control input-sm required'> 
</div> 
</div> 
<div class="form-group">
<label for="kode_harga" class="col-sm-2 control-label">Nama Belakang <span class="required-input">*</span></label>
<div class="col-sm-6">  
<input  type="text"  class ='form-control input-sm required' name="l_name"  value="<?php  echo $lname; ?>" placeholder="Last Name"/> 
</div> 
</div> 

<div class="form-group">
<label for="kode_harga" class="col-sm-2 control-label">Username <span class="required-input">*</span></label>
<div class="col-sm-6">  
<input  type="text" class ='form-control input-sm required'  name="user_name"  value="<?php  echo  $username;  ?>" placeholder="User Name"/> 
</div> 
</div> 

<div class="form-group">
<label for="kode_harga" class="col-sm-2 control-label">Password<span class="required-input">*</span></label>
<div class="col-sm-6">  
<input  type="password"  class ='form-control input-sm required'  name="pass_word"  value="<?php  echo  $password;  ?>" placeholder="Password"/> 
</div> 
</div> 

<div class="form-group well">
<div class="col-sm-offset-2 col-sm-4">  
<input type="hidden" name="st" value="<?php echo $st ?>" /> 
<input type="hidden" name="id" value="<?php echo $userid ?>" /> 
<button class="btn btn-primary" type="submit" value="submit" name="submit"><i class="glyphicon glyphicon-floppy-save"></i> Save</button>
<a href="<?php echo site_url('c_user/index'); ?>"<button class="btn btn-default" type="submit" value="submit" name="submit"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</button></a> 

</div>
<?php echo form_close(); ?> 
</div> 
<div id="push"></div> 
</div