<style>
  .block {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 0px solid #CCCCCC;
    margin: 1em 0;
}
</style>
<div class="content">
   <div class="header">
      <h1 class="page-title"><?php echo $page_title;?></h1>
   </div>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Beranda</a> <span class="divider">/</span></li>
      <li class="active"><?php echo $page_title;?></li>
   </ul>

   <div class="container-fluid">
         <?php if(isset($msg)) { ?>                        
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">x</button>                
              <?php echo $msg;?>
            </div>  
        <?php } ?>  

      <div class="row-fluid">
        
        <form class="form" method="POST" action="">
          <div class="block span6">
			<label>Semester</label>
			<select id = "semester_tipe" name="semester_tipe" class="input-xlarge">            
			  <option value="1" <?php echo isset($semester_tipe) ? ($semester_tipe === '1' ? 'selected':'') : '' ;?> /> GANJIL
			  <option value="0" <?php echo isset($semester_tipe) ? ($semester_tipe === '0' ? 'selected':'') : '' ;?> /> GENAP
			</select>
			  
			<label>Tahun Akademik</label>
			<select id="tahun_akademik" name="tahun_akademik" class="input-xlarge">
			  <option value="2011-2012" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2011-2012' ? 'selected':'') : '' ;?> /> 2011-2012
			  <option value="2012-2013" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2012-2013' ? 'selected':'') : '' ;?> /> 2012-2013
			  <option value="2013-2014" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2013-2014' ? 'selected':'') : '' ;?> /> 2013-2014
			  <option value="2014-2015" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2014-2015' ? 'selected':'') : '' ;?> /> 2014-2015
			  <option value="2015-2016" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2015-2016' ? 'selected':'') : '' ;?> /> 2015-2016
			  <option value="2016-2017" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2016-2017' ? 'selected':'') : '' ;?> /> 2016-2017
			  <option value="2017-2018" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2017-2018' ? 'selected':'') : '' ;?> /> 2017-2018
			  <option value="2018-2019" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2018-2019' ? 'selected':'') : '' ;?> /> 2018-2019
			  <option value="2019-2020" <?php echo isset($tahun_akademik) ? ($tahun_akademik === '2019-2020' ? 'selected':'') : '' ;?> /> 2019-2020
			</select>
      <?php 
      $level=$this->session->userdata('level');
      if($level == 'ADMIN' OR $level=='SEKJUR'){?>
			  <div class="form" style="">
            <button type="submit" class="btn" onclick="ShowProgressAnimation();">Proses</button>
        </div>
      <?php } else {} ?>
			
          </div>
            
            <!--<label>Jumlah Populasi</label>  -->
            <input type="hidden" name="pop_unit" value="<?php echo isset($pop_unit) ? $pop_unit : '200' ;?>">  
            <!--<label>Probabilitas CrossOver</label> -->
            <input type="hidden" name="counter" value="<?php echo isset($counter) ? $counter: '0.60' ;?>">
            <!--<label>Probabilitas Mutasi</label>-->
            <input type="hidden" name="limiter" value="<?php echo isset($limiter) ? $limiter : '0.40' ;?>">
            <!--<label>Jumlah Generasi</label>-->
            <input type="hidden" name="locker" value="<?php echo isset($locker) ? $locker : '10000' ;?>">
        </form>
		
		<?php if($rs_jadwal->num_rows() !== 0):?>			
			<a href="<?php echo base_url();?>web/excel_report"> <button class="btn btn-primary pull-right"><i class="icon-plus"></i> Export to Excel</button></a>
			<br><br>
		<?php endif;?>
			
		<div id="loading-div-background">
		  <div id="loading-div" class="ui-corner-all">
			<img style="height:50px;width:50px;margin:30px;" src="<?php echo base_url()?>assets/img/please_wait.gif" alt="Loading.."/><br>PROCESSING<br>PLEASE WAIT
		  </div>
		</div>
		
		<?php if($rs_jadwal->num_rows() === 0):?>
		<!--
		<div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">×</button>             
			Tidak ada data.
        </div>
		-->
		<?php else: ?> 
		<div id="content_ajax">
          
          <div class="pagination pull-right" id="ajax_paging">
              <ul>
                  <?php echo $this->pagination->create_links();?>
              </ul>
          </div>           

          <div class="widget-content">            
              <table class="table table-striped table-bordered">
                 <thead>
                    <tr>
					   <th>#</th>
                       <th>Hari</th>
                       <th>Sesi</th>
                       <th>Jam</th>
                       <th>Matakuliah</th>
                       <th>SKS</th>
                       <th>Semester</th>
                       <th>Kelas</th>
                       <th>Dosen</th>
                       <th>Ruang</th>
                       
                    </tr>
                 </thead>
                 <tbody>
  
                 <?php 
                   $i =  1;
                   foreach ($rs_jadwal->result() as $jadwal) { ?>
                   <tr>
					  <td><?php echo $i;?></td>
                      <td><?php echo $jadwal->hari;?></td>
                      <td><?php echo $jadwal->sesi;?></td>
                      <td><?php echo $jadwal->jam_kuliah;?></td>
                      <td><?php echo $jadwal->nama_mk;?></td>
                      <td><?php echo $jadwal->sks;?></td>
                      <td><?php echo $jadwal->semester;?></td>
                      <td><?php echo $jadwal->kelas;?></td>
                      <td><?php echo $jadwal->dosen;?></td>
                      <td><?php echo $jadwal->ruang;?></td>                    
                   </tr>
                 <?php $i++;} ?>
                    
                 </tbody>
              </table>
           </div>
           
          
           <div class="pagination pull-right" id="ajax_paging">
              <ul>
                  <?php echo $this->pagination->create_links();?>
              </ul>
          </div>           
        </div>
        <?php endif; ?>
         <footer>
            <hr />

            <p class="pull-right">Design by <a href="#" target="_blank">Sistem Informasi</a></p>
            <p>&copy; 2018 <a href="#" target="_blank">Sistem Informasi</a></p>
         </footer>
      </div>
   </div>
</div>

