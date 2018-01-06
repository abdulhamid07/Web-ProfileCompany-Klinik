<?php	
	include "../../../../config/koneksi.php";
	

	if(isset($_POST['rownum']))
{
	update_data($_POST['field'],$_POST['value'],$_POST['rownum']);
}
if($_GET['aksi']=='delete'){
	$id=$_GET['id'];
	$q=mysql_query("delete from services where kd_serve='$id'");
	header("location:../../../media.php?fModule=pelayanan&err=1");

}
function get_data()
{

	$sql = "select *,sc.m_kategori from services s
							JOIN sub_services sc on sc.no=s.kd_main_serve";

	$rs = mysql_query($sql);

	return $rs;
}

function update_data($field, $data, $rownum)
{

	$sql = "update services set ".$field." = '".$data."' where kd_serve = ".$rownum;
echo $sql;
	mysql_query($sql) or die(mysql_error());

}
	
?>
