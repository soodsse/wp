<?php
/**
 *    The template for displaying the bottom header section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$jumbotron_title     = get_theme_mod( 'illdy_jumbotron_title', __( 'Clean <span class="span-dot">.</span> Slick<span class="span-dot">.</span> Pixel Perfect', 'illdy' ) );
	$entry               = get_theme_mod( 'illdy_jumbotron_general_entry', __( 'lldy is a great one-page theme, perfect for developers and designers but also for someone who just wants a new website for his business. Try it now!', 'illdy' ) );
	$first_button_title  = get_theme_mod( 'illdy_jumbotron_general_first_button_title', __( 'Learn more', 'illdy' ) );
	$first_button_url    = get_theme_mod( 'illdy_jumbotron_general_first_button_url', esc_url( '#' ) );
	$second_button_title = get_theme_mod( 'illdy_jumbotron_general_second_button_title', __( 'Download', 'illdy' ) );
	$second_button_url   = get_theme_mod( 'illdy_jumbotron_general_second_button_url', esc_url( '#' ) );
} else {
	$jumbotron_title     = get_theme_mod( 'illdy_jumbotron_title', __( 'Clean <span class="span-dot">.</span> Slick<span class="span-dot">.</span> Pixel Perfect', 'illdy' ) );
	$entry               = get_theme_mod( 'illdy_jumbotron_general_entry' );
	$first_button_title  = get_theme_mod( 'illdy_jumbotron_general_first_button_title' );
	$first_button_url    = get_theme_mod( 'illdy_jumbotron_general_first_button_url' );
	$second_button_title = get_theme_mod( 'illdy_jumbotron_general_second_button_title' );
	$second_button_url   = get_theme_mod( 'illdy_jumbotron_general_second_button_url' );
}

if ( $jumbotron_title || $entry || $first_button_title || $second_button_title ) {

	?>
	<div class="bottom-header front-page">
	    <!-- anirudh entered code -->
	    <form action="" method="post" id="check_form">		
			<div class="brand-promotion" id="book_form">
				<div class="container">
					<div class="media row user_form">
                        <h3 class="animated fadeInDownBig col-md-12">Step 1: Select Your Service</h3>
                        <div>
						<div class="col-sm-3">
							<div class="brand-content wow fadeIn animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeIn;">
								<img class="pull-left img-responsive" src="<?php echo  get_template_directory_uri() . '/layout/images/front-page/plumber.png' ?>" alt="">
								<div class="media-body">							
									<h2>Plumber</h2>
                                    <p>Taps, Tanks, Shower, Sanitaryware and more</p>
                                    <span class="select_btn"><input type="radio" name="service" class="btn btn-submit service " value="Plumber" id="radio1"><label for="radio1"><span><span></span></span>Select</label></span>
                                    
                                    
                                    
                                    
								</div>
							</div>						
						</div>
						<div class="col-sm-3">
							<div class="brand-content wow fadeIn animated" data-wow-duration="700ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 400ms; animation-name: fadeIn;">
								<img class="pull-left img-responsive" src="<?php echo  get_template_directory_uri() . '/layout/images/front-page/electrician.png' ?>" alt="">
								<div class="media-body">							
									<h2>Electrician</h2>
                                    <p>Fans, Lights, Refrigerator and more</p>
                                    <!--<span class="select_btn"><a class="btn btn-submit"><input type="radio" name="service" class="btn btn-submit" value="Electrician">Book</a></span>-->
                                    <span class="select_btn"><input type="radio" name="service" class="btn btn-submit service" value="Electrician" id="radio2" required=""><label for="radio2"><span><span></span></span>Select</label></span>
								</div>
							</div>						
						</div>
						<div class="col-sm-3">
							<div class="brand-content wow fadeIn animated" data-wow-duration="700ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 500ms; animation-name: fadeIn;">
								<img class="pull-left img-responsive" src="<?php echo  get_template_directory_uri() . '/layout/images/front-page/carpenter.png' ?>" alt="">
								<div class="media-body">							
									<h2>Carpenter</h2>
                                    <p>Doors, Windows, Furniture and more</p>
                                    <span class="select_btn"><input type="radio" name="service" class="btn btn-submit service" value="Carpenter" id="radio3"><label for="radio3"><span><span></span></span>Select</label></span>
								</div>
							</div>						
						</div>
                        <div class="col-sm-3">
							<div class="brand-content wow fadeIn animated" data-wow-duration="700ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 500ms; animation-name: fadeIn;">
								<img class="pull-left img-responsive" src="<?php echo  get_template_directory_uri() . '/layout/images/front-page/ac_refigirator.png' ?>" alt="">
								<div class="media-body">							
									<h2 class="mob_hide">AC &amp; Refrigerator</h2>
                                    <p>AC Installation, Servicing, Gas Filling and more</p>
                                    <span class="select_btn"><input type="radio" name="service" class="btn btn-submit service" value="AC &amp; Refrigerator" id="radio4"><label for="radio4"><span><span></span></span>Select</label></span>
								</div>
							</div>						
						</div>
                        </div>
                        <h3 class="animated fadeInDownBig col-md-12">Step 2: Book Your Call <i style=" font-size:25px; color: #d9232d; margin-left:5px;" class="fa fa-angle-right"></i><span>
                                <input class="form-control input-trans mobile_input" placeholder="Enter Mobile" style="width:20%; margin-left:10px; display:inline-block;" type="text" name="mobile" required="" id="login_mobile" value="" maxlength="10" pattern="[789][0-9]{9}"> 
                            
                            <a class="read-more" id="login_mobile_btn" data-toggle="modal" data-target="#complete_fields">Book</a>
                            
                            </span></h3>
                        
					</div>
                    
				</div>
			</div>
        </form>
	    
	    
	    
	    
	    <!-- anirudh ends code  -->
		<div class="container">
			<div class="row">
				<?php if ( $jumbotron_title ) : ?>
					<div class="col-sm-12">
						<h1><?php echo $jumbotron_title; ?></h1>
					</div><!--/.col-sm-12-->
				<?php endif; ?>
				<div class="col-sm-8 col-sm-offset-2">
					<?php if ( $entry ) : ?>
						<div class="section-description"><?php echo do_shortcode( wp_kses_post( $entry ) ); ?></div>
					<?php endif; ?>
					<?php if ( $first_button_title ) : ?>
						<a href="<?php echo esc_url( $first_button_url ); ?>" title="<?php echo esc_attr( $first_button_title ); ?>" class="header-button-one"><?php echo esc_html( $first_button_title ); ?></a>
					<?php endif; ?>
					<?php if ( $second_button_title ) : ?>
						<a href="<?php echo esc_url( $second_button_url ); ?>" title="<?php echo esc_attr( $second_button_title ); ?>" class="header-button-two"><?php echo esc_html( $second_button_title ); ?></a>
					<?php endif; ?>
				</div><!--/.col-sm-8.col-sm-offset-2-->
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.bottom-header.front-page-->
<!-- Modal popup functionality -->
<div class="modal fade replay-box login_panel in" id="complete_fields" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
  <div class="modal-dialog login otp">
    <div class="modal-content">
    <div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Complete Booking Details</h4>
    </div>
    
     <form method="post" action="" id="new">
     <div class="modal-body">
        <h2><strong>Almost Done!</strong></h2>
        <p>Complete your booking details &amp; you are done.</p>
    </div>
    <div class="modal-body">
       
        <input type="text" name="name" class="form-control" required="" placeholder="Name" value="" id="name">
        <span class="error_message username_error" style="display:none;font-size:11px; color:red">Please enter Name only characters are allowed.</span>
    </div>
    <div class="modal-body">
        <input type="email" name="email" class="form-control" required="" placeholder="Email" value="" id="emailer">
        <span class="error_message email_error" style="display:none;font-size:11px; color:red">Please enter valid email address.</span>
    </div>
    <div class="modal-body">
        <input type="text" name="temp_address" class="form-control" required="" placeholder="Address" id="address">                                            <span class="error_message address_error" style="display:none;font-size:11px; color:red">Please enter Address.</span>
    </div>
    <div class="modal-body">
    	<div class="row">
        	<div class="col-md-6">
            	<input type="text" class="span dpd1" hidden="">
        		<input type="text" id="reqDate" class="form-control dpd2" name="booking_date" value="" placeholder="Preferred Date">
				<span class="error_message date_error" style="display:none;font-size:11px; color:red">Please select requested date.</span>
            </div>
            <div class="col-md-6 padTop15"><input type="hidden" id="curtime" value="11">
            	<select class="form-control" name="booking_time" id="reqTime">
                    <option id="time0" value="" selected="">Preferred Time</option>
					<option id="time1" value="9AM - 12PM">9AM - 12PM</option>
					<option id="time2" value="12PM - 3PM">12PM - 3PM</option>
					<option id="time3" value="3PM - 6PM">3PM - 6PM</option>
					<option id="time4" value="6PM - 9PM">6PM - 9PM</option>
					
                </select>
				<span class="error_message time_error" style="display:none;font-size:11px; color:red">Please select approx time.</span>
            </div>
        </div>
    </div>
    <div class="modal-body">
         <p style="font-size:11px; line-height:20px;"><input type="checkbox" checked="" name="" class="pull-left" id="">&nbsp; &nbsp; I accept <a href="terms.php" target="_blank">EasyFix Terms &amp; Conditions</a>.</p>
    </div>
    <div class="modal-footer">
    <span class="pull-right"><input type="submit" value="Confirm Booking" class="btn btn-danger" name="existing_submit"><!--<input type="submit" name="verify" value="Confirm Booking" class="btn btn-danger">--></span>
    </div>
    </form>
    </div>
  </div>
</div>
<!-- Modal popup functionality ends -->
<?php } ?>