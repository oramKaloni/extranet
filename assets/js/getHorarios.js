function reservaDisponible() {
    debugger;
    $.getJSON("https://efactory-kaloni.com/web1/extranet/assets/php/getHorarios.php", function(result){
        $.each(result, function(id, value){
            console.log(id + " - " + value);
            //console.log(result)
            //if(value == "true") {
                //console.log(value.search("true"));
            if(value !== null){
                var jsonObject = '{"' + id + '":"' + value + '"}';
                //document.getElementById(id).removeAttribute("disabled");
                document.getElementById(id).style.color = 'red';
                document.getElementById(id).style.background = 'none';
                document.getElementById(id).disabled = false;
                document.getElementById(id).style.pointerEvents = "none";
                document.getElementById(id).style.cursor = 'default';
                
                var splitString = value.split(" - ");
                //document.getElementsByName(id).style.float = "left";
                $('span[name="'+id+'"]').css('float', 'auto');
                $('span[name="'+id+'"]').css('color', 'red', 'important');
                $('span[name="'+id+'"]').css("cssText", "color:red !important;");

                $('span[name="'+id+'"]').text(splitString[2]);
                var participantes = "Participantes: \n" + (splitString[5]) + "\n\nMotivo: \n" + (splitString[4])  + "\n\nLugar: \n" + (splitString[3]) + "\n\nPaís: \n" + (splitString[6]);
                $('span[name="'+id+'"]').attr('title', participantes);
            }
        });
    });
    
    /*$.getJSON("https://efactory-kaloni.com/web1/extranet/assets/php/getDataReserva.php", function(result){
        $.each(result, function(id1, value1){
            console.log(id1 + " - " + value1);
            
        });
    });*/
}



