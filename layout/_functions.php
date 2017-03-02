<?php
  
  // Menu active page
  function active_page($current_page, $page) {
    if ($current_page == $page) {
      echo " class='active'";
    }
  }
  
?>