<section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-12 mb-4">
	            <h2 class="h4 font-weight-bold">Login</h2>
	        </div>
		</div>
	    <div class="row block-9">
	        <div class="col-md-12 order-md-last pr-md-5">
	        	<form method="post" action="<?= base_url ?>admin/login/post">
	              	<div class="form-group">
	                	<input type="text" name="username" class="form-control" placeholder="Your Name">
	              	</div>
	              	<div class="form-group">
	                	<input type="password" name="password" class="form-control" placeholder="Your Password">
	              	</div>
	              	<div class="form-group">
	                	<input type="submit" value="Login" class="btn btn-primary py-3 px-5">
	              	</div>
	            </form>  
	    	</div>
	    </div>
  	</div>
</section>