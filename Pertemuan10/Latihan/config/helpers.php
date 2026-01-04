<?php
// config/helpers.php
function e($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

function money_id($n) {
    // format rupiah sederhana
    return "Rp " . number_format((float)$n, 0, ',', '.');
}

function current_page($name) {
    $self = basename($_SERVER['PHP_SELF']);
    return $self === $name ? "active" : "";
}
?>
