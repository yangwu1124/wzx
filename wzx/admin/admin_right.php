<?php 
    @include '../config/main.php'; 
    include "../config/db_db.php";
    include "../config/mysql.php";

    $tag= substr($_GET['tag'],0,2);
    switch ($tag) {
        case 'gy':
            $name = "关于我们";
            $table = "wzx";
            $tableb = 'lc_wzx';
            $sql="select wzx from lc_wzx limit 1";
            break;
        case 'zx':
            $name = "最新动态";
            $table = "fabu";
            $tableb = 'lc_fabu';
             $sql="select fabu from lc_fabu limit 1";
            break;
        case 'ns':
            $name = "招贤纳士";
            $table = "zhaopin";
            $tableb = 'lc_zx';
             $sql="select zhaopin from lc_zx limit 1";
            break;
        case 'lx':
            $name = "联系我们";
            $table = "lianxi";
            $tableb = 'lc_lx';
             $sql="select lianxi from lc_lx limit 1";
            break;
        case 'gf':
            $name = "官方协议";
            $table = "xieyi";
            $tableb = 'lc_xy';
             $sql="select xieyi from lc_xy limit 1";
            break;
        case 'cj':
            $name = "常见问题";
            $table = "wenti";
            $tableb = 'lc_wenti';
             $sql="select wenti from lc_wenti limit 1";
            break;
        default:
            echo "error";
            exit();
            break;
    }
    $values = $res->fn_select($sql);
 ?>
<style type="text/css">
    body{
        background-color: #f6f6f6;
        border: 1px solid #456743;
    }
    input{
        width: 100px;
        height: 35px;
        border: 0px;
        margin: 5px;
        background-color: #999;
        font-size: 20px;

    }
</style>
<body>
    <h2><?php echo $name; ?></h2>
    <button class="button">设为h3粗体</button>&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="button2">居中</button><br>
    <input type="text" name="link" value="" style="width:260px;height:25px;background:#fff;">
    <input type="button" class="button3_ok"  name="qd" value="添加链接" style="height:25px;">
    <form action="update.php" method="post">
        <textarea id="textarea" name="text" rows="35" cols="70" wrap="hard" style="font-size:18px;">
            <?php echo $values['0']; ?>
        </textarea>
        <input type="hidden" value="<?php echo $table; ?>" name="table">
        <input type="hidden" value="<?php echo $tableb; ?>" name="tableb">
        <input type="submit" name="submit" value="确定编辑" />
    </form>
</body>

<script src="<?php echo localaddress; ?>js/jquery.min.js"></script>
<script type="text/javascript">
   
        $('.button').click(function(){
            txt = document.selection.createRange().text;//ie
            if (txt.length > 1) {
                document.selection.createRange().text = '<h3>'+txt+'</h3>';
            };
        })
        $('.button2').click(function(){
            txt = document.selection.createRange().text;//ie
            if (txt.length > 1) {
                document.selection.createRange().text = '<p style="text-align:center;">'+txt+'</p>';
            };
        })
        $('.button3_ok').click(function(){
            var link = $('input[name=link]').val();
            txt = document.selection.createRange().text;//ie
            if (txt.length > 1) {
                document.selection.createRange().text = '<a src="'+link+'">'+txt+'</a>';
            };
        })

</script>
<script>
  /*  var funcGetSelectText = function(){
        var txt = '';
        if(document.selection){
            txt = document.selection.createRange().text;//ie
            if (txt.length > 1) {
                document.selection.createRange().text = '<h3>'+txt+'</h3>';
            };
            
        }else{
            txt = document.getSelection();
        }
        return txt.toString();
    }
    var container = container || document;*/
    /*container.onmouseup = function(){
        var txt = funcGetSelectText();
        if(txt)
        {
            alert(txt);
        }
    }*/
</script>
