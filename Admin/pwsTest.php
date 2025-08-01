<?php
    $hashCode = password_hash('abc123!@#', PASSWORD_BCRYPT);
    echo $hashCode;
?>