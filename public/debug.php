<?php
// Archivo temporal para debug - ELIMINAR después
echo '<pre>';
echo "SCRIPT_NAME: " . ($_SERVER['SCRIPT_NAME'] ?? 'no definido') . "\n";
echo "REQUEST_URI: " . ($_SERVER['REQUEST_URI'] ?? 'no definido') . "\n";
echo "PHP_SELF: " . ($_SERVER['PHP_SELF'] ?? 'no definido') . "\n";
echo "DOCUMENT_ROOT: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'no definido') . "\n";
echo "SCRIPT_FILENAME: " . ($_SERVER['SCRIPT_FILENAME'] ?? 'no definido') . "\n";
echo "\n--- Cálculo actual ---\n";

$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
echo "dirname(SCRIPT_NAME): " . $scriptDir . "\n";

if (str_ends_with($scriptDir, '/public')) {
    $scriptDir = dirname($scriptDir);
    echo "Ajustado (sin /public): " . $scriptDir . "\n";
}

$scriptDir = $scriptDir === '/' ? '/' : rtrim($scriptDir, '/') . '/';
echo "URL_PATH final: " . $scriptDir . "\n";
echo '</pre>';
