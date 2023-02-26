<?php

class Pozdrav {
    public static function pozdrav() {
    echo "Dobrodošli na AppMedik! <br>"; }
}
// pozivam statičku metodu da se ispise
Pozdrav::pozdrav();


class Datum {
    public static $date_format = 'Y/m/d H:i:s';  // staticki properti za datum i vreme

    public static function format_date($unix_timestamp) {     // fja trenutne vremenske oznake
        echo date(self::$date_format, $unix_timestamp), "\n"; }
  }
Datum::format_date(time());   // koristimo i f-ju time() da odredi trentuno kalendarsko vreme u sec od 1.1.1970.

  ?>