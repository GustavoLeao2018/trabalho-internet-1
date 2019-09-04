function testeSenha(){
    let senha = document.querySelector('#senha').value;
    let senhaConfirmacao = document.querySelector("#confirmeASenha").value;

    console.log(senha == senhaConfirmacao);
    
    if(senha != senhaConfirmacao){
        alert('Senhas diferentes!');
    }
}

if(window.location.search != ""){
    var searchParams = new URLSearchParams(window.location.search);
    let div = document.querySelector(".container");
    let ul = document.createElement("ul");

    for(var pair of searchParams.entries()) {
        let li = document.createElement("li");
        li.innerText = `${pair[0]}: ${pair[1]}`
        li.classList.add("item");
        ul.appendChild(li);
    }
    div.appendChild(ul);
}
