<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">


                <h1 class="text-dark text-center">
                    Trabalhando com Array Associativo
                </h1>
                <h4 class="text-dark ">
                    Construindo um array Associativo
                </h4>

                <p class="text-dark">
                <?php
                    $dados[] = [
                        'Professor' => 'Adriano',
                        'Disciplina' => 'Programação Web II',
                        'Instituicao' => 'Etec/Fatec'
                    ];
                    $dados[] = [
                        'Professor' => 'Diego',
                        'Disciplina' => 'Banco de dados II',
                        'Instituicao' => 'Etec/Fatec'
                    ];
                    echo '$dados[] = [
                        "Professor" => "Diego",
                        "Disciplina" => "Banco de dados II",
                        "Instituicao" => "Etec/Fatec"
                    ];
                    $dados[] = [
                        "Professor" => "Diego",
                        "Disciplina" => "Banco de dados II",
                        "Instituicao" => "Etec/Fatec"
                    ];'
                    ?>
                </p>

                <h4 class="text-dark ">
                    Imprimindo o array na tela com o comando varS_dump();
                </h4>
                
                <p class="text-dark primary">
                <?php
                    echo var_dump($dados);
                    ?>
                </p>
               

                <h4 class="text-dark ">
                    Imprimindo o array na tela de forma organizada com o json_encode();
                </h4>
                
                <p class="text-dark">
                <?php
                    echo '<p class="text-dark">'. json_encode($dados). '</p>';
                    ?>
                </p>

                <h4 class="text-dark ">
                    Imprimindo somente o nome do professor;
                </h4>
                
                <p class="text-dark">
                    <?php
                        echo $dados['Professor'];
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>