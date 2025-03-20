@extends('layout')
@section('title', 'welcome')

@section('body')
<h1>welcome / Bienvenue</h1>
<div class="content-container">
<div class="image-container">
    <img src="https://media.istockphoto.com/id/1235240586/fr/photo/bibliothèque-étagères-avec-des-livres-et-des-manuels-concept-dapprentissage-et-déducation.jpg?s=612x612&w=0&k=20&c=Cwf7JgioW3L_ajuOv4vBld_kUupTZsMd8ItYt4PXr6s=" alt="Description de l'image">
    </div>
    <div class="text-container">
        <p>
            Bienvenue sur MyBiblio, un sanctuaire littéraire où les pages prennent vie et les histoires vous transportent au-delà de l'imaginable. Plongez dans un univers où le fantastique côtoie l'horreur, où chaque livre est une porte vers des mondes inexplorés. Laissez-vous envoûter par des récits qui dansent entre les ombres et la lumière, où chaque mot est une invitation à l'évasion.
        </p>
        <p>
            Chez MyBiblio, l'achat de livres en ligne devient une aventure poétique, une quête de trésors littéraires qui sauront captiver votre âme et nourrir votre esprit. Que vous soyez en quête de frissons ou de merveilleux, notre collection est une mosaïque d'émotions, un voyage sensoriel à travers les genres.
        </p>
        <p>
            Entrez dans notre bibliothèque virtuelle et laissez la magie des mots vous guider vers des horizons insoupçonnés. Bienvenue dans un monde où chaque page tournée est une nouvelle épopée.
        </p>
    </div>
</div>

<h2>Les derniers livres ajoutés</h2>

<div class="card" style="width: 18rem;">
    <img src="https://cdn.beebs.app/fe04b0a9-2724-4fda-8512-471ef882d125.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Livre jules vernes</h5>
      <p class="card-text">Voici un exemple de teste livre.</p>
      <a href="#" class="btn btn-primary stretched-link">exemple</a>
    </div>
  </div>
@endsection


