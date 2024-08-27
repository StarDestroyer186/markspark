
<?php include_once("header.php") ?>  
    <main>
        <section class="checkout_sec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="billing_dtl">
                            <h4 class="mb-4">Billing Details</h4>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form_group">
                                    <input type="text" class="form-control" placeholder="Enter Full Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form_group">
                                    <input type="text" class="form-control" placeholder="Enter Email address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form_group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form_group">
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form_group">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form_group">
                                    <input type="text" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="radio_container mb-3">
                                    <p>
                                        <input type="radio" id="Debid_Credit_Card" name="radio-group" checked>
                                        <label for="Debid_Credit_Card">
                                            <img src="assets/images/icons/CreditCard.svg" alt=""><br>
                                        Debid/Credit Card</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="Paypal" name="radio-group">
                                        <label for="Paypal">
                                        <img src="assets/images/icons/bank-transfer.svg" alt=""><br>
                                        Paypal</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="Bank_Transfer" name="radio-group">
                                        <label for="Bank_Transfer">
                                        <img src="assets/images/icons/paypal.svg" alt=""><br>
                                        Bank Transfer</label>
                                    </p>
 
                                </div>
                                <button type="text" class="w-100 custom_btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="order_summery">
                            <h4 class="order_title mb-4">Order Summary</h4>
                            <div class="order_produc_bx">
                            <div class="row">
                                <div class="col-sm-9">
                                <div class="product_info">
                                    <h4>QUARTZ MARKET</h4>
                                    <p>MARKET SIZE AND SHARE ANALYSIS - GROWTH TRENDS AND FORECAST (2024 - 2029)</p>
                                </div>
                                </div>
                                <div class="col-sm-3">
                                <div class="product_img">
                                    <img src="assets/images/report.png" alt="" class="img-fluid">
                                </div>
                                </div>
                            </div>
                            <ul class="order_list">
                                <li>
                                    <p>Single License:</p>
                                    <span>$4734</span>
                                </li>
                                <li>
                                    <p>Single License:</p>
                                    <span>$4734</span>
                                </li>
                            </ul>
                           
                            </div>
                            <div class="total_order">
                                <h5>Total</h5>
                                <span>$4734</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once("footer.php") ?>    