<?php 
	include "../config/db_db.php";
    include "../config/mysql.php";
    if (isset($_POST['submit'])) {
    	$table = $_POST['table'];
    	$tableb = $_POST['tableb'];
    	$text = $_POST['text'];
    	$sql="UPDATE `$tableb` SET `$table` = '$text',`id` = 1";
    	$update = $res->fn_update($sql);
    	if ($update) {
    		echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
    		echo "<script language=javascript>alert('编辑成功');window.history.go(-1);</script>";
    	}
    }
    if ($_POST['id']) {
        $id = $_POST['id'];
        $del = $res->fn_delete('lc_fk','id',$id);
        /*$sql = "DELETE FROM `lc_fk` WHERE `id`= $id";*/
        if ($del) {
            return true;
        }

    }
    if ($_POST['youqin_id']) {
        $id = $_POST['youqin_id'];
        $del = $res->fn_delete('lc_youqin','id',$id);
        /*$sql = "DELETE FROM `lc_fk` WHERE `id`= $id";*/
        if ($del) {
            return true;
        }

    }
    if ($_POST['link']) {
        $id = $_POST['ii'];
        $name = $_POST['name'];
        $link = $_POST['link'];
        $sql = "UPDATE `lc_youqin` SET `title`='$name',`link`='$link' WHERE `id` = $id";
        $update = $res->fn_update($sql);
        if ($update) {
            return ture;
        }
    }
 ?>