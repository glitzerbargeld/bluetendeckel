<?php   

/**
 * Plugin Name: Blüten Deckel
 * Description: Fügt den Info-Deckel auf den Blüten Seiten ein
 */



add_action('woocommerce_after_single_variation', 'add_deckel');


function add_deckel() {

    $deckelfarbe = get_field('deckelfarbe');
    $geruch = get_field('geruch');
    $behandlung = get_field('behandlung');
    $cbd_gehalt = get_field('cbd-gehalt');
    $deckelfarbe = get_field('deckelfarbe');


    echo '
    <div id="outer-circle">
<div id="circle-shadow"></div>
    <div class="circle-background"></div>
        <div id="inner-circle" style="color:' . $deckelfarbe . '">
            <div class="circle-content">      
                <div id="logogrid" class="grid">
                    <div class="popup_btn" id="btn_geruch" onclick="openPopUp(\'btn_geruch\', \'geruch\')">
                        <img class="infologo" src="http://stag2.sanaleo.com/wp-content/uploads/2021/06/geruch_Zeichenfläche-1.svg" alt="">
                        <div id="geruch" class="info-popup">
                            <p>Erdig/Harzig</p>
                        </div>
                    </div>
                    <div class="popup_btn" id="btn_outdoor" onclick="openPopUp(\'btn_outdoor\', \'outdoor\')">
                        <img class="infologo" src="https://sanaleo.com/wp-content/uploads/2021/06/outdoor-01.svg" alt="">
                        <div id="outdoor" class="info-popup">
                            <a href="http://stag2.sanaleo.com/cbd-was-ist-das-uberhaupt/#Outdoor" title="Black Domina Outdoor Grow">Outdoor-Grow</a>
                        </div>
                    </div>
                    <div class="popup_btn" id="btn_terpene" onclick="openPopUp(\'btn_terpene\', \'terpene\')">
                        <img class="infologo" src="http://stag2.sanaleo.com/wp-content/uploads/2021/06/Terpene-01.svg" alt="">
                        <div id="terpene" class="info-popup">
                            Diese Sorte enthält <b>keine zusätzlichen</b> <a href="http://stag2.sanaleo.com/cbd-was-ist-das-uberhaupt/#Was_Sind_Terpene" title="Was sind Terpene?">Terpene</a>
                        </div>
                    </div>

                    <div class="popup_btn" id="btn_cbdgehalt" onclick="openPopUp(\'btn_cbdgehalt\', \'cbdgehalt\')">
                        <img class="infologo" src="http://stag2.sanaleo.com/wp-content/uploads/2021/04/CBD_Zeichenflaeche-1.png" alt="">
                        <div id="cbdgehalt" class="info-popup">
                            <p>Bis zu 3,5% CBD Anteil</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>     
    </div>

    
    ';

}
