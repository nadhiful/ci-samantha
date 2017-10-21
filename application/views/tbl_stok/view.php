<section class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
            <div class="col-md-4">
                  
                 <!--<//?php echo form_open(site_url('c_stok/cari'), 'role="search" class="form"') ;?>       
                           <div class="input-group pull-right">                      
                                 <input type="text" class="form-control input-sm" placeholder="Cari data" name="cari" autocomplete="off" required> 
                                 <span class="input-group-btn">
                                      <button class="btn btn-primary btn-sm" type="submit"><i class="icon-search"></i> Cari</button>
                                 </span>
                           </div>
                           
               </form>--> 
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
                    <th>Kode Barang</th>                   
                    <th>Nama Barang</th>
                    <th>Saldo</th>   
                
                <!--<th class="red header" align="right" width="160">Aksi</th>-->
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
                <td><?php echo $number; ?></td> 
                <td><?php echo $row->kd_barang; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->beli; ?></td> 
                <td class="center">
               <!---<a class="btn btn-primary" href="</?php echo site_url('c_stok/edit/' . $row->kd_barang); ?>">
                <i class="icon-edit icon-white"></i>  
                                                               
                </a>
                <a  class ="btn btn-danger" href="</?php  echo  site_url('c_stok/hapus/'  .  $row->kd_barang);  ?>"  title="delete" onclick="return confirm('Anda yakin ?');"> 
                <i class="icon-trash"></i> 
                </a> 
                   
                </a>
                </td>-->
                </tr>
                
       <?php
   $no++;
   }}
   ?>
         
       </tbody>
       </div></div></div>
     </section>

