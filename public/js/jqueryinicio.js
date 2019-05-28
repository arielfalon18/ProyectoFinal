$(document).ready(function(){
    $('#Formulario').toggle(
        setTimeout(() => {
            $('#Formulario').show('show');
        }, 4000)       
    );
    $('#pressionaF').click(function(){
        $('#popup-open').show('show');
    }); 
    $('#close').click(function(){
        $('#Formulario').hide('show');
    });
});