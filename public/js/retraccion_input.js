$(document).ready(function(){
    var maxField = 3; //Input fields increment limitation
    var addButtonCliente = $('.add_button'); //Add button selector
    var wrapperCliente = $('.field_wrapper'); //Input field wrapper
    var fieldHTMLCliente = '<div  id="remove">'+
                               '<input type="text" style="float:left;width: 90%;" class="form-control" name="field_name[]">'+
                               '<a href="javascript:void(0);" class="remove_buttonCliente hola" title="Remove field">'+
                               '<img src="archivo/remove-icon.png" width="30" height="30" />'+
                                '</a><br><br>'+ 
                            '</div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButtonCliente).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapperCliente).append(fieldHTMLCliente); // Add field html
        }
    });
    $(wrapperCliente).on('click', '.remove_buttonCliente', function(e){ //Once remove button is clicked
    	e.preventDefault();
        $("#remove:first").remove(); //Remove field html
        x--; //Decrement field counter
    });
    //Retracciones para Promoventes
    var maxPromo = 4; //Input fields increment limitation
    var addButtonPromo = $('.add_buttonPromo'); //Add button selector
    var wrapperPromo = $('.field_wrapperPromo'); //Input field wrapper
    var fieldHTMLPromo ='<div id="removePromo">'+
                               '<input type="text" style="float:left;width: 90%;" class="form-control">'+
                               '<a href="javascript:void(0);" class="remove_buttonPromovente" title="Remove field">'+
                               '<img src="archivo/remove-icon.png" width="30" height="30" />'+
                                '</a><br><br>'+ 
                            '</div>' ; //New input field html 
    var y = 1; //Initial field counter is 1
    $(addButtonPromo).click(function(){ //Once add button is clicked
        if(y < maxPromo){ //Check maximum number of input fields
            y++; //Increment field counter
            $(wrapperPromo).append(fieldHTMLPromo); // Add field html
        }
    });
    $(wrapperPromo).on('click', '.remove_buttonPromovente', function(e){ //Once remove button is clicked
        e.preventDefault();
        $("#removePromo:first").remove();  //Remove field html
        y--; //Decrement field counter
    });

});
 $("[rol='form-crear']").hide(0);
    function toggleFormCrear(id){
        $("[rol='form-crear']").hide(300, function(){
            $("#form-crear-" + id).show(300);
        });
    }