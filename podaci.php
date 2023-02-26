<?php
include "utility/obrada.php";
include "model/korisnik.php";
include "model/lekari.php";
include "model/lekarorl.php";
include "model/lekarocni.php";
include "model/lekarfizijatar.php";
include "model/pacijenti.php";
include "model/administrator.php";
include "model/pregled.php";
include "model/brojpregleda.php";

session_start();
$lorl = new LekarOrl("Dr Lela", "Djuric", "lela@medi.rs", "lela123", "134567891234", "0662581477", "Lekar", "2015/01");
$locn = new LekarOcni("Dr Sava", "Pejic", "sava@medi.rs", "sava123", "1231234891234", "0661281477", "Lekar", "2010/02");
$lfiz = new LekarFizijatar("Dr Ana", "Matic", "ana@medi.rs", "ana123", "1234561231234", "0662123477", "Lekar", "2000/03");

$pac1 = new Pacijenti("Mara", "Nikolic", "mara@gmail.rs", "mara123", "7894333231234", "0662123311", "Pacijent");
$pac2 = new Pacijenti("Andjela", "Jocic", "andjela@gmail.rs", "andjela123", "7894333231234", "0662133789", "Pacijent");
$pac3 = new Pacijenti("Boban", "Madic", "boban@gmail.rs", "boban123", "7894555231234", "0665523799", "Pacijent");
$pac4 = new Pacijenti("Pavle", "Maric", "pavle@gmail.rs", "pavle123", "7894555231234", "0665523799", "Pacijent");
$pac5 = new Pacijenti("Sava", "Topic", "sava@gmail.rs", "sava123", "7894555231234", "0665523799", "Pacijent");
$pac6 = new Pacijenti("Luka", "Petrovic", "luka@gmail.rs", "luka123", "7894555231234", "0665523799", "Pacijent");
$pac7 = new Pacijenti("Igor", "Peric", "igor@gmail.rs", "igor123", "7894555231234", "0665523799", "Pacijent");
$pac8 = new Pacijenti("Vesna", "Lukic", "vesna@gmail.rs", "vesna123", "7894555231234", "0665523799", "Pacijent");
$pac9 = new Pacijenti("Aca", "Panic", "aca@gmail.rs", "aca123", "7894555231234", "0665523799", "Pacijent");

$adm = new Administrator("Sara", "Jovic", "sara@medi.rs", "sara123", "1234567890123", "066223344", "Administrator");

$nizkorisnika = [$lorl,$locn,$lfiz,$pac1,$pac2,$pac3,$pac4,$pac5,$pac6,$pac7,$pac8,$pac9,$adm];
$nizpacijenti = [$pac1,$pac2,$pac3,$pac4,$pac5,$pac6,$pac7,$pac8,$pac9];


$p1 = new Pregled("Mara Nikolic", "09.01.2023. 10:00-11:00", "orl");
$p2 = new Pregled("Andjela Jocic", "13.01.2023. 12:00-13:00", "orl");
$p3 = new Pregled("Boban Madic", "13.01.2023. 14:00-15:00", "orl");
$p4 = new Pregled("Pavle Maric", "09.01.2023. 14:00-15:00", "ocni");
$p5 = new Pregled("Sava Topic", "12.01.2023. 12:00-13:00", "ocni");
$p6 = new Pregled("Luka Petrovic", "12.01.2023. 13:00-14:00", "ocni");
$p7 = new Pregled("Igor Peric", "06.03.2023. 12:00-13:00", "fizijatar", "kontrolni pregled", "bez dalje terapije");
$p8 = new Pregled("Vesna Lukic", "07.03.2023. 11:00-12:00", "fizijatar", "prvi pregled", "predlog terapije");
$p9 = new Pregled("Aca Panic", "08.03.2023. 10:00-11:00", "fizijatar", "kontrolni pregled", "predlog terapije");


$p1->setSpisakPacijenti([$pac1]);
$p2->setSpisakPacijenti([$pac2]);
$p3->setSpisakPacijenti([$pac3]);
$p4->setSpisakPacijenti([$pac4]);
$p5->setSpisakPacijenti([$pac5]);
$p6->setSpisakPacijenti([$pac6]);
$p7->setSpisakPacijenti([$pac7]);
$p8->setSpisakPacijenti([$pac8]);
$p9->setSpisakPacijenti([$pac9]);

$nizpregledi = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9];

$_SESSION["pregledi"] = $nizpregledi;
$_SESSION["korisnici"] = $nizkorisnika;

?>