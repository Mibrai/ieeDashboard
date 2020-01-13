function loadAnzeigeMenu(){
	$.get("anzeigeContent.php",function(rep){
		//use  data
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
            //use  data
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
                        //use  data
                        $("#bloc_content").html(rep);
                    });
                }
           if(textTrim == "Pruefstand")
                {
                    $.get("prufstand.php?form_name="+textTrim,function(rep){
                         //use  data
                         $("#bloc_content").html(rep);
                    });
                }

            if(textTrim == "Test art")
                {
                     $.get("testart.php?form_name="+textTrim,function(rep){
                         //use  data
                         $("#bloc_content").html(rep);
                     });
                }

                if(textTrim == "Batterie")
                {
                    $.get("batterie.php?form_name="+textTrim,function(rep){
                        //use  data
                        $("#bloc_content").html(rep);
                    });
                }
           if(textTrim == "Modul")
                {
                    $.get("module.php?form_name="+textTrim,function(rep){
                         //use  data
                         $("#bloc_content").html(rep);
                    });
                }

            if(textTrim == "Zelle")
                {
                     $.get("zelle.php?form_name="+textTrim,function(rep){
                         //use  data
                         $("#bloc_content").html(rep);
                     });
                }
		});
}
//function loadTestForm
function loadTestView(){
    $.get("testView.php",function(rep){
        //use  data
        $("#bloc_content").html(rep);
    });
}

//load Selected Unit View
function loadSelectedUnit(unit_name){
    $("input").click(function(rep){
        $.get("listeUnitFromDB.php?selected_unit="+unit_name,function(data){
            $("#col_selected_unit").html(data);
            //event by click on element
            $("input").click(function(){
                //loadListTestUnit
                $.get("loadListTestByUnit.php?type_unit="+unit_name+"&id_unit="+$(this).val(),function(data2){
                    $("#test_list").html(data2);
                });
            });
        });
       
    });
    
}