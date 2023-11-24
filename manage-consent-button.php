<?php
defined( 'ABSPATH' ) or die( "you do not have access to this page!" );

/**
 * 1. Make sure you use the Font-Awesome 5 Library. A free plugin with the same name is available for download.
 * 2. Do NOT hide the current Manage Consent Tab under settings.
 * 3. Change CSS if so desired!
 */

function myCustomManageConsent() {
?>
<div id="my_manage_consent" class="cmplz-show-banner"><i class="cmplz-fas fas fa-cookie-bite"></i></div>
<style>
	#my_manage_consent {
		font-family: "Font Awesome Free 5";
		position: fixed;
		cursor: pointer;
		width: 60px;
		height: 60px;
		bottom: 40px;
		left: 40px;
		font-size: 30px;
		background-color: #29b6f6;
		color: #fff;
		line-height: 2;
		border-radius: 50px;
		text-align: center;
		box-shadow: 2px 2px 3px #999;
	}

	#my_manage_consent:hover {
		background-color: #333;
		color: #fff;
	}
	.cmplz-manage-consent {display:none;}
</style>
<script>
	function addEvent(event, selector, callback, context) {
		document.addEventListener(event, e => {
			if ( e.target.closest(selector) ) {
				callback(e);
			}
		});
	}
	addEvent('click', '.cmplz-show-banner', function(){
		document.querySelectorAll('.cmplz-manage-consent').forEach(obj => {
			obj.click();
		});
	});
</script>

<?php

}

add_action( 'wp_footer', 'myCustomManageConsent' );
