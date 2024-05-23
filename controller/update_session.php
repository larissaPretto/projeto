<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['page'] = $_POST['page'];
    $_SESSION['idPhase'] = $_POST['idPhase'];
}
