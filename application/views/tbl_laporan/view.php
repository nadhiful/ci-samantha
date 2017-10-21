<div class="panel panel-primary">
    <div class="panel-heading"><i class="icon-globe"></i> </div>
     
 <div class="panel-body">
       
  <section class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
             <div class="col-md-8">                
                <?php
                                  echo anchor(
                                           site_url('c_laporan/index'),
                                            '<i class="icon-chevron-left"> Back</i>',
                                            'class="btn btn-success"'
                                          );
                 ?></div>
               </div>
             </header>
    <div class="panel-panel-default">
    <div class="table-responsive">
    <table class="table table-hover table-condensed">
              
            <thead>
              <tr>
                <th class="header">#</th>
                    <th>Tanggal</th>   
                    <th>Kode Harga</th>   
                    <th>Nomor</th>
                                    
                          
              </tr>
            </thead>
  <tbody>
   <?php
   //kalo data tidak ada didatabase
   if(empty($lapor))
   {
    echo '<div class="alert alert-dismissable alert-danger fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-remove"></i></button>
                                        <span class="title"><i class="icon-remove-sign"></i> ERROR</span>
                                       Tidak ada data yang ditemukan
                                    </div>';
   }else
   {
   $no = 1;
   foreach($lapor as $row)
   {
   ?>
   <tr>
   <td><?php echo $number++;?></td>
   <td><?php echo $row->tanggal;?></td>
   <td><?php echo $row->kode_harga;?></td>
   <td><?php echo $row->nomor;?></td>
   </tr>
   <?php
   $no++;
   }}
   ?>
   </tbody>
   </table>
   </section>
   <div class="panel-body">
                <label for="jumlah" class="col-sm-2 control-label">Harga Jual Keseluruhan</label>
                <div class="col-sm-2">                                   
                  <input type="text" value="<?php foreach($jumlah as $row){ echo $row->coba; }?>" disabled class="form-control"required id="a">   
                  </div>
				<label for="kurang" class="col-sm-2 control-label">Harga Beli Keseluruhan</label>
				 <div class="col-sm-2">                                   
                  <input type="text" value="<?php foreach($kurang as $row){ echo $row->coba; }?>" disabled class="form-control" required id="b">   
                  </div>
				</div>
			
   	 <div class="panel-body">
		  <div class="form-group">
                <label for="kurang" class="col-sm-2 control-label">Keuntungan Bersih</label>
                <div class="col-sm-2">                                   
                  <input type="text" value="<?php foreach($result as $row){ echo $row->coba; }?>" disabled class="form-control" required id="b">   
                  </div>
				<label for="kurang" class="col-sm-2 control-label">Uang yang Terkumpul</label>
				 <div class="col-sm-2">                                   
                  <input type="text" value="<?php foreach($hasil as $row){ echo $row->coba; }?>" disabled class="form-control">   
                  </div>  
              	 </div>
				</div>


		
	</div>
     