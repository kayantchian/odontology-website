function telefone_mask(){
    var tamanho = document.getElementById('telefone').value.length;
    var telefone = document.getElementById('telefone').value;
    if(tamanho==2){
        telefone = '('+ telefone + ')';
    }
    if(tamanho==9){
        telefone += '-';
    }
    document.getElementById('telefone').value = telefone;
}