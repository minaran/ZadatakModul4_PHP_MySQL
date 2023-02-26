// Dodavanje TipKorisnika    ( js je veza izmedju view i controllera)
$("#dodajTipKorisnika").submit(function (event) {    // uz pomoc id-a pronalazimo formu u view
  event.preventDefault();     // sprecavamo defoltno ponasanje i reload stranice, da je ne ucita automatski ponovo
  console.log("Pokrenuto dodavanje tipa korisnika");

  //citanje podataka iz forme, prebacili smo podatke iz forme u neki citljiviji format
  const $form = $(this);
  const serijalizacija = $form.serialize(); 
  console.log(serijalizacija);

  //slanje zahteva controlleru preko ajax
  request = $.ajax({
    url: "controller/dodajTipKorisnika.php",
    type: "post",
    data: serijalizacija,
  });

  request.done(function (response) {      // textStatus, jqXHR
    if (response === "Success") {       // dobicemo i odgovor, ako je bio "Success" (to je i odgovor f/je add)
      alert("Tip korisnika je dodat");
      location.reload(true);            // ovim izbrisemo alertbox
    } else {
      console.log("Tip korisnika nije dodat" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {   // ako dodje do greske
    console.error("Desila se greska: " + textStatus, error);});

});




// Dodavanje korisnika
$("#dodajForm").submit(function (event) {
  //event.preventDefault();
  //console.log("Pokrenuto dodavanje korisnika");

  //citanje podataka
  const $form = $(this);
  const serijalizacija = $form.serialize();
  console.log(serijalizacija);

  //slanje zahteva
  request = $.ajax({
    url: "controller/dodajKorisnika.php",
    type: "post",
    data: serijalizacija,
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Korisnik je dodat");
      location.reload(true);
    } else {
      console.log("Korisnik nije dodat" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});




// Brisanje korisnika
$("#btnObrisi").click(function (event) {
  event.preventDefault();
  console.log("Pokrenuto brisanje korisnika");

  //citanje podataka
  const polje = $("input[type=radio]:checked");

  //slanje zahteva
  request = $.ajax({
    url: "controller/brisiKorisnika.php",
    type: "post",
    data: { id: polje.val() },
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Korisnik je obrisan");
      location.reload(true);
    } else {
      console.log("Korisnik nije obrisan" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});



// Ucitaj korisnika
$("#btnIzmeni").click(function (event) {
  event.preventDefault();
  console.log("Pokrenuto ucitavanje korisnika");

  //citanje podataka
  const polje = $("input[type=radio]:checked");

  //slanje zahteva
  request = $.ajax({
    url: "controller/vratiKorisnika.php",
    type: "post",
    data: { id: polje.val() },
  });

  request.done(function (response, textStatus, jqXHR) {
    var prom = jQuery.parseJSON(response);
    console.log(prom);
    $("#ime").val(prom.ime);
    $("#prezime").val(prom.prezime);
    $("#tipkorisnika").val(prom.tipkorisnika_id);
    $("#id").val(prom.id);
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});




// Azuriranje korisnika
$("#izmeniForm").submit(function (event) {
  event.preventDefault();
  console.log("Pokrenuto azuriranje korisnika");

  //citanje podataka, prebacili smo podatke iz forme u neki citljiviji format
  const $form = $(this);
  const serijalizacija = $form.serialize();
  console.log(serijalizacija);

  //slanje zahteva preko ajax
  request = $.ajax({
    url: "controller/azurirajKorisnika.php",
    type: "post",
    data: serijalizacija,
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Korisnik je azuriran");
      location.reload(true);
    } else {
      console.log("Korisnik nije azuriran" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});



// dodavanje zakazivanje
$("#dodajZakazi").submit(function(event) {
  event.preventDefault();
  console.log("Pokrenuto zakazivanje");

// da bi moglo da se ocita preko Ajaxa, podatke iz forme smo poslali
// kao citljiv niz, citanje podataka
const $form = $(this);
const serijalizacija = $form.serialize();
console.log(serijalizacija);

  //slanje zahteva
  request = $.ajax({
    url: "controller/dodajZakazivanje.php",
    type: "post",
    data: serijalizacija,
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Zakazivanje je dodato");
      location.reload(true);
    } else {
      console.log("Zakazivanje nije dodato" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});