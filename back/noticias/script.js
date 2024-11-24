function validarFormulario() {
    var titulo = document.getElementById('titulo').value;
    var texto = document.getElementById('texto').value;
    var autor = document.getElementById('autor').value;
    var categoria_id = document.getElementById('categoria_id').value;

    if (titulo.trim() === '') {
        alert('Por favor, preencha o título.');
        return false;
    }
    if (texto.trim() === '') {
        alert('Por favor, preencha o texto.');
        return false;
    }
    if (autor.trim() === '') {
        alert('Por favor, preencha o autor.');
        return false;
    }
    if (categoria_id === '') {
        alert('Por favor, selecione uma categoria.');
        return false;
    }
    return true;
}