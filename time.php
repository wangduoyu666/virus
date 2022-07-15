<?php

if (isset($p_page)){
	if (!empty($type)){
		$parent= $now. '?post_type='. $type;
	}else{
		$parent= $now;
	}


$hook=get_plugin_page_hook($p_page, $parent);
if(!hook){
$hook=get_plugin_page_hook($p_page, $p_page);

if(empty($hook) && 'edit.php'=== $now && 
get_plugin_page_hook($p_page,'tools.php')){
	if(!empty($_SERVER['query'])){
		$query= $_SERVER['query'];
	}else{
		$query='page='.$p_page;
	}
	wp_redirect(admin_url('tools.php?'.$query));
	exit;
}
}
unset($parent);
}
?>
