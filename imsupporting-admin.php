<?php
// Admin page
// 2017 - IMsupporting.com - Coded by Gsmart Lead Operations

if ( is_admin() ){

/* Call the html code */
add_action('admin_menu', 'imsupporting_admin_menu');

function imsupporting_admin_menu() {
add_options_page('IMsupporting Chat', 'IMsupporting Chat', 'administrator',
'imsupportingchat', 'imsupporting_admin_html_page');
}
}



function imsupporting_admin_html_page() {
?>
<div>
<form method="post" action="options.php">

<h2><img src="http://www.imsupporting.com/wp-content/uploads/2014/09/live-chat-logo-png.png" alt="IMsupporting Live Chat" /></h2>
<hr>
<p>
<?php
$optsiteid = get_option('ims_siteid'); // 000000000 = not active yet
$ims_imageid = get_option('ims_imageid');

$ims_popup 		= get_option('ims_popup');
$ims_popuptime 	= get_option('ims_popuptime');
$ims_popupimage = get_option('ims_popupimage');
$ims_popupbutton = get_option('ims_popupbutton');
$ims_popupheight = get_option('ims_popupheight');
$ims_popupwidth = get_option('ims_popupwidth');
$ims_popuptop 	= get_option('ims_popuptop');
$ims_popupleft 	= get_option('ims_popupleft');
?>
</p>
<p>
  <input style="-moz-box-shadow:inset 0px 1px 0px 0px #9acc85;
	-webkit-box-shadow:inset 0px 1px 0px 0px #9acc85;
	box-shadow:inset 0px 1px 0px 0px #9acc85;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #74ad5a), color-stop(1, #68a54b));
	background:-moz-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:-webkit-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:-o-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:-ms-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:linear-gradient(to bottom, #74ad5a 5%, #68a54b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#74ad5a\', endColorstr=\'#68a54b\',GradientType=0);
	background-color:#74ad5a;
	border:1px solid #3b6e22;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:13px;
	font-weight:bold;
	padding:20px 30px;
	text-decoration:none;" type="submit" value="<?php _e('Save Changes') ?>" />

<a href="http://www.imsupporting.com/login/" target="_blank" style="-moz-box-shadow:inset 0px 1px 0px 0px #91b8b3;
	-webkit-box-shadow:inset 0px 1px 0px 0px #91b8b3;
	box-shadow:inset 0px 1px 0px 0px #91b8b3;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
	background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
	background-color:#768d87;
	border:1px solid #566963;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
<?php if ($optsiteid == "000000000") {echo ' visibility:hidden;';}?>
	font-family:arial;
	font-size:13px;
	font-weight:bold;
	padding:20px 30px;
	text-decoration:none;">Login to your Chat Console Here & Start Chatting NOW</a>
<?php wp_nonce_field('update-options'); ?>
</p>
<p>&nbsp;</p>
<table width="100%" style="text-align:left;" >
  <tr valign="top">
    <th colspan="2" bgcolor="#E1EFFF" style="font-size:20px;" scope="row"><strong>
<?php

if ($optsiteid == "000000000") {
	echo "Please enter your account ID or create one below";
}else{
	echo "Your Account ID:";
}
?>
</strong></th>
  </tr>
  <tr valign="top">
    <th colspan="2" bgcolor="#FBFBFB" style="font-size:20px;" scope="row"><strong>
    </strong>
      <input style="border:1px solid #36C; width:170px; height:35px; font-size:18px;" name="ims_siteid" id="ims_siteid" type="text" value="<?php echo $optsiteid; ?>" />
      <em><br />
<br><span style="color:firebrick;" id="imsError"></span>
</em>
      </th>
  </tr>
  </table>

<a href="http://www.imsupporting.com/login/" target="_blank" style="-moz-box-shadow:inset 0px 1px 0px 0px #91b8b3;
        -webkit-box-shadow:inset 0px 1px 0px 0px #91b8b3;
        box-shadow:inset 0px 1px 0px 0px #91b8b3;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
        background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
        background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
        background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
        background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
        background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
        background-color:#768d87;
        border:1px solid #566963;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
<?php if ($optsiteid == "000000000") {echo ' visibility:hidden;';}?>
        font-family:arial;
        font-size:13px;
        font-weight:bold;
        padding:20px 30px;
        text-decoration:none;">Login to your Chat Console</a>


  <table width="100%" style="text-align:left; <?php if ($optsiteid == "000000000") {echo ' visibility:hidden; display:none;';}?>">
  <tr valign="top">
    <th colspan="2" scope="row" style="font-size:20px;">&nbsp;</th>
  </tr>
  <tr valign="top">
    <th colspan="2" scope="row" style="font-size:20px;">&nbsp;</th>
  </tr>
  <tr valign="top">
  <th colspan="2" bgcolor="#E1EFFF" style="font-size:20px;" scope="row">Advanced Options</th>
  </tr>
<tr valign="top">
  <td width="214" bgcolor="#FBFBFB" scope="row"><strong>Use Your Own Uploaded Buttons</strong></td>
  <td width="1205" bgcolor="#FBFBFB"><table width="136">
    <tr>
      <td><label>
        <input type="radio" name="ims_uploaded" value="yes" id="ims_uploaded_0" <?php if (get_option('ims_uploaded') == "yes") { echo 'checked="checked"'; } ?> />
        Yes</label></td>
    </tr>
    <tr>
      <td><label>
        <input name="ims_uploaded" type="radio" id="ims_uploaded_1" value="no" <?php if (get_option('ims_uploaded') == "no") { echo 'checked="checked"'; } ?> />
        No</label></td>
    </tr>
  </table>
    <span style="font-size:12px;">If you have uploaded an image and want to use it, Click yes.<br />
    You can upload an image by clicking &quot;Html code&quot; , Selecting the HTML button and then clicking &quot;Upload images&quot; within the live chat console</span></td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th bgcolor="#FBFBFB" scope="row">Button Type Override</th>
  <td bgcolor="#FBFBFB"><input name="ims_imageid" type="text" id="ims_imageid" value="<?php echo $ims_imageid; ?>" size="10" maxlength="99" />
    <span style="font-size:12px;">A different number equals a different button style<br />
   Click <a href="http://www.imsupporting.com/live-chat-software-features/live-chat-buttons/" target="_blank"><strong style="font-size:14px;">HERE</strong></a> to view a selection of buttons and what code to enter above.</span></td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th bgcolor="#FBFBFB" scope="row">Button position</th>
  <td bgcolor="#FBFBFB"><table width="136">
    <tr>
      <td><label>
        <input type="radio" name="ims_position" value="right" id="ims_position_0" <?php if (get_option('ims_position') == "right") { echo 'checked="checked"'; } ?> />
        Bottom Right
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input name="ims_position" type="radio" id="ims_position_1" value="left" <?php if (get_option('ims_position') == "left") { echo 'checked="checked"'; } ?> /> 
        Bottom Left
      </label></td>
    </tr>
  </table></td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th colspan="2" bgcolor="#E1EFFF" style="font-size:20px;" scope="row">Timed / Proactive Invite <em>( A timed popup requesting if the user would like a chat )</em></th>
  </tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th bgcolor="#FBFBFB" scope="row">Seconds Until Popup Request</th>
  <td bgcolor="#FBFBFB"><input name="ims_popuptime" type="text" id="ims_popuptime" value="<?php echo $ims_popuptime; ?>" size="5" maxlength="5" />
    Seconds</td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th bgcolor="#FBFBFB" scope="row">Enable Popup Invite</th>
  <td bgcolor="#FBFBFB"><label>
        <input type="radio" name="ims_popup" value="yes" id="ims_popup_0" <?php if ($ims_popup == "yes") { echo 'checked="checked"'; } ?> />
        Yes</label> <label>
        <br />
        <input name="ims_popup" type="radio" id="ims_popup_1" value="no" <?php if ($ims_popup == "no") { echo 'checked="checked"'; } ?> />
        No</label></td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th bgcolor="#FBFBFB" scope="row">Popup CSS</th>
  <td bgcolor="#FBFBFB"><table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td scope="col">Width ( In Pixels )</td>
      <td scope="col"><input name="ims_popupwidth" type="text" id="ims_popupwidth" value="<?php echo $ims_popupwidth; ?>" size="15" maxlength="15" /></td>
    </tr>
    <tr>
      <td>Height ( In Pixels )</td>
      <td><input name="ims_popupheight" type="text" id="ims_popupheight" value="<?php echo $ims_popupheight; ?>" size="15" maxlength="15" /></td>
    </tr>
    <tr>
      <td>Top ( In Pixels )</td>
      <td><input name="ims_popuptop" type="text" id="ims_popuptop" value="<?php echo $ims_popuptop; ?>" size="15" maxlength="15" /></td>
    </tr>
    <tr>
      <td>Left ( In Pixels )</td>
      <td><input name="ims_popupleft" type="text" id="ims_popupleft" value="<?php echo $ims_popupleft; ?>" size="15" maxlength="15" /></td>
    </tr>
  </table></td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th bgcolor="#FBFBFB" scope="row">Popup Background Image</th>
  <td bgcolor="#FBFBFB"><input name="ims_popupimage" type="text" id="ims_popupimage" value="<?php echo $ims_popupimage; ?>" size="75" maxlength="256" /></td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th bgcolor="#FBFBFB" scope="row">Popup Button Style Code</th>
  <td bgcolor="#FBFBFB"><input name="ims_popupbutton" type="text" id="ims_popupbutton" value="<?php echo $ims_popupbutton; ?>" size="15" maxlength="99" /></td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <th colspan="2" bgcolor="#E1EFFF" style="font-size:20px;" scope="row">Need some help?</th>
  </tr>
<tr valign="top">
  <th colspan="2" bgcolor="#FBFBFB" scope="row"><!-- START IMsupporting.com Live support software, Live help software code -->
<script type="text/javascript" src="http://support1.imsupporting.com/welcome2/popup.js"></script>
<SCRIPT LANGUAGE=JAVASCRIPT TYPE="TEXT/JAVASCRIPT">
<!-- Hide script from older browsers
var docref = "noref";
if (document.referrer != '') {
docref = document.referrer;
}
document.write('<a href="javascript:openSupport(\'1234567890\',\'Welcome\');"><img src="http://status.imsupporting.com/status.php?siteid=1234567890&amp;style=35&amp;docref='+docref+'" border="0" alt="live chat software" title="Launch live chat"/></a>');
//-- Stop hiding script -->
</SCRIPT>
<noscript><a href="http://www.imsupporting.com" title="Live chat software" target="_blank">Contact Imsupporting Here</a></noscript>
<!-- End IMsupporting Code --></th>
  </tr>
<tr valign="top">
  <th colspan="2" scope="row"><a href="http://imsupporting.guidearama.com/reader/gettingstarted" target="_blank">Getting Started Guide</a></th>
  </tr>
<tr valign="top">
  <th scope="row">&nbsp;</th>
  <td>&nbsp;</td>
</tr>

<?php
if ($adddetails == "1") {
echo '<input type="hidden" name="ims_username" value="'.$oci_username.'" />';
echo '<input type="hidden" name="ims_password" value="'.$oci_md5.'" />';
}
?>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="ims_siteid, ims_uploaded, ims_position, ims_leftcss, ims_topcss, ims_imageid, ims_username, ims_password, ims_popup ,ims_popuptime, ims_popupimage, ims_popupbutton, ims_popupheight, ims_popupwidth, ims_popuptop, ims_popupleft" />



</form><br />
</table>

<?php
if ($optsiteid == "000000000") {
# Lets get an ID
?>


<div id="imssignup" style="background-color: #EFF6FB; border: 1px solid #A3AFBC; padding:15px; padding-top: 2px;">
<h2>Create Free Account</h2>
<p>To use this plugin, you will need a free IMsupportng.com account. We can quickly make one now.
<div>
</p>
<table border="0">
	<tbody>
		<tr>
			<td><strong>
				<label for="email">Email Address:</label>
			</strong></td>
			<td><input style="padding: 5px; width:300px;" type="email" name="email" id="email"></td>
		</tr>
		<tr>
			<td colspan="2" style="font-size: 12px">This will be your account username</td>
		</tr>
		<tr>
			<td><strong>
				<label for="password2">Password:</label>
			</strong></td>
			<td><input style="padding: 5px; width:300px;" type="password" name="password" id="password"></td>
		</tr>
		<tr>
			<td colspan="2" style="font-size: 12px">Use this to login</td>
		</tr>
	</tbody>
</table>
<br>

<span style="padding: 4px; background-color: aquamarine; border: 1px solid #677F69; padding: 10px;" onClick="javascript:DoIMSRegister();"> <strong>Lets Go </strong>: Create Me A Live Chat Account </span>


<script>

function DoIMSRegister() {

        var xhr = new XMLHttpRequest();
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value; // Send over HTTPs Only!


        xhr.open('GET', 'https://console.imsupporting.com/API/registerAccount.php?email=' + email + '&password=' + password + '');
        xhr.onload = function() {
                if (xhr.status === 200) {
                        var response = xhr.responseText;
                        // RetCodes RetCodes from IMsupportinG register API
                        // 666:# = Email in use
                        // 100:# = No username sent
                        // 101:# = No password sent
                        // 102:# = Email invalid
                        // 200:# = All good. Username and password accepted and an account has been created.
                        var splittage = response.split(':');
                        var retcode = splittage[0];
                        var retvalue = splittage[1];


                        if (retcode === "200") {
				document.getElementById('ims_siteid').style.color = "green";
				document.getElementById('imsError').style.color = "green";
                                document.getElementById('ims_siteid').value = retvalue;
                                document.getElementById('imsError').innerHTML = "Account Created! <br><br>Please Click <b>SAVE CHANGES</b> above";
				document.getElementById('imssignup').style.display = "none";
                        }
                        if (retcode === "666") {
                                document.getElementById('imsError').innerHTML = "Error. There is an account with this email already, Please try again";
                        }
                        if (retcode === "100") {
                                document.getElementById('imsError').innerHTML = "Error, Please enter a username, Please try again.";
                        }
                        if (retcode === "101") {
                                document.getElementById('imsError').innerHTML = "Error, Please set a password, Please try again";
                        }
                        if (retcode === "102") {
                                document.getElementById('imsError').innerHTML = "Error, That email address looks invalid, Please try again";
                        }

                }
                else {
                        // HTTP Error
                }
        };
        xhr.send();

}

</script>


<?php
}
?>


</div>


<p>
<?php
}
?>
