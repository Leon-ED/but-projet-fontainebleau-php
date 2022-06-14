<?php
require_once("../include/phpHeader.inc.php");
// Récupère la langue et les textes selon la langue choisie
$currentPage = basename(__FILE__,'.php')."_php";
$fileName = basename(__FILE__,'.php').".php";
?>

<!DOCTYPE html>
<html lang=<?php echo "$lang" ?>>
<!-- Début du head générée par php -->
<head>
    <meta charset="utf-8" />
    <title><?php echo ${$currentPage."_title"}[$lang] ;  ?></title>
    <meta name="description" content=<?php echo ${$currentPage."_desc"}[$lang] ?>>

<!-- Head teamplate -->
<?php include_once("./teamplates/head.php"); ?>

    <body>
        <a id='skip' href="#content"><?php echo "$gotoContent[$lang]" ?></a>
        <div class="bloc"></div>
        <div class="top">
            <div class="container">
                <div class="content">
                    <p><?php echo ${$currentPage."_splashScreen"}[$lang] ?></p>
                </div>
            </div>
        </div>

<?php include_once("./teamplates/nav_bar.php"); ?>

    <article>
        <h1> Remplissez le questionnaire ci-dessous et vous aurez votre score ! </h1>

        <?php
        if (isset($_POST["q1"]) && isset($_POST["q2"]) && isset($_POST["q3"]) && isset($_POST["q4"]) && isset($_POST["q5"]) && isset($_POST["q6"]) && isset($_POST["q7"]) && isset($_POST["q8"]) && isset($_POST["q9"]) && isset($_POST["q10"])) {
            $note = 0;
            if ($_POST["q1"] == "1") {
                $note = $note + 1;
            }
            if ($_POST["q2"] == "2") {
                $note = $note + 1;
            }
            if ($_POST["q3"] == "0") {
                $note = $note + 1;
            }
            if ($_POST["q4"] == "0") {
                $note = $note + 1;
            }
            if ($_POST["q5"] == "2") {
                $note = $note + 1;
            }
            if ($_POST["q6"] == "4") {
                $note = $note + 1;
            }
            if ($_POST["q7"] == "0") {
                $note = $note + 1;
            }
            if ($_POST["q8"] == "3") {
                $note = $note + 1;
            }
            if ($_POST["q9"] == "0") {
                $note = $note + 1;
            }
            if ($_POST["q10"] == "0") {
                $note = $note + 1;
            }
            
            echo "<h2> Vous avez obtenu $note/10 </h2>";
        }

        
        ?>
            <div class="article-content">

                <form action="#" method="post" class="connexion_form">
                <div>
                    <h2>Partie Architecture</h2>

                    <label for="q1">1) Quel est l'escalier le plus connu de Fontainebleau ?</label>
                    <SELECT name="q1" required>
                        <option value="" disabled selected></option>
                        <option value=0>L'escalier du Roi Soleil</option>";
                        <option value=1>L'escalier du fer à cheval</option>";
                        <option value=2>L'escalier Royauté</option>";
                        <option value=3>L'escalier central</option>";
                    </SELECT><br>

                    <label for="q2">2) Quel type d'architecture est présente au château ?</label>
                    <SELECT name="q2" required>
                        <option value="" disabled selected></option>
                        <option value=0>Médiéval, Renaissance, Classique</option>";
                        <option value=1>Moderne, Contemporain</option>";
                        <option value=2>Baroque, Romaine</option>";   
                    </SELECT><br>

                    <h2>Partie Histoire</h2>

                    <label for="q3">3) A quand remontent les premières traces du Château ?</label>
                    <SELECT name="q3" required>
                        <option value="" disabled selected></option>
                        <option value=0>XII</option>";
                        <option value=1>XIV</option>";
                        <option value=2>XVI</option>";  
                    </SELECT><br>

                    <label for="q4">4) A quel siècle a-t-il été terminé ?</label>
                    <SELECT name="q4" required>
                        <option value="" disabled selected></option>
                        <option value=0>XVI</option>";
                        <option value=1>XVII</option>";
                        <option value=2>XIX</option>";  
                    </SELECT><br>

                    <label for="q5">5) Quel est la fonction initiale du château ?</label>
                    <SELECT name="q5" required>
                        <option value="" disabled selected></option>
                        <option value=0>Résidence royale et impériale</option>";
                        <option value=1>Musée destiné au public</option>";
                        <option value=2>Lieu stratégique de défense</option>";   
                    </SELECT><br>

                    <label for="q6">6) Qui n'a pas résidé dans le château?</label>
                    <SELECT name="q6" required>
                        <option value="" disabled selected></option>    
                        <option value=0>Napoléon Bonaparte</option>";
                        <option value=1>Louis-Philippe</option>";
                        <option value=2>Louis XIV</option>";
                        <option value=3>Charlemagne</option>";
                        <option value=4>Louis XVI</option>";      
                    </SELECT><br>

                    <h2>Partie Géographie/Topologie</h2>

                    <label for="q7">7) En quelle année le parc et le château ont été inscrit au patrimoine mondial de l'UNESCO ?</label>
                    <SELECT name="q7" required>
                        <option value="" disabled selected></option>
                        <option value=0>2008</option>";
                        <option value=1>1946</option>";
                        <option value=2>1981</option>";
                        <option value=3>2002</option>";
                    </SELECT><br>

                    <label for="q8">8) Quelle est la surface du Château de Fontainebleau ?</label>
                    <SELECT name="q8" required>
                        <option value="" disabled selected></option>
                        <option value=0>8 200 m²</option>";
                        <option value=1>14 300 m²</option>";
                        <option value=2>46 500m²</option>";
                        <option value=3>75 800 m²</option>";
                    </SELECT><br>

                    <h2>Partie Culture</h2>

                    <label for="q9">9) Lesquel de ces films ont vu certaines de leurs scènes tournées à Fontainebleau ?</label>
                    <SELECT name="q9" required>
                        <option value="" disabled selected></option>
                        <option value=0>Cyrano de Bergerac (1989 de Jean-Paul Rappeneau)</option>";
                        <option value=1>Jardin du Roi (2014 d'Alan Rickman)</option>";
                        <option value=2>Emily in Paris (2021 de Darren Star)</option>";
                        <option value=3>Les Misérables (2000, mini-série de Josée Dayan)</option>";
                    </SELECT><br>

                    <label for="q10">10) Lesquel de ces titres de livres existent ?</label>
                    <SELECT name="q10" required>
                        <option value="" disabled selected></option>
                        <option value=0>Elisabeth T18 Le Fantôme de l'Opéra: Elisabeth, princesse à Versailles</option>";
                        <option value=1>Fontainebleau et sa patisserie</option>";
                        <option value=2>Les très riches heures du duc d'Ile de France</option>";
                        <option value=3>Les Chevaux de Fontainebleau</option>";
                    </SELECT><br>
                </div>

                    <input type="submit" value="Vérifier">

                </form>




            </div>
        </article>



<?php include_once("./teamplates/footer.php"); ?>


    </body>