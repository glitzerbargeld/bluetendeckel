<?php   

/**
 * Plugin Name: Blüten Deckel
 * Description: Fügt den Info-Deckel auf den Blüten Seiten ein
 */


if(has_term('cbd-blueten', 'product_cat')) {
    add_action('woocommerce_after_single_product_summary', 'add_deckel', 10);
}

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
  <div id="inner-circle">
    <div class="circle-content">
      <div id="logogrid" class="grid">
        <div
          class="popup_btn"
          id="btn_geruch"
          onclick="openPopUp(\'btn_geruch\', \'geruch\')"
        >
          <img
            class="infologo lazyloaded"
            src="https://sanaleo.com/wp-content/uploads/2021/06/geruch_Zeichenfläche-1.svg"
            alt=""
            data-src="https://sanaleo.com/wp-content/uploads/2021/06/geruch_Zeichenfläche-1.svg"
          />
          <p></p>
          <div id="geruch" class="info-popup">
            <p>Erdig/Harzig</p>
            <p></p>
          </div>
          <p></p>
        </div>
        <div
          class="popup_btn"
          id="btn_outdoor"
          onclick="openPopUp(\'btn_outdoor\', \'outdoor\')"
        >
          <img
            class="infologo lazyloaded"
            src="https://sanaleo.com/wp-content/uploads/2021/06/outdoor-01.svg"
            alt=""
            data-src="https://sanaleo.com/wp-content/uploads/2021/06/outdoor-01.svg"
          />
          <p></p>
          <div id="outdoor" class="info-popup">
            <a
              href="https://sanaleo.com/cbd-was-ist-das-uberhaupt/#Outdoor"
              title="Black Domina Outdoor Grow"
              >Outdoor-Grow</a
            >
          </div>
          <p></p>
        </div>
        <div
          class="popup_btn"
          id="btn_terpene"
          onclick="openPopUp(\'btn_terpene\', \'terpene\')"
        >
          <img
            class="infologo lazyloaded"
            src="https://sanaleo.com/wp-content/uploads/2021/06/Terpene-01.svg"
            alt=""
            data-src="https://sanaleo.com/wp-content/uploads/2021/06/Terpene-01.svg"
          />
          <p></p>
          <div id="terpene" class="info-popup">
            Diese Sorte enthält <b>keine zusätzlichen</b>
            <a
              href="https://sanaleo.com/cbd-was-ist-das-uberhaupt/#Was_Sind_Terpene"
              title="Was sind Terpene?"
              >Terpene</a
            >
          </div>
          <p></p>
        </div>
        <div
          class="popup_btn"
          id="btn_cbdgehalt"
          onclick="openPopUp(\'btn_cbdgehalt\', \'cbdgehalt\')"
        >
          <img
            class="infologo ls-is-cached lazyloaded"
            src="https://sanaleo.com/wp-content/uploads/2021/04/CBD_Zeichenflaeche-1.png"
            alt=""
            data-src="https://sanaleo.com/wp-content/uploads/2021/04/CBD_Zeichenflaeche-1.png"
            loading="lazy"
          />
          <p></p>
          <div id="cbdgehalt" class="info-popup">
            <p>Bis zu 3,5% CBD Anteil</p>
            <p></p>
          </div>
          <p></p>
        </div>
        <p></p>
      </div>
      <p></p>
    </div>
    <p></p>
  </div>
  <p></p>
</div>

    
    ';

}
