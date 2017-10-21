<section class="panel panel-default">
 <header class="panel-heading">
        <div class="row">
             <div class="col-md-8">                
                <?php
                                  echo anchor(
                                           site_url('c_trans/tambah_jenis'),
                                            '<i class="icon-plus"> Tambah Data</i>',
                                            'class="btn btn-primary"'
                                          );
                 ?></div>
               </div>
             </header>
   <div class="panel panel-success front">
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
                                <?php echo form_open(site_url('c_trans/cari'), 'role="search" class="form"') ;?>       
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
                
                    <th>Kode Harga</th>   
                
                    <th>Tanggal</th>   
                    <th>Nomor</th>
					<th>Harga Beli</th>
                    <th>Harga Jual</th>
                   

                
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
   <td><?php echo $row->beli;?></td>
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
   <div class="panel panel-default panel-block">
                        <div class="list-group">
                            <div class="list-group-item">
<div class="form-group">
                                    <label> Halaman : </label>
                                   <?php echo $this->pagination->create_links(); ?>
                                </div></div></div></div>
  
  <div></div></div>
    </tbody>
     </section>

