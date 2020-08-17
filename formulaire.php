<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>formulaire de recrutement</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <h2>Formulaire de recrutement<h2>
        <form action="formulaire.php" method="post">
            <h1>Information HRP - Présentation</h1>
            <div class="formulaire">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="formulaire">
                <label for="discord">Votre pseudo discord : </label>
                <input type="text" id="discord" name="discord">
            </div>
            <div class="formulaire">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
            <div class="formulaire">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div class="formulaire">
                <label for="activite">Activité professionelle : </label>
                <input type="text" id="activite" name="activite">
            </div>
            <div class="formulaire">
                <label for="qualite">Qualité & défauts : </label>
                <textarea type="text" id="qualite" name="qualite" row="4" cols="50"></textarea>
            </div>
            <div class="formulaire">
                <label for="loisirs">Loisirs : </label>
                <input type="text" id="loisir" name="loisir">
            </div>
            <hr>
            <h1>Informations RP - Parcours et renseignements (obligatoire)</h1>
            <div class="formulaire">
                <label for="annees">Années d'expérience RP : </label>
                <input type="number" id="annees" name="annees" required="required">
            </div>
            <div class="formulaire">
                <label for="expavff">Expériences RP avant FF14 : </label>
                <textarea type="text" id="expavff" name="expavff" row="4" cols="50" required="required"></textarea>
            </div>
            <div class="formulaire">
                <label for="expapff">Expériences RP sur FF14 : </label>
                <textarea type="text" id="expapff" name="expapff" row="4" cols="50" required="required"></textarea>
            </div>
            <div class="formulaire">
                <label for="repartition">Répartition RP/PVP/PVE (en %) : </label>
                <input type="text" id="repartition" name="repartition" required="required">
            </div>
            <div class="formulaire">
                <label for="nbperso">Nombre de personnages en RP : </label>
                <input type="number" id="nbperso" name="nbperso" required="required">
            </div>
            <div class="formulaire">
                <label for="typerp">Type de Rp pratiqué principalement : </label>
                <input type="text" id="typerp" name="typerp" required="required">
            </div>
            <div class="formulaire">
                <label for="alignement">Alignement de votre personnage : </label>
                <input type="text" id="alignement" name="alignement" required="required">
            </div>
            <div class="formulaire">
                <label for="background">Brève histoire de votre personnage : </label>
                <textarea type="text" id="background" name="background" row="4" cols="50" required="required"></textarea>
            </div>
            <hr>
            <h1>Motivations (obligatoire)</h1>
            <div class="formulaire">
                <label for="comment">Comment avez-vous connu la CL ? </label>
                <textarea type="text" id="comment" name="comment" row="4" cols="50" required="required"></textarea>
            </div>
            <div class="formulaire">
                <label for="pourquoi">Pourquoi voulez vous rejoindre la CL ? </label>
                <textarea type="text" id="pourquoi" name="pourquoi" row="4" cols="50" required="required"></textarea>
            </div>
            <div class="formulaire">
                <label for="quoi">Qu'est-ce que le Roleplay pour vous ? </label>
                <textarea type="text" id="quoi" name="quoi" row="4" cols="50" required="required"></textarea>
            </div>
            <div class="formulaire">
                <label for="attente">Qu'est-ce que vous attendez de la CL ? </label>
                <textarea type="text" id="attente" name="attente" row="4" cols="50" required="required"></textarea>
            </div>
            <div class="formulaire">
                <label for="anciennecl">Qu'est-ce qui vous a fait quitter votre ancienne CL ? </label>
                <textarea type="text" id="anciennecl" name="anciennecl" row="4" cols="50" required="required"></textarea>
            </div>
            <hr>
            <div class="formulaire" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>

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
            echo '<hr>';
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
                    INSERT INTO form(prenom, age, sexe, activite, qualite, loisir, annees, expavff, expapff, repartition, nbperso, typerp, alignement, background, comment, pourquoi, quoi, attente, anciennecl)
                    VALUES(:prenom, :age, :sexe, :activite, :qualite, :loisir, :annees, :expavff, :expapff, :repartition, :nbperso, :typerp, :alignement, :background, :comment, :pourquoi, :quoi, :attente, :anciennecl)");
                $sth->bindParam(':prenom',$prenom);
                $sth->bindParam(':age',$age);
                $sth->bindParam(':sexe',$sexe);
                $sth->bindParam(':activite',$activite);
                $sth->bindParam(':qualite',$qualite);
                $sth->bindParam(':loisir',$loisir);
                $sth->bindParam(':annees',$annees);
                $sth->bindParam(':expavff',$expavff);
                $sth->bindParam(':expapff',$expapff);
                $sth->bindParam(':repartition',$repartition);
                $sth->bindParam(':nbperso',$nbperso);
                $sth->bindParam(':typerp',$typerp);
                $sth->bindParam(':alignement',$alignement);
                $sth->bindParam(':background',$background);
                $sth->bindParam(':comment',$comment);
                $sth->bindParam(':pourquoi',$pourquoi);
                $sth->bindParam(':quoi',$quoi);
                $sth->bindParam(':attente',$attente);
                $sth->bindParam(':anciennecl',$anciennecl);
                $sth->execute();
                
                //On renvoie l'utilisateur vers la page de remerciement
                header("Location:merci.php");
            }
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
        ?>
    </body>
</html>