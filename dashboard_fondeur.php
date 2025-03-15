<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Fondeur") {
    header("Location: login.php");
    exit;
}
?>
<h1>Bienvenue, <?php echo $_SESSION['nom']; ?> !</h1>
