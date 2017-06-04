<?php
   session_start();
   unset($_SESSION["username"]);

   echo 'You have cleaned session';
   header('Refresh: 2; URL = logout_form.php');