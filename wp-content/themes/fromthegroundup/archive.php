<?php
/*
 * The template for displaying all single posts and attachments
*/

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
Timber::render('views/templates/archive.twig', $context);

?>