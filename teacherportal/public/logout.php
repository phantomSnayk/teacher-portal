<?php

//log outs the user
session_start();
session_destroy();
header('Location: login.html');
exit;