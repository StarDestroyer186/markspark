<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mark Spark</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet"  />
    <!-- Icon css -->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Swiper css -->
    <link  rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css" />
     <!-- Style css -->
    <link rel="stylesheet" href="<?php echo base_url('website-assets/css/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('website-assets/css/responsive.css'); ?>" />

    <meta name="google-site-verification" content="MyNDEobCsXXdAbirhPck3sderqgLn-T7OEO4i-ZEJwo" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <!-- ============HEADER ==========-->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('website-assets/images/logo.png'); ?>" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation" >
            <i class="ri-menu-3-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('web'); ?>">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link has_drop" href="<?php echo base_url('web/about'); ?>">About Us </a>
                <span class="openDrop"><i class="ri-arrow-down-s-line"></i></span>
                <div class="drop_down">
                  <ul>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/about'); ?>">Who We Are</a>
                      </li>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/research_methodology'); ?>">Research Methodology</a>
                      </li>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/client_testimonials'); ?>">Client Testimonials</a>
                      </li>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/why_choose_us'); ?>">Why Choose Us</a>
                      </li>
                     
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link has_drop" href="<?php echo base_url('web/reports'); ?>">Reports </a>
                <span class="openDrop"><i class="ri-arrow-down-s-line"></i></span>
                <div class="drop_down mega_dropdown">
                  <ul>
                    <?php 
             
                          if(!empty($reportcategoriesweb)) {
                          foreach($reportcategoriesweb as $row) {
                         ?>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/reportsCatwise/'); ?><?php echo str_replace(" ", "-", $row["report_category_name"]);?>/<?php echo $row["report_category_id"]; ?>" target="_blank"><?php echo $row["report_category_name"];?></a>
                      </li>

                    <?php } } ?>
                      <!-- <li>
                        <a class="drop-link" href="#">Agriculture</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Automotive and Transportation</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Chemicals and Materials</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Consumer Goods</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Energy and Power</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Food and Beverage</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Healthcare and Pharmaceuticals</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">ICT</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Machinery and Equipment</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Medical Devices</a>
                      </li>
                      <li>
                        <a class="drop-link" href="#">Semiconductors and Electronics</a>
                      </li> -->
                     
                     
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link has_drop" href="#">Services </a>
                <span class="openDrop"><i class="ri-arrow-down-s-line"></i></span>
                <div class="drop_down">
                  <ul>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/consulting_model'); ?>">Consulting Model</a>
                      </li>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/syndicate_client'); ?>">Syndicate & Client Model</a>
                      </li>
                      <li>
                        <a class="drop-link" href="<?php echo base_url('web/branding_consumer'); ?>">Branding and Consumer Perception Analysis</a>
                      </li>
                   
                     
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('web/contact_us'); ?>">Contact us</a>
              </li>
            </ul>
          </div>
          <div class="header_right">
            <form class="d-flex" role="search">
              <input
                class="form-control "
                type="search"
                placeholder="Search here.."
                aria-label="Search"
              />
              <button class="ser_btn" type="submit">
                <i class="ri-search-line"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- ============HEADER ==========-->