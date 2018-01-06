        <script src="js/jquery-brg.js" type="text/javascript"></script>
<script type="text/javascript">
			$(document).ready(function() {
	//event keydown
		$('td.edit').keydown(function(event) {
			arr = $(this).attr('class').split(" ");
			if (event.which == 13) { 
				$.ajax({
					type : "POST",
					url : "pages/master_web/barang/confBarang.php",
					data : "value=" + $('.ajax input').val() + "&rownum=" + arr[2] + "&field=" + arr[1],
					success : function(data) {
						$('.ajax').html($('.ajax input').val());
						alert("Data sukses diedit");
						$('.ajax').removeClass('ajax');
					}
				});
			}

		});
		//event click
$('td.edit').click(function(){

 	$('.ajax').html($('.ajax input').val());
 	$('.ajax').removeClass('ajax');

 	$(this).addClass('ajax');
 	$(this).html('<input id="editbox" class="form-control" size="'+
	$(this).text().length+'" type="text" value="' +
 	$(this).text() + '">');

	$('#editbox').focus();								        

});
$('td.editKtg').click(function(){

 	$('.ajax').html($('.ajax input').val());
 	$('.ajax').removeClass('ajax');

 	$(this).addClass('ajax');
 	$(this).html('<select id="editbox" class="form-control"><option value="' +$(this).text() + '">' +$(this).text() + '</option</select>');

	$('#editbox').focus();								        

});
		// editbox
$('#editbox').live('blur',function(){
		$('.ajax').html($('.ajax input').val());
		$('.ajax').removeClass('ajax');
});



	}); </script>

 <div class="box-body table-responsive">
			<p class='text-success'>Note: klik di jenis barang untuk mengeditnya </p>	      
		<table id="example1" class="table table-bordered table-striped">
	      	<thead>
				<tr>
					<th><center>No</center></th>
					<th><center>Jenis Barang</center></th>
		            <th><center>Kategori</center></th>
		            <th><center>Aksi</center></th>
	            </tr>
	     	</thead>
		<tbody>
			<?php
		$query=mysql_query("select *,sc.m_kategori from services s
							JOIN sub_services sc on sc.no=s.kd_main_serve");
		$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($query)){

			?>
			<tr>
				<td><?php echo $no ?></td>
				<td class="edit nama <?php echo $rows -> kd_serve ?>"><?php echo ucwords($rows -> nama); ?></td>
				<td class="editKtg kd_main_serve <?php echo $rows -> kd_serve ?>"><?php echo ucwords($rows -> m_kategori); ?></td>			
				<td><a href="pages/master_web/barang/confBarang.php?aksi=delete&id=<?php echo $rows -> kd_serve ?>" onclick="return confirm('Yakin data akan dihapus ?')"><i class="fa fa-trash-o"></i></a></td>
			</tr>
			<?php	$no++;
				}
			?>			
		</tbody>
	</table>
</div>
<div class='clearfix'></div>