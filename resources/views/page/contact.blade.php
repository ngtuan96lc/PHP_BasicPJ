@extends('master')
@section('content')

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<!-- <div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 263px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 519px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 519px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 263px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 263px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 519px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 7px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 775px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 7px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 775px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 775px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 7px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1031px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -249px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -249px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1031px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -249px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1031px; top: 335px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 263px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 519px; top: 79px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 519px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 263px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 263px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 519px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 7px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 775px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 7px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 775px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 775px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 7px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1031px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -249px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -249px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1031px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -249px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1031px; top: 335px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 263px; top: -177px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(1)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 519px; top: -177px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(2)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 519px; top: 79px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(3)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 263px; top: 79px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(4)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 7px; top: 79px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(5)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 775px; top: 79px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(6)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 7px; top: 335px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(7)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 263px; top: 335px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(8)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 775px; top: -177px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(9)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 519px; top: 335px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(10)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 775px; top: 335px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(11)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 7px; top: -177px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(12)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -249px; top: 335px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(13)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -249px; top: 79px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(14)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1031px; top: 79px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(15)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -249px; top: -177px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(16)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1031px; top: -177px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(17)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1031px; top: 335px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="./Contact _ E-Shopper_files/vt(18)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-pbc"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=43.158016,-77.603078&amp;z=14&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="./Contact _ E-Shopper_files/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 420px; top: 103px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div><div style="font-size: 13px;">Dữ liệu bản đồ ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./Contact _ E-Shopper_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 219px; bottom: 0px; width: 143px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="">Dữ liệu bản đồ ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2017 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./Contact _ E-Shopper_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@43.1580159,-77.6030777,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;"><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="./Contact _ E-Shopper_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./Contact _ E-Shopper_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div draggable="false" class="gm-style-cc" style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 100px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>500 m&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 76px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div></div></div></div></div></div></div>
				</div>			 		
			</div>   -->  	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>Ha Noi University of Industry</p>
							<p>Ha Noi - Viet Nam</p>
							<p>Mobile: +84 1664787528</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->

@endsection