<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
        <title>Agenda de Contatos</title>
        <?php
            require_once 'Classes/Agenda.class.php';
            require_once 'Classes/Contato.class.php';
            $agenda = Agenda::carregarAgenda();  
        ?>
    </head>
    <body>
        <?php
        
        ?>
        <div>
            <h1>Agenda de Contatos</h1>
            <table border="1" id="table-agenda">
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereco</th>
                    <th>Telefones</th>
                    <th>Alterar</th>
                    <th>Remover</th>
                </tr>
                <?php
                    $registros = $agenda->getContatos();
                    foreach ($registros as $ind => $contato):
                ?>
                        <tr>
                            <td><?php echo $contato->getNome();?></td>
                            <td><?php echo $contato->getSobrenome();?></td>
                            <td><?php echo $contato->getEndereco();?></td>
                            <td>
                                <?php
                                $telefones = $contato->getTelefones();
                                foreach ($telefones as $tel) {
                                    echo $tel.'<br>';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="formAlterarContato.php?ind=<?php
                                echo "$ind";
                                ?>">
                                    <img src="img/alterar.png">
                                </a>
                            </td>
                            <td>
                                <a href="removerContato.php?ind=<?php
                                echo "$ind";
                                ?>">
                                    <img src="img/deletar.png">
                                </a>
                            </td>
                        </tr>
                <?php        
                    endforeach;
                ?>
                
            </table>
            <a href="formIncluirContato.php">
                <button>
                    Incluir Contato
                </button>
            </a>
        </div>
    </body>
</html>
