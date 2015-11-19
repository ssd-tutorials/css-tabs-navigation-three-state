<?php include('inc/_functions.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3 state css tabs navigation</title>
<link href="styles/core.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="out">
  <div id="wr">
    <div id="ph">
      <ul id="phnv">
        <li id="btn_1"<?php getActive('home'); ?>><a href="?p=home"<?php getActive('home'); ?>>Home page</a></li>
        <li id="btn_2"<?php getActive('about'); ?>><a href="?p=about"<?php getActive('about'); ?>>About us</a></li>
        <li id="btn_3"<?php getActive('products'); ?>><a href="?p=products"<?php getActive('products'); ?>>Products</a></li>
        <li id="btn_4"<?php getActive('services'); ?>><a href="?p=services"<?php getActive('services'); ?>>Services</a></li>
        <li id="btn_5"<?php getActive('contact'); ?>><a href="?p=contact"<?php getActive('contact'); ?>>Contact us</a></li>
      </ul>
    </div>
    <div id="hd">by Sebastian Sulinski</div>
    <div id="cnt">
      <p class="pt">3 state CSS tabs navigation</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
<div id="ft">
  <div id="fti">
    <p><a href="http://www.sebastiansulinski.co.uk" title="Web Design Tutorials" target="_blank">Web Design Tutorials</a></p>
  </div>
</div>
</body>
</html>