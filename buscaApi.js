function verificar(){
    const cep = document.querySelector("input[name=cep]");
    cep.addEventListener('blur', e =>{
        const value = cep.value.replace(/[^0-9]+/, '');
        const url = `https://viacep.com.br/ws/${value}/json/`;
        fetch(url)
        .then( Response => Response.json())
        .then( e => {
            if(e){ 
                document.querySelector('input[name = estado ]').value = e.uf; 
                document.querySelector('input[name = municipio ]').value = e.localidade;
                document.querySelector('input[name = bairro ]').value = e.bairro; 
                document.querySelector('input[name = endereco]').value = e.logradouro;
                document.querySelector('input[name = complemento ]').value = e.complemento;  
            }
        })
    });
}