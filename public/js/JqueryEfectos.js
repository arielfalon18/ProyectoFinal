$( "#mostrar" ).click(function() {
    $( "#texto-dentro" ).toggle( "slow" );
});
$( "#mostrar-progreso" ).click(function() {
    $( "#abrir-progreso" ).toggle( "slow" );    
});
$( "#mostrar-finalizada" ).click(function() {
    $( "#abrir-finalizada" ).toggle( "slow" );    
});
$( "#mostrar-cancelada" ).click(function() {
    $( "#abrir-cancelada" ).toggle( "slow" );    
});

$('input:file').on("change", function() {
    $('.boton-foto').prop('disabled', !$(this).val()); 
});