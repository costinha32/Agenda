
<?php
    include("conexao.php");

    if (isset($_POST['btnApagar']))
    {
        $apagar = $_POST['btnApagar'];
        $sql_code ="DELETE FROM aluno WHERE registro = '$apagar'"; 
        $sql_query = $con ->query($sql_code);
        $query = "SELECT * FROM aluno";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>

    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-aling: center;
        }
        a {
            font-size: 20px;
            color: white;
        }
        a:hover {
            color: blue;
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

    </style>
</head>
<body>
    LISTA DE ALUNOS
<form action="" method="POST">
    <input type="text" name="txtBuscar" placeholder="Digite um nome...">
    <button class = "btnBuscar" type="submit" name="btnBuscar" id="btnBuscar">Buscar</button>
</form>

    <form action="" method = "POST">

    <table border= "2px">
        <tr>
            <th>#</th>
            <th>nome</th>
            <th>Data de nascimento</th>
            <th>Apagar</th>
        </tr>
   
    <?php
     if(isset($_POST['btnBuscar'])){
        $pesquisa = $_POST['txtBuscar'];
        $sql_code = "SELECT * FROM aluno WHERE nome like'%$pesquisa%'"; 
        echo "funciona";
    }else{$sql_code = "SELECT * FROM aluno WHERE nome";
    }
   
    $sql_query = $con ->query($sql_code);
    while($dados = $sql_query->fetch_assoc()) {
    ?>

        <tr>
            <td><?php echo $dados['registro']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
           <td><?php echo $dados['dataNascimento']; ?></td>
           <td> 
           
            <center>
            <button type="submit" name="btnApagar" value = "<?php echo $dados['registro']; ?>"> 
                <img src="trashIcon.png" width="20px" height="20px" aling="center">
            </button>
            </center>
           
        </td>
        </tr>
        <?php }?>
        </form>
    </table>

    <a href="index.php">Home</a>

    <form action="" method="POST">
    <input type="text" name="txtRegistro" placeholder="Digite um registro">
    <input type="text" name="txtNome" placeholder="Digite um nome">
    <input type="text" name="txtData" placeholder="Digite data de nascimento">
    <button type="submit" name="btnInserir" id="btnInserir">Inserir</button>
</form>

    <form action="" method = "POST">
   
    <?php
     if(isset($_POST['btnInserir'])){
        $sql_code = "INSERT INTO aluno(registro, nome, dataNascimento) VALUES(" . $_POST['txtRegistro']. ",'"
        .$_POST['txtNome']. "','". $_POST['txtData']. "')"; 
    }
    while($dados = $sql_query->fetch_assoc()) {
    ?>
        <?php }?>
        </form>

</body>
</html>