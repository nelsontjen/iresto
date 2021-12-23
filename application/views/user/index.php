<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">My Order</h1>
    </div>
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?= $this->session->flashdata('message'); ?>
    </div> -->

    <div class="container-fluid">
        <div class="container testimonial-group ">
            <div class="row text-center">
                <?php $total_Harga_Seluruh = 0; ?>
                
                <?php
                if ($buyProduct) {
                    foreach ($buyProduct as $prod) {
                ?>
                        <?php $total_Harga_Seluruh += $prod['b_qty'] * $prod['price'] ?>
                        <div class="col-4">
                            <img src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class="mx-auto img-food">
                            <div class=" text-wrap">
                                <br>
                                <table>
                                    <tr>
                                        <td width="40%">Nama : <?php echo $prod['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">Jumlah Beli : <?php echo $prod['b_qty']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">Total Harga : $<?php echo $prod['b_qty'] * $prod['price']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td class='align-middle'>
                                            <a href="" class="badge badge-danger" data-toggle="modal" data-target="#modalDeleteCart<?= $prod['product_id'] ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modalDeleteCart<?= $prod['product_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-secondary" id="exampleModalLabel">Delete Menu</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <?php echo form_open_multipart('User/Delete'); ?>
                                                <div class="modal-body">
                                                    <div class="text-center text-secondary">Yakin Mau Hapus ?</div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput" class="text-secondary">Menu ID</label>
                                                        <input type="text" class="form-control" id="menuID" name="menuID" placeholder="menuID" value="<?= $prod['product_id'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput" class="text-secondary">Nama Makanan</label>
                                                        <input type="text" class="form-control" id="menuName" name="menuName" placeholder="Nama Menu" value="<?= $prod['name'] ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </table>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<h3 align='center'>Product Not Found</h3>";
                }
                ?>
                
            </div>
        </div>
    </div>

    <div class="mx-auto align-items-center text-center">
        <?php if ($buyProduct) : ?>
            <br>
            <h2><?= 'Total Harga Seluruhnya : $' . $total_Harga_Seluruh ?></h2>
        <?php endif ?>
    </div>

    <!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->