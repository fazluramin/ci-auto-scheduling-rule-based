<?php foreach($rs_hari->result() as $hari) {} ?>
<div class="content">
   <div class="header">
      <h1 class="page-title"><?php echo $page_title;?></h1>
   </div>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Beranda</a> <span class="divider">/</span></li>
      <li><a href="<?php echo base_url();?>web/hari">Modul Hari</a> <span class="divider">/</span></li>
      <li class="active">Edit Data</li>
   </ul>
   
   <div class="container-fluid">
      <div class="row-fluid">
        <?php if(isset($msg)) { ?>                        
              <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">�</button>                
                <?php echo $msg;?>
              </div>  
        <?php } ?>    

        <form id="tab" method="POST" >                       
            <label>Nama Hari</label>
            <input id="nama" type="text" value="<?php echo $hari->nama;?>" name="nama" class="input-xsmall" />
            
            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="<?php echo base_url() .'web/hari'; ?>"><button type="button" class="btn">Cancel</button></a>
            </div>
        </form>

        <footer>
          <hr />
          <p class="pull-right">Design by <a href="#" target="_blank">Sistem Informasi</a></p>
            <p>&copy; 2018 <a href="#" target="_blank">Sistem Informasi</a></p>
        </footer>
      </div>
   </div>
</div>      