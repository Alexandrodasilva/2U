function(){
    const cep = document.querySelector("input[name=cep]");
    cep.addEventListener('blur', e =>{
        const value = cep.value.replace(/[^0-9]+/, '');
        const url = `https://viacep.com.br/ws/${value}/json/`;

        fetch(url)
        .then( Response => Response.json())
        .then( e => {
            if(e){ 
                document.querySelector('input[name =endereco]').value = 
            }
        })
    });
}