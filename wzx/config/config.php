<?php 
	if (htmlentities($_GET['tag'])) {
		include '../news/top.php';
		switch ($_GET['tag']) {
			case 'wzx':
				include '../news/wzx.php';
				break;
			case 'fb':
				include '../news/fb.php';
				break;
			case 'zx':
				include '../news/zx.php';
				break;
			case 'lx':
				include '../news/lx.php';
				break;
			case 'gf':
				include '../news/gf.php';
				break;
			case 'wt':
				include '../news/wt.php';
				break;
			case 'fk':
				include '../news/fk.php';
				break;
			case 'lj':
				include '../news/lj.php';
				break;
			case 'gz':
				include '../news/gz.php';
				break;
			default:
				# code...
				break;
		}
		include '../news/footer.php';
	}
 ?>