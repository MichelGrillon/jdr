# jdr
 création de personnages pour un jeu de rôle

Exercice :

Créer une application "JDR" (jeu de rôle) connectée à une base de données MySQL en utilisant le langage PHP en programmation orientée objet et le framework bootstrap.
Utiliser les requêtes préparées.

L'applicaton se compose des scripts suivants:
● Une page d'accueil "home.php" composée de deux boutons. Le premier nommé "Créer
un personnage" et le second "Choisir un personnage".
● Une page listant les classes des personnages "classList.php" composée de trois blocs
alignés horizontalement avec pour chacun :
● une image
● le nom de la classe
● un lien pour accéder à la page listant les personnages "charactersList.php" associés à
cete classe. Le nom de la classe est défni comme paramètre de ce lien.
● Une page afchant la liste des personnages d'une classe "charactersList.php" sous
forme de "cards" Bootstrap. À l'intérieur de ces "cards" sont afchés :
● le nom
● la classe
● la civilisaton
● L'endurance
● la puissance
● l'orientaton
● la résistance du personnage.
Sur cete même page, une descripton de la classe se situe au-dessus des "cards".

Une page "form.html" contenant un formulaire d'ajout d'un personnage avec les
champs suivants:
● nom (champ de type texte),
● classe (champ de type select). Le champ est pré-rempli avec ces valeurs (Guerrier,
Ouvrier, Explorateur). Respectez la majuscule,
● civilisaton (champ de type select). Le champ est pré-rempli avec ces valeurs
(Norvège, Angleterre, France),
● un bouton de type submit portant la valeur "ajouter".
● Un fchier HTML représentant la structure identque à toutes les pages appelé
"header.html" composé de l'en-tête HTML standard.
● Un fchier de traitement pour l'ajout d'un personnage "add.php". Dans ce fchier, vous
devez alimenter les propriétés de la classe "Personnage" en passant par les "seters" et
exécuter la méthode "add()" avec comme paramètre un objet "personnage".
● Un fchier "index.php", seule entrée de l'applicaton. Le rôle de ce fchier est de gérer la
redirecton de l'utlisateur selon l'acton demandée et d'afcher le contenu de chaque
page. Le "header.html" est également inclus.

Les classes à créer sont :
● Une classe appelée "DbConnect.php". Cete classe content la connexion à la basse de
données. Pour cela, vous déclarez à l'intérieur une propriété privée appelée
"$connecton", puis dans le constructeur de la classe, vous metez en place la connexion
à la base de données avec la classe PDO.

● Chaque rôle de personnage aura sa propre classe PHP. Dans chacune de ces classes PHP,
vous déclarez une méthode appelée "descripton" qui afche la descripton de la classe
du personnage. Voici la liste des classes de personnages atendues:
● Warrior.
● Explorer.
● Worker.
● Une classe appelée "Personnage.php" qui représente l'entté de la table "personnage"
de la base de données que vous devez créer également. Elle doit contenir huit
propriétés privées représentant chacune une colonne de la table "personnage". Vous
déclarez également le "geter" et le "seter" de chaque propriété. Pour gagner du temps
sur la mise en place des méthodes "geter" et "seter". Je vous conseille d'utliser
l'extension de l'IDE "VS code" "PHP Geters & Seters".

Une classe appelée "PersonnageManager.php" qui représente toutes les requêtes SQL
utles au fonctonnement de l'ajout et afchage de l'entté "Personnage". Cete classe
étend la classe "DbConnect.php" afn d'être connectée à la base de données.
Il faut alors déclarer les méthodes suivantes :
● "add()" pour l'ajout d'un personnage. Afn d'exploiter la POO, je souhaite que vous
utlisiez les "geters" pour lire les données d'un personnage afn d'alimenter la
requête "INSERT". Exemple getNom(). Pour accéder à cete méthode, vous utliserez
l'injecton de dépendance.
● "getList()" pour afcher la liste des personnages d'une classe. Dans cete méthode,
vous récupérez le nom de la classe du personnage défni dans le lien côté front pour
compléter la requête "SELECT" qui retourne la liste. Ensuite, testez le nom de la
classe personnage récupéré, afn d'instancier la classe PHP correspondante. Après
avoir instancié, il faudra alimenter les propriétés de la classe avec les "seters" et
retourner la liste des personnages.

Arborescence de l'application :

![image](https://github.com/user-attachments/assets/74bd6312-100e-455f-8d47-6e0d99347b2e)

Modèle de données :

![image](https://github.com/user-attachments/assets/e42ce0c0-07e6-419f-a268-fcf5e3d24e6d)

