 <div class="modal fade" id="ModalSlider" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Slider</h4>
          </div>
          <div class="modal-body">
            <form name="addslider" method="post" action="pages/master_web/slider/aksislider.php?aksi=tambah" enctype="multipart/form-data">
                <label>Gambar :</label>
                <input type="file" name="image3" required>
                <hr>
                <label>Deskripsi : </label>
                <textarea id="editor1" class="form-control input-sm"required name="desc" rows="10" cols="80"></textarea>
                <hr>
                <label>Aktif :</label>
                <input type="radio" required name="aktif" value="y">Ya  &nbsp;
                <input type="radio" required name="aktif" value="n">Tidak
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>  