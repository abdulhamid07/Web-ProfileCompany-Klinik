<div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
          </div>
          <div class="modal-body">
                        <form  name="adduser" method="post" action="pages/dashboard/aksidashboard.php?aksi=adduser" onSubmit="return ValAddUser()">                      
                            <label>Nama</label>
                                <input class="form-control input-sm" required type="text" name="nama" placeholder="Nama Lengkap"/>
                            <hr>
                            <label>Username</label>
                                <input class="form-control input-sm" required type="text" name="usr" placeholder="Username"/>
                            <hr>                  
                            <label>Password</label>
                                <input class="form-control input-sm" required type="password" name="pass" placeholder="Password"/>
                            <hr>
                            <label>Sebagai</label>
                            <input type="radio" value="a" required name="level"> Admin &nbsp;
                            <input type="radio" value="u" required name="level"> User

                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
                       </div>
            </form>
        </div>
      </div>
    </div>

<div class="modal fade" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
          </div>
          <div class="modal-body">
                        <form  name="editusr" method="post" action="pages/dashboard/aksidashboard.php?aksi=edit" onSubmit="return ValEditUser()">                      
                            <input type="hidden" name="adminno"/>
                            <label>Nama</label>
                                <input class="form-control input-sm" required type="text" name="nama" placeholder="Nama Lengkap"/>
                            <hr>
                            <label>Username</label>
                                <input class="form-control input-sm" required type="text" name="usr" placeholder="Username"/>
                            <hr>                  
                            <label>Password Baru</label>
                                <input class="form-control input-sm" required type="text" name="pass" placeholder="Password"/>
                            <hr>
                            <label>Sebagai</label>
                            <select class="form-control input-sm" required name="level">
                              <option value="">-- Pilih Level --</option>
                              <option value="a">Admin</option>
                              <option value="u">User</option>
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