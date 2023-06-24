function inscri(){
    
    var cin = document.getElementById("cin").value;
    var np = document.getElementById("np").value;
    var mp = document.getElementById("mp").value;
    var me = document.getElementById("me").value;
    var pass = document.getElementById("pass").value;
    var confpass = document.getElementById("confpass").value;
    const userRole = document.querySelector('select[name="user"]').value;
    const roleError = document.querySelector('#role-error');

    document.querySelectorAll('input').forEach(input => {
  input.addEventListener('input', () => {
    document.getElementById(`${input.id}-error`).innerHTML = '';
  });
   });
    
    // Vérifier le champ Cin
    if (cin == "" || isNaN(cin) || cin.charAt(0) != '0' && cin.charAt(0) != '1' || cin.length != 8) {
        document.getElementById("cin-error").innerHTML ="Veuillez entrer un Cin valide (commence par 0 ou 1, 8 chiffres).";
        return false;
    } else {
        document.getElementById("cin-error").innerHTML ="";
    }

    // Vérifier le champ Nom et prénom
    if (np == "" || np.length <= 4) {
        document.getElementById("np-error").innerHTML ="Veuillez entrer votre nom et prénom.";
        return false;
    } else {
        document.getElementById("np-error").innerHTML ="";
    }

    // Vérifier le champ Email personnel
    if (mp == "" || !mp.includes("@") || !(mp.endsWith("@gmail.com") || mp.endsWith("@hotmail.com") || mp.endsWith("@outlook.com"))) {
        document.getElementById("mp-error").innerHTML ="Veuillez entrer un email personnel valide (gmail, hotmail ou outlook avec l'extension .com).";
        return false;
    } else {
        document.getElementById("mp-error").innerHTML ="";
    }

    // Vérifier le champ Email Etudiant
    if (me == "" || !me.includes("@isikef.u-jendouba.tn")) {
        document.getElementById("me-error").innerHTML ="Veuillez entrer un email étudiant valide (@isikef.u-jendouba.tn).";
        return false;
    } else {
        document.getElementById("me-error").innerHTML ="";
    }

    // Vérifier le champ Mot de passe
    if (pass == "" || isNaN(pass) || pass.charAt(0) != '0' && pass.charAt(0) != '1' || pass.length != 8 ) {
        document.getElementById("pass-error").innerHTML ="Veuillez entrer un mot de passe valide (commence par 0 ou 1, 8 chiffres).";
        return false;
    } else {
        document.getElementById("pass-error").innerHTML ="";
    }

    if(pass != confpass){
        document.getElementById("confpass-error").innerHTML ="le mot pass et different !";
        return false;
    } else {
        document.getElementById("confpass-error").innerHTML ="";
    }
    
    // Vérifier le champ Role
    if (userRole === 'Select Role') {
        roleError.textContent = 'Veuillez sélectionner un rôle.';
        return false;
      } else if (userRole !== 'admin' && userRole !== 'Etud' && userRole !== 'Ens') {
        roleError.textContent = 'Rôle sélectionné invalide.';
        return false;
      } else {
        roleError.textContent = '';
      }

      
    
}

function connx() {
    var np = document.getElementById("np").value;
    var me = document.getElementById("me").value;
    var pass = document.getElementById("pass").value;
  
    document.querySelectorAll('input').forEach(input => {
      input.addEventListener('input', () => {
        document.getElementById(`${input.id}-error`).innerHTML = '';
      });
    });
  
    // Vérifier le champ Nom et prénom
    if (np == "" || np.length <= 4) {
      document.getElementById("np-error").innerHTML = "Veuillez entrer votre nom et prénom.";
      return false;
    } else {
      document.getElementById("np-error").innerHTML = "";
    }
  
    // Vérifier le champ Email Etudiant
    if (me == "" || !me.includes("@isikef.u-jendouba.tn")) {
      document.getElementById("me-error").innerHTML = "Veuillez entrer un email étudiant valide (@isikef.u-jendouba.tn).";
      return false;
    } else {
      document.getElementById("me-error").innerHTML = "";
    }
  
    // Vérifier le champ Mot de passe
    if (pass == "" || isNaN(pass) || pass.charAt(0) != '0' && pass.charAt(0) != '1' || pass.length != 8) {
      document.getElementById("pass-error").innerHTML = "Veuillez entrer un mot de passe valide (commence par 0 ou 1, 8 chiffres).";
      return false;
    } else {
      document.getElementById("pass-error").innerHTML = "";
    }
  }
  



