qtdTels = 0;

function adicionarCampoTelefone(codTel='', telefone=''){
    qtdTels++;

    p = document.createElement("p");
    p.setAttribute("id","pTel"+qtdTels);
    label = document.createElement("label");
    label.setAttribute("for","codTel"+qtdTels);
    label.appendChild(document.createTextNode("Telefone " +qtdTels+": "));
    p.appendChild(label);

    inputCodArea = document.createElement("input");
    inputCodArea.setAttribute("name","codTel"+qtdTels);
    inputCodArea.setAttribute("id","codTel"+qtdTels);
    inputCodArea.setAttribute("value",codTel);
    
    inputTel = document.createElement("input");
    inputTel.setAttribute("name","tel"+qtdTels);
    inputTel.setAttribute("id","tel"+qtdTels);
    inputTel.setAttribute("value",telefone);
    
    p.appendChild(inputCodArea);
    p.appendChild(inputTel);                
    
    fldTelefone = document.getElementById("fldTelefone");
    fldTelefone.appendChild(p);
}

function removerCampoTelefone(){
    console.log(fldTelefone.lastChild);
    if (qtdTels > 0){
        decisao = confirm("Você tem certeza que deseja remover o último telefone? ");
        if (decisao){
            fldTelefone.removeChild(fldTelefone.lastChild);
            qtdTels--;
        }
    }
}

function confirmaInclusao(){
    if (confirm('Contato inserido com sucesso. Deseja incluir mais contatos')){
        window.location='formIncluirContato.php';
    } else { 
        window.location='index.php';
    }
}

function confirmaAlteracao(){
    alert('Contato alterado com sucesso');
    window.location='index.php';
}

function confirmaExclusao(){
    alert('Contato removido com sucesso');
    window.location='index.php';
}

function confirmacaoExclusao(ind){
    if(confirm('Deseja realmente excluir o contato? '))
    {
        location.href="removerContato.php?ind=" + ind;
    } else {
        return false;
    }
}

function selecionaEstado(siglaEstado){
    estado = document.getElementById("estado");
    for(let i = 0; i < estado.children.length; i++){
        optGroup =  estado.children[i];
        if(optGroup.tagName == "OPTGROUP"){
            for(let j = 0; j < optGroup.children.length; j++){
                option =  optGroup.children[j];
                if(option.tagName == "OPTION"){
                    if (option.value == siglaEstado){
                        option.setAttribute('selected', 'selected');
                    }
                }
            }
        }
    }
}