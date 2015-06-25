<?php
  $link;
  require 'config.inc';
  require 'db.inc';

  if(isset($_GET['row_size'])) {
    header("Content-type: text/txt; charset=UTF-8");
	$rs = $_GET['row_size'];
	$sql = "insert into rows (row_size) values(".$rs.")";
    $res = make_query($sql) or say(mysql_error(), 1);
	$sql = "update boat_positions set boat_pos=mod(boat_pos+".$rs.", 800) where boat_id=1";
    $res = make_query($sql) or say(mysql_error(), 1);
    echo "OK! get ".$rs;
  }
  else
    echo "no get!";
    
?>
