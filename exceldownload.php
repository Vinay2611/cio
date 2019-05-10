<?php
			if($_POST['submit1']	==	"Download")
			{
				include "dbc9.php";
					$username					=		addslashes($_POST['username']);
					$password					=		addslashes($_POST['password']);
					$sql="SELECT password,user_name  FROM reg_download_user WHERE password='$password' and user_name='$username'";
					$rsCat_query=mysql_query($sql);
					$rsCat = mysql_fetch_array($rsCat_query);
					$password=$rsCat["password"];
					$user_name=$rsCat["user_name"];
					if(empty($_POST[password]) || empty($password))
					$error[]="Please Entered valid user name or password";
					if(!$error) 
					{

							$password2					=		addslashes($_POST['password2']);
							$sql="SELECT tblname,password,colnm,rephead,id  FROM users WHERE password='$password2' ";
							$rsCat_query=mysql_query($sql);
							$rsCat = mysql_fetch_array($rsCat_query);
							$password2=$rsCat["password"];
							$tblname=$rsCat["tblname"];
							$colnm=$rsCat["colnm"];
							$rephead=$rsCat["rephead"];
							$id=$rsCat["id"];
							if(empty($_POST[password2]) || empty($password2))
							$error[]="Please Entered valid registration download password";
							if(!$error) 
							{
								session_start();
								$_SESSION["session_user"]=$user_name;
								$_SESSION["session_pwd"]=$password;
								$_SESSION["event_name"]=$rephead;
								$_SESSION["id"]=$id;
								header("location:excel.php");
							}

							else
							{
								$error=join($error, "<br>");
								$error="<b>Error - </b><br>".$error;
							}
					}
					else
							{
								$error=join($error, "<br>");
								$error="<b>Error - </b><br>".$error;
							}
			}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
        <script language="javascript" type="text/javascript">

				function validateform()
				{
					
					var	 emailid		=	document.getElementById("emailid");
					var filter 				= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					
					
					
					if (!filter.test(emailid.value)) 
					{
						alert("Please provide a valid Email Address");
						document.form1.emailid.focus();
						return false;
					}

				if(!document.form1.webinardate[0].checked && !document.form1.webinardate[1].checked )
				{
					alert ("Please select Webinar date");
					return false;
				}

					
					return true;
				}
				
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shobiz Registration download</title></head>
<body bgcolor="#ffffff" text="#666666" link="#04357B" style="font-family: Arial, Helvetica, sans-serif; margin-top: 0px; margin-bottom:0px;">
<table border="0" cellspacing="0" cellpadding="0" align="center" width="600">
  <tr>
    <td><table  width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
      <tr>
        <td><table  width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
          <tr>
            <td height="16" colspan="3"><font size="1" style="height:16px;width:1px; font-size: 1px;">&#160;</font></td>
          </tr>
         
          <tr>
            <td height="8" colspan="3"><font size="1" style="height:8px;width:600px; font-size: 1px;">&#160;</font></td>
          </tr>
          <tr valign="top">
            <td width="17" valign="top"><font size="1" style="height:1px;width:16px; font-size: 1px;">&#160;</font></td>
            <td width="568" valign="top" bgcolor="#FFFFFF" style="padding:10px;"><p style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#f0ab00; font-weight:bold;">&nbsp;</p>
              <p style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#f0ab00; font-weight:bold;"><form id="testform" action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post" name="form1" ><table width="100%" border="0" cellspacing="0" cellpadding="4">
          <tr>
            <td colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding: 0 15 0 15; color:#333333;">&nbsp;</td>
          </tr>
         
          <tr>
            <td width="32%" align="right" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding: 0 15 0 15; color:#333333;">Offical emailid</td>
            <td width="68%"><input  name="username" type="text" id="username" size="45"></td>
          </tr>
          <tr>
            <td width="32%" align="right" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding: 0 15 0 15; color:#333333;">Password</td>
            <td width="68%"><input type="password" name="password" id="password"></td>
          </tr>
         
          <tr>
            <td align="right" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding: 0 15 0 15; color:#333333;">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="32%" align="right" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding: 0 15 0 15; color:#333333;">Registration report download password</td>
            <td width="68%"><input type="password" name="password2" id="password2"></td>
          </tr>
          
             <tr>
               <td colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding: 0 15 0 15; color:#333333;"><?php
		  	if($error) 
			echo "<font size=\"2\" face=\"Arial, Helvetica, sans-serif\" color=\"red\">".$error."</font><br>";
			?></td>
               </tr>
       
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit1" value="Download">  <input type="submit" name="submit1" value="Cancel"></td>
          </tr>
        </table>
        </form></p>
              
              <p style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#666666">&nbsp;</p></td>
            <td width="17"><font size="1" style="height:1px;width:16px; font-size: 1px;">&#160;</font></td>
          </tr>
          <tr>
            <td height="16" colspan="3"><font size="1" style="height:16px;width:1px; font-size: 1px;">&#160;</font></td>
          </tr>
        </table></td>
      </tr>
    </table>
      <!-- *** END BORDER LAYOUT *** --></td>
  </tr>
  
</table>
</body>
</html>