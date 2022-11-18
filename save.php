<?php
  $name = filter_input(INPUT_GET, "name");
  $hometown = filter_input(INPUT_GET, "hometown");
  $fp = fopen("guestbook.csv", "a");
  fputcsv($fp, [$name, $hometown]); 
  fclose($fp);