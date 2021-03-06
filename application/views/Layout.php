
<?php $this->load->view("Templates/Head") ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/app.min.css">
<body>
    <div id="wrapper">
        <?php $this->load->view("Templates/Header") ?>
        <?php $this->load->view("Templates/Menu") ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0"><?= $subtitle; ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $view; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
            <!-- Footer Start -->
            <?php $this->load->view("Templates/Footer") ?>
        </div>
        <!-- End Content Page -->
    </div>
    <!-- End Wrapper -->
</body>
</html>