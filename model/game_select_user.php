<?php
function search_user($conectado, $email)
{
    $query = "SELECT idUser, name FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    return null;
}

function search_game($conectado, $idUsuario)
{
    $query = "SELECT time, idGame FROM game WHERE idUser = ? ORDER BY idGame DESC LIMIT 1";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_bind_param($stmt, "i", $idUsuario);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    return null;
}
function playing($page)
{
    if ($page != 1 && $page != 51 && $page != 2 && $page != 3 && $page != 52)
        return true;
    else
        return false;
}
