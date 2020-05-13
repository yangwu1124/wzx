<?php 
    @include '../config/main.php'; 
    include "../config/db_db.php";
    include "../config/mysql.php";
    $sql="select * from lc_fk order by id desc";
    $values = mysql_query($sql);
    
 ?>
<style type="text/css">
    body{
        background-color: #f6f6f6;
        border: 1px solid #456743;
    }
    a{text-decoration: none;}
    th{height: 35px;line-height: 35px;}
</style>
<body>
    <h2>意见反馈</h2>
        <table style="text-align:center;">
            <tr bgcolor="red">
                <th style="width:350px;">标题</th>
                <th style="width:200px;">联系</th>
                <th style="width:200px;">操作</th>
            </tr>
            <?php 
            while ($cc = mysql_fetch_array($values)) {?>
            <tr bgcolor="#ffffff" id="tr<?php echo $cc['id']; ?>">
                <td><?php echo $cc['title']; ?></td>
                <td><?php echo $cc['lianxi']; ?></td>
                <td><a href="javascript:void(0);" onclick="look(<?php echo $cc['id']; ?>)">&nbsp;&nbsp;看&nbsp;&nbsp;</a>|<a href="javascript:void(0);" onclick="del(<?php echo $cc['id']; ?>)">&nbsp;&nbsp;&nbsp;&nbsp;删&nbsp;&nbsp;</a></td>
            </tr>
            <tr>
                <td colspan='3'>
                    <span id="<?php echo $cc['id']; ?>" style="display:none;"><?php echo $cc['fankui']; ?></span>
                </td>
            </tr>
            <?php } ?>
        </table>
</body>

<script src="<?php echo localaddress; ?>js/jquery.min.js"></script>
<script type="text/javascript">
    function look(i){
        if ($('#'+i).is(":hidden")) {
            $('#'+i).show();
        }else{
            $('#'+i).hide();
        }
    }
    function del(j){
        if(confirm("是否删除？")){
            $.post("update.php",{id:j},function(date){
                $('#tr'+j).hide();
            });
        }
    }
</script>

