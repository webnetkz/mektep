<?php
	if (@$_GET['q'] == 'imgr') {
		include(dirname(__FILE__) . '/nicEdit/nicedit.lib.php');
		$p = new NicEdit(dirname(__FILE__));
		$p->imanager();
	}
?>