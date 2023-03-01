 <!-- FOOTER -->
 <footer class="footer">

<!-- contact -->
<div class="contact-info">
    <h2>Want to know more or <br> work with me? Let’s talk!</h2>
    <p>Send me an e-mail at <span>juliamunters@icloud.com</span>, via DM or use the contact form. </p>
</div>

<!-- menu -->
<!-- <nav class="footer-menu">
    <ul class="menu__list">
        <li class="menu__item"><a href="">Contact</a></li>
        <li class="menu__item"><a href="https://www.behance.net/juliamunters" target=”_blank”>Behance</a></li>
        <li class="menu__item"><a href="">LinkedIn</a></li>
        <li class="menu__item"><a href="https://github.com/muntersan" target=”_blank”>GitHub</a></li>
    </ul>
</nav> -->

<?php 
            $args = [
                'theme_location'    =>  'footer_menu',
                'container'         =>  'nav',
                'container_class'   =>  'footer-menu',
                'menu_class'        =>  'menu__list',

            ];

            wp_nav_menu( $args );
        
        ?>

</footer>

<!-- copyright -->
<div class="copyright"> &copy; Copyright Julia Munters 2023 </div>


</div> 
</div>





<?php wp_footer(); ?>
</body>
</html>