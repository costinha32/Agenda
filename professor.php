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
      body {
            background-color: gray;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
        }  
      table {
            background-color: transparent;
            font-family: 'Roboto', sans-serif;
            border-radius: 10px;   
            align-items: center;
            border-color: black;
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
    
        </form>
    </table>
    

</body>
</html>