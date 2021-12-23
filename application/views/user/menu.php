<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu</h1>
    </div>

    <!-- Content Row -->
    <!-- Page Heading -->
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container testimonial-group">
            <h2 class="mx-auto align-items-center text-center mt-3"> Indonesian Food</h2>
            <div class="row text-center">
                <hr>
                <?php
                if ($products_indonesia) {
                    foreach ($products_indonesia as $prod) {
                ?>

                        <div class="col-4">
                            <img role="button" data-toggle="modal" data-target="#myModal<?php echo $prod['id']; ?>" src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class="mx-auto img-food">
                            <div class="col-sm-8">
                                <br>
                                <table>
                                    <tr>
                                        <td width="40%"><?php echo $prod['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">$<?php echo $prod['price']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4" style="padding-top: 15px"><a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                    <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                    </font>
                                </a></div>
                        </div>
                        <div class="modal fade" id="myModal<?php echo $prod['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><img src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class=" mx-auto  img-food">
                                        <div class="container-fluid">
                                            <br>

                                            <p class="text_modal"><?php echo $prod['name']; ?> </p>
                                            <p class="text_modal">$<?php echo $prod['price']; ?></p>
                                            <div class="text-wrap container-fluid">
                                                <p><?php echo $prod['Description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                            <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                } else {
                    echo "<h3 align='center'>Product Not Found</h3>";
                }
                ?>
            </div>
            <h2 class="mx-auto align-items-center text-center mt-3">Chinese Food</h2>
            <div class="row text-center">

                <hr>

                <?php
                if ($products_chinese) {
                    foreach ($products_chinese as $prod) {
                ?>
                        <div class="col-4 ">


                            <img role="button" data-toggle="modal" data-target="#myModal<?php echo $prod['id']; ?>" src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class=" mx-auto  img-food">
                            <div class="col-sm-8">
                                <br>
                                <table>
                                    <tr>
                                        <td width="40%"><?php echo $prod['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">$<?php echo $prod['price']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4" style="padding-top: 15px"><a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                    <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                    </font>
                                </a></div>
                        </div>
                        <div class="modal fade" id="myModal<?php echo $prod['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><img src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class=" mx-auto  img-food">
                                        <div class="container-fluid">
                                            <br>

                                            <p class="text_modal"><?php echo $prod['name']; ?> </p>
                                            <p class="text_modal">$<?php echo $prod['price']; ?></p>
                                            <div class="text-wrap container-fluid">
                                                <p><?php echo $prod['Description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                            <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<h3 align='center'>Product Not Found</h3>";
                }
                ?>
            </div>
            <h2 class="mx-auto align-items-center text-center mt-3"> Western Food</h2>
            <div class="row text-center ">
                <hr>
                <?php
                if ($products_western) {
                    foreach ($products_western as $prod) {
                ?>
                        <div class="col-4 ">


                            <img role="button" data-toggle="modal" data-target="#myModal<?php echo $prod['id']; ?>" src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class=" mx-auto  img-food">
                            <div class="col-sm-8">
                                <br>
                                <table>
                                    <tr>
                                        <td width="40%"><?php echo $prod['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">$<?php echo $prod['price']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4" style="padding-top: 15px"><a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                    <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                    </font>
                                </a></div>
                        </div>
                        <div class="modal fade" id="myModal<?php echo $prod['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><img src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class=" mx-auto  img-food">
                                        <div class="container-fluid">
                                            <br>

                                            <p class="text_modal"><?php echo $prod['name']; ?> </p>
                                            <p class="text_modal">$<?php echo $prod['price']; ?></p>
                                            <div class="text-wrap container-fluid">
                                                <p><?php echo $prod['Description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                            <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<h3 align='center'>Product Not Found</h3>";
                }
                ?>
            </div>
            <h2 class="mx-auto align-items-center text-center mt-3">Italian Food</h2>
            <div class="row text-center">
                <hr>
                <?php
                if ($products_italian) {
                    foreach ($products_italian as $prod) {
                ?>
                        <div class="col-4 ">


                            <img role="button" data-toggle="modal" data-target="#myModal<?php echo $prod['id']; ?>" src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class=" mx-auto  img-food">
                            <div class="col-sm-8">
                                <br>
                                <table>
                                    <tr>
                                        <td width="40%"><?php echo $prod['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="40%">$<?php echo $prod['price']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4" style="padding-top: 15px"><a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                    <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                    </font>
                                </a></div>
                        </div>
                        <div class="modal fade" id="myModal<?php echo $prod['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><img src="<?php echo base_url() . 'uploads/products/' . $prod['img']; ?>" class=" mx-auto  img-food">
                                        <div class="container-fluid">
                                            <br>

                                            <p class="text_modal"><?php echo $prod['name']; ?> </p>
                                            <p class="text_modal">$<?php echo $prod['price']; ?></p>
                                            <div class="text-wrap container-fluid">
                                                <p><?php echo $prod['Description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a id="add_to_cart" data-email="<?= $this->session->userdata('email'); ?>" data-user="<?php echo $this->session->userdata('user_id'); ?>" data-product="<?php echo $prod['id']; ?>" href="javascript:;">
                                            <font size="5"><i class="fa fa-cart-plus pull-right add_to_cart_control" aria-hidden="true"></i></font>
                                        </a>
                                    </div>
                                </div>
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

    <!-- /.container-fluid -->

    <!-- End of Main Content -->
    <!-- Content Row -->
    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>
<script type="text/javascript">
    $(document).on('click', '#add_to_cart', function() {
        user = $(this).attr('data-user');
        email = $(this).attr('data-email');
        product = $(this).attr('data-product');
        if (email == '') {
            window.location.href = '<?php echo base_url() . "auth"; ?>'
        } else {
            data = {
                'user_id': user,
                'product_id': product
            };
            console.log(data);
            $.post('<?php echo base_url() . "noname/add_to_cart" ?>', data, function(fb) {
                if (fb.match('1'))
                    alert('Product Successfully Added');
                else if (fb.match('2'))
                    alert('Product is Outof Stock')
                else
                    alert('Product Not Added');
            })
        }
    });
</script>
</body>

</html>