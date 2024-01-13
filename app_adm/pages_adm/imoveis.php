<?php
   include("../php_adm/protect.php");
   include_once("../php_adm/connect.php");
   include("../php_adm/metatags.php"); 
   include("navbar.php"); 
?>
<section class="p-3 mt-5">
  <div class="row">    
      <div class="col-md-7">
         <?php include("imoveis_subnav.php");?>
      </div>

      <div class="col-md-5 mt-md-0 mt-5">
          <div class="map-imoveis"></div>
      </div>
  </div>
</section>

<?php include("../includes_adm/footer.php"); ?>

