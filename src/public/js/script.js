function formatarTelefone(numero) {
    return numero.replace(/^(\d{2})(\d{1})(\d{4})(\d{4})$/, '($1) $2 $3-$4');
}

let telefoneOriginal = document.getElementById("telefoneCell").innerText;

let telefoneFormatado = formatarTelefone(telefoneOriginal);

document.getElementById("telefoneCell").innerText = telefoneFormatado