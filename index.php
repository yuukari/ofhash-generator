 <?php
error_reporting(E_ERROR | E_PARSE);
if($_GET['form']=="1"){
require("hash/OfHash.php");
$hash = new OfHash();
$password = $_GET['string'];
$inputresult = $hash->hash($password);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>OfHash Hash Generator For OpenFlame.</title>
    </head>
    <body><?php if($_GET['form']=="1"){ ?>
        <p>Hash Result: <?php echo $inputresult; ?></p>
        <p>Your Hash Has been printed out above. Care to go another round?</p>
        <?php }else{ ?>
        <p>Put a text string in below to generate a hash.</p><?php } ?>
        <form id="form1" name="form1" method="get" action="index.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right">String:</td>
      <td><label>
        <input type="text" name="string" id="string" />
        <input type="hidden" name="form" id="form" value="1" />
      </label></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
    </body>
</html>
