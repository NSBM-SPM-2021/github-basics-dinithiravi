 <style type="text/css">
 
form[role=login] {
  color: #5d5d5d;
  background: #192532;
  padding: 26px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
 /* opacity: .79;
  filter: alpha(opacity=60); /* For IE8 and earlier */ */

}
  form[role=login] img {
    display: block;
    margin: 0 auto;
    margin-bottom: 35px;
    height: 90px;
    opacity: 2;
    width: 100%;
  }
  form[role=login] input,
  form[role=login] button {
    font-size: 18px;
    margin: 16px 0; 
    font-weight: bold; 
  }
  form[role=login] > div {
    text-align: center; 
  }
  
 
 
</style> 
 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Login</span></p>
            <h1 class="mb-0 bread">Sign In</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart"> 
				<div class="row"> 
    			<div class="container"> 
				  <div class="row" id="pwd-container">
				    <div class="col-md-4"></div> 
				    <div class="col-md-4"> 
				      <section class="login-form"> <?php echo check_message(); ?>
				        <form action="process.php" method="POST" role="login" > 
				           <img src="admin/img/JANOBE.png" class="img-responsive" alt="" /> 
				          <input type="input" id="U_USERNAME" name="U_USERNAME"  placeholder="Username" required class="form-control input-lg" value="" /> 
				          <input type="password" name="U_PASS" id="U_PASS" class="form-control input-lg" id="password" placeholder="Password" required  />  
				          <button type="submit" name="sidebarLogin" class="btn btn-lg btn-primary btn-block">Sign in</button> 
				        </form>
				         
				      </section>  
				      </div> 
				     <div class="col-md-4"></div> 
 			    	</div> 
				</div>
    		</div> 
	</section>

