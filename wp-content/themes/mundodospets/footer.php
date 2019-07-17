<footer class="rodape">
    <div class="container">
        <div class="logorodape text-center"><?php the_custom_logo(); ?></div>
        <p class="text-copyright">&copy; <?php echo date("Y"); ?> Mundo dos Pets - Todos os direitos reservados.
        <p class="text-adress">O Mundo dos Pets é publicado pela Enfoque Jornal e Editora Ltda. <br>

        <p class="develop" style="color: grey">Designed & Developed by <br><a href="https://www.linkedin.com/in/romilson-santa-rosa-b086a056/" target="_blank">Rom Santa Rosa</a></p><br>

       <!--<nav class="menu-baixo text-center">
            <?php wp_nav_menu( array('theme_location' => 'menu-rodape')); ?>
        </nav>-->

        <!-- JavaScript dependencies -->
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
        </script>
		<script>
jQuery(document).ready(function () { 
$("ul.page-numbers").addClass("pagination");
});
</script>
</footer>
<?php wp_footer(); ?>

	<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'wJP9qqcjpS';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
s.src = '//code.jivosite.com/script/widget/'+widget_id
; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
	
</body>
</html>