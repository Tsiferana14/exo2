function verifierNombre(nombre) {
    if (nombre > 0) {
        return "Le nombre est positif.";
    } else if (nombre < 0) {
        return "Le nombre est négatif.";
    } else {
        return "Le nombre est nul.";
    }
}

let resultat = verifierNombre(5);
console.log(resultat);
