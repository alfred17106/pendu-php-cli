# 🎮 Jeu du Pendu — PHP CLI

> Application interactive en ligne de commande développée en PHP  
> Projet académique — ESA Namur, Belgique | 1ère année Bachelier Informatique

[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=flat&logo=php&logoColor=white)](https://php.net)
[![CLI](https://img.shields.io/badge/Interface-CLI-black?style=flat&logo=windowsterminal)](https://fr.wikipedia.org/wiki/Interface_en_ligne_de_commande)
[![ESA Namur](https://img.shields.io/badge/École-ESA%20Namur-gold?style=flat)](https://www.esa-namur.be)
[![Portfolio](https://img.shields.io/badge/Portfolio-eamc.fr-c9a84c?style=flat)](https://eamc.fr)

---

## 📋 Description

Jeu du Pendu complet en **PHP ligne de commande**. Le programme tire aléatoirement un mot depuis une banque de **400+ mots** organisés par thèmes, et affiche progressivement le pendu en **ASCII art** selon les erreurs du joueur.

```
  _____               _       
 |  __ \             | |      
 | |__) |__ _ __   __| |_   _ 
 |  ___/ _ \ '_ \ / _` | | | |
 | |  |  __/ | | | (_| | |_| |
 |_|   \___|_| |_|\__,_|\__,_|

    ____
   |    |      
   |    o      
   |   /|\     
   |    |
   |   / \
  _|_
 |   |______
 |          |
 |__________|

Mot mystère : _ _ _ _ _ _ _
Erreurs : 1 / 8

Proposez une lettre :
```

---

## ✨ Fonctionnalités

- 🎲 **Tirage aléatoire** d'un mot depuis un fichier texte de 400+ mots
- 🎨 **ASCII art** du pendu avec 8 niveaux d'erreurs progressifs
- ✅ **Validation des saisies** — une seule lettre alphabétique acceptée
- 🔁 **Gestion des doublons** — détection des lettres déjà jouées
- 📁 **Lecture de fichier** avec `file()` et `array_rand()`
- 🔄 **Boucle `do...while`** pour la gestion de la partie
- 🏆 **Affichage du résultat** — victoire ou défaite avec le mot révélé

---

## 🗂️ Structure du projet

```
pendu-php-cli/
├── pendu_alfred_ekolle_examen.php  # Fichier principal du jeu
├── dessin.php                       # Bibliothèque ASCII art du pendu
├── mots.txt                         # Banque de 400+ mots par thèmes
└── README.md
```

---

## 🚀 Installation & Lancement

### Prérequis
- PHP 8.x installé sur votre machine
- Terminal / Invite de commandes

### Lancer le jeu

```bash
# Cloner le repository
git clone https://github.com/alfred17106/pendu-php-cli.git

# Aller dans le dossier
cd pendu-php-cli

# Lancer le jeu
php pendu_alfred_ekolle_examen.php
```

---

## 🧠 Concepts PHP utilisés

| Concept | Utilisation |
|---|---|
| `file()` | Lecture du fichier mots.txt |
| `array_rand()` | Tirage aléatoire d'un mot |
| `str_repeat()` | Génération du mot masqué |
| `fgets(STDIN)` | Lecture de l'entrée utilisateur |
| `strtolower()` / `trim()` | Normalisation des saisies |
| `strpos()` | Vérification si lettre dans le mot |
| `in_array()` | Détection des lettres déjà jouées |
| `define()` / `const` | Constante MAX_ERREURS |
| Boucle `do...while` | Logique principale du jeu |
| `include` | Séparation des fichiers |
| Fonction `dessinPendu()` | ASCII art avec switch/case |

---

## 📚 Thèmes des mots

La banque de mots couvre plusieurs thèmes du vocabulaire courant :

- 🏫 Mobilier scolaire et objets de classe
- 🎨 Fournitures et activités créatives  
- 🚗 Transport et véhicules
- 👕 Vêtements et accessoires
- 🏃 Sports et mouvements
- 🧰 Bricolage et outils
- 🏠 Maison et intérieur

---

## 👨‍💻 Auteur

**Ekolle Alfred Mbondo Céleste**  
Étudiant en Bachelier Informatique — ESA Namur, Belgique  
Licence en Informatique Fondamentale — Université de Douala, Cameroun

🌐 [eamc.fr](https://eamc.fr) · 📧 [alfred@eamc.fr](mailto:alfred@eamc.fr) · 🐙 [GitHub](https://github.com/alfred17106)

---

*Projet académique — ESA Namur 2024-2025*
