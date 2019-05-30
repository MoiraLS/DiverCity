let connexion = document.getElementById('connexion');
let inscription = document.getElementById('inscription');
let formConnexion = document.getElementById('formConnexion');
let formInscription = document.getElementById('formInscription');

inscription.addEventListener('click', function() {
  formInscription.classList.toggle("visible__inscription");
});

connexion.addEventListener('click', function() {
  formConnexion.classList.toggle("visible__connexion");
});