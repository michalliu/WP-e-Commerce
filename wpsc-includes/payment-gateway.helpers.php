<?php

function wpsc_register_payment_gateway_dir( $dir ) {
	return WPSC_Payment_Gateway::register_dir( $dir );
}

function wpsc_register_payment_gateway_file( $file ) {
	return WPSC_Payment_Gateway::register_file( $file );
}