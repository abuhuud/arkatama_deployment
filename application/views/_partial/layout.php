<?php $this->load->view('_partial/head'); ?>

<body>

  <!-- ======= Header ======= -->
  <?php $this->load->view('_partial/header'); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php $this->load->view('_partial/sidebar'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Aplikasi</a></li>
          <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
     <?php echo $body ?>
    </section>

  </main><!-- End #main -->

  <?php $this->load->view('_partial/footer'); ?>