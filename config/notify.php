<?php
function getMessage(){
	switch(@$_GET['err'])
	{
		case 1: echo "<div class=\"alert alert-success alert-dismissable\">
                                        <i class=\"fa fa-check\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Hapus Sukses</div>"; break;
		case 2: echo "<div class=\"alert alert-success alert-dismissable\">
                                        <i class=\"fa fa-check\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Edit Sukses</div>"; break;
		case 3: echo "<div class=\"alert alert-success alert-dismissable\">
												<i class=\"fa fa-check\"></i>
												<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Berhasil Ditambah</div>"; break;
		case 4: echo "<div class=\"alert alert-warning alert-dismissable\">
												<i class=\"fa fa-warning\"></i>
												<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Gagal Dihapus</div>"; break;
		case 5: echo "<div class=\"alert alert-warning alert-dismissable\">
												<i class=\"fa fa-warning\"></i>
												<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Gagal Diedit</div>"; break;
		case 6: echo "<div class=\"alert alert-warning alert-dismissable\">
												<i class=\"fa fa-warning\"></i>
												<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Gagal Ditambah</div>"; break;

		case 7: echo "<div class=\"alert alert-warning alert-dismissable\">
												<i class=\"fa fa-warning\"></i>
												<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Username atau Password Anda Salah</div></div>"; break;
		case 8: echo "<div class=\"alert alert-warning alert-dismissable\">
												<i class=\"fa fa-warning\"></i>
												<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Tipe data yang anda masukkan tidak dikenali/ Gagal Ditambah</div>"; break;
		case 9: echo "<div class=\"alert alert-warning alert-dismissable\">
												<i class=\"fa fa-warning\"></i>
												<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
		Gambar gagal diupload, ukuran max gambar 10 mb dan gunakan ekstensi(jpg,jpeg,png,gif,bmp)</div>"; break;
		
	}
}

?>