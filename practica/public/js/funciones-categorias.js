$(document).ready(function(){
    //Funcion para cargar la vista de principal categorias
    $("a.categorias").click(function(event){
        $("#contenido-procesos").load("procesos_varios/categorias/principal_categorias.php");
        event.preventDefault();
    });

    $("a.pagina").click(function(event){
        var nmum, reg;
        num = $(this).attr("v-num");
        reg = $(this).attr("num-reg");
        $("#contenido-procesos").load("procesos_varios/categorias/principal_categorias.php?num=" +num +"&num_reg="+ reg);
        event.preventDefault();
    })
});
