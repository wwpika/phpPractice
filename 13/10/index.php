<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>单文件上传</title>
    <style type="text/css">
        <!--
        body,td,th{
            font-size:12px;
        }
        body{
            margin-left:10px;
            margin-top:10px;
            margin-right:10px;
            margin-bottom:10px;
        }
        -->
    </style>
</head>
<body>
    <?php
    if(!empty($_FILES[up_file][name])){
        $fileinfo=$_FILES[up_file];
        if($fileinfo['size']<1000000&& $fileinfo['size']>0){
            move_uploaded_file($fileinfo['tmp_name'],$fileinfo['name']);
            echo '上传成功';
            echo $fileinfo['error'];
        }else{
            echo '文件太大或未知';
        }
    }
    ?>
    <table width="385" height="185" border="0" cellpadding="0" cellspacing="0" background="images/bg.jpg">
        <tr>
            <td width="142" height="80">&nbsp;</td>
            <td width="174">&nbsp;</td>
            <td width="69">&nbsp;</td>
        </tr>
        <form action="" method="post" enctype="multipart/form-data" name="form">
            <tr>
                <td height="30">&nbsp;</td>
                <td align="left" valign="middle"><input name="up_file" type="file" size="12"></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td height="27" align="right">&nbsp;</td>
                <td align="center" valign="top">&nbsp;&nbsp;<input type="image" name="imageField" src="images/fg.bmp"></td>
                <td>&nbsp;</td>
            </tr>
        </form>
        <tr>
            <td height="48">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>  
    </table>
</body>
</html>