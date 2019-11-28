<?php
    session_start();
    include_once("db/db.php");

    $nome1 = "";
    $nome2 = "";
    $idade = "";
    $isdef = "";
    $senha = "";
    $errors = array(); 


    // REGISTER USER
    if (isset($_REQUEST['submit'])) {
    // receive all input values from the form
    $nome1 = mysqli_real_escape_string($conn, $_REQUEST['nome']);
    $nome2 = mysqli_real_escape_string($conn, $_REQUEST['sobrenome']);
    $idade = mysqli_real_escape_string($conn, $_REQUEST['idade']);
    $isdef = mysqli_real_escape_string($conn, $_REQUEST['radio']);
    $senha = mysqli_real_escape_string($conn, $_REQUEST['senha']);

    if (empty($nome1)) { array_push($errors, "Primeiro nome é necessário!"); }
    if (empty($nome2)) { array_push($errors, "Segundo nome é necessário!"); }
    if (empty($senha)) { array_push($errors, "Senha é necessária!"); }
    if (empty($isdef)) { array_push($errors, "É preciso informar o status da sua visão!"); }
    if (empty($idade)) { array_push($errors, "É preciso informar sua idade!"); }

    if (count($errors) == 0) {
        $query = "INSERT INTO users (nome, sobrenome, idade, ehdef, senha) VALUES('$nome1', '$nome2', '$idade' , '$isdef', '$senha')";
        mysqli_query($conn, $query);

        $sql = "SELECT UserId FROM users WHERE nome = '$nome1' AND sobrenome = '$nome2' AND senha = '$senha')";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        while($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['UserId']; 
        }
        $_SESSION['nome'] = $nome1;
        $_SESSION['logado'] = TRUE;
        header('location: index.php');
  }
  header('location: index.php');
}