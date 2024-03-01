function verifierNombre($nombre) {
    if ($nombre > 0) {
        return "Le nombre est positif.";
    } elseif ($nombre < 0) {
        return "Le nombre est négatif.";
    } else {
        return "Le nombre est nul.";
    }
}

$resultat = verifierNombre(0);
echo $resultat;
