var loginAttempts = 0;
var suspended = false;
var passwordInput = document.getElementById("password");
var passwordStrength = document.getElementById("passwordStrength");

// Vérifier la force du mot de passe
passwordInput.addEventListener("input", function () {
  var password = passwordInput.value;

  if (password.length < 4) {
    passwordStrength.className = "weak";
    passwordStrength.textContent = "Faible";
  } else if (password.length < 8) {
    passwordStrength.className = "medium";
    passwordStrength.textContent = "Moyen";
  } else {
    passwordStrength.className = "strong";
    passwordStrength.textContent = "Fort";
  }
});

// Gérer la soumission du formulaire
// document
//   .getElementById("loginForm")
//   .addEventListener("submit", function (event) {
//     event.preventDefault();

//     if (suspended) {
//       alert("Votre compte est suspendu pendant 3 minutes.");
//       return;
//     }

    
//     var username = document.getElementById("username").value;
//     var email = document.getElementById("Email").value;
//     var pseaudo = document.getElementById("Pseaudo").value;
//     var password = document.getElementById("password").value;
//     var confirmPassword = document.getElementById("confirmPassword").value;

//     //   if (loginAttempts >= 3) {
//     //     suspended = true;
//     //     setTimeout(function () {
//     //       suspended = false;
//     //       loginAttempts = 0;
//     //     }, 3 * 60 * 1000); // Suspension de 3 minutes
//     //     alert("Vous avez dépassé le nombre maximum de tentatives de connexion. Votre compte est maintenant suspendu pendant 3 minutes.");
//     //     return;
//     //   }

//     if (password !== confirmPassword) {
//       alert("Les mots de passe ne correspondent pas.");
//       return;
//     }

//     // Effectuer les vérifications supplémentaires ici (par exemple, vérifier les informations d'authentification avec un backend)

//     // Si l'authentification est réussie
//     alert("Authentification réussie !");

//     // Réinitialiser les valeurs du formulaire
//     document.getElementById("username").value = "";
//     document.getElementById("Email").value = "";
//     document.getElementById("Pseaudo").value = "";
//     document.getElementById("password").value = "";
//     document.getElementById("confirmPassword").value = "";
//     passwordStrength.textContent = "";

//     loginAttempts = 0;


//   });
