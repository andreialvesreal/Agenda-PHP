<!DOCTYPE html>
<html>
    <head>
        <title>Remoção de Contato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
        <script src="js/funcoesSistema.js"></script>
    </head>
    <body>
        <?php
            require_once 'Classes/Agenda.class.php';
            $agenda = Agenda::carregarAgenda();
            
            $ind = $_GET['ind'];
            $agenda->removerContatoInd($ind);
            Agenda::salvarAgenda($agenda);
        ?>
        <script>
            confirmaExclusao();
        </script>
    </body>
</html>