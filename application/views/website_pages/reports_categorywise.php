<main class="main-section-page report-page">
      <section class="inner_banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="innerbanner_caption text-center">
                        <h1 class="text-white">INDUSTRY RESEARCH REPORTS</h1>
                    </div>
                </div>
            </div>
        </div>
      </section>  
      <section>
        <div class="container">
        <div class="main_heading text-center mb-3">
            <h2>Gain a deeper understanding of global markets Research</h2>
        </div>
        <p class="text-center">Get access to defining indicators and how the trends shape the future of markets. Our set of 18,000+ reports cover more than 20 industry verticals.
            In each report we break down the market into segments, analyse each segment, understand the dynamics, the companies operating in this space and arrive at a solution that helps you gain competitive advantage.
        </p>
        </div>
      
      </section> 
      <section class="reports_sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="reports_wraper">
                        <div class="row gy-4">
                            <div class="col-sm-4">
                                <div class="categories">
                                    <h4 class="cat_title">Categories</h4>
                                    <ul class="cat_list">
                                        <?php 
                                        $i = 1;
                                            if(!empty($reportcategoriesweb)) {
                                              foreach($reportcategoriesweb as $row) {

                                                $imgsrc = base_url("website-assets/images/icons/cat-icon-".$i.".svg");
                                        ?>
                                        <li>
                                            <a href="<?php echo base_url('web/reportsCatwise/'); ?><?php echo str_replace(" ", "-", $row["report_category_name"]);?>/<?php echo $row["report_category_id"]; ?>" target="_blank">
                                                <div class="cat_icon">
                                                    <img src="<?php echo $imgsrc; ?>" alt="">
                                                </div>
                                                <p><?php echo $row["report_category_name"];?></p>
                                            </a>
                                        </li>
                                        <?php $i++; } } ?>
                                        <!-- <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-2.svg" alt="">
                                                </div>
                                                <p>Agriculture</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-3.svg" alt="">
                                                </div>
                                                <p>Animal Nutrition & Wellness</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-4.svg" alt="">
                                                </div>
                                                <p>Automotive</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-5.svg" alt="">
                                                </div>
                                                <p>Chemical & Materials</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-6.svg" alt="">
                                                </div>
                                                <p>Consumer Goods & Services</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-7.svg" alt="">
                                                </div>
                                                <p>Financial Services and
                                                Investment Intelligence</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-8.svg" alt="">
                                                </div>
                                                <p>Food & Beverages</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="cat_icon">
                                                    <img src="assets/images/icons/cat-icon-9.svg" alt="">
                                                </div>
                                                <p>Healthcare</p>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8">
                            <p>2034 <b>Industry Research Report</b></p>
                                <div class="reports_list">
                                    <?php 
                                        if(!empty($reportcategorieslistwebcatwise)) {
                                              foreach($reportcategorieslistwebcatwise as $row) {

                                        ?>

                                    <div class="reportlist_item">
                                        <h5><?php echo $row["report_category_list_name"];?></h5>
                                        <a href="<?php echo base_url('web/report_details/'); ?><?php echo $row["report_category_list_id"]; ?>" class="custom_btn">View details<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                    
                                    <?php } } ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </main>