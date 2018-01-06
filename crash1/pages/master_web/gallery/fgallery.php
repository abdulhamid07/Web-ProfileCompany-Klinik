<label>Pelayanan : </label>
<select class="form-control input-sm" style="width:200px" name="desa" onChange="tampil(this.value)">
	<option>-- Pilih Pelayanan--</option>
	<?php
        $query="select * from sub_services where no NOT IN(7) order by no";
        $rs = mysql_query($query);
        while($result_data = mysql_fetch_array($rs)){
            list($id_serve, $kd_main, $m_kategori)=$result_data;
	?>
        <option value="<?php echo "$id_serve"?>"><?php echo ucwords ("$m_kategori");?></option>
	<?php
    }
	?>
	</select>
	<br/>
	<div id="data"></div>