<?php
require_once("fonctions.php");
// $lang = get_current_lang();
// $_SESSION["lang"] = $lang;


// Teamplate fichier langue 
$nom =[
    "FR" => "FR",
     "EN" => "EN",
];

$about_php_speech = [
    "FR" => "                        Ce site web a été réalisé par l'équipe Fontainebleau du BUT 1 Informatique de l'IUT Marne-la-Vallée
                        dans le cadre du projet de communication par :",
    "EN" => "This website was created by the Fontainebleau team of the BUT 1 Informatique of the IUT Marne-la-Vallée as part of the communication project by :",
];



$about_php_speech2 = [
    "FR" => '                     </p>
                    <h1>Licence et crédits</h1>
                    <p>
                        Les images utilisées sur ce site sont libres de droits selon la licence
                        <a href="https://creativecommons.org/licenses/by/2.0/">suivante</a>.
                    </p>
                    <p>Image d\'accueil : <a href="https://www.fontainebleau-tourisme.com/fr/decouvrir-la-region/patrimoine/">office du tourisme de Fontainebleau</a>
                    </p>',
    "EN" => '                    <h1>Licence and credits</h1>
                    <p>
                        The images used on this site are free of rights according to following
                        <a href="https://creativecommons.org/licenses/by/2.0/">licence</a>.
                    </p>
                    <p>Home image : <a href="https://www.fontainebleau-tourisme.com/en/discover-the-region/patrimoine-2/">office du tourisme de Fontainebleau</a>
                    </p>',
];

$about_php_speech3 = [
    "FR" => "                                          Merci d'avoir consulté notre site !
                    Si vous avez le temps mais surtout si vous en avez l'envie, n'hésitez pas à nous
                    aider en remplissant le formulaire suivant :<br>",
    "EN" => "Thank you for visiting our site! If you have the time, but especially if you have the desire, do not hesitate to help us by by filling in the following form:<br>",
];

$about_php_speech4 = [
    "FR" => '                     </p>
                    <h1>Connaissez vous Fontainebleau ?</h1>
                    <p>
                        Nous avons conçu <a href="quizz.php">ce questionnaire</a> pour vous aider à connaître le château de Fontainebleau. N\'hésitez pas à le consulter pour vous coucher moins bête !
                    </p>
                   ',
    "EN" => '                    <h1>Licence and credits</h1>
                    <p>
                        The images used on this site are free of rights according to following
                        <a href="https://creativecommons.org/licenses/by/2.0/">licence</a>.
                    </p>
                    <p>Home image : <a href="https://www.fontainebleau-tourisme.com/en/discover-the-region/patrimoine-2/">office du tourisme de Fontainebleau</a>
                    </p>',
];


//----------------Contenu commun à toutes les pages
$gotoContent =[
    "FR" => "Aller directement au contenu",
     "EN" => "Go to content",
];

$greeting =[
    "FR" => "Bienvenue !",
     "EN" => "Welcome !",
];

$thanks =[
    "FR" => "Merci !",
     "EN" => "Thank you !",


];

$palaceFontainebleau =[
    "FR" => "Château de Fontainebleau",
     "EN" => "Palace of Fontainebleau",
];


$account =[
    "FR" => "Compte",
     "EN" => "Account",
];

$logout =[
    "FR" => "Déconnexion",
     "EN" => "Logout",
];


// Bare de navigation
$home =[
    "FR" => "Accueil",
     "EN" => "Home",
];
$history =[
    "FR" => "Histoire",
     "EN" => "History",
];
$architecture =[
    "FR" => "Architecture",
     "EN" => "Architecture",
];
$visit =[
    "FR" => "Visiter",
     "EN" => "Visit",
];
$about =[
    "FR" => "A propos",
     "EN" => "About",
];

$login =[
    "FR" => "Se connecter",
     "EN" => "Login",
];

$register =[
    "FR" => "Créer un compte",
     "EN" => "Register",
];

$logout =[
    "FR" => "Deconnexion",
     "EN" => "Logout",
];

//----------------------------- Page d'accueil
// Titre :
$index_php_title =[
    "FR" => "Accueil : Fontainebleau",
     "EN" => "Home : Fontainebleau",


];

//Description
$index_php_desc =[
    "FR" => " Ce site web, réaliser lors d'un projet en partenariat avec l'UNESCO à pour but de présenter et d'honorer le
    château de Fontainebleau ainsi que son parc, tout deux classés au patrimoine mondial.",

     "EN" => "This website, created as part of a project in partnership with UNESCO, aims to present and honour the
    Fontainebleau palace and its park, both classified as world heritage.",
];

$account_php_desc =[
    "FR" => " Ce site web, réaliser lors d'un projet en partenariat avec l'UNESCO à pour but de présenter et d'honorer le
    château de Fontainebleau ainsi que son parc, tout deux classés au patrimoine mondial.",

     "EN" => "This website, created as part of a project in partnership with UNESCO, aims to present and honour the
    Fontainebleau palace and its park, both classified as world heritage.",
];

$admin_php_desc =[
    "FR" => " Ce site web, réaliser lors d'un projet en partenariat avec l'UNESCO à pour but de présenter et d'honorer le
    château de Fontainebleau ainsi que son parc, tout deux classés au patrimoine mondial.",

     "EN" => "This website, created as part of a project in partnership with UNESCO, aims to present and honour the
    Fontainebleau palace and its park, both classified as world heritage.",
];


//Messages d'accueil
$index_php_splashScreen =[
    "FR" => "Fontainebleau, <br> Fleuron du patrimoine mondial",
     "EN" => "Fontainebleau, <br> a World Heritage Site",
];

$admin_php_splashScreen =[
    "FR" => "Administration du site",
     "EN" => "Administration of the site",
];

$quizz_php_splashScreen =[
    "FR" => "Le quizz de Fontainebleau",
     "EN" => "The Fontainebleau quiz",
];

$admin_php_adminManage =[
    "FR" => "Ajouter ou supprimer des aministrateurs",
     "EN" => "Add or remove administrators",
];

$admin_php_contribsA =[
    "FR" => "Ajouter des contributeurs",
     "EN" => "Add contributors",
];
$admin_php_contribsR =[
    "FR" => "Supprimer des contributeurs",
     "EN" => "Remove contributors",
];


//-------Contenu principal

$welcomeArticle =[
    "FR" => "<p>Sur ce site, vous en découvrirez plus sur l'histoire de ces lieux magnifiques et inscrits au patrimoine
                mondial de l'UNESCO.
            </p>
            <p>
                Vous pourrez prévoir votre visite en apprenant comment venir, comment visiter et comment découvrir
                du mieux que possible : <strong>Fontainebleau !</strong><br>
                Site composé du célèbre Château accompagné de son magnifique parc.
            </p>
            <p>",


     "EN" => "<p> On this website you will learn more about the thrilling history of the palace of Fontainebleau and its park both classed as 
                 a World Heritage Site by UNESCO.
            </p>
            <p>
                You will be able to plan your trip by learning how to come and how to visit as best as possible : <strong>Fontainebleau !</strong><br>
                Where are the famous palace and its beautiful park.
            </p>
            <p>",
];

//-----Vidéos 
// - Titres
$home_vid_title1 = [
    "FR" => "Découvrir Fontainebleau",
     "EN" => "Discover Fontainebleau",
];

$home_vid_title2 =[
    "FR" => "Ca parle de nous !",
     "EN" => "Talking about us !",
        "ES" => "Hablamos de nosotros !",
        "DE" => "Wir sprechen von uns !",
];

//- Sous-titre
$home_vid_sub_title1 =[
    "FR" => "Vue en drone du parc et château de Fontainebleau.",
     "EN" => "",
];

$home_vid_sub_title2 =[
    "FR" => "Présentation du château dans l'émission <quote>Visite privées</quote> sur France 2 par Stéphane Berne.",
     "EN" => 'Palace of Fontainebleau video Guide on YouTube by <quote><a href="https://www.youtube.com/channel/UCYlW84S3ZOS4RpCmTKBdGow">Travel and discover</a></quote>',
];


//----------------------------- Page histoire
// Titre :
$history_php_title =[
    "FR" => "Histoire : Fontainebleau",
     "EN" => "History : Fontainebleau",


];

//Description
$history_php_desc =[
    "FR" => " Ce site web, réaliser lors d'un projet en partenariat avec l'UNESCO à pour but de présenter et d'honorer le
    château de Fontainebleau ainsi que son parc, tout deux classés au patrimoine mondial.",

     "EN" => "This website, created as part of a project in partnership with UNESCO, aims to present and honour the
    Fontainebleau palace and its park, both classified as world heritage.",
];

//Messages d'accueil
$history_php_splashScreen =[
    "FR" => "Fontainebleau, <br> son histoire.",
     "EN" => "Fontainebleau, <br> its history !",
];


$history_php_article1 = [
    "FR" => "                <h1>Fontainebleau dans l'histoire</h1>
                <h2>Château de Fontainebleau, un château fort</h2>
                    <p>
                    En 1137, le roi Louis VII mentionne un château fort pour la première fois dans sa charte. La
                    date exacte de la construction du château est encore inconnue, mais le premier édifice a
                    peut-être été construit sous le règne du père de Louis VII, Louis VI, ou même sous le règne
                    de son grand-père Philippe Ier.
                        
                    </p>
                <h2>Château de Fontainebleau - La Renaissance</h2>
                <p>
                    Le château de Fontainebleau fut l’un des plus grands chantiers de la Renaissance
                    Française.
                    L’année 1527 constitua un véritable deuxième acte de naissance du château. Cette
                    année-là, François Ier décida des rénovations.
                    Après sa captivité, il voulut redorer son blason. Qu’on puisse se remémorer son règne, c’est
                    pour cela qu’il entreprit de faire de ce château fort sa demeure en le rénovant.
                    Les inspirations pour le château prirent leurs sources dans la renaissance Italienne, qui a
                    lieu à la même époque.
                    Le seul vestige de l’ancien château est le donjon.
                    
                </p>
                <h2>Un renouveau avec Henri IV</h2>
                <p>
                    Henri IV a voulu, après les guerres de religion, reconstituer sa cour à Fontainebleau à cause
                    de ses opposants. Il essaya donc de donner toute la splendeur qu’il pouvait au lieu. En
                    engageant des artistes pour magnifier le château et ses jardins avec des jeux d’eau et des
                    fontaines. Par la suite, le château devint le berceau des Bourbons.
                    
                </p>
                <figure>
                    <img src='../fichiers/medias/images/parc.jpg' height='400' alt='Alexandre-Louis Robert MILLIN du PERREUX Paris, 1764 - 1843 Sully s’agenouillant devant Henri IV devant le château de Fontainebleau...'>
                    <figcaption>Alexandre-Louis Millin du Perreux(1764-1843) 1819 Huile sur toile,
                        Château de
                        Fontainebleau</figcaption>
                </figure>
                <h2>Le Château du roi Soleil</h2>
                <p>
                Le projet principal de Louis XIV, le roi Soleil, est de rénover et de s'installer à Versailles.
                Mais pendant les rénovations la cour du jeune roi s’installe à Fontainebleau.
                Malgré tout, le château de Fontainebleau resta le château de chasse du roi, il vint y
                séjourner donc chaque automne.
                </p>
                <h2>De Louis XV à la révolution française</h2>
                <p>
                    Louis XV et Louis XVI furent, tout comme Louis XIV, du château de Fontainebleau leur
                    résidence secondaire. Ils y venaient pour leurs chasses annuelles, en automne, firent des
                    banquets pendant cette période ainsi que de grandes fêtes. Ils y entreprirent quelques
                    rénovations.
                    Pendant la révolution française, le palais des rois de France fut la cible de projets de
                    démolition. Ce qui fut évité grâce aux deux écoles qui s’y installent pendant quelque temps.
                </p>
                <h2>
                    Fontainebleau sous le règne de Napoléon 1er
   
                </h2>
                <p>
                    Napoléon Bonaparte devint Napoléon 1er, et au moment de se faire couronner empereur par
                    le pape, il fit remeubler le château “en ruine” de Fontainebleau pour l’accueillir.
                    Plus les conquêtes avançaient, plus les rénovations et remeublement devinrent somptueux.
                    Il y construit un trône en 1808 et se fut un lieu
                    de séjours et de festivités pour l’empereur.
                    Le moment des Adieux à sa garde, au pied de
                    l’escalier en Fer-à-Cheval est un moment
                    marquant du lieu.
                </p>



                <figure>
                    <img src='../fichiers/medias/images/adieu_napoleon.jpg' height='400'>
                    <figcaption>MONTFORT Antoine Alphonse (1802 -1884)</figcaption>
                </figure>",


    "EN" => "              <h1>Fontainebleau in history</h1>
                <h2>Palace of Fontainebleau, a fortified palace
                </h2>
                    <p>
                        In 1137, King Louis VII mentioned a palace for the first time in his charter. The
                        The exact date of the palace's construction is still unknown, but the first building may have been
                        the reign of Louis VII's father, Louis VI, or even during the reign of his grandfather
                        of his grandfather Philip I.
                        
                    </p>
                <h2>Palace of Fontainebleau - The Renaissance</h2>
                <p>
                    The Palace of Fontainebleau was one of the greatest works of the French Renaissance.
                    French Renaissance.
                    The year 1527 was the second birth of the palace. That year
                    That year, François I decided to renovate the palace.
                    After his captivity, he wanted to restore his reputation. He wanted to restore his reputation after his captivity.
                    He therefore decided to make the palace his home by renovating it.
                    The inspiration for the palace came from the Italian renaissance, which took place at the same time.
                    which took place at the same time.
                    The only remnant of the old palace is the keep.
                    
                </p>
                <h2>A revival with Henry IV</h2>
                <p>
                    After the Wars of Religion, Henri IV wanted to reconstitute his court in Fontainebleau because of
                    of his opponents. He therefore tried to give the place all the splendour he could. In
                    hiring artists to magnify the palace and its gardens with water features and
                    fountains. Later, the palace became the birthplace of the Bourbons.

                    
                </p>
                <figure>
                    <img src='../fichiers/medias/images/parc.jpg' height='400' alt='Alexandre-Louis Robert MILLIN du PERREUX Paris, 1764 - 1843 Sully s’agenouillant devant Henri IV devant le château de Fontainebleau...'>
                    <figcaption>Alexandre-Louis Millin du Perreux(1764-1843) 1819 Huile sur toile,
                        Palace of
                        Fontainebleau</figcaption>
                </figure>
                <h2>Le Palace of roi Soleil</h2>
                <p>
                The main project of Louis XIV, the Sun King, was to renovate and settle in Versailles.
                But during the renovations the young king's court moved to Fontainebleau.
                Despite this, the Palace of Fontainebleau remained the king's hunting Palace, so he came to stay there every autumn.
                he came to stay there every autumn.
                </p>
                <h2>From Louis XV to the French Revolution</h2>
                <p>
                    Louis XV and Louis XVI, like Louis XIV, made the Palace of Fontainebleau their
                    secondary residence. They came there for their annual hunts in the autumn and held banquets during this period, as well as
                    banquets during this period as well as large parties. They undertook some
                    renovations.
                    During the French revolution, the palace of the kings of France was the target of demolition projects.
                    demolition. This was avoided thanks to the two schools that were established there for a time.
                </p>
                <h2>
                    Fontainebleau under the reign of Napoleon the I<sup>st</sup>
   
                </h2>
                <p>
                    Napoleon Bonaparte became Napoleon the I<sup>st</sup>, and when he was to be crowned emperor by the pope,
                    the Pope refurnished Palace of Fontainebleau to accommodate him.
                    The more the conquests progressed, the more sumptuous the renovations and refurnishing became.
                    He built a throne there in 1808 and it was a place
                    and festivities for the emperor.
                    The moment of the Farewell to his guard, at the foot of the
                    the Horseshoe Staircase is a highlight of the
                    of the place.
                </p>



                <figure>
                    <img src='../fichiers/medias/images/adieu_napoleon.jpg' height='400'>
                    <figcaption>MONTFORT Antoine Alphonse (1802 -1884)</figcaption>
                </figure>"


];



//----------------------------- Page connexion
// Titre :
$login_php_title =[
    "FR" => "Compte : se connecter",
     "EN" => "Account : connexion",


];

//Description
$login_php_desc =[
    "FR" => " Ce site web, réaliser lors d'un projet en partenariat avec l'UNESCO à pour but de présenter et d'honorer le
    château de Fontainebleau ainsi que son parc, tout deux classés au patrimoine mondial.",

     "EN" => "This website, created as part of a project in partnership with UNESCO, aims to present and honour the
    Fontainebleau palace and its park, both classified as world heritage.",
];

//Messages d'accueil
$login_php_splashScreen =[
    "FR" => "Connectez-vous à votre, <br> compte Fontainebleau !",
     "EN" => "Connect to your, <br> Fontainebleau account !",
];

$login_php_form_title =[
    "FR" => "Connexion à votre compte Fontainebleau connect :", 
     "EN" => "Connect to your Fontainebleau connect's account :",
];

$login_php_login =[
    "FR" => "Nom d'utilisateur ou email",
     "EN" => "Username or email address",
];


$login_php_password =[
    "FR" => "Mot de passe ",
     "EN" => "Password",
];

$login_php_submit =[
    "FR" => "Se connecter",
     "EN" => "Connect",
];

$login_php_h1 =[
    "FR" => "Connectez-vous à Fontainebleau Connect",
     "EN" => "Connect to your Fontainebleau Connect account",
];



$login_php_h2 =[
    "FR" => "Pourquoi utiliser Fontainebleau Connect ?",
     "EN" => "Why use Fontainebleau Connect ?",
];




$login_php_speech =[
    "FR" => "           Pour qu'à l'avenir, vous puissiez accéder et découvrir de nouvelles façons de visiter Fontainebleau. En utilisant un compte Fontainebleau Connect, vous obtiendrez des conseils et des astuces sur Fontainebleau et sa région.
            De plus, vous pourrez partager vos expériences avec d'autres personnes et obtenir leur avis. ",
     "EN" => "So in the future you can access and discover new ways of visiting Fontainebleau. By using a Fontainebleau Connect account you will get tips and tricks about Fontainebleau and its area.
            Moreover you will be able to share your experiences with other people and to get feedback from them. ",
];

$login_php_createAccount =[
    "FR" => " Vous n'avez pas de compte ? Créez-en un! ",
     "EN" => "You don't have an account yet ? Create one !",
];

$login_php_alreadyConnected =[
    "FR" => "Vous êtes déjà connecté ",
     "EN" => "You are already connected ",
];


//----------------------------- Page creation de compte
// Titre :
$register_php_title =[
    "FR" => "Compte : se créer un compte",
     "EN" => "Account : register",


];

//Description
$register_php_desc =[
    "FR" => " Ce site web, réaliser lors d'un projet en partenariat avec l'UNESCO à pour but de présenter et d'honorer le
    château de Fontainebleau ainsi que son parc, tout deux classés au patrimoine mondial.",

     "EN" => "This website, created as part of a project in partnership with UNESCO, aims to present and honour the
    Fontainebleau palace and its park, both classified as world heritage.",
];

//Messages d'accueil
$register_php_splashScreen =[
    "FR" => "Inscrivez-vous à, <br> Fontainebleau Connect !",
     "EN" => "Register to , <br> Fontainebleau Connect !",
];

$register_php_form_title =[
    "FR" => "Créez votre compte", 
     "EN" => "Create your account",
];

$register_php_login =[
    "FR" => "Nom d'utilisateur",
     "EN" => "Username",
];

$register_php_mail =[
    "FR" => "Courriel",
     "EN" => "Email address",
];

$register_php_name =[
    "FR" => "Prénom",
     "EN" => "Name",
];

$register_php_lastname =[
    "FR" => "Nom de famille",
     "EN" => "Last name",
];

$register_php_password =[
    "FR" => "Mot de passe ",
     "EN" => "Password",
];

$register_php_submit =[
    "FR" => "Se connecter",
     "EN" => "Connect",
];

$register_php_h1 =[
    "FR" => "Créez votre compte Fontainebleau Connect",
     "EN" => "Create your Fontainebleau Connect account",
];



$register_php_h2 =[
    "FR" => "Pourquoi utiliser Fontainebleau Connect ?",
     "EN" => "Why use Fontainebleau Connect ?",
];




$register_php_speech =[
    "FR" => "           Pour qu'à l'avenir, vous puissiez accéder et découvrir de nouvelles façons de visiter Fontainebleau. En utilisant un compte Fontainebleau Connect, vous obtiendrez des conseils et des astuces sur Fontainebleau et sa région.
            De plus, vous pourrez partager vos expériences avec d'autres personnes et obtenir leur avis. ",
     "EN" => "So in the future you can access and discover new ways of visiting Fontainebleau. By using a Fontainebleau Connect account you will get tips and tricks about Fontainebleau and its area.
            Moreover you will be able to share your experiences with other people and to get feedback from them. ",
];

$register_php_createAccount =[
    "FR" => " Vous n'avez pas de compte ? Créez-en un! ",
     "EN" => "You don't have an account yet ? Create one !",
];


$register_php_alreadyTaken =[
    "FR" => " Erreur : ce compte existe déjà ! ",
     "EN" => "Error : this account already exists !",
];

$register_php_registerSuccess =[
    "FR" => " Félicitations ! Vous êtes inscrit ! ",
     "EN" => "Congratulations ! You are registered !",
];

// ---------------------------- Page compte
$account_php_splashScreen =[
    "FR" => "Bienvenue :  <br>",
     "EN" => "Welcome : <br> ",
];

$account_php_yourInfos =[
    "FR" => "Vos informations Fontainebleau connect",
     "EN" => "Your Fontainebleau Connect informations",
];


// ---------------------------- Page visiter

$visit_php_splashScreen =[
    "FR" => "Visiter, <br> Fontainebleau.",
     "EN" => "Visit, <br> Fontainebleau.",
];

$visit_php_article1 = [
    "FR" => "                <h1>S'y rendre</h1>
                <p>
                    Le château et parc de Fontainebleau sont situés dans le département de la Seine-et-Marne (77). A une distance d'environ de 70 kms de Paris ce ne sont pas les
                    monuments les plus proches et facile d'accès depuis la capitale.
                </p>
                <p>
                    Plusieurs moyens sont disponibles pour se rendre à Fontainebleau la voiture étant celle à privilégier pour la facilité et la mobilité.
                </p>
                <p>
                    Ainsi, depuis Paris compter entre 1h15 et 1h50 selon le trafic pour s'y rendre en voiture.
                    En prenant l'autoroute A6 en passant par Corbeil-Essones ou l'autoroute A4 puis l'A5b en finissant par la D606 en passant par Melun.<br> 
                    Sur place un parking couvert et payant d'une capacité de 250 places est disponible. Il est situé à proximité immédiate de l'entrée.
                </p>
                <p>
                    En transport en commun, Il faut emprunter la ligne de Transilien <img src='../fichiers/medias/images/transilien_r.png' height='20px' alt='R' title='Ligne R du réseau Transilien'>
                    à Paris Gare-de-Lyon ou les TER en direction de Montargis, Montereau, ou Laroche-Migennes puis descendre à la gare Fontainebleau-Avon et emprunter le BUS 1
                    en direction de Les Lilas et descendre à l'arrêt <quote>Château</quote>
                </p>
                    <div class='mobile-hidden'>
                        <h2>Fontainebleau sur la carte</h2>
                        <iframe width='425' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' 
                        src='https://www.openstreetmap.org/export/embed.html?bbox=2.4736404418945317%2C48.30534908669966%2C2.9268264770507817%2C48.506369504643246&amp;layer=mapnik&amp;marker=48.40595861246658%2C2.7002334594726562' 
                        style='border: 1px solid black'></iframe><br/><small><a href='https://www.openstreetmap.org/?mlat=48.4060&amp;mlon=2.7002#map=12/48.4060/2.7002'>
                            Plein écran</a></small>
                    </div>
                </p>
                <h1>Visite</h1>
                <h3>Il est recommandé de prévoir 2h pour une visite libre et complète du château.</h3>
                <p>
                    Le château est ouvert tous les jours sauf les mardis, le 1er janvier, le 1er mai et le 25 décembre.
                    <ul>
                        <li> de 9h30-18h d’avril à septembre</li>
                        <li> de 9h30-17h d’octobre à mars</li>
                    </ul>

                </p>
                <p>
                    L'accès au château est payant :
                    <ul class='prix'>
                        <li> Plein tarif : <strong>13 €</strong></li>
                        <li>Tarif réduit : <strong>11 €</strong></li>
                        <li>Une heure avant la fermeture : <strong>9 €</strong></li>
                    </ul>
                </p>
                <p>
                    L'accès est néanmoins gratuit le premier dimanche de chaque mois ( sauf juillet et août) et <strong>l'accès au parc est gratuit.</strong>
                </p>",
     "EN" => "           <h1>Getting there</h1>
                <p>
                    The palace and park of Fontainebleau are located in the department of Seine-et-Marne (77). At a distance of about 70 kms from Paris, they are not the
                    the closest and most easily accessible monuments from the capital.
                </p>
                <p>
                   You can go to Fontainebleau by either car or train. With the car being the easiest solution.
                </p>
                <p>
                    From Paris, allow between 1h15 and 1h50 depending on traffic to get there by car.
                    By taking the A6 motorway via Corbeil-Essones or the A4 motorway and then the A5b, finishing on the D606 via Melun.  <br>
                    On site, a covered and paying car park with a capacity of 250 spaces is available. It is located near the entrance of the Palace .
                </p>
                <p>
                    By public transport, you must take the Transilien <img src='../fichiers/medias/images/transilien_r.png' height='20px' alt='R' title='Ligne R du réseau Transilien'> line
                    at Paris Gare-de-Lyon or the TER heading to de Montargis, Montereau, or Laroche-Migennes then get off at Fontainebleau-Avon station and take BUS 1
                    towards Les Lilas and get off at the stop  <quote>Château</quote>
                </p>
                    <div class='mobile-hidden'>
                        <h2>Fontainebleau on the map</h2>
                        <iframe width='425' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' 
                        src='https://www.openstreetmap.org/export/embed.html?bbox=2.4736404418945317%2C48.30534908669966%2C2.9268264770507817%2C48.506369504643246&amp;layer=mapnik&amp;marker=48.40595861246658%2C2.7002334594726562' 
                        style='border: 1px solid black'></iframe><br/><small><a href='https://www.openstreetmap.org/?mlat=48.4060&amp;mlon=2.7002#map=12/48.4060/2.7002'>
                            Fullscreen</a></small>
                    </div>
                </p>
                <h1>Visit</h1>
                <h3>It is recommended to allow 2 hours for a complete visit of the castle. Plan one more if you wish to visit the park.</h3>
                <p>
                    The castle is open every day except Tuesdays, 1 January, 1 May and 25 December.
                    <ul>
                        <li> 9.30am-6pm from April to September</li>
                        <li> 9.30am-5pm from October to March</li>
                    </ul>

                </p>
                <p>
                    The palace entrance is not free :
                    <ul class='prix'>
                        <li> Full fare : <strong>13 €</strong></li>
                        <li>Reduced fare : <strong>11 €</strong></li>
                        <li>One hour before closing time: <strong>9 €</strong></li>
                    </ul>
                </p>
                <p>
                    Access is free on the first Sunday of each month (except July and August) and<strong> access to the park is always free.</strong>
                </p>",
];


$footer_php_footer =[
    "FR" => "            <p>Site web réalisé en partenariat avec :</p>
            <div>
                <img src='../fichiers/medias/images/mcn.PNG' height='60' alt='Logo du MCN'>
                <img src='../fichiers/medias/images/unesco.png' height='70' alt='Logo de l'UNESCO'>
            </div>
            <details>
                <summary> 
                    Réalisé en décembre 2021 et mis au goût du jour en mai 2022.
                </summary>
                Copyrights (c) 2022 - Touts droits réservés <br>
                Les images utilisées appartiennent à leurs auteurs respectifs<br>
                Et ont étés utilisées dans le cadre de la licence Créative Commons nous autorisant <br>
                à les réutiliser gratuitement à but non lucratif ou commercial.
            </details>",
     'EN' => "            <p>Made in partnership with</p>
            <div>
                <img src='../fichiers/medias/images/mcn.PNG' height='60' alt='MCN's logo'>
                <img src='../fichiers/medias/images/unesco.png' height='70' alt='UNESCO's logo'>
            </div>
            <details>
                <summary> 
                    Made in december of 2021 and updated in may of 2022.
                </summary>
                Copyrights (c) 2021 - All rights reserved <br>
                The images used belong to their respective authors <br>
                And have been used under the Creative Commons license allowing us <br>
                to reuse them free of charge for non-profit or commercial purposes.
            </details>",
];





$admin_php_title =[
    "FR" => "Compte : se créer un compte",
     "EN" => "Account : admin",


];

//Description
$admin_php_desc =[
    "FR" => " Ce site web, réaliser lors d'un projet en partenariat avec l'UNESCO à pour but de présenter et d'honorer le
    château de Fontainebleau ainsi que son parc, tout deux classés au patrimoine mondial.",

     "EN" => "This website, created as part of a project in partnership with UNESCO, aims to present and honour the
    Fontainebleau palace and its park, both classified as world heritage.",
];

//Messages d'accueil
$admin_php_splashScreen =[
    "FR" => "Inscrivez-vous à, <br> Fontainebleau Connect !",
     "EN" => "admin to , <br> Fontainebleau Connect !",
];

$admin_php_form_title =[
    "FR" => "Créez votre compte", 
     "EN" => "Create your account",
];

$admin_php_login =[
    "FR" => "Role",
     "EN" => "role",
];

$admin_php_mail =[
    "FR" => "Courriel",
     "EN" => "Email address",
];

$admin_php_name =[
    "FR" => "Prénom",
     "EN" => "Name",
];

$admin_php_lastname =[
    "FR" => "Nom de famille",
     "EN" => "Last name",
];

$admin_php_password =[
    "FR" => "Mot de passe ",
     "EN" => "Password",
];

$admin_php_submitA =[
    "FR" => "Ajouter",
     "EN" => "Add",
];
$admin_php_submitR =[
    "FR" => "Supprimer",
     "EN" => "Remove",
];

$admin_php_h1 =[
    "FR" => "Créez votre compte Fontainebleau Connect",
     "EN" => "Create your Fontainebleau Connect account",
];



$admin_php_h2 =[
    "FR" => "Pourquoi utiliser Fontainebleau Connect ?",
     "EN" => "Why use Fontainebleau Connect ?",
];




$admin_php_speech =[
    "FR" => "           Pour qu'à l'avenir, vous puissiez accéder et découvrir de nouvelles façons de visiter Fontainebleau. En utilisant un compte Fontainebleau Connect, vous obtiendrez des conseils et des astuces sur Fontainebleau et sa région.
            De plus, vous pourrez partager vos expériences avec d'autres personnes et obtenir leur avis. ",
     "EN" => "So in the future you can access and discover new ways of visiting Fontainebleau. By using a Fontainebleau Connect account you will get tips and tricks about Fontainebleau and its area.
            Moreover you will be able to share your experiences with other people and to get feedback from them. ",
];

$admin_php_createAccount =[
    "FR" => " Vous n'avez pas de compte ? Créez-en un! ",
     "EN" => "You don't have an account yet ? Create one !",
];


$admin_php_alreadyTaken =[
    "FR" => " Erreur : ce compte existe déjà ! ",
     "EN" => "Error : this account already exists !",
];

$admin_php_adminSuccess =[
    "FR" => " Félicitations ! Vous êtes inscrit ! ",
     "EN" => "Congratulations ! You are admined !",
];

?>
