//Humburguer
function clickMenu(){
    // itens.style.display = 'block'
    if(itens.style.display == 'block'){
        itens.style.display = 'none'
    }else{
        itens.style.display = 'block'
    }
    
}


//MODAL
// Fechamento do Modal
var span = document.getElementsByClassName("close")[0];

// Ao clicar no botao o modal aparece
function modalClick() {
  mModal.style.display = "block";
}

// quando clicar no span o modal fecha
span.onclick = function() {
  mModal.style.display = "none";
}
