$(document).ready(function(){
    var contador=1;
    $("#imgAvance").on('click',function(){
        if(contador==8)
            contador=1;
        else{
            contador++;
        }
        switch(contador){
            case 1:
                $("#imgAvance").attr('src','img/nivel_uno.png');
                return;
            case 2:
                $("#imgAvance").attr('src','img/nivel_dos.png');
                return;
            case 3:
                $("#imgAvance").attr('src','img/nivel_tres.png');
                return;
            case 4:
                $("#imgAvance").attr('src','img/nivel_cuatro.png');
                return;
            case 5:
                $("#imgAvance").attr('src','img/nivel_cinco.png');
                return;
            case 6:
                $("#imgAvance").attr('src','img/nivel_seis.png');
                return;
            case 7:
                $("#imgAvance").attr('src','img/nivel_siete.png');
                return;
            case 8:
                $("#imgAvance").attr('src','img/nivel_ocho.png');
                return;
        }
    });
});