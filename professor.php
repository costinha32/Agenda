<?php
    include("conexao.php");

    if (isset($_POST['btnApagar']))
    {
        $apagar = $_POST['btnApagar'];
        $sql_code ="DELETE FROM professor WHERE codigo = '$apagar'"; 
        $sql_query = $con ->query($sql_code);
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
      body {
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: central;
            font-size: 10px;
        }  
      table {
            background-color: rgba(0, 0, 0, .3);
            font-family: 'Roboto', sans-serif;
            border-radius: 15px 15px 0 0;   
            align-items: center;
            border: 1px;
            border-right: none;
            border-left: none;
            gap: .1%;
        }
        table tr th{
            border: none;
            border-right: 1px;

        }
        table tr td{
            border-right: none;
            border-left: none;
            border-top: none;
        }
        a {
            font-size: 20px;
            color: white;
        }
        a:hover {
            color: blue;
        }
        .form-box{
            align-items: center;
        }
    </style>

</head>
<body>
    <h1>LISTA DE PROFESSORES</h1>
   

    <form action="" method="POST">
        <input type="text" name="txtBuscar" placeholder="Digite um nome...">
    <button type="submit" name="btnBuscar" >Buscar</button>
</form>
<form action="" method="POST">
    <div class = "form-box">
    <table border="2px">
        <tr>
            
            <th>Titulação</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Apagar</th>
            <th>Sigla</th>            
            <th>Número de Alunos</th>
            <th>Sala</th>
            <th>Nome</th>
            <th>Carga horária</th>
            <th>Livro</th>

        </tr>
        <?php

            if(isset($_POST['btnBuscar'])){
                $pesquisa = $_POST['txtBuscar'];
                $sql_code = "SELECT * FROM professor AS p INNER JOIN turma AS t INNER JOIN disciplina AS d ON p.codigo = t.fk_idprofessor AND d.idDisciplina = t.fk_iddisciplina"; 
                //$sql_code = "SELECT * FROM Professor  AS P INNER JOIN disciplina AS D ON P.codigo = d.idDisciplina WHERE nome LIKE  '%$pesquisa%'";

            }else{$sql_code = "SELECT * FROM Professor";
            }
           
            //echo $sql_code "SELECT * FROM Professor";
            $sql_query = $con ->query($sql_code);
            while($dados = $sql_query->fetch_assoc())
            {

            
        ?>
        <tr>
            <td><?php echo $dados['titulacao']; ?>.</td>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
          <td> 
           
            <center>
            <button type="submit" name="btnApagar"> 
                <img src="trashIcon.png" width="20px" height="20px" aling="center">
            </button>
            </center>
           
        </td>
        <td><?php echo $dados['sigla']; ?></td>
        <td><?php echo $dados['nAlunos']; ?></td>
        <td><?php echo $dados['sala']; ?></td>
        <td><?php echo $dados['nomeDisciplina']; ?></td>
        <td><?php echo $dados['cargaHoraria']; ?></td>
        <td><?php echo $dados['livro']; ?></td>

            

        </tr>
        <?php  } ?>
        </div>
        </form>
    </table>

    <a href="index.php">Home</a>
    

</body>
</html>