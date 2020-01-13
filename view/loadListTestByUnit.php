<?php 
    include_once('../models/ModuleClass.php');
    include_once('../models/BatterieClass.php');
    include_once('../models/ZelleClass.php');
    include_once('../models/functions.php');
    include_once('../models/TestingClass.php');
    include_once('../models/PruefstandClass.php');
    include_once('../models/TestArtClass.php');
    $selectedUnit = $_GET['type_unit'];
    $id_unit = $_GET['id_unit'];
    echo"<h1>$selectedUnit  $id_unit </h1>";
?>
<div id="liste_unit">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Code Testing</th>
            <th scope="col">Date Testing</th>
            <th scope="col">Prüfstand</th>
            <th scope="col">Testart</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //get Unit Number
        $listTest = getListTestById(getCodeUnitByIdTypeUnit($id_unit));
            $count = count($listTest) -1;
            for($i = 0; $i <= $count; $i++){
                $code_testing = $listTest[$i]->getCodeTesting();
                $date_testing = $listTest[$i]->getDateTesting();
                $unit = getUnitByTypeId($selectedUnit,$id_unit);
                $pruefstand = getPruefstandById($listTest[$i]->getIdPruefstandTesting());
                $testart = getTestArtById($listTest[$i]->getIdTestArtTesting());
                $name_pruefstand = $pruefstand->getNamePruefstand();
                $impedanz =$testart->getImpedanz_TestArt();
                $laden = $testart->getLadenTestArt();
                $kapazitaet = $testart->getKapazitaetTestArt();
                    echo "
                        <tr>
                            <td>$count</td>
                            <td>$code_testing</td>
                            <td>$date_testing</td>
                            <td>$name_pruefstand</td>
                            <td>I: $impedanz  L: $laden K: $kapazitaet</td>
                        </tr>
                    ";
                }
        ?>
        </tbody>
    </table>
</div>