function count(clase,valor){
    var counter = { var: 0 };
    TweenMax.to(counter, 3, {
      var: valor,
      onUpdate: function () {
        var number = Math.ceil(counter.var);
        $(clase).html(number);
        // if(number === counter.var){ counter.kill(); }
      },
      onComplete: function(){
        count();
      },
      ease:Circ.easeOut
    });
  }

  count('.counter2',1500);
  count('.counter3',50);
  count('.counter4',560);

function incrementar(){
    if(Number (document.querySelector('#cantidad').value) >0){
        var resul=Number (document.querySelector('#cantidad').value);
        resul ++;
        console.log(resul);
        return resul;
    }
    else{
        document.querySelector('#cantidad').value=1;
        console.log(resul);
        return resul;
    }

}
function decrementar(){
    if(Number (document.querySelector('#cantidad').value) >0){
        cant=document.querySelector('#cantidad').value -1;
        return cant;
    }
    var cant=0;
    cant=document.querySelector('#cantidad').value -1;
    return cant;

}
