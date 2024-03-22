<?php 
include 'database.php';
$Get_dados = query("SELECT * FROM Produtos");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/style-ADP.css">
    <title>Document</title>
</head>
<body>
    <div class="cabecalho">
        <h1>Produtos Registrados</h1>
    </div>

    <div class='container'>
        <table class="tabela">
            <thead>
                <tr>
                    <th>ID do produto</th>
                    <th>Nome do produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <?php 
            foreach($Get_dados as $produto){
                echo "<tr> <td>{$produto['id']}</td>  <td>{$produto['nome']}</td>  <td>{$produto['quantidade']}</td>  <td>{$produto['preco']}</td> </tr>";
                echo "<tr class='linha-tr' > <td class='celula' colspan='4'><hr></td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>