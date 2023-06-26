<?php
    include("conexao.php");

    if (isset($_POST['btnApagar']))
    {
        echo "Funcionoou";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Roboto&display=swap');
    *{
        padding: 10px;
        margin: 0px;
    }
    a {
        text-decoration: none;
        color: black;
    }
    body {
        font-family: arial;
    }
    ul {
        list-style: none;
    }
    nav{
        background-color: rgba(16,16,16, .5);
        width: 350px;
        height: absolute;
        position: absolute  ;
        border-radius: 5px;
    }
    a {
        background-color: transparent;
        display: block;
        padding: 20px 5px
        color: white;
    }
    a:hover {
        background-color: rgb(174, 224, 230);
        color: black;   
    }
        
    </style>

</head>
<body>
   <nav>
    <ul>
    <li> <a href="professor.php">Lista de professores</a>
    </li>
    <li><a href="professorDisciplina.php">Professor Disciplina</a>
    </li>
    <li><a href="aluno.php">Aluno</a>
    </li>
    <li><a href="alunoDisciplina.php">Alunos disciplinas</a>
    </li>
    <li><a href="disciplinas.php">Disciplinas</a>
    </li>
    </ul>
   </nav>

</body>
</html>