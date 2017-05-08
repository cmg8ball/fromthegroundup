<?php

// ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// MAKING ACF GLOBAL OPTIONS ACCESSIBLE ANYWHERE IN THEME
// TWIG USAGE = {{ options.acfGlobalFieldName }}
add_filter( 'timber_context', 'fromthegroundup_context' );
function fromthegroundup_context( $context ) {
    $context['options'] = get_fields('option');
    return $context;
}

?>