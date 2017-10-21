<section class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
             <div class="col-md-8">                
                <?php
                                  echo anchor(
                                           site_url('c_trans/index'),
                                            '<i class="icon-chevron-left"> Back to Index</i>',
                                            'class="btn btn-success"'
                                          );
                 ?></div>
              <div class="col-md-4">
                            
                 <?php echo form_open(site_url('c_trans/cari'), 'role="search" class="form"') ;?>       
                           <div class="input-group pull-right">                      
                                  <input type="text" name="cari" autocomplete="off" required  placeholder="Tanggal" class ='datetimepicker-month form-control' required>
                                 <span class="input-group-btn">
                                      <button class="btn btn-primary btn-sm" type="submit"><i class="icon-search"></i> Cari</button>
                                 </span>
                           </div>
                           
               </form> 
                <?php echo form_close(); ?>
            </div>
        </div>
    </header>
    <div class="panel-body">
       <div class="table-responsive">
    <table class="table table-hover table-condensed">
              
            <thead>
              <tr>
                <th class="header">#</th>
                
                    <th>Kode Harga</th>   
                
                    <th>Tanggal</th>   
                    <th>Nomor</th>
                    <th>Harga</th>
                   

                
                <th class="red header" align="right" width="160">Aksi</th>
              </tr>
            </thead>
  <tbody>
   <?php
   //kalo data tidak ada didatabase
   if(empty($query))
   {
    echo '<div class="alert alert-dismissable alert-danger fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-remove"></i></button>
                                        <span class="title"><i class="icon-remove-sign"></i> ERROR</span>
                                       Tidak ada data yang disimpan
                                    </div>';
   }else
   {
   $no = 1;
   foreach($query as $row)
   {
   ?>
   <tr>
   <td><?php echo $number++;?></td>
   <td><?php echo $row->kode_harga;?></td>
   <td><?php echo $row->tanggal;?></td>
   <td><?php echo $row->nomor;?></td>
   <td><?php echo $row->harga;?></td>
   
   <td class="center">
               
                <a  class ="btn btn-danger" href="<?php  echo  site_url('c_trans/hapus/'  .  $row->id_trans);  ?>"  title="delete" onclick="return confirm('Anda yakin ?');"> 
                <i class="icon-trash"></i> 
                </a> 
                   
                </a>
                </td>
   </tr>
   <?php
   $no++;
   }}
   ?>
   </table>
    
  <div></div></div>
    </tbody>
     </section>

