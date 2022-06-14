    <!-- Script qui permet de faire apparaître la barre de navigation en haut quand on scrolle -->
    <script>
        window.onscroll = function() {myFunction()};
        var navbar = document.getElementById('top');
        var sticky = navbar.offsetTop;
        function myFunction() {
        if (window.pageYOffset >= sticky) {
        navbar.classList.add('sticky')
        navbar.classList.remove('top');
        } else {
        navbar.classList.remove('sticky');
        }
        }
    </script>
    
    <!-- Pied de page  -->
    <footer>
                <?php echo ${"footer_php_footer"}[$lang] ?>


        </footer>
