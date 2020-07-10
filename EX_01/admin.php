<html>

<?php

$lien3= '<a href="http://localhost/ISCC/ISCC-2020-J012/EX_01/mini-site-routing.php?page=admin">ici<a>';

$name = $_FILES['userfile']['name'];    
echo strlen(explode('.', $name)[0]);
echo $name;
if ($name)
    {
        if(strlen(explode('.', $name)[0]) < 5)
        {
            echo "le fichier ne correspond pas aux attentes.";
            echo "<p>Vous allez être redirigé vers la page admin.</p>";
            echo "<p>Cliquez $lien3 pour revenir sur la page admin.";
        }
    else 
        {
            $ext = explode('.', $_FILES['userfile']['name'])[1];
            $extposs = array("jpg", "jpeg", "png","JPG", "JPEG", "PNG");
                if (in_array($ext, $extposs))
                    {
                    echo "<p><strong> Nom du fichier:</strong>".$_FILES['userfile']['name']."</p>";
                    echo "<p><strong> Type du fichier:</strong>".$_FILES['userfile']['type']."</p>";
                    echo "<p><strong> Taille du fichier:</strong>".$_FILES['userfile']['size']."</p>";
                    $_SESSION['description']=$_POST['description'];
                    $_SESSION['titre']=$_POST['titre'];
                    }
        }
    }

?>
</body>
</html>