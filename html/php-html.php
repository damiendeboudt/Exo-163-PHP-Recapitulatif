<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
       // TODO Display the students here, each student inside a new <li> element
       $count = count($students);
       for ($i = 0; $i < $count; $i++) {
           echo "<li>" .$students[$i];
       }
       ?>

     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           echo "<option value=1>1</option>";
           echo "<option value=2>2</option>";
           echo "<option value=3>3</option>";
           echo "<option value=4>4</option>";
           echo "<option value=...>...</option>";
           // TODO list of day ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           echo "<option value=1>1</option>";
           echo "<option value=2>2</option>";
           echo "<option value=3>3</option>";
           echo "<option value=4>4</option>";
           echo "<option value=...>...</option>";
           // TODO list of month ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           echo "<option value=1>2023</option>";
           echo "<option value=2>2022</option>";
           echo "<option value=3>2021</option>";
           echo "<option value=4>2020</option>";
           echo "<option value=...>...</option>";
           // TODO list of year ?>
       </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
  <?php
  if ($_GET['sexe'] === "fille") {
      echo "<p>Je suis une fille</p>";
  } else {
      echo "<p>Je suis indéfini</p>";
  };

  if ($_GET['sexe'] === "garçon") {
      echo "<p>Je suis un garçon</p>";
  } else {
      echo "<p>Je suis indéfini</p>";
  };
  ?>



    <p>
       Je suis une fille
     </p>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <p>
       Je suis un garçon
     </p>
     <!-- TODO Instruction : Afficher ce bloc dans les autres cas -->
     <p>
       Je suis indéfini
     </p>
  </body>
</html>
