<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php

            $serveur = "localhost";
            $dbname = "cours";
            $user = "root";
            $pass = "root";

            echo 'Prénom : '.$_POST["prenom"].'<br>';
            echo 'Age : ' .$_POST["age"].'<br>';
            echo 'Sexe : ' .$_POST["sexe"].'<br>';
            echo 'Activité professionnelle : ' .$_POST["activite"].'<br>';
            echo 'Qualité & Défauts : ' .$_POST["qualite"].'<br>';
            echo 'Loisirs : ' .$_POST["loisir"].'<br>';
            echo '<hr>';
            echo 'Années d expérience RP : ' .$_POST["annees"].'<br>';
            echo 'Expériences RP avant FF14 : ' .$_POST["expavff"].'<br>';
            echo 'Expériences RP sur FF14 : ' .$_POST["expapff"].'<br>';
            echo 'Répartition RP/PVP/PVE : ' .$_POST["repartition"].'<br>';
            echo 'Nombre de personnages en RP : ' .$_POST["nbperso"].'<br>';
            echo 'Type de RP pratiqué principalement : ' .$_POST["typerp"].'<br>';
            echo 'Alignement de votre personnage : ' .$_POST["alignement"].'<br>';
            echo 'Brève histoire de votre personnage : ' .$_POST["background"].'<br>';
            echo 'Comment avez-vous connu la CL ? : ' .$_POST["comment"].'<br>';
            echo 'Pourquoi voulez-vous rejoindre la CL  : ' .$_POST["pourquoi"].'<br>';
            echo 'Qu est-ce que le roleplay pour vous ? : ' .$_POST["quoi"].'<br>';
            echo 'Qu est-ce que vous attendez de la CL ? : ' .$_POST["attente"].'<br>';
            echo 'Qu est-ce qui vous a fait quitter votre ancienne CL ? : ' .$_POST["anciennecl"].'<br>';

            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                //On insère les données reçues
                $sth = $dbco->prepare("
                    INSERT INTO form(prenom, mail, age, sexe, pays)
                    VALUES(:prenom, :mail, :age, :sexe, :pays)");
                $sth->bindParam(':prenom',$prenom);
                $sth->bindParam(':mail',$mail);
                $sth->bindParam(':age',$age);
                $sth->bindParam(':sexe',$sexe);
                $sth->bindParam(':pays',$pays);
                $sth->execute();
                
                //On renvoie l'utilisateur vers la page de remerciement
                header("Location:form-merci.html");
            }
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
        ?>
    </body>
</html>