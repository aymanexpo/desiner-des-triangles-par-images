<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aymane Talibi _ 3IIR2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div>
        <hr>
      <h1>DEVOIR - FORMULAIRE PHP</h1>
        <hr>
    </div>

    <div>
      <?php
        $nbr = $_POST['nombre'];

        if ($_POST['selection'] == 'gauche')
        {
           if ($_POST['choixx'] == 'Etoile')
           {
              for ($i=0; $i < $nbr ; $i++)
              {
                for ($j=0; $j <= $i ; $j++)
                {
                  echo '<img src="etoille.png">';
                }
                echo "<br>";
              }
            }

            elseif ($_POST['choixx'] == 'Carre')
            {
              for ($i=0; $i < $nbr ; $i++)
              {
                for ($j=0; $j <= $i ; $j++)
                {
                  echo '<img src="carre.png">';
                }
                echo "<br>";
              }
            }
            echo '<a href="devoir.html"><input type="submit"
            value="RETURN" id="button"></a> ';
        }

        elseif ($_POST['selection'] == 'droite')
        {
           if ($_POST['choixx'] == 'Etoile')
           {
              for ($i=0; $i < $nbr ; $i++)
              {
                for ($j=0; $j < $nbr-$i-1 ; $j++)
                {
                  echo '<img src="space.png">';
                }
                for ($j=0; $j <= $i ; $j++)
                {
                  echo '<img src="etoille.png">';
                }
                echo "<br>";
              }
            }

            elseif ($_POST['choixx'] == 'Carre')
            {
              for ($i=0; $i < $nbr ; $i++)
              {
                for ($j=0; $j < $nbr-$i-1 ; $j++)
                {
                  echo '<img src="space.png">';
                }
                for ($j=0; $j <= $i ; $j++)
                {
                  echo '<img src="carre.png">';
                }
                echo "<br>";
              }
            }
            echo '<a href="devoir.html"><input type="submit"
            value="RETURN"></a> ';
        }

        elseif ($_POST['selection'] == 'pyramide')
        {
            if ($_POST['choixx'] == 'Etoile')
            {
              for ($i=0; $i < $nbr ; $i++)
              {
                  if ($i >= 1)
                  {
                    for ($j=0; $j < $nbr-$i-1 ; $j++)
                    {
                      echo '<img src="space.png">';
                    }
                    for ($j=0; $j < $i*2+1; $j++) {
                      echo '<img src="etoille.png">';
                    }
                    echo "<br>";
                  }
                  else
                  {
                    for ($j=0; $j < $nbr-$i-1 ; $j++)
                    {
                      echo '<img src="space.png">';
                    }
                    for ($j=0; $j <= $i ; $j++) {
                      echo '<img src="etoille.png">';
                    }
                    echo "<br>";
                  }
              }
            }
            elseif ($_POST['choixx'] == 'Carre')
            {
              for ($i=0; $i < $nbr ; $i++)
              {
                  if ($i >= 1)
                  {
                    for ($j=0; $j < $nbr-$i-1 ; $j++)
                    {
                      echo '<img src="space.png">';
                    }
                    for ($j=0; $j < $i*2+1; $j++) {
                      echo '<img src="carre.png">';
                    }
                    echo "<br>";
                  }
                  else
                  {
                    for ($j=0; $j < $nbr-$i-1 ; $j++)
                    {
                      echo '<img src="space.png">';
                    }
                    for ($j=0; $j <= $i ; $j++) {
                      echo '<img src="carre.png">';
                    }
                    echo "<br>";
                  }
              }
            }
            echo '<a href="devoir.html"><input type="submit"
            value="RETURN"></a> ';
        }

        elseif ($_POST['selection'] == 'inversee')
        {
           if ($_POST['choixx'] == 'Etoile')
           {
              for ($i=0; $i < $nbr ; $i++)
              {
                for ($j=0; $j < $nbr-$i ; $j++)
                {
                  echo '<img src="etoille.png">';
                }
                echo "<br>";
              }
            }

            elseif ($_POST['choixx'] == 'Carre')
            {
              for ($i=0; $i < $nbr ; $i++)
              {
                for ($j=0; $j < $nbr-$i ; $j++)
                {
                  echo '<img src="carre.png">';
                }
                echo "<br>";
              }
            }
            echo '<a href="devoir.html"><input type="submit"
            value="RETURN"></a> ';
        }

        else {
          echo '<p id="erreur">VOUS DEVEZ SELECTIONNER UN Alignement</p> <BR>';
          echo '<a href="devoir.html"><input type="submit"
          value="SELECTIONNER"></a> ';
        }

       ?>

    </div>
    <h1><font size="8" color="#B9B4B4">Aymane Talibi _ 3IIR2</font></h1>
  </body>
</html>
