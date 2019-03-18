<div class="col-md-6">
  <div class="card">
	<div class="card-header card-header-primary">
	  <h4 class="card-title">Login</h4>
	  <p class="card-category">Selamat Datang di Evalo</p>
	</div>
	<div class="row">
	  <div class ="col-md-6 ml-3">
		<div class="card-body">
		  <form action="<?php echo base_url()?>setting/check" method="post">
			<div class="row">
			  <div class="col-md-12">
				<div class="form-group">
				  <label class="bmd-label-floating">Identitasku</label>
				  <input type="text" name="identitasku" class="form-control" value="H76214017">
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-12">
				<div class="form-group">
				  <label class="bmd-label-floating">Password</label>
				  <input type="password" name="password" class="form-control" value="tes">
				</div>
			  </div>
			</div>
			<button type="submit"  class="btn btn-primary pull-right">Login</button>
			<div class="clearfix"></div>
		  </form>
		</div>
	  </div>
	  <div class ="col-md-4 mt-5">
		<img src="<?php echo base_url('assets/img/evalo.png')?>" class="img-fluid" alt="">
	  </div>
	</div>
  </div>
</div>