<?php
header('Content-Type: text/plain; charset=UTF-8');
$keys = [
    'max_input_vars',
    'max_input_time',
    'max_execution_time',
    'post_max_size',
    'upload_max_filesize',
    'max_file_uploads',
    'max_input_nesting_level',
    'max_multipart_body_parts',
    'user_ini.filename',
    'user_ini.cache_ttl',
    'session.gc_maxlifetime',
    'session.cookie_httponly',
    'session.use_strict_mode',
];
foreach ($keys as $k) {
    printf("%s => %s\n", $k, ini_get($k));
}
echo "\nSAPI => ".php_sapi_name()."\n";
echo "Loaded php.ini => ".php_ini_loaded_file()."\n";
?>


