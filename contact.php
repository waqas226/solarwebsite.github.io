<?php
include 'header.php';
?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title float-left">
                       <h1>Get Touch With Us</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area-->
<!--Start Contact Details Area-->
<section class="contact-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-contact-details-box text-center">
                    <div class="image-box">
                        <img src="images/resources/contact-details-1.jpg" alt="Awesome Image">
                    </div>
                    <div class="text">
                        <p>Ph: (+31) 541.754.3010<br> Email: solartech@example.com</p>
                       <!--  <a class="btn-two" href="#">Schedule for Call<span class="icon-null"></span></a>   -->  
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-contact-details-box text-center">
                    <div class="google-map-box">
                        <div 
                            class="google-map" 
                            id="contact-google-map" 
                            data-map-lat="40.584160" 
                            data-map-lng="-74.415543" 
                            data-icon-path="images/resources/map-marker.png" 
                            data-map-title="Brooklyn, New York, United Kingdom" 
                            data-map-zoom="12" 
                            data-markers='{
                                "marker-1": [40.584160, -74.415543, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"],
                                "marker-2": [40.602230, -74.689910, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"],
                                "marker-3": [35.616959, -87.838852, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"]

                            }'>
                        </div>   
                    </div>
                    <div class="text">
                        <p>47 W Soft Road 13th street, NY 10011<br> Unitd States.</p>
                        <!-- <a class="btn-two" href="#">View Full Map<span class="icon-null"></span></a>  -->   
                    </div>     
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-contact-details-box text-center">
                    <div class="image-box">
                        <img src="images/resources/contact-details-2.jpg" alt="Awesome Image">
                    </div>
                    <div class="text">
                        <p>We’re here to help with any question<br> of our customers.</p>
                        <!-- <a class="btn-two" href="#">Customers FAQ’s<span class="icon-null"></span></a>     -->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12">
                <div class="emergency-call wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                    <h6>Any Emergency? Call our 24/7 customer support team at <span>1800.123.456</span></h6>
                </div>
            </div>
        </div> 
    </div>
</section>  
<!--End Contact Details Area-->
  
<!--Start contact form area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form-text-box">
                    <div class="inner">
                        <div class="icon-holder wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <span class="flaticon-envelope"></span>
                        </div>
                        <div class="sec-title">
                            <p>Drop Us a Line</p>
                            <div class="title">Send Your Message</div>
                            <div class="border-box"></div>
                        </div>
                        <div class="inner-content">
                            <h2>Leave your<br> information here and get<br> reply from our expert.</h2>
                        </div>
                    </div>
                </div>      
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="inner">
                        <form id="contact-form" name="contact_form" class="default-form" action="http://st.ourhtmldemo.com/new/solartech-demo/inc/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <select class="selectmenu">
                                            <option selected="selected">Discuss About</option>
                                            <option>Installation</option>
                                            <option>Maintenance</option>
                                            <option>Monitoring</option>
                                            <option>Consultation</option>
                                            <option>Roof Solution</option>
                                            <option>Inverter Repair</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box"> 
                                        <input type="text" name="form_phone" value="" placeholder="Phone">
                                    </div>    
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">   
                                        <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box"> 
                                        <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                    </div>    
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-box">    
                                        <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                    </div>   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn-three" type="submit" data-loading-text="Please wait...">Send Your Message<span class="icon-null"></span></button>    
                                    </div>     
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>
<!--End contact form area-->

<!--Start Branches section-->
<section class="branches-section">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="branches-carousel owl-carousel owl-theme">
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Sanfransico</h3></div>
                        <ul>
                            <li>(625) 07520-6644</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>24/7, Global Factory Street,<br> 2nd Cross, SF 94112.</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Los Angeles</h3></div>
                        <ul>
                            <li>+888-520-6644</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>PO Box 515381, Los Angeles<br> CA 90051-6681, US</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Las Vegas</h3></div>
                        <ul>
                            <li>07520-664-45</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>7220 Dean Martin Drive<br> Suite, LV 89044</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Cleveland</h3></div>
                        <ul>
                            <li>+321.45.67890</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>148, Global Factory Street<br> Cleveland 44113.</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                    
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Sanfransico</h3></div>
                        <ul>
                            <li>(625) 07520-6644</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>24/7, Global Factory Street,<br> 2nd Cross, SF 94112.</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Los Angeles</h3></div>
                        <ul>
                            <li>+888-520-6644</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>PO Box 515381, Los Angeles<br> CA 90051-6681, US</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Las Vegas</h3></div>
                        <ul>
                            <li>07520-664-45</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>7220 Dean Martin Drive<br> Suite, LV 89044</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                    <!--Start Single Branches Box-->
                    <div class="single-branches-box text-center">
                        <div class="title-box"><h3>Cleveland</h3></div>
                        <ul>
                            <li>+321.45.67890</li>
                            <li>mailus@example.com</li>
                        </ul> 
                        <div class="text">
                            <p>148, Global Factory Street<br> Cleveland 44113.</p>
                        </div>  
                    </div>
                    <!--End Single Branches Box-->
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="our-all-branches wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                    <h6>We have successfully running <span>34 branches</span> in worldwide.</h6>
                </div>
            </div>
        </div> 
    </div>
</section>
<!--End Branches section-->

<!--Start Google Map Area-->
<section class="google-map-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                
            </div>
        </div>
    </div>
</section>
<!--End Google Map Area-->
<?php
include 'footer.php';
?>