function telefone_mask() {
    var tamanho = document.getElementById('telefone').value.length;
    var telefone = document.getElementById('telefone').value;
    if (tamanho == 2) {
        telefone = '(' + telefone + ')';
    }
    else if (tamanho == 9) {
        telefone += '-';
    }
    document.getElementById('telefone').value = telefone;
}

function cpf_mask() {
    var tamanho = document.getElementById('pf').value.length;
    alert(tamanho);
    var cpf = document.getElementById('pf').value;
    if (tamannho == 3) {
        cpf += '.';
    }
    else if (tamanho == 7) {
        cpf += '.';
    }
    else if (tamanho == 11) {
        cpf += '-';
    }
    document.getElementById('pf').value = cpf;
}