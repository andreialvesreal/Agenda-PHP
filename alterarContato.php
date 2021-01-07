<!DOCTYPE html>
<html>
    <head>
        <title>Alteração de Contato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
        <script src="js/funcoesSistema.js"></script>
    </head>
    <body>
        <?php
            require_once 'Classes/Agenda.class.php';
            $agenda = Agenda::carregarAgenda();
            
            $dados = $_GET;
            
            $contato = new Contato($dados['nome'], $dados['sobrenome']);
            
            $contato->setEndereco($dados['cep'], $dados['rua'], $dados['numero'], $dados['bairro'], $dados['cidade'], $dados['estado'], $dados['pais']);
            

            for ($i = 1; isset($dados['codTel'.$i]); $i++){
                $contato->adicionarTelefone($dados['codTel'.$i], $dados['tel'.$i]); 
            }
            
            //echo "$contato";
            
            
            
            $agenda->alterarContato($dados['ind'], $contato);
            Agenda::salvarAgenda($agenda);
        ?>
        <script>
            confirmaAlteracao();
        </script>
    </body>
</html>
