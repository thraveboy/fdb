<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: blue;
    color: cyan;
}
</style>
</head>

<body>
<?php
  $_LOCAL_API_CALLS = 1;
  require 'api.php';

  $previous_command = $_GET['command'];
  echo '<p>';
  echo '<div id="previous_command">';
  print($previous_command);
  echo '</div>';
  echo '</p>';
?>

<?php
   $name = '(anonymous - type "name '. '(yourname)' . '")';
   if ($ip_name) {
     $name = $ip_name;
   }
   echo '<p>';
   echo '[' . $_SERVER['REMOTE_ADDR']  . ' - ' . $name . '] ';
   echo '</p>';
?>

<FORM NAME="form1" ACTION="">
    <INPUT TYPE="Text" VALUE="" NAME="command" SIZE="80" autofocus
           onkeyup="showDash(this.value)">
</FORM>

<p>Dash
<br>
<span id="dash"></span>
</p>

<script>
function showDash(str) {
  var xhttp;
  if (str.length == 0) {
    document.getElementById("dash").innerHTML = "=-=";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dash").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "index.php?command="+str, true);
  xhttp.send();
}

var prev_cmd_val = document.getElementById("previous_command").innerText;
showDash(prev_cmd_val);
</script>

</body>
</html>
