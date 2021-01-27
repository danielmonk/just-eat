<footer>
	<div class="container">
		<p>Website Designed by <a href="">First Event</a></p>
	</div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/nav.js"></script>

<!-- Call Dropdowns JS -->
  <script>
      var acc = document.querySelectorAll('.accordion');
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight){
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        }
      }
  </script>
<!-- Call Dropdowns JS -->
</body>
</html>