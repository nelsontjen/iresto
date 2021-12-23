  <!-- Begin Page Content -->
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Menu</h1>
      </div>
      <?= form_error('menuName', '<div class="alert alert-danger pl-3">', '</div>'); ?>
      <?= form_error('menuPhoto', '<div class="alert alert-danger pl-3">', '</div>'); ?>
      <?= form_error('menuQty', '<div class="alert alert-danger pl-3">', '</div>'); ?>
      <?= form_error('menuPrice', '<div class="alert alert-danger pl-3">', '</div>'); ?>
      <?= $this->session->flashdata('message'); ?>

      <div class="row">
          <div class="col">
              <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#CreateModal">Add New Food Menu</a>

              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col" class="text-center">Image</th>
                          <th scope="col">Name</th>
                          <th scope="col">qty</th>
                          <th scope="col">Price</th>
                          <th scope="col">Category</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>

                      <?php $i = 1; ?>
                      <?php foreach ($Product as $P) : ?>
                          <tr>
                              <th class='align-middle' scope="row"><?= $i ?></th>
                              <!-- <td>Gambar</td> -->
                              <td class="text-center"><img src="<?php echo base_url() . 'uploads/products/' . $P['img']; ?>" class="img-food-admin"></td>
                              <td class='align-middle'><?= $P['name'] ?></td>
                              <td class='align-middle'><?= $P['qty'] ?></td>
                              <td class='align-middle'><?= $P['price'] ?></td>
                              <td class='align-middle'><?= $P['name_category'] ?></td>
                              <td class='align-middle'>
                                  <a href="" class="badge badge-info " data-toggle="modal" data-target="#modal<?= $i ?>">Edit</a>
                                  <a href="" class="badge badge-danger" data-toggle="modal" data-target="#modalDel<?= $i ?>">Delete</a>
                              </td>
                          </tr>
                          <!-- Modal edit -->
                          <div class="modal fade" id="modal<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <?php echo form_open_multipart('Admin/Edit'); ?>
                                      <div class="modal-body">
                                          <!-- <div class="form-group">
                                              <label for="formGroupExampleInput">Original Menu Name</label>
                                              <input type="text" class="form-control" id="menuOName" name="menuOName" placeholder="menuID" value="<?= $P['products.id'] ?>" disabled>
                                          </div> -->
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Nama Menu</label>
                                              <input type="text" class="form-control" id="menuName" name="menuName" placeholder="Nama Menu" value="<?= $P['name'] ?>" readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Current Photo Menu</label>
                                              <input type="text" class="form-control" id="OldMenuPhoto" name="OldMenuPhoto" placeholder="Nama Menu" value="<?= $P['img'] ?>" readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Photo Menu</label>
                                              <input type="file" class="form-control" id="menuPhoto" name="menuPhoto" placeholder="Foto Menu" value="<?= $P['img'] ?>">
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Kuantitas</label>
                                              <input type="number" class="form-control" id="menuQty" name="menuQty" placeholder="Kuantitas" value="<?= $P['qty'] ?>">
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Harga Menu</label>
                                              <input type="number" class="form-control" id="menuPrice" name="menuPrice" placeholder="Harga Menu" value="<?= $P['price'] ?>">
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Deskripsi Menu</label>
                                              <input type="text" class="form-control" id="menuDesc" name="menuDesc" placeholder="Deskripsi Menu" value="<?= $P['Description'] ?>">
                                          </div>
                                          <div class="form-group">
                                              <label for="KategoriID"><b>Kategori Menu</b></label>
                                              <select name="KategoriID" class="form-control">
                                                  <option value="1">Indonesian Food</option>
                                                  <option value="2">Chinese Food</option>
                                                  <option value="3">Western Food</option>
                                                  <option value="4">Italian Food</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Edit</button>
                                      </div>
                                      </form>
                                  </div>
                              </div>
                          </div>

                          <!-- Modal Delete -->
                          <div class="modal fade" id="modalDel<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Delete Menu</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <?php echo form_open_multipart('Admin/Delete'); ?>
                                      <div class="modal-body">
                                          <div class="text-center">Yakin Mau Hapus ?</div>
                                          <!-- <div class="form-group">
                                              <label for="formGroupExampleInput">Original Menu Name</label>
                                              <input type="text" class="form-control" id="menuOName" name="menuOName" placeholder="menuID" value="<?= $P['products.id'] ?>" disabled>
                                          </div> -->
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Nama Menu</label>
                                              <input type="text" class="form-control" id="menuName" name="menuName" placeholder="Nama Menu" value="<?= $P['name'] ?>" readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Current Photo Menu</label>
                                              <input type="text" class="form-control" id="OldMenuPhoto" name="OldMenuPhoto" placeholder="Nama Menu" value="<?= $P['img'] ?>" readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Kuantitas</label>
                                              <input type="number" class="form-control" id="menuQty" name="menuQty" placeholder="Kuantitas" value="<?= $P['qty'] ?> " readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Harga Menu</label>
                                              <input type="number" class="form-control" id="menuPrice" name="menuPrice" placeholder="Harga Menu" value="<?= $P['price'] ?>" readonly>
                                          </div>
                                          <div class="form-group">
                                              <label for="formGroupExampleInput">Deskripsi Menu</label>
                                              <input type="text" class="form-control" id="menuDesc" name="menuDesc" placeholder="Deskripsi Menu" value="<?= $P['Description'] ?>" readonly>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                      </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <?php $i++; ?>
                      <?php endforeach ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <!-- /.container-fluid -->
  <!-- End of Main Content -->

  <!-- Modal Create -->
  <div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <?php echo form_open_multipart('Admin'); ?>
              <div class="modal-body">
                  <div class="form-group">
                      <label for="formGroupExampleInput">Nama Menu</label>
                      <input type="text" class="form-control" id="menuName" name="menuName" placeholder="Nama Menu">
                  </div>
                  <div class="form-group">
                      <label for="formGroupExampleInput">Photo Menu</label>
                      <input type="file" class="form-control" id="menuPhoto" name="menuPhoto" placeholder="Foto Menu">
                  </div>
                  <div class="form-group">
                      <label for="formGroupExampleInput">Kuantitas</label>
                      <input type="number" class="form-control" id="menuQty" name="menuQty" placeholder="Kuantitas">
                  </div>
                  <div class="form-group">
                      <label for="formGroupExampleInput">Harga Menu</label>
                      <input type="number" class="form-control" id="menuPrice" name="menuPrice" placeholder="Harga Menu">
                  </div>
                  <div class="form-group">
                      <label for="formGroupExampleInput">Deskripsi Menu</label>
                      <input type="text" class="form-control" id="menuDesc" name="menuDesc" placeholder="Deskripsi Menu">
                  </div>
                  <div class="form-group">
                      <label for="KategoriID"><b>Kategori Menu</b></label>
                      <select name="KategoriID" class="form-control">
                          <option disabled selected value> -- select an option -- </option>
                          <option value="1">Indonesian Food</option>
                          <option value="2">Chinese Food</option>
                          <option value="3">Western Food</option>
                          <option value="4">Italian Food</option>
                      </select>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add</button>
              </div>
              </form>
          </div>
      </div>
  </div>