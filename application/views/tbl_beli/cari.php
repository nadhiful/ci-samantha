<section class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
             <div class="col-md-8">                
                <?php
                                  echo anchor(
                                           site_url('c_beli/index'),
                                            '<i class="icon-chevron-left"> Back to Index</i>',
                                            'class="btn btn-success"'
                                          );
                 ?></div>
               </div>
             </header>
             <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                     <i class="icon-chevron-down"></i> Cari Tanggal Transaksi
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <div class="col-md-4">                                           
                                <?php echo form_open(site_url('c_beli/cari'), 'role="search" class="form"') ;?>       
                                <div class="input-group pull-right">                      
                                 <input type="text" name="cari" autocomplete="off" required  placeholder="Tanggal" class ='datetimepicker-month form-control' required>
                                 <span class="input-group-btn">
                                  <button class="btn btn-success btn-sm" type="submit" value="cari"><i class="icon-search"></i> Cari</button>
                                 </span>
                           </div>                           
                <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
    <div class="panel-body">
       <div class="table-responsive">
    <table class="table table-hover table-condensed">
              
            <thead>
              <tr>
                <th class="header">#</th>
                
                    <th>Tanggal</th>   
                   
                    <th>Kode Barang</th>                   
                    <th>Nama Barang</th> 
                    <th>Saldo</th>   
                
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
                <td><?php echo $number++; ?></td> 
                <td><?php echo $row->tanggal; ?></td>
                <td><?php echo $row->kd_barang; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->beli; ?></td> 
                <td class="center">
                <a  class ="btn btn-danger" href="<?php  echo  site_url('c_beli/hapus/'  .  $row->id_beli);  ?>"  title="delete" onclick="return confirm('Anda yakin ?');"> 
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

