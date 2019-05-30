let connexion = document.getElementById('connexion');
let inscription = document.getElementById('inscription');
let formConnexion = document.getElementById('formConnexion');
let formInscription = document.getElementById('formInscription');
let accroche = document.getElementById('accroche');

inscription.addEventListener('click', function() {
  formInscription.classList.toggle('visible__inscription');
  formConnexion.classList.replace('visible__connexion', 'none');
});

connexion.addEventListener('click', function() {
  formConnexion.classList.toggle('visible__connexion');
  formInscription.classList.replace('visible__inscription', 'none');
});