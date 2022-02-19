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
    $geruch_icon_path = plugin_dir_url( __FILE__ ) .'icons/Icon_Geruch.svg';
    $behandlung_icon_path = plugin_dir_url( __FILE__ ) .'icons/Icon_' . $behandlung . '.svg';
    $cbd_gehalt_icon_path = plugin_dir_url( __FILE__ ) .'icons/Icon_CBD_Gehalt.svg';

    if($behandlung = "THC-reduziert") {
    $behandlung_string = 'Diese Sorte ist THC reduziert.';
    }
    elseif ($behandlung = "Erhoehter-CBD-Gehalt") {
      $behandlung_string = 'Der CBD Gehalt dieser Sorte wurde künstlich erhöht.';
    }
    elseif ($behandlung = "Naturbelassen") {
      $behandlung_string = 'Diese Sorte ist komplett naturbelassen.';
    }

    echo 'Deckelfarbe: ' . $deckelfarbe . '<br>';
    echo 'Behandlung: ' . $behandlung . '<br>';
    echo 'CBD Gehalt: ' . $cbd_gehalt . '<br>';
    echo 'Geruch: ' . $geruch . '<br>';
    echo 'Anbaumethode: ' . $anbau . '<br>';
    echo $anbau_icon_path;

    echo '
    <div id="outer-circle">
<div id="circle-shadow"></div>
    <div class="circle-background"></div>
        <div id="inner-circle" style="background: ' . $deckelfarbe . '">
            <div class="circle-content">      
                <div id="logogrid" class="grid">
                    <div class="popup_btn" id="btn_geruch" onclick="openPopUp(\'btn_geruch\', \'geruch\')">
                        <img class="infologo" src="' . $geruch_icon_path . '" alt="">
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
                    <div class="popup_btn" id="btn_behandlung" onclick="openPopUp(\'btn_behandlung\', \'behandlung\')">
                        <img class="infologo" src="' . $behandlung_icon_path. '" alt="">
                        <div id="behandlung" class="info-popup">
                            ' . $behandlung_string . '
                        </div>
                    </div>

                    <div class="popup_btn" id="btn_cbdgehalt" onclick="openPopUp(\'btn_cbdgehalt\', \'cbdgehalt\')">
                        <img class="infologo" src="' . $cbd_gehalt_icon_path . '" alt="">
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
