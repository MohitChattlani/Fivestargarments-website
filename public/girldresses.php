<?php require(__DIR__."/../includes/helpers.php") ?>
<?php render("header.php",["title"=>"FIVE STAR| GIRL DRESSES"])?>
<script type="text/javascript">
  $(document).ready(function () {
  $(".nav li").removeClass("active");
    $('#girl').addClass('active');
});
</script>
<link rel="stylesheet" type="text/css" href="stylesheet/catalogue.css">
 <div class="row">
              <div class="col-md-6 col-xs-6">
                <div class="girlpic">
                  <figure>
                  	<img src="images/girl/girl1.1.png" alt="girl1" class="catalogue" />
                    <figcaption>
                    <p><b>Gown</b><br>8-15-17 yrs</p>
                    </figcaption>
                  </figure>
                </div>
                <!-- /.team-member-->
              </div>
              <!-- /.col-sm-4 -->
              <div class="col-md-6 col-xs-6">
                <div class="girlpic">
                  <figure>
                  	<img src="images/girl/girl1.2.png" alt="girl2" class="catalogue" />
                    <figcaption>
                    <p><b>Lehenga dress</b><br>8-15-17 yrs</p> 
                    </figcaption>
                  </figure>
                </div>
              </div>  
</div>
<?php render("footer.php") ?>