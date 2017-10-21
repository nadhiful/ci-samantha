  <section class="panel panel-default">
   
     <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                     <i class="icon-plus"></i> Cari Kode Harga
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <div class="col-md-4">                                           
                                <?php echo form_open(site_url('c_harga/cari'), 'role="search" class="form"') ;?>       
                                <div class="input-group pull-right">                      
                                 <input type="text" class="form-control input-sm" placeholder="Masukkan Kode Harga" name="cari" autocomplete="off" required> 
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
    <table class="table table-hover table-condensed" id="harga">
              
            <thead>
              <tr>
                <th class="header">#</th>
                
                    <th>Kode Harga</th>   
                
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
   <td><?php echo $row->harga_beli;?></td>
   <td><?php echo $row->harga_jual;?></td>
   <td class="center">
                <a class="btn btn-primary" href="<?php echo site_url('c_harga/edit/' . $row->id_harga); ?>">
                <i class="icon-edit icon-white"></i>  
                                                               
                </a>
                <a  class ="btn btn-danger" href="<?php  echo  site_url('c_harga/hapus/'  .  $row->id_harga);  ?>"  title="delete" onclick="return confirm('Anda yakin ?');"> 
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
                                    <div>
                                      <ul class="pagination pagination-demo">
                                        <li><?php echo $halaman;?></li>
                                       </ul>
                                    </div>
                                </div></div></div></div>
  
  <div></div></div>
    </tbody>
     </section>

