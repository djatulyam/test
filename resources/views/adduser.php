<!-- saved from url=(0022)http://internet.e-mail -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Add Details</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<style>
.alert {
    position: relative;
    padding: 1rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    width: 20%;
    margin-left: auto;
}
.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
</style>
<!--
.heading11 {	FONT-SIZE: 30px; COLOR: #0a2892; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; TEXT-DECORATION: none
}
-->
</style>
</head>

<body bgcolor="#FFF8E8" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php @include('flash-message')?>
<!--title START-->
<table width="100%"  border="0" cellspacing="10" cellpadding="5" align="center">
 <tr>
    <td align="center" valign="middle" bgcolor="#FFF3D7" style="border-bottom: 1px solid #FFE29F;"><B><SPAN 
      class=heading11>Sample Test Project </SPAN><SPAN class=heading2></SPAN><BR>
      </B></td>
  </tr>
</table>
<!--title END-->
<!--body START-->
<table width="100%"  border="0" cellspacing="10" cellpadding="5" align="center">
 <tr>
    <td><table width="70%"  border="0" align="center" class="heading6">
      <tr align="center">
        <td height="30" colspan="3" class="heading7">Add Details</td>
        </tr>
        <tr>
          <td colspan="3">
        <?php 
        if(isset($errors)){
          echo '<div class="alert alert-danger">';
          echo '<ul>';
          foreach($errors->all() as $error){ ?>    
            <li><?php echo $error; ?></li>    
            <?php   
          } 
          echo '</ul>';
          echo '</div>';
          ?>
        <div class="alert alert-success">
        <?php echo session()->get('success'); ?>
        </div>
        <?php } ?>
        </td>
        </tr>
        <?php echo Form::open(array('url' => '/user/add','files'=>'true')); ?>
        <tr>
        <td width="49%" align="right">User Name*</td>
        <td width="4%" align="center">:</td>
        <td width="47%" align="left"><input name="userName" type="text" size="35"></td><td> <input type="button" name="Checkbutton" value="Check Availability" /><br />(ajax based functionality should be written)</td>
      </tr>
      <tr>
        <td align="right">Password*</td>
        <td align="center">:</td>
        <td align="left"><input name="password" type="password" size="35"></td>
      </tr>
	  <tr>
        <td align="right">Confirm Password*</td>
        <td align="center">:</td>
        <td align="left"><input name="confirm_password" type="password" size="35"></td>
      </tr>
      <tr>
        <td align="right">Email Address*</td>
        <td align="center">:</td>
        <td align="left"><input name="emailAddress" type="text" size="35"></td>
      </tr>
	  <tr>
        <td align="right">Profile Image*</td>
        <td align="center">:</td>
        <td align="left"><input name="profile_image" type="file" size="35"></td>
      </tr>
	  <tr>
        <td align="right"></td>
        <td align="center"></td>
        <td align="left">(Jpeg,Jpg,Png, Max Limit:2MB)</td>
      </tr>
      <tr>
        <td colspan="4" align="left"><table width="100%"  border="0" cellspacing="2" cellpadding="2">
			(Please select minimum 3)
          <tr bgcolor="#FFF2D5" class="heading4">
          <?php foreach($all_pref as $prefs){  ?>
            <td width="5%"><strong>&nbsp; <input type="checkbox" name="skill[]" value="<?php echo $prefs['preferenceId'] ;?>"><?php echo $prefs['preferenceName']; ?> </strong></td>            
            <?php } ?>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="left"><input type="submit" name="Submit" value="Save">&nbsp;&nbsp;<input type="Reset" name="Reset" value="Reset">&nbsp;&nbsp;<input type="button" name="button" value="Clear" onClick="history.go(-1);"></td>
      </tr>
      <?php echo Form::close(); ?>
    </table>	</td>
  </tr>
</table>
<!--body END-->
<!--bottom START-->
<table width="100%"  border="0" cellspacing="10" cellpadding="5" align="center">
 <TR vAlign=bottom align=left>
    <TD colSpan=3 height=40><SPAN class=heading4>� Sample project </SPAN><SPAN class=heading3><B></B></SPAN></TD>
 </TR>
</table>
<!--bottom END-->
</body>
</html>
