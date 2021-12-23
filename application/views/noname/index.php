 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <!-- Sidebar Toggle (Topbar) -->
             <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
             </button>

             <!-- Topbar Search -->
             <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form> -->

             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto">

                 <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                 <li class="nav-item dropdown no-arrow d-sm-none">
                     <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fas fa-search fa-fw"></i>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                         <form class="form-inline mr-auto w-100 navbar-search">
                             <div class="input-group">
                                 <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary" type="button">
                                         <i class="fas fa-search fa-sm"></i>
                                     </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </li>

                 <!-- Nav Item - Alerts -->

                 <!-- Nav Item - Messages -->


                 <div class="topbar-divider d-none d-sm-block"></div>

                 <!-- Nav Item - User Information -->
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="<?= base_url('auth/'); ?>" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         <span>Log In</span>
                         <i class="fas fa-fw fa-sign-in-alt"></i>
                     </a>
                 </li>

             </ul>

         </nav>
         <!-- End of Topbar -->
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
                 <div class="container">
                     <div class="row">
                         <hr>
                         <?php
                            if ($products) {
                                foreach ($products as $prod) {
                            ?>
                                 <div class="col-sm">


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
     <!-- Footer -->
     <footer class="sticky-footer bg-white">
         <div class="container my-auto">
             <div class="copyright text-center my-auto">
                 <span>Copyright &copy; Restoran UTS IF430</span>
             </div>
             <div class="copyright text-center mt-3">
                 <span>Contact Us : </span>
             </div>
             <div class="copyright text-center mt-1">
                 <span>nelson1@student.umn.ac.id </span>
             </div>
             <div class="copyright text-center mt-1">
                 <span>hindra.pangadi@student.umn.ac.id </span>
             </div>
             <div class="copyright text-center mt-1">
                 <span>juan.tanandi@student.umn.ac.id </span>
             </div>
             <div class="copyright text-center mt-1">
                 <span>kevin.hindra@student.umn.ac.id </span>
             </div>
         </div>
     </footer>
     <!-- End of Footer -->

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