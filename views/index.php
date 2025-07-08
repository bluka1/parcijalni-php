<?php require 'views/partials/head.php' ?>

<div class="container mt-4">
  <div class="jumbotron bg-secondary text-white p-4 mb-4 rounded">
    <h1><?= $naslov ?></h1>
    <h2>Dobrodošli na moju aplikaciju za zadatke.</h2>
    <p>Ovo je jednostavna PHP aplikacija za TODO napravljena koristeći MVC pattern. <br>Za pregled Vaših zadataka prebacite se u Zadaci, ondje možete pregledati, obrisati  i ažurirati zadatke.
      <br>Za dodavanje novog zadatka prebacite se na Novi zadatak i ispunite formu za dodavanje novog zadatka. <br>Ugodno korisničko iskustvo Vam želim. 
    </p>
  </div>
</div>

<?php require 'views/partials/foot.php' ?>