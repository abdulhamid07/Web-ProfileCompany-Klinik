<div class="modal fade" id="addModalMenu" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Menu</h4>
          </div>
          <div class="modal-body">
            <form name="addmenu" method="post" action="pages/master_web/aksimenu.php?aksi=tambah">
                <label>Menu : </label>
                <input type="text" name="judul" class="form-control input-sm"required placeholder="Nama Menu" maxlength="15">
                <hr>
                <label>Link : </label>
                <input type="text" name="ling" class="form-control input-sm"required placeholder="Link Menu" size="15">
                <hr>
                <label>Aktif : </label>
                <select name="aktif" class="form-control input-sm" required>
                  <option value="">-- Pilih Aktif --</option>
                  <option value="y">Aktif</option>
                  <option value="n">Tidak Aktif</option>
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

    <div class="modal fade" id="EditMain" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Menu</h4>
          </div>
          <div class="modal-body">
            <form name="editmenu" method="post" action="pages/master_web/aksimenu.php?aksi=editmain">
                <input type="hidden" name="no" id="menuid"> 
                <label>Menu : </label>
                <input type="text" name="judul" id="menujudul" class="form-control input-sm"required placeholder="Nama Menu" maxlength="15">
                <hr>
                <label>Link : </label>
                <input type="text" name="ling" id="menulink" class="form-control input-sm"required placeholder="Link Menu" size="15">
                <hr>
                <label>Aktif : </label>
                 <select name="aktif" class="form-control input-sm"required>
                  <option value="">-- Pilih Aktif --</option>
                  <option value="y">Aktif</option>
                  <option value="n">Tidak Aktif</option>
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