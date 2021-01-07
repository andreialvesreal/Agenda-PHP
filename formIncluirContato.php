<!DOCTYPE html>
<html>
    <head>
        <title>Incluir Contato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/style.css"/>
        <script src="js/funcoesSistema.js"></script>
    </head>
    <body>
        <form action="incluirContato.php" method="get">   
            <fieldset>
                <legend>Informações Gerais</legend>
                <p>
                    <label for="nome">Nome:</label> 
                    <input type="text" name="nome" id ="nome">
                </p>
                <p>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" id ="sobrenome">
                </p>
            </fieldset>
            <fieldset>
                <legend>Endereço</legend>
                <p>
                    <label for="cep">CEP:</label> 
                    <input type="text" name="cep" id ="cep">
                </p>
                <p>
                    <label for="rua">Rua:</label> 
                    <input type="text" name="rua" id ="rua">
                </p>
                <p>
                    <label for="numero">Numero:</label> 
                    <input type="text" name="numero" id ="numero">
                </p>
                <p>
                    <label for="bairro">Bairro:</label> 
                    <input type="text" name="bairro" id ="bairro">
                </p>
                <p>
                    <label for="cidade">Cidade:</label> 
                    <input type="text" name="cidade" id ="cidade">
                </p>
                <p>
                    <label for="estado">Estado:</label>
                    <select name="estado" id="estado">
                        <optgroup label="Região Nordeste">
                            <option value="AL">Alagoas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="MA">Maranhão</option>
                            <option value="PB">Paraíba</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="SE">Sergipe</option>
                        </optgroup>
                        <optgroup label="Região Sul">
                            <option value="PR">Paraná</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SC">Santa Catarina</option>
                        </optgroup>
                        <optgroup label="Região Sudeste">
                            <option value="ES">Espírito Santo</option>
                            <option value="MG" selected>Minas Gerais</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="SP">São Paulo</option>
                        </optgroup>
                        <optgroup label="Região Centro-Oeste">
                            <option value="DF">Distrito Federal</option>
                            <option value="GO">Goiás</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                        </optgroup>
                        <optgroup label="Região Norte">
                            <option value="AC">Acre</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="PA">Pará</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="TO">Tocantins</option>
                        </optgroup>
                    </select>
                </p>
                <p>
                    <label for="pais">Pais:</label> 
                    <input type="text" name="pais" id ="pais">
                </p>
            </fieldset>
            <fieldset id="fldTelefone">
                <legend>Telefones</legend>
                <input type="button" onclick="adicionarCampoTelefone()" value="Incluir Telefone">
                <input type="button" onclick="removerCampoTelefone()" value="Remover Último Telefone">
            </fieldset>
            <input type="submit" value="Cadastrar Contato" />
            <a href="index.php" class="cancel">Cancelar</a>
        </form>
    </body>
</html>

