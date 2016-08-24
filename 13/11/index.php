<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>多文件上传</title>
    <style>
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
    请选择要上传文件
    <form aciton="" method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="1" cellspacing="1" border="#FFFFFF" bgcolor="#CCCCCC" id="up_table">
            <tbody id="auto">
                <tr id="show">
                    <td bgcolor="#FFFFFF">上传文件</td>
                    <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF">上传文件</td>
                    <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF">上传文件</td>
                    <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF">上传文件</td>
                    <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
                </tr>
            </tbody>
            <tr>
                <td colspan="4" bgcolor="#FFFFFF"><input type="submit" value="上传"></td>
            </tr>
        </table>
    </form>
    <?php
    if(!empty($_FILES[u_file][name])){
        $file_name=$_FILES[u_file][name];
        echo $file_name;
        echo $_FILES[u_file];
        echo '<br>';
        $file_tmp_name=$_FILES[u_file][tmp_name];
        $file_error=$_FILES[u_file][error];
        for($i=0;$i<count($file_name);$i++){
            if($file_name[$i]!=''){
                move_uploaded_file($file_tmp_name[$i],'C:\\'.$i.$file_name[$i]);
                echo $file_error[$i].'<br>';
                echo '文件'.$file_name[$i].'上传成功，更名为'.$i.$file_name[$i].'<br>';
            }
        }
    }
    ?>
</body>
</html>