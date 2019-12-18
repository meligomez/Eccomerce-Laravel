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

//contador para stock.
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


//alert
var ALERT_TITLE = "¡Mensaje!";
var ALERT_BUTTON_TEXT = "Ok";

if(document.getElementById) {
	window.alert = function(txt) {
		createCustomAlert(txt);
	}
}

function createCustomAlert(txt) {
	d = document;

	if(d.getElementById("modalContainer")) return;

	mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
	mObj.id = "modalContainer";
	mObj.style.height = d.documentElement.scrollHeight + "px";

	alertObj = mObj.appendChild(d.createElement("div"));
	alertObj.id = "alertBox";
	if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
	alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
	alertObj.style.visiblity="visible";

	h1 = alertObj.appendChild(d.createElement("h1"));
	h1.appendChild(d.createTextNode(ALERT_TITLE));

	msg = alertObj.appendChild(d.createElement("p"));
	//msg.appendChild(d.createTextNode(txt));
	msg.innerHTML = txt;

	btn = alertObj.appendChild(d.createElement("a"));
	btn.id = "closeBtn";
	btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
	btn.href = "#";
	btn.focus();
	btn.onclick = function() { removeCustomAlert();return false; }

	alertObj.style.display = "block";

}
//ALERT
function removeCustomAlert() {
	document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
function ful(){
alert('¡Se ha añadido al carrito correctamente!');
}

$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();


//CAROUSEL!

    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});


function obtenerTotal(){
    var total=0.00;
//   console.log($('ul.cart').children('li').children('.detalle-auto').children('.segunda-seccion').children('#precio'));
    let elemento= $('ul.cart li');
    for (let index = 0; index < elemento.length; index++) {
        total += parseFloat(document.querySelector('#precio').getAttribute('value'));
    }
    let totalString= total.toString()
    document.querySelector('#total').innerHTML=totalString;
    document.querySelector('#totalHidden').innerHTML=totalString;
   return total;
}
obtenerTotal();

function verMedioPago(){
    mpSeleccionado = document.querySelector('#medioPago').value;
    if(mpSeleccionado!="EFEC")
    {
        if(mpSeleccionado==="DEB"){

            document.querySelector('#titleCard').innerHTML="DEBIT CARD";
            document.querySelector('#area').style.display="";
        }
        else{
            document.querySelector('#titleCard').innerHTML="CREDIT CARD";
            document.querySelector('#area').style.display="";
        }

    }else{
        document.querySelector('#area').style.display="none";
    }
}
! function(a) {
    a(function() {
        a(".button-sent #back").hide(), a(".button-sent #continue").click(function(b) {
            a("#area .master-card").css("transform", "rotateY(180deg)"), a(".button-sent #back").show()
        }), a(".button-sent #back").click(function(b) {
            a("#area .master-card").css("transform", "rotateY(0deg)"), a(this).hide()
        })
    })
}(jQuery);
