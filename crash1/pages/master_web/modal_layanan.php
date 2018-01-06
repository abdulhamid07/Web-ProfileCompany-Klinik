 <div class="modal fade" id="addModalLayanan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Layanan</h4>
          </div>
          <div class="modal-body">
            <form name="addlayanan" method="post" action="pages/master_web/aksilayanan.php?aksi=tambah" enctype="multipart/form-data">
                <label>Gambar :</label>
                <input type="file" name="image1" required>
                <hr>
                <label>Deskripsi : </label>
                <textarea id="editor1" class="form-control input-sm" required name="desc" rows="10" cols="80"></textarea>
                <hr>
                <label>Warna : </label>
                <select name="warna" class="form-control input-sm" required>
                  <option value="">-- Pilih Warna --</option>
                  <option value="color1">Biru</option>
                  <option value="color2">Merah</option>
                  <option value="color3">Hijau</option>
                  <option value="color4">Ungu</option>
                </select>
                <hr>
                <label>Aktif :</label>
                <input type="radio" name="aktif" value="y"required>Y  &nbsp;
                <input type="radio" name="aktif" value="n"required>N
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>  
