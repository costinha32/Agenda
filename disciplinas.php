
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
    <title>Alunos</title>
</head>
<body>
   LISTA DE DISCIPLINAS
   <a href="index.php">Voltar</a>
<form action="" method="POST">
    <input type="text" name="txtBuscar" placeholder="Digite um nome...">
    <button type="submit" name="btnBuscar" id="btnBuscar">Buscar</button>
</form>

    <form action="" method = "POST">

    <table border= "2px">
        <tr>
            <th>nome</th>
            <th>Livro</th>
        </tr>
   
    <?php
     if(isset($_POST['btnBuscar'])){
        $pesquisa = $_POST['txtBuscar'];
        $sql_code = "SELECT * FROM disciplina WHERE nomeDisciplina like'%$pesquisa%'"; 
        echo "funciona";
    }else{$sql_code = "SELECT * FROM disciplina WHERE nomeDisciplina";
    }
   
    $sql_query = $con ->query($sql_code);
    while($dados = $sql_query->fetch_assoc()) {
    ?>

        <tr>
            <td><?php echo $dados['nomeDisciplina']; ?></td>
           <td><?php echo $dados['livro']; ?></td>
        </tr>
        <?php }?>
        </form>
    </table>

</body>
</html>