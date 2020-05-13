<?php 
    @include '../config/main.php'; 
    include "../config/db_db.php";
    include "../config/mysql.php";
    $sql="select * from lc_youqin order by id desc";
    $values = mysql_query($sql);
    
 ?>
<style type="text/css">
    body{
        background-color: #f6f6f6;
        border: 1px solid #456743;
    }
    input{
        border: 0px;
        height: 30px;
        line-height: 30px;

    }
    a{text-decoration: none;}
    th{height: 35px;line-height: 35px;}
</style>
<body>
    <h2>友情链接</h2>
        <table style="text-align:center;">
            <tr bgcolor="red">
                <th style="width:200px;">title</th>
                <th style="width:350px;">link</th>
                <th style="width:200px;">manage</th>
            </tr>
            <?php 
            while ($cc = mysql_fetch_array($values)) {?>
            <tr bgcolor="#ffffff" id="tr<?php echo $cc['id']; ?>">
                <td><input type="text" name="title" value="<?php echo $cc['title']; ?>" style="width:180px;"></td>
                <td><input type="text" name="link" value="<?php echo $cc['link']; ?>" style="width:330px;"></td>
                <td><a href="javascript:void(0);" onclick="upd(<?php echo $cc['id']; ?>)">update</a>&nbsp;/&nbsp;<a href="javascript:void(0);" onclick="del(<?php echo $cc['id']; ?>)">delete</a></td>
            </tr>
            <?php } ?>
        </table>
</body>

<script src="<?php echo localaddress; ?>js/jquery.min.js"></script>
<script type="text/javascript">
    function del(j){
        if(confirm("是否删除？")){
            $.post("update.php",{youqin_id:j},function(date){
                $('#tr'+j).hide();
            });
        }
    }

    function upd(ia){
    	var name=$('input[name=title]').val();
    	var title=$('input[name=link]').val();
    	$.post("update.php",{ii:ia , name:name , link:title},function(date){
                alert("修改成功");
        });
    }


</script>

