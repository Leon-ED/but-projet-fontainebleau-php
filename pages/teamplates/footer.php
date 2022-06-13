    <!-- Script qui permet de faire apparaître la barre de navigation en haut quand on scrolle -->
    <script>
        window.onscroll = function() {myFunction()};
        var navbar = document.getElementById("top");
        var sticky = navbar.offsetTop;
        function myFunction() {
        if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
        navbar.classList.remove("top");
        } else {
        navbar.classList.remove("sticky");
        }
        }
    </script>
    
    <!-- Pied de page  -->
    <footer>
            <p>Site web réalisé en partenariat avec :</p>
            <div>
                <img src="../fichiers/medias/images/mcn.PNG" height="60" alt="Logo du MCN">
                <img src="../fichiers/medias/images/unesco.png" height="70" alt="Logo de l'UNESCO">
            </div>
            <details>
                <summary> 
                    Réalisé en décembre 2021 et mis au goût du jour en mai 2022.
                </summary>
                Copyrights (c) 2022 - Touts droits réservés <br>
                Les images utilisées appartiennent à leurs auteurs respectifs<br>
                Et ont étés utilisées dans le cadre de la licence Créative Commons nous autorisant <br>
                à les réutiliser gratuitement à but non lucratif ou commercial.
            </details>

        </footer>