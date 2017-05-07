<?php require(__DIR__."/../includes/helpers.php") ?>
<?php render("header.php",["title"=>"FIVE STAR| BABY GIRL DRESSES"])?>
<script type="text/javascript">
  $(document).ready(function () {
  $(".nav li").removeClass("active");
    $('#babygirl').addClass('active');
});
</script>
<link rel="stylesheet" type="text/css" href="stylesheet/catalogue.css">
<div class="row">
              <div class="col-md-6 col-xs-6">
                <div class="girlpic">
                  <figure>
                  	<img src="images/babygirl/babygirl1.1.png" alt="babygirl1" class="catalogue" />
                    <figcaption>
                    <p><b>Frock</b><br>1-3-4 yrs</p>
                    </figcaption>
                  </figure>
                </div>
                <!-- /.team-member-->
              </div>
              <!-- /.col-sm-4 -->
              <div class="col-md-6 col-xs-6">
                <div class="girlpic">
                  <figure>
                  	<img src="images/babygirl/babygirl1.2.png" alt="babygirl2" class="catalogue" />
                    <figcaption>
                    <p><b>Frock</b><br>1-3-4 yrs</p>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-md-6 col-xs-6">
                <div class="girlpic">
                  <figure>
                  	<img src="images/babygirl/babygirl1.3.png" alt="babygirl3" class="catalogue" />
                    <figcaption>
                    <p><b>Frock</b><br>1-3-4 yrs</p> 
                    </figcaption>
                  </figure>
                </div>
              </div>
</div>
<?php render("footer.php") ?>