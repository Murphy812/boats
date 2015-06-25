<?php
  $link;
  require 'config.inc';
  require 'db.inc';
  echo val_from_query("select boat_pos from boat_positions where boat_id=1");    
?>
