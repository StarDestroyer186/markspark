<script>
  const data = [
    { "name": "Report 1", "url": "reports-details.php" },
    { "name": "Report 2", "url": "reports-details.php" },
    { "name": "Monthly Report", "url": "reports-details.php" },
    { "name": "Yearly Summary", "url": "reports-details.php" },
    { "name": "Weekly Analysis", "url": "reports-details.php" }
  ];

  document.getElementById('searchInput').addEventListener('input', function () {
    const query = this.value.toLowerCase();
    const dropdown = document.getElementById('dropdown');
    dropdown.innerHTML = '';

    if (query.length === 0) {
      dropdown.style.display = 'none';
      return;
    }

    const filteredData = data.filter(item => item.name.toLowerCase().includes(query));

    if (filteredData.length === 0) {
      dropdown.style.display = 'none';
      return;
    }

    filteredData.forEach(item => {
      const link = document.createElement('a');
      link.href = item.url;
      link.textContent = item.name;
      link.className = 'dropdown-item';
      dropdown.appendChild(link);
    });

    dropdown.style.display = 'block';
  });

</script>
<!-- ============footer section =============-->

 <footer class="footer">
        <div class="container">
            <div class="ftr_cont">
          <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-4 mt-3">
                <div class="ftr_item">
                    <h4 class="ftr_title">Links</h4>
                    <div class="row"> 
                        <div class="col-6"> 
                        <ul class="ftr_links">
                            <li>
                                <a href="<?php echo base_url('web'); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('web/about'); ?>">About </a>
                            </li>
                            <li>
                                <a href="#">Report</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('web/consulting_model'); ?>">Services </a>
                            </li>
                            <li>
                            <a href="<?php echo base_url('web/contact_us'); ?>">Contact Us</a>
                            </li>
                        </ul> 
                        </div>

                        <div class="col-6"> 
                            <ul class="ftr_links">
                            
                                
                                <li>
                                    <a href="<?php echo base_url('web/blog'); ?>">Blogs</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('web/press_release'); ?>">Press Release</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('web/client_testimonials'); ?>">Our Client </a>
                                </li>
                                <li>
                                    <a href="#">Latest Report</a>
                                </li>
                            
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-xl-4 mt-3">
                <div class="ftr_item">
                    <h4 class="ftr_title">Contact</h4>
                    <ul class="contact_info">
                        <li>
                        <i class="ri-phone-line"></i>
                            <a href="#">address, Pune.</a>
                        </li>
                        <li>
                        <i class="ri-mail-line"></i>
                            <a href="mailto:enquiry@marksparksolutions.com">enquiry@marksparksolutions.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+1-518-512-9244">+1-518-512-9244</a>
                        </li>
                        <!--<li>-->
                        <!--  <i class="ri-phone-line"></i>-->
                        <!--  <a href="tel:+16467973260">+1 646 797 3260</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-xl-4 mt-3">
                    <div class="ftr_item">
                        <h4 class="ftr_title">Join us</h4>
                        <p>We're always on the lookout for talented individuals who possess a unique blend of industry expertise, problem-solving skills, and a strong drive for success. 
                        <br>
                        If you're interested, please email us.  <a href="mailto:careers@marksparksolutions.com">careers@marksparksolutions.com</a>
                        </p>
                    </div>

                    <div class="ftr_item mt-4">
                        <ul class="contact-social">
                            <li>
                            <a aria-label="Chat on WhatsApp" href="https://wa.me/+15185129244"> <i class="ri-whatsapp-line"></i></a>
                            </li>
                            <li>
                            <a href="https://www.linkedin.com/company/mark-spark-solutions/mycompany/" target="_blank"><i class="ri-linkedin-box-fill"></i></a>
                            </li>
                        </ul>
                    </div>
            </div>
            </div>
          </div>
          <div class="copyright">
            <div class="row">
              <div class="col-lg-5 col-md-7 col-sm-12 cfooter-center"> 
                <p>Copyright © marksparksolutions 2024 . All rights reserved.</p>
              </div>
              <div class="col-lg-7 col-md-5 col-sm-12 cfooter-right"> 
                <ul>
                    <li> <a href="<?php echo base_url('web/privacy_policy'); ?>"> Privacy policy </a> </li>
                    <li> <a href="<?php echo base_url('web/term_conditions'); ?>"> Terms and conditions </a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- ============footer section =============-->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>

     <script>
        const dropDownClick = document.querySelectorAll(".openDrop");
        const dropDown = document.querySelector(".drop_down");

        dropDownClick.forEach(item => {
            item.addEventListener("click", (e) => {
            e.preventDefault();
            item.nextElementSibling.classList.toggle("active");

        });
        });
       
     </script>

     <script>
    const sections = document.querySelectorAll('.content-section');
    const menuItems = document.querySelectorAll('.menu-item');

    window.addEventListener('scroll', () => {
        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (scrollY >= sectionTop) {
                currentSection = section.getAttribute('id');
            }
        });

        menuItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('data-section') === currentSection) {
                item.classList.add('active');
            }
        });
    });
</script>

<script>
            let questions = document.querySelectorAll(".market_report");
                questions.forEach((question) => {
                const btn = question.querySelector(".market_title");
                btn.addEventListener("click", () => {
                    questions.forEach((item) => {
                    if (item !== question) {
                        item.classList.remove("show-text");
                    }
                    });
    
                    question.classList.toggle("show-text");
                });
                });
    
                let scopeQuistion = document.querySelectorAll(".scope_quistion");
                scopeQuistion.forEach((question) => {
                const btn = question.querySelector(".quistion_title");
                btn.addEventListener("click", () => {
                    scopeQuistion.forEach((item) => {
                    if (item !== question) {
                        item.classList.remove("show-text");
                    }
                    });
    
                    question.classList.toggle("show-text");
                });
                });



                const sections = document.querySelectorAll('.content-section');
                    const menuItems = document.querySelectorAll('.menu-item');

                    window.addEventListener('scroll', () => {
                        let currentSection = '';

                        sections.forEach(section => {
                            const sectionTop = section.offsetTop;
                            const sectionHeight = section.clientHeight;

                            if (scrollY >= sectionTop ) {
                                currentSection = section.getAttribute('id');
                            }
                        });

                menuItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('data-section') === currentSection) {
                        item.classList.add('active');
                    }
                });
            });
        </script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
