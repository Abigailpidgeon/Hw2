<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
  <?php
if (isset($_POST["my-name"])) {
  ?>
  <p>The value sent it:</p>
  <?php
  echo $_POST["my-name"];
  } else {
  <?
  <p>Nothing posted to the page<p>
   <?php
}
echo getDisplay()
}
include "view-footer.php";

function getDisplay() {
  <?php
if (isset($_POST["my-name"])) {
  return "<p>The value sent it:</p>" .  $_POST["my-name"];
  } else { 
    return "<p>Nothing posted to the page<p>";
}
}
?>
