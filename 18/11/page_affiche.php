<html>
<head>
<title>公告信息管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<table width="828" height="522" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td background="images/image_01.gif">&nbsp;			</td>
		<td height="140" background="images/image_02.gif">&nbsp;			</td>
	</tr>
	<tr>
		<td width="202" rowspan="3" valign="top"><table width="202" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><?php include("menu.php");?></td>
          </tr>
        </table></td>
		<td height="34" background="images/image_04.gif">&nbsp;			</td>
	</tr>
	<tr>
		<td height="38" background="images/image_06.gif">&nbsp;			</td>
	</tr>
	<tr>
		<td height="270" valign="top">
			<table width="626" height="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="257" align="center" valign="top" background="images/image_08.gif"><table width="600" height="271"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="22" align="center" valign="top" class="word_orange"><strong>公告信息<strong>分页显示</strong></strong></td>
                  </tr>
                  <tr>
                    <td height="249" align="center" valign="top">
					<table width="550" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
                      <tr align="center" bgcolor="#f0f0f0">
                        <td width="221">公告标题</td>
                        <td width="329">公告内容</td>
                      </tr>
					<?php
					$conn=mysql_connect("localhost","root","password") or die("数据库服务器连接错误".mysql_error());
					mysql_select_db("test",$conn) or die("数据库访问错误".mysql_error());
					//mysql_query("set names gb2312");
					/*  $_GET[page]为当前页，如果$_GET[page]为空，则初始化为1  */
					if ($_GET[page]==""){
						$_GET[page]=1;}
					   if (is_numeric($_GET[page])){
						$page_size=2;     								//每页显示4条记录
						$query="select count(*) as total from tb_affiche  order by id desc";   
						$result=mysql_query($query);      					//查询符合条件的记录总条数
						$message_count=mysql_result($result,0,"total");		//要显示的总记录数
						$page_count=ceil($message_count/$page_size);	  	//根据记录总数除以每页显示的记录数求出所分的页数
						$offset=($_GET[page]-1)*$page_size;						//计算下一页从第几条数据开始循环  
						$sql=mysql_query("select * from tb_affiche order by id desc limit $offset, $page_size");
						$row=mysql_fetch_object($sql);
						if(!$row){
							echo "<font color='red'>暂无公告信息!</font>";
						}
						do{
						?>
                      <tr bgcolor="#FFFFFF">
                        <td style="padding-left:5px; padding-right:5px; padding-top:5px; padding-bottom:5px;"><?php echo iconv("gb2312","utf-8",$row->title);?></td>
                        <td style="padding-left:5px; padding-right:5px; padding-top:5px; padding-bottom:5px;"><?php echo iconv("gb2312","utf-8",$row->content);?></td>
                      </tr>
					<?php
						}while($row=mysql_fetch_object($sql));
					}
					?>
                     </table>
                      <br>
                      <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <!--  翻页条 -->
							<td width="37%">&nbsp;&nbsp;页次：<?php echo $_GET[page];?>/<?php echo $page_count;?>页&nbsp;记录：<?php echo $message_count;?> 条&nbsp; </td>
							<td width="63%" align="right">
							<?php
							/*  如果当前页不是首页  */
							if($_GET[page]!=1){
							/*  显示“首页”超链接  */
							echo  "<a href=page_affiche.php?page=1>首页</a>&nbsp;";
							/*  显示“上一页”超链接  */
							echo "<a href=page_affiche.php?page=".($_GET[page]-1).">上一页</a>&nbsp;";
							}
							/*  如果当前页不是尾页  */
							if($_GET[page]<$page_count){
							/*  显示“下一页”超链接  */
							echo "<a href=page_affiche.php?page=".($_GET[page]+1).">下一页</a>&nbsp;";
							/*  显示“尾页”超链接  */
							echo  "<a href=page_affiche.php?page=".$page_count.">尾页</a>";
							}
							mysql_free_result($sql);
							mysql_close($conn);
							?>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
              </tr>
            </table>			</td>
	</tr>
	<tr>
		<td bgcolor="#F0F0F0"></td>
		<td height="43" background="images/image_12.gif"></td>
	</tr>
</table>
</body>
</html>