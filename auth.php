<?php
    include_once("./db/db.php");
    if ( !isset($_REQUEST['nome1'], $_REQUEST['nome2'], $_REQUEST['senha']) ) {
        die ('Por favor, preencha todos os campos.');
    }
    if ($stmt = $conn->prepare('SELECT UserId, senha FROM users WHERE nome = ? AND sobrenome = ?')) {
        $stmt->bind_param('ss', $_REQUEST['nome1'], $_REQUEST['nome2']);
        $stmt->execute();
        $stmt->store_result();
    }
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userid, $senha);
        $stmt->fetch();
        if ($_REQUEST['senha'] === $senha) {
            session_regenerate_id();
            session_start();
            $_SESSION['logado'] = TRUE;
            $_SESSION['nome'] = $_REQUEST['nome1'];
            $_SESSION['id'] = $userid;
            echo 'Bem-Vindo ' . $_SESSION['nome'] . '! Indo para página principal...';
            header('Location: index.php');
        } else {
            echo 'senha incorreta!';
        }
    } else {
        echo 'Nomes incorretos!';
    }
    $stmt->close();
?>