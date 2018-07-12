<?php
if ( in_category('works') ) {
  include(TEMPLATEPATH . '/single-works.php');
  } else {
  include(TEMPLATEPATH . '/single-normal.php');
  }
?>