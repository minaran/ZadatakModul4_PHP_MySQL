<?php
namespace davanjeTerapije\Lekovi;
class Terapija {

    private $lekovi;

    public function createTerapija($name) {
        $this->lekovi[] = $name;
}
    public function getLekovi() {
        return $this->lekovi;
    }
}

namespace davanjeTerapije\FizikalneVezbe;
class Terapija {

    private $fizikalneVezbe;

    public function createTerapija($name) {
        $this->fizikalneVezbe[] = $name;
}
    public function getFizikalneVezbe() {
        return $this->fizikalneVezbe;
    }
}
?>