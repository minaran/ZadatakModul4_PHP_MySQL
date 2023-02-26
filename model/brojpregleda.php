<?php

class BrojPregleda{

    protected Lekari $lekari;
    protected Pregled $pregled;
    protected Pacijenti $pacijenti;
    protected int $brojpregleda;
    protected string $datum;

    public function __construct(Lekari $lekari,Pregled $pregled,Pacijenti $pacijenti, int $brojpregleda, string $datum)
    {
        $this->lekari = $lekari;
        $this->pregled = $pregled;
        $this->pacijenti = $pacijenti;
        $this->brojpregleda = $brojpregleda;
        $this->datum = $datum;
    }

	public function getLekari(): Lekari {
		return $this->lekari; }
	public function setLekari(Lekari $lekari): self {
		$this->lekari = $lekari;
		return $this;
	}

	public function getPregled(): Pregled {
		return $this->pregled; }
	public function setPregled(Pregled $pregled): self {
		$this->pregled = $pregled;
		return $this;
	}

	public function getPacijenti(): Pacijenti {
		return $this->pacijenti; }
	public function setPacijenti(Pacijenti $pacijenti): self {
		$this->pacijenti = $pacijenti;
		return $this;
	}

	public function getBrojPregleda(): int {
		return $this->brojpregleda; }
	public function setBrojPregleda(int $brojpregleda): self {
		$this->brojpregleda = $brojpregleda;
		return $this;
	}

	public function getDatum(): string {
		return $this->datum; }
	public function setDatum(string $datum): self {
		$this->datum = $datum;
		return $this;
	}

//prikazi sve termine pregleda
public static function prikaziSve() { 
}

//kreiranje/dodavanje novog pregleda
public static function dodaj(Pregled $pregled, $datum ) {
}

//brisanje pregleda
public static function obrisi(Pregled $pregled, $datum ) {
}

}

?>