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

  var contador=0;
  function incrementar() {
  if(contador<0){
    document.querySelector('#cantidad').value=0;
    //alert('No puede ingresar una cantidad menor que cero ');
  }
  else {
    contador++;
     document.querySelector('#cantidad').value=contador;
    }
  }
  function decrementar() {
  if(contador<0 ||contador==0){
    document.querySelector('#cantidad').value=0;
    //alert('No puede ingresar una cantidad menor que cero ');
  }
  else {
  contador--;
  document.querySelector('#cantidad').value=contador;
  }
}
