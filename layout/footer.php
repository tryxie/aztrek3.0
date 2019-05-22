<?php
require_once "model/database.php";
$countries = getAllRows("country");
?>

<footer>

<div class="footer-inner container">

  <div class="footer-col">
    <article class="footer-col-inner">
      <h3>Mentions Légales</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
        ea commodo consequat. Duis aute
        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>
  </div>

  <div class="footer-col">
    <section class="footer-col-inner">
      <h3>Aztrek sur les réseaux</h3>
      <nav class="social-nav">
        <ul>
          <li><a href="#" title="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i><span
                class="hidden-text">Facebook</span></a></li>
          <li><a href="#" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i><span
                class="hidden-text">Twitter</span></a></li>
          <li><a href="#" title="Pinterest"><i class="fab fa-pinterest" aria-hidden="true"></i><span
                class="hidden-text">Pinterest</span></a></li>
          <li><a href="#" title="Linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i><span
                class="hidden-text">Linkedin</span></a></li>
          <li><a href="#" title="Viadeo"><i class="fab fa-viadeo" aria-hidden="true"></i><span
                class="hidden-text">Viadeo</span></a></li>
          <li><a href="#" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i><span
                class="hidden-text">Instagram</span></a></li>
        </ul>
      </nav>
    </section>
  </div>

  <div class="footer-col">
    <div class="footer-col-inner">
      <h3>Rubriques principales</h3>
      <ul class="footer-sitenav">
        <li><a href="#" title="Carnets de Voyage"></a>Carnets de Voyage</li>
        <li><a href="#" title="Bazar de Sacs"></a>Bazar de Sacs</li>
        <li><a href="#" title="A Propos"></a>A Propos</li>
        <li><a href="#" title="L'équipe de guides"></a>L'équipe de guides</li>
        <li><a href="contact.php" title="Contact">Contact</a></li>
      </ul>
    </div>

  </div><!-- .footer-inner -->
</div>

</footer>

</body>

</html>