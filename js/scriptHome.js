/*$(document).ready(function(){
	loadAnzeigeMenu();
});*/

function loadAnzeigeMenu(){
	$.get("anzeigeContent.php",function(rep){
		//utilisation des data
		$("#bloc_content").html(rep);
		//event on change
		$("a").click(function(){
			loadStructure($(this).val());
		});
    });
    
    //load profil
    $.get("profilView.php",function(rep){
        $("#bloc_profil").html(rep);
    });
}
function loadStructure(idT){
        $.get("anzeigeLogisch.php?unit_id="+idT,function(rep){
            //utilisation des data
            $("#bloc_content").html(rep);
        });
}
//script Menu Navbar daten Anlegen
function testMenuChoice(){
		$(".dropdown-item").click(function(){
            var textTrim = $(this).text().trim();
            if(textTrim == "Algorithm")
                {
                    $.get("algorithmView.php?form_name="+textTrim,function(rep){
                        //utilisation des data
                        $("#bloc_content").html(rep);
                    });
                }
           if(textTrim == "Pruefstand")
                {
                    $.get("prufstand.php?form_name="+textTrim,function(rep){
                         //utilisation des data
                         $("#bloc_content").html(rep);
                    });
                }

            if(textTrim == "Test art")
                {
                     $.get("testart.php?form_name="+textTrim,function(rep){
                         //utilisation des data
                         $("#bloc_content").html(rep);
                     });
                }

                if(textTrim == "Batterie")
                {
                    $.get("batterie.php?form_name="+textTrim,function(rep){
                        //utilisation des data
                        $("#bloc_content").html(rep);
                    });
                }
           if(textTrim == "Modul")
                {
                    $.get("module.php?form_name="+textTrim,function(rep){
                         //utilisation des data
                         $("#bloc_content").html(rep);
                    });
                }

            if(textTrim == "Zelle")
                {
                     $.get("zelle.php?form_name="+textTrim,function(rep){
                         //utilisation des data
                         $("#bloc_content").html(rep);
                     });
                }
		});
}
