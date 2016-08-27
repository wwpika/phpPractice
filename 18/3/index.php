<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link  href="style.css" rel="stylesheet">
<title>应用mysql_fetch_array()函数从数组结果集中获取信息</title>
</head>
<body>
<table width="609" height="134"  border="1" cellpadding="0" cellspacing="0" bgcolor="#9E7DB4" align="center"> 
	 <form name="myform" method="post" action="">
    <tr> 
	  <td width="605" height="51" bgcolor="#CC99FF"><div align="center">请输入图书名称
	      <input name="txt_book" type="text" id="txt_book" size="25" > 
	      &nbsp;
          <input type="submit" name="Submit" value="查询">
	  </div></td>
  </tr>
</form>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="81">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="79" align="center" valign="top"> <br>
              <table width="572"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#625D59">
                <tr align="center" bgcolor="#CC99FF">
                  <td width="46" height="20">编号</td>
                  <td width="167">图书名称</td>
                  <td width="90">出版时间</td>
                  <td width="70">图书定价</td>
                  <td width="78">作者</td>
                  <td width="114">出版社</td>
                </tr>
                <?php
				$link=mysql_connect("localhost","root","password") or die("数据库连接失败".mysql_error());
				mysql_select_db("test",$link);
				mysql_query("set names gb2312");
				$sql=mysql_query("select * from tb_book_3");
				$info=mysql_fetch_array($sql);
                //$info=iconv('gb2312','utf-8',$info);
				if ($_POST[Submit]=="查询"){
					$txt_book=$_POST[txt_book];
                    $txt_book=iconv('utf-8','gb2312',$txt_book);
					$sql=mysql_query("select * from tb_book_3 where name like '%".trim($txt_book)."%'"); //如果选择的条件为"like",则进行模糊查询
					$info=mysql_fetch_array($sql);
					}			
				if($info==false){          //如果检索的信息不存在，则输出相应的提示信息
				    echo "<div align='center' style='color:#FF0000; font-size:12px'>对不起，您检索的图书信息不存在!</div>";
				}
				 do{
			  ?>
                <tr align="left" bgcolor="#FFFFFF">
                  <td height="20" align="center"><?php echo iconv('gb2312','utf-8',$info[id]); ?></td>
                  <td >&nbsp;<?php echo iconv('gb2312','utf-8',$info[name]); ?></td>
                  <td align="center"><?php echo $info[time]; ?></td>
                  <td align="center"><?php echo $info[price]; ?></td>
                  <td align="center">&nbsp;<?php echo iconv('gb2312','utf-8',$info[author]); ?></td>
                  <td>&nbsp;<?php echo iconv('gb2312','utf-8',$info[press]); ?></td>
                </tr>
                <?php
				}
				while($info=mysql_fetch_array($sql));
				?>
            </table>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;找到相关记录&nbsp;<?php $nums=mysql_num_rows($sql);echo $nums?>&nbsp;条&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
        </tr>
      </table>
    <br></td> 
  </tr> 
</table>
</body>
</html>