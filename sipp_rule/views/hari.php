<div class="content">
   <div class="header">
      <h1 class="page-title"><?php echo $page_title;?></h1>
   </div>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Beranda</a> <span class="divider">/</span></li>
      <li class="active"><?php echo $page_title;?></li>
   </ul>

   <div class="container-fluid">
         <?php if($this->session->flashdata('msg')) { ?>                        
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">�</button>                
              <?php echo $this->session->flashdata('msg');?>
            </div>  
        <?php } 
        $level=$this->session->userdata('level');
        if($level == 'ADMIN' OR $level=='SEKJUR'){?>  

      <div class="row-fluid">
        <a href="<?php echo base_url() . 'web/hari_add';?>"> <button class="btn btn-primary pull-right"><i class="icon-plus"></i> Data Baru</button></a>  
        <?php } else {} ?>   
        <!--
        <form class="form-inline" method="POST" action="<?php echo base_url() . 'web/hari_search'?>">
          <input type="text" placeholder="Nama" name="search_query" value="<?php echo isset($search_query) ? $search_query : '' ;?>">
          <button type="submit" class="btn">Cari</button>
          <a href="<?php echo base_url() . 'admin/content/travel';?>"><button type="button" class="btn">Clear</button> </a>
        </form>
		-->
		<br>
		 <br>
		<?php if($rs_hari->num_rows() === 0):?>
		<div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">�</button>             
			Tidak ada data.
        </div>  
		<?php else: ?> 	
          <div class="widget-content">            
              <table class="table table-striped table-bordered">
                 <thead>
                    <tr>                       
                       <th>#</th>
                       <th>Nama</th> 
                       <?php if($level == 'ADMIN' OR $level=='SEKJUR'){?>                     
                       <th style="width: 65px;"></th>
                     <?php } else {} ?>
                    </tr>
                 </thead>
                 <tbody>
  
                 <?php
                   $i = 1;
                   foreach ($rs_hari->result() as $hari) { ?>
                   <tr>                                        
                      <td><?php echo str_pad((int)$i,2,0,STR_PAD_LEFT);?></td>                    
                      <td><?php echo $hari->nama;?></td>                      
                      <?php if($level == 'ADMIN' OR $level=='SEKJUR'){?>
                      <td>
                        <a href="<?php echo base_url() . 'web/hari_edit/' .$hari->kode;?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="<?php echo base_url() . 'web/hari_delete/' .$hari->kode;?>" class="btn btn-small" onClick="return confirm('Anda yakin ingin menghapus data ini?')" ><i class="icon-trash"></i></a>
                      </td>
                    <?php } else {}?>
                   </tr>
                 <?php $i++;} ?>
                    
                 </tbody>
              </table>
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