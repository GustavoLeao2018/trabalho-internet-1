function testeSenha(){
    let senha = document.querySelector('#senha').value;
    let senhaConfirmacao = document.querySelector("#confirmeASenha").value;

    console.log(senha == senhaConfirmacao);
    
    if(senha != senhaConfirmacao){
        alert('Senhas diferentes!');
    }
}
