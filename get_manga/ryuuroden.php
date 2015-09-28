<?php
include 'simple_html_dom.php';
$destination = '';
$pattern = '';
$folder = '/home/dat-vq/Manga/ryuuroden/Chapter1';

$dom = file_get_html('http://ntruyen.info/truyen/Ryuuroden---Chu-be-rong/94514/Chapter-1');

foreach($dom->find('div#containerListPage img') as $img){
	set_time_limit(0); 
	$content = file_get_contents($img->src);
	file_put_contents( $folder ."/". pathinfo($img->src,PATHINFO_BASENAME) , $content);
}