<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balanceamento de parentes</title>
</head>
<body>
    <?php
    function balanceamento($sequenciaParent)
    {
        $pilha = array(); // É criado para contar quantos parentes foram abertos.

        for ($i = 0; $i < strlen($sequenciaParent); $i++){
            $parenteses = $sequenciaParent[$i];

            if ($parenteses == '('){ //Verifica se está abrindo parenteses e salva no array
                array_push($pilha, $parenteses);
            } elseif ($parenteses == ')'){ // Verifica se está fechando um parenteses e retira do contador de quantos parenteses existem até agora
                if($parenteses == empty($pilha)){ // Caso a pilha esteja vazia antes do loop acabar, significa que não está balanceado ainda;
                    return false;
                } 
                array_pop($pilha);
            }

        }

        return empty($pilha);
    }

    $sequenciaParent = "((())(())"; // Entrada de parenteses.

    $resultado = balanceamento($sequenciaParent);

    echo "A entrada \"$sequenciaParent\" está balanceada? " . "<br> Resposta: " . ($resultado ? "Sim" : "Não");
    ?>
</body>
</html>