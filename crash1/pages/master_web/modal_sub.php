<div class="modal fade" id="addModalSub" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Tambah Sub Menu</h4>
          </div>
          <div class="modal-body">
            <form name="addmenu" method="post" action="pages/master_web/aksimenu.php?aksi=tambahsub">
                <label>Main Menu : </label>
                <select name="main" class="form-control input-sm" required>
                  <option value="">-- PILIH MENU UTAMA --</option>
                <?php $q=mysql_query("select * from main_menu");
                      while($row=mysql_fetch_assoc($q)){
                 ?>
                 <option value="<?php echo $row['no'] ?>"><?php echo strtoupper($row['menu']) ?></option>
                 <?php } ?>
                </select>
                  <hr>
                  <label>Sub Menu : </label>
                  <input type="text" name="submain" class="form-control input-sm" required placeholder="Sub Menu" size="15">
                  <hr>
                  <label>Link : </label>
                  <input type="text" name="link" class="form-control input-sm" required placeholder="Link Sub Menu">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="EditSubMenu" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Sub Menu</h4>
          </div>
          <div class="modal-body">
           <form name="editsubmenu" method="post" action="pages/master_web/aksimenu.php?aksi=editsub">
                <input type="hidden" name="no">
                <label>Main Menu : </label>
                <select name="main" class="form-control input-sm" required>
                  <option value="">-- PILIH MENU UTAMA --</option>
                <?php $q=mysql_query("select * from main_menu");
                      while($row=mysql_fetch_assoc($q)){
                 ?>
                 <option value="<?php echo $row['no'] ?>"><?php echo strtoupper($row['menu']) ?></option>
                 <?php } ?>
                </select>
                <hr>
                <label>Sub Menu : </label>
                <input type="text" name="submenu" class="form-control input-sm" required placeholder="Sub Menu" size="15">
                <hr>
                <label>Link : </label>
                <input type="text" name="link" class="form-control input-sm" required placeholder="Link Sub Menu">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>