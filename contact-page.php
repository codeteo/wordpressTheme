<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../../../wp-blog-header.php");

$page = get_page_by_title("CONTACT");
$content = apply_filters('the_content', $page->post_content); 

echo $content;

?>