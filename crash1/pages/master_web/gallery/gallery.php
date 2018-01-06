<?php

	$q = $_GET["q"];
	include "../../../../config/koneksi.php";
	
	$query=mysql_query("select *,g.no as nogambar,s.kd_serve,s.nama,sc.m_kategori from gallery g
						join services s on s.kd_serve =g.kd_serve 
						join sub_services sc on sc.no=g.kd_main_serve WHERE g.kd_main_serve = '".$q."'");
    
	$sql=$query;
	$sql2=$query;
	
	$no=1;
	
	?>
        <div class="box-body table-responsive">
			<div class="callout callout-info">
				Jumlah Data : <?php echo mysql_num_rows($query); ?></strong>
			</div>        
		
		<table id="example1" class="table table-bordered table-striped">
	      	<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Image</center></th>
		            <th><center>Keterangan</center></th>
		            <th><center>Kategori</center></th>
		            <th colspan="2"><center>Aksi</center></th>
	            </tr>
	     	</thead>
			<tbody>
					<?php while($row=mysql_fetch_array($sql)){ ?>
				<tr>
		    		<td><?php echo $no++; ?></td>
					<td><img src="../images/portfolio/full/<?php echo $row['gambar']; ?>" width="100px" height="100px"></td>
					<td><?php echo ucwords ($row['ket']); ?></td>
		            <td><?php echo strtoupper($row['nama']); ?> </td>
		            <td><center><a href="#" onClick="javascript:editGallery('<?php echo $row['nogambar'] ?>','<?php echo $row['ket'] ?>','<?php echo $row['nama'] ?>','<?php echo $row['kd_serve'] ?>')"><button class="btn btn-sm btn-flat btn-success"><i class="fa fa-pencil"></i></button></a></center></td>
		    		<td><center><a href="#" onClick="return confirm('apakah yakin akan dihapus?')">
		    		<button class="btn btn-sm btn-warning btn-flat"><i class="fa fa-trash-o"></i></button></a></center></td>
				</tr>
				<?php } ?>
			</tbody> 
		</table>
	</div>

<div class="modal fade" id="galleryEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Gambar</h4>
          </div>
          <div class="modal-body">
            <form name="FormGal" method="post" action="pages/master_web/socmed/aksisocmed.php?aksi=editsocmed" enctype="multipart/form-data">
                <input type="hidden" name="nogambar">
                <input type="hidden" name="nomain">
                
                <label>Gambar :</label>
                 <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
                <input type="file" name="image2" >

                <hr>
                <label>Keterangan : </label>
                <textarea name="ket" class="form-control" cols="10" rows="5"></textarea>
                <hr>
                <label>Kategori</label>
                <?php
                	$qsub=mysql_query("select * from services");
                ?>
                <select name="kategori" class="form-control input-sm">
                	<option value="">-- Pilih Kategori --</option>
               <?php
               		while($data=mysql_fetch_assoc($qsub)){
               ?>
               		<option value="<?php echo $data['kd_serve'] ?>"><?php echo ucwords($data['nama']) ?></option>
               	<?php } ?>
                </select>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>  
<script>
    function editGallery(no,ket,nama,main){
        var GalNoGambar=no;
        var GalKet=ket;
        var GalKategori=nama;
        var GalNoMain=main;
        
        document.FormGal.nogambar.value=GalNoGambar;
        document.FormGal.nomain.value=GalNoMain;
        document.FormGal.ket.value=GalKet;
        document.FormGal.kategori.value=GalKategori;
        $("#galleryEdit").modal('show');
    }   
</script>