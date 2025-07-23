<?php
require '../app/tenant-router.php';
$tenant = getTenantFromHost($_SERVER['HTTP_HOST']);
include '../views/dashboard.php';
