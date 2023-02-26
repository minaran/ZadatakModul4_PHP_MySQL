<?php

class Pregled
{
    use Obrada;
    protected $id;
    protected $datum;
    protected $spisakLekari;
    protected $spisakPacijenti;
    protected $statusPregleda;

    public function __construct($id, $datum, $statusPregleda)
    {
        $this->id = $id;
        $this->datum = $datum;
        $this->statusPregleda = $statusPregleda;
        $this->spisakLekari = array();
        $this->spisakPacijenti = array();

    }


    public function getNaziv() {
        return $this->id;}
    public function setId($id) {
        $this->id = $id; }

    public function getDatum() {
        return $this->datum; }
    public function setDatum($datum) {
        $this->datum = $datum;}

    public function getStatusPregleda() {
        return $this->statusPregleda;}
    public function setStatusPregleda($statusPregleda) {
        $this->statusPregleda = $statusPregleda; }

    public function setSpisakLekari($spisaklekari){
        $this->spisakLekari = $spisaklekari; }
    public function getSpisakLekari() {
        return $this->spisakLekari; }

    public function setSpisakPacijenti($spisakpacijenti) {
        $this->spisakPacijenti = $spisakpacijenti; }
    public function getSpisakPacijenti() {
        return $this->spisakPacijenti; }


}
?>