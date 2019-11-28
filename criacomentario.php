<?php
    session_start();
    include_once("db/db.php");
    if(isset($_SESSION['logado'], $_SESSION['id'])) {
        $comment = $_REQUEST['com'];
        $siteid = $_GET["siteid"];
        $estrelas = $_REQUEST['estrelas'];
        $userid = $_SESSION['id'];

        $query = ("INSERT INTO reviews (coment, estrelas, idSite, idUser) VALUES ('$comment', $estrelas, $siteid, $userid)");
        echo $query;
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    }
    else {
        echo "usuário não está logado.";
    }
?>