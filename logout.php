<?php
session_start();
//unset session
session_destroy();
header('location: login.php');
