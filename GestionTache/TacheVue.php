<?php
class TacheVue
{
    public function afficherTaches(array $taches)
    {
        echo "<h2>Vos tâches</h2>";
        echo "<ul>";
        foreach ($taches as $index => $tache) {
            echo "<li>{$tache['nom']} - {$tache['description']}
          <form method='GET' action='index.php'>
              <input type='hidden' name='id' value='$index'>
              <button type='submit' name='action' value='supprimer' class='btn'>Supprimer</button>
              <button type='submit' name='action' value='modifierForm' class='btn'>Modifier</button>
          </form>
          </li>";
        }
        echo "</ul>";
        echo "<h3>Ajouter tâche</h3>";
        echo "<form method='POST' action='index.php?action=ajouter'>";
        echo "<input type='text' name='nom' placeholder='Nom'> <input type='text' name='description' placeholder='Description'>";
        echo "<button type='submit'>Ajouter</button>";
        echo "</form>";
    }

    public function modifierVue($id, $nom, $description)
    {
        echo "<h3>Modifier</h3>";
        echo "<form method='POST' action='index.php?action=modifier&id=$id'>";
        echo "<input type='text' name='nom' value='$nom'> ";
        echo "<input type='text' name='description' value='$description'> ";
        echo "<button type='submit'>Modifier</button>";
        echo "</form>";
    }
}
