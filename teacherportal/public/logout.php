<?php

//log outs the user
session_start();
session_destroy();
header('Location: index.php');
exit;