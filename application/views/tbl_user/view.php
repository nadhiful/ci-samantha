<section class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
             <div class="col-md-8"></div>     
             <div class="col-md-4">
                                           
                 <?php echo form_open(site_url('c_harga/seacrh'), 'role="search" class="form"') ;?>       
                           <div class="input-group pull-right">                      
                                 <input type="text" class="form-control input-sm" placeholder="Cari data" name="q" autocomplete="off"> 
                                 <span class="input-group-btn">
                                      <button class="btn btn-primary btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
                                 </span>
                           </div>
                           
               </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </header>
    <div class="panel-body">
    <table class="table table-hover table-condensed">
              
            <thead>
              <tr>
                    <th class="header">First Name</th>   
                    <th>Last Name</th>   
                    <th>User Name</th>
                    <th>Password</th>   
                    <th>Aksi</th>
                   
                
              </tr>
            </thead>
  <tbody>             
<?php 
$no = 1; 
if ($data_get == NULL) { 
        ?> 
  <?php 
  } else { 
    foreach ($data_get as $dg) { 
   ?>
 <?php 
             } 
         } 
         ?> 

                                      
                <tr>
                
                <td><?php echo $dg->fname; ?></td>
                <td><?php echo $dg->lname; ?></td>  
                <td><?php echo $dg->username; ?></td> 
                <td><?php echo $dg->password; ?></td>
                <td><a class="btn btn-info" href="<?php echo site_url('c_user/edit/' . $dg->userid); ?>"> 
                <i class="glyphicon glyphicon-edit icon-white"></i> </a> </td>
                </tr> 
</section>      
</div> 
