<?php
	include_once('../models/functions.php');
?>
<div id="bloc_content_anzeige">
    <div id="content_title"><span class="badge badge-primary btn-lg btn-block">Test Machen !!</span></div>
    <div class="container">
    <div class="row">
        <div class="col-sm" id="col_batterie">
            <span class="badge badge-primary btn-lg btn-block">Unit</span>
            <!-- Unit checkbox choice -->
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Batterie" onclick="loadSelectedUnit(this.value);">
                <label class="form-check-label" for="inlineRadio1">Batterie</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Module" onclick="loadSelectedUnit(this.value);">
                <label class="form-check-label" for="inlineRadio2">Modul</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Zelle" onclick="loadSelectedUnit(this.value);">
                <label class="form-check-label" for="inlineRadio3">Zelle</label>
                </div>
        </div>
            <!-- load list selected unit  from Database -->
        <div class="col-sm" id="col_selected_unit"></div>
            <!-- end load -->
    </div>
    <div class="row">
        <div class="col-sm" id="col_modul">
            <span class="badge badge-primary btn-lg btn-block">Prüfstand</span>
            <select id="inputState" class="form-control">
                <?php loadPruefstandOption(); ?>
            </select>
            <!-- load list Module from Database -->
        </div>
        <div class="col-sm" id="col_zelle">
            <span class="badge badge-primary btn-lg btn-block">Test Art</span>
            <select id="inputState" class="form-control">
                <?php loadTestArtOption(); ?>
            </select>
            <!-- load list Zelle from Database -->
        </div>
        <div class="col-sm" id="col_bt">
            <button type="button" class="btn btn-outline-primary">Test Speichern</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm" id="col_tabelle_test">
            <span class="badge badge-primary btn-lg btn-block">Test List</span>
            <div id="test_list"></div>
        </div>
    </div>
</div>
</div>