<?php
session_start();
session_unset();
session_destroy();
header('Location: connexion.php?logout=1');
exit;
