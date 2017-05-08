<?php
/*
 * The template for displaying all single posts and attachments
*/

$context = Timber::get_context();
$context['post'] = new TimberPost();
Timber::render('views/templates/front-page.twig', $context);

?>