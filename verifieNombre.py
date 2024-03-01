def verifier_nombre(nombre):
    if nombre > 0:
        return "Le nombre est positif."
    elif nombre < 0:
        return "Le nombre est négatif."
    else:
        return "Le nombre est nul."

resultat = verifier_nombre(-3)
print(resultat) 
