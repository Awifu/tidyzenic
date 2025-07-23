<?php
function getTenantFromHost($host) {
    $host = strtolower($host);
    $parts = explode('.', $host);

    if (count($parts) > 2) {
        return $parts[0]; // subdomain
    }

    return 'main'; // default
}
