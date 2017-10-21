<?php echo form_open('c_laporan/laporan', 'class="form-horizontal"'); ?> 
<div class="panel panel-success front">
                        <div class="panel-heading"><i class="icon-signal"></i> </div>
     
      <div class="panel-body">
     
<section class="panel panel-default">
    <header class="panel-heading">
       <div class="list-group-item">
                                <h4 class="section-title">Cari Data Berdasarkan Tanggal</h4>
                                <div class="form-group">
                                </div>
                                 <div class="form-group">
                                        <label for="fromdate" class="col-lg-4 control-label">Dari</label>
                                        <div class="col-sm-4">
                                            <input id="fromdate"  name="fromdate" type="text" value="" class="datetimepicker-range form-control" placeholder="Start Date" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="todate" class="col-lg-4 control-label">Ke</label>
                                        <div class="col-sm-4">
                                            <input id="todate" name="todate" type="text" value="" class="datetimepicker-range form-control" placeholder="End Date" required>
                                        </div>
                                    </div>
                                  </div>
    </header>
<div class="panel panel-default panel-block">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="form-group">
                                  <div>
                                  <button class="btn btn-primary" type="submit" value="submit" name="submit"><i class="icon-save"></i>  Cari</button>
                                  </div>
                                </div></div></div></div>      

</div></div></div>
</section>
</form>
  