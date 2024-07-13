<?php
function search_user($conectado, $email)
{
    $query = "SELECT idUser, name, access FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    mysqli_stmt_close($stmt);
    return null;
}

function search_user_game_revised($conectado, $idUser)
{
    $query = "SELECT idGame FROM game WHERE idUser = ? and correction = 1";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_bind_param($stmt, "i", $idUser);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    mysqli_stmt_close($stmt);
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
    mysqli_stmt_close($stmt);
    return null;
}

function list_players($conectado)
{
    $query = "SELECT * FROM user natural join game WHERE finish = 1";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $players = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $players[] = array(
            'idUser' => $row['idUser'],
            'name' => $row['name'],
            'idGame' => $row['idGame'],
            'time' => $row['time'],
            'correction' => $row['correction'],
            'grade' => $row['grade']
        );
    }
    
    mysqli_stmt_close($stmt);
    return $players;
}

function search_answer($conectado, $idPhases, $idGame, $idUser, $category)
{
    $query = "SELECT * FROM answeruser WHERE idPhases = ? and idUser = ? and idGame = ? and categories = ?";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_bind_param($stmt, "iiii", $idPhases, $idUser, $idGame, $category);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $answers = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $answers[] = array(
            'idAnsUser' => $row['idAnsUser'],
            'answer' => $row['answer'],
            'correct' => $row['correct'],
            'categories' => $row['categories'],
            'obs' => $row['obs']
        );
    }
    
    mysqli_stmt_close($stmt);
    return $answers;
}

function search_answer_correct($conectado, $idPhases, $category)
{
    $query = "SELECT * FROM answerphase WHERE idPhase = ? and categories = ?";
    $stmt = mysqli_prepare($conectado, $query);
    mysqli_stmt_bind_param($stmt, "si", $idPhases, $category);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $answers = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $answers[] = array(
            'description' => $row['description'],
            'categories' => $row['categories'],
        );
    }
    
    mysqli_stmt_close($stmt);
    return $answers;
}

function list_answer ($answers)
{
    if (!empty($answers)) {
        foreach ($answers as $answer) {
            echo " " . $answer['answer'] .  "<br>";
        }
    } else {
        echo "<br>";
    }   
}

function playing($page)
{
    if ($page != 1 && $page != 51 && $page != 2 && $page != 3 && $page != 52)
        return true;
    else
        return false;
}
