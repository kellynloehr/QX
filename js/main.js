


//////////////////////////////////////Swipe/////////////////////////////////
      
$(document).off('swipeleft').on('swipeleft', 'div[data-role="page"]', function(event){    
    if(event.handled !== true) // This will prevent event triggering more then once
    {    
        var nextpage = $.mobile.activePage.next('div[data-role="page"]');
        // swipe using id of next page if exists
        if (nextpage.length > 0) {
            $.mobile.changePage(nextpage, {transition: "slide", reverse: false}, true, true);
        }
        event.handled = true;
    }
    return false;         
});

$(document).off('swiperight').on('swiperight', 'div[data-role="page"]', function(event){   
    if(event.handled !== true) // This will prevent event triggering more then once
    {      
        var prevpage = $(this).prev('div[data-role="page"]');
        if (prevpage.length > 0) {
            $.mobile.changePage(prevpage, {transition: "slide", reverse: true}, true, true);
        }
        event.handled = true;
    }
    return false;            
});
/////////////////////////////////////FOOTER FIX//////////////////////////////////


$(document).on('taphold', '[data-role=page]', function(){
    $('[data-position=fixed]').fixedtoolbar('toggle');
});
//////////////////////////////////////CARD FLIP/////////////////////////////////


  $(document).ready(function(){
                    $(".handle").click(function(){
                            $(".card").toggleClass("flipped");
                        });
                });

  
//////////////////////////////////////AJX/////////////////////////////////

// Define a click binding for all anchors in the page
$( "a" ).on( "click", function( event ){

  // Prevent the usual navigation behavior
  event.preventDefault();

  // Alter the url according to the anchor's href attribute, and
  // store the data-foo attribute information with the url
  $.mobile.navigate( this.attr( "href" ), {
    foo: this.attr("data-foo")
  });

  // Hypothetical content alteration based on the url. E.g, make
  // an AJAX request for JSON data and render a template into the page.
  alterContent( this.attr("href") );
});

//////////////////////////////////////GOALS/////////////////////////////////

$(document).on("pageinit", "#home", function () {
    //bind click event to page, delegate from there
    $(this).on('click', "#botonGuardarOpciones", guardarDatosOpciones);
    //call function which loads data from localStorage
    mostrarValoresOpcionesGuardados();
});

function guardarDatosOpciones() {
    //alert("saving data");
    var localStorageKey1 = "nombreUsuario";
    var localStorageKey2 = "pesoUsuario";
    var localStorageKey3 = "alturaUsuario";
    var localStorageKey4 = "edadUsuario";
    if (Modernizr.localstorage) {
        localStorage.setItem(localStorageKey1, $("#nombreUsuarioOpciones").val());
        localStorage.setItem(localStorageKey2, $("#pesoUsuario").val());
        localStorage.setItem(localStorageKey3, $("#alturaUsuario").val());
        localStorage.setItem(localStorageKey4, $("#edadUsuario").val());
        //e.preventDefault();
    } else {
        //alert("No se puede usar el LocalStorage");
    }
}

function mostrarValoresOpcionesGuardados() {

    var localStorageKey1 = "nombreUsuario";
    var localStorageKey2 = "pesoUsuario";
    var localStorageKey3 = "alturaUsuario";
    var localStorageKey4 = "edadUsuario";

    var nombre = localStorage.getItem(localStorageKey1);
    var peso = localStorage.getItem(localStorageKey2);
    var altura = localStorage.getItem(localStorageKey3);
    var edad = localStorage.getItem(localStorageKey4);
   // alert(nombre + " " + peso + " " + altura + " " + edad);
    $("#nombreUsuarioOpciones").val(nombre);
    $("#pesoUsuario").val(peso).slider().slider("refresh");
    $("#alturaUsuario").val(altura);
    $("#edadUsuario").val(edad);
};