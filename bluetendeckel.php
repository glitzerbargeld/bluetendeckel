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
    $cbd_gehalt = get_field('cbd_gehalt');
    $anbau = get_field('anbaumethode');

    $anbau_icon_path = plugin_dir_url( __FILE__ ) .'icons/Icon_' . $anbau . '.svg' ;
    $geruch_icon_path = plugin_dir_url( __FILE__ ) .'icons/Icon_Geruch';
    $behandlung_icon_path = plugin_dir_url( __FILE__ ) .'icons/Icon_' . $behandlung . '.svg';


    echo 'Deckelfarbe: ' . $deckelfarbe . '\n';
    echo 'Behandlung: ' . $behandlung . '\n';
    echo 'CBD Gehalt: ' . $cbd_gehalt . '\n';
    echo 'Geruch: ' . $geruch . '\n';
    echo 'Anbaumethode: ' . $anbau . '\n';
    echo $anbau_icon_path;

    echo '
    <div id="outer-circle">
<div id="circle-shadow"></div>
    <div class="circle-background"></div>
        <div id="inner-circle" style="background: ' . $deckelfarbe . '">
            <div class="circle-content">      
                <div id="logogrid" class="grid">
                    <div class="popup_btn" id="btn_geruch" onclick="openPopUp(\'btn_geruch\', \'geruch\')">
                        <img class="infologo" src="http://stag2.sanaleo.com/wp-content/uploads/2021/06/geruch_Zeichenfläche-1.svg" alt="">
                        <div id="geruch" class="info-popup">
                            <p>' . $geruch . '</p>
                        </div>
                    </div>
                    <div class="popup_btn" id="btn_' . strtolower($anbau) . '" onclick="openPopUp(\'btn_' . strtolower($anbau) . '\', \'outdoor\')">
                        <img class="infologo" src="' . $anbau_icon_path .'" alt="">
                        <div id="' . strtolower($anbau) . '" class="info-popup">
                            <a href="http://stag2.sanaleo.com/cbd-was-ist-das-uberhaupt/#' . $anbau . '" title="Black Domina Outdoor Grow">' . $anbau . '-Grow</a>
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
                            <p>Bis zu ' . $cbd_gehalt .'% CBD Anteil</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>     
    </div>

    
    ';

}
