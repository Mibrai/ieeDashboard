<?php 
    include_once('../models/ModuleClass.php');
    include_once('../models/BatterieClass.php');
    include_once('../models/ZelleClass.php');
    include_once('../models/functions.php');
    $selectedUnit = $_GET['selected_unit'];
    echo"<h1 id='type_unit_title'> $selectedUnit </h1>";
?>
<div id="liste_unit">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Abkürzung</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //get Unit Number
        $listUnit = getListUnit($selectedUnit);
            $count = count($listUnit) -1;
            for($i = 0; $i <= $count; $i++){
                if($selectedUnit == "Batterie")
                    {
                        $id_unit = $listUnit[$i]->getIdBatterie();
                        $name_unit = $listUnit[$i]->getNameBatterie();
                        $abkurzung_unit = $listUnit[$i]->getAbkurzungBatterie();
                        echo"
                            <tr>
                                <th scope = 'row'>
                                    <div class='form-check form-check-inline'>
                                        <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value=$id_unit>
                                    </div>
                                </th>
                                <td>$id_unit</td>
                                <td>$name_unit</td>
                                <td>$abkurzung_unit</td>
                            </tr>
                        ";
                    }
                else{
                    if($selectedUnit == "Module")
                        {
                            $id_unit = $listUnit[$i]->getIdModul();
                            $name_unit = $listUnit[$i]->getNameModul();
                            $abkurzung_unit = $listUnit[$i]->getAbkurzungModul();
                            echo"
                                <tr>
                                    <th scope = 'row'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value=$id_unit>
                                        </div>
                                     </th>
                                    <td>$id_unit</td>
                                    <td>$name_unit</td>
                                    <td>$abkurzung_unit</td>
                                </tr>
                            ";
                        }
                    else{
                        if($selectedUnit == "Zelle")
                        {
                            $id_unit = $listUnit[$i]->getIdZelle();
                            $name_unit = $listUnit[$i]->getNameZelle();
                            $abkurzung_unit = $listUnit[$i]->getAbkurzungZelle();
                            echo"
                                <tr>
                                    <th scope = 'row'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value=$id_unit>
                                        </div>
                                    </th>
                                    <td>$id_unit</td>
                                    <td>$name_unit</td>
                                    <td>$abkurzung_unit</td>
                                </tr>
                            ";
                        }
                    }
                }
            }
        ?>
        </tbody>
    </table>
</div>