<?php  
	use App\Models\About;

	$data = About::all();
?>

<section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
	       	<div class="col-md-12 mb-4">
	        	<h2 class="h4 font-weight-bold">About Data</h2>
	        </div>
	        <div class="w-100"></div>
	        <div class="col-md-12 text-left">
	    	    <!-- <button class="btn btn-success btn-md" type="button" data-toggle="modal" data-target="#modal-add">Add Data</button> -->
	        </div>
        </div>
		<table class="table table-responsive table-bordered" id="dt_basic">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Description</th>
					<th>Image</th>
					<th>Facebook</th>
					<th>Twitter</th>
					<th>YouTube</th>
					<th>Instagram</th>
					<th>WhatsApp</th>
					<th>Github</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach($data as $d) : ?>
					<tr>
						<td><?= $no ++ ?></td>
						<td><?= $d['about_name'] ?></td>
						<td><?= substr($d['about_description'], 0, 50) . '...' ?></td>
						<td><?= $d['about_image'] ?></td>
						<td><?= $d['about_facebook'] ?></td>
						<td><?= $d['about_twitter'] ?></td>
						<td><?= $d['about_youtube'] ?></td>
						<td><?= $d['about_intagram'] ?></td>
						<td><?= $d['about_whatsapp'] ?></td>
						<td><?= $d['about_github'] ?></td>
						<td><?= $d['about_email'] ?></td>
						<td>
							<button  type="button" data-toggle="modal" data-target="#modal-update-<?= $d['about_id'] ?>" class="btn btn-primary btn-sm">Update</button>
							<!-- <button class="btn btn-danger btn-sm">Delete</button> -->
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</section>

<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="modal-add-label" aria-hidden="true">
  	<div class="modal-dialog" role="document">
		<form method="post" action="<?= base_url ?>admin/about/create" enctype="multipart/form-data">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="modal-add-label">Add Data</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	        		<div class="container">
	        			<div class="row">
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>Name</label>
	        						<input type="text" class="form-control" name="about_name" placeholder="My Name">
	        					</div>
	        				</div>
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>Email</label>
	        						<input type="text" class="form-control" name="about_email" placeholder="My Email">
	        					</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-12">
	        					<div class="form-group">
	        						<label>Description</label>
	        						<textarea class="form-control" name="about_description" placeholder="Describe myself"></textarea>
	        					</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-12">
	        					<div class="form-group">
	        						<label>Image</label>
	        						<input type="file" class="form-control" name="file">
	        					</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>Facebook</label>
	        						<input type="text" class="form-control" name="about_facebook" placeholder="My Facebook">
	        					</div>
	        				</div>
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>Twitter</label>
	        						<input type="text" class="form-control" name="about_twitter" placeholder="My Twitter">
	        					</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>YouTube</label>
	        						<input type="text" class="form-control" name="about_youtube" placeholder="My YouTube">
	        					</div>
	        				</div>
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>Instagram</label>
	        						<input type="text" class="form-control" name="about_intagram" placeholder="My Instagram">
	        					</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>WhatsApp</label>
	        						<input type="text" class="form-control" name="about_whatsapp" placeholder="My WhatsApp">
	        					</div>
	        				</div>
	        				<div class="col-md-6">
	        					<div class="form-group">
	        						<label>GitHub</label>
	        						<input type="text" class="form-control" name="about_github" placeholder="My Github">
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        		<button type="submit" class="btn btn-primary">Save</button>
	      		</div>
	    	</div>
    	</form>
  	</div>
</div>

<?php foreach($data as $q) : ?>
	<div class="modal fade" id="modal-update-<?= $q['about_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-add-label" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
			<form method="post" action="<?= base_url ?>admin/about/update" enctype="multipart/form-data">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="modal-add-label">Update Data</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		      			<input type="hidden" name="about_id" value="<?= $q['about_id'] ?>">
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>Name</label>
		        						<input type="text" class="form-control" name="about_name" placeholder="My Name" value="<?= $q['about_name'] ?>">
		        					</div>
		        				</div>
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>Email</label>
		        						<input type="text" class="form-control" name="about_email" placeholder="My Email" value="<?= $q['about_email'] ?>">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-md-12">
		        					<div class="form-group">
		        						<label>Description</label>
		        						<textarea class="form-control" name="about_description" rows="10" placeholder="Describe myself"><?= $q['about_description'] ?></textarea>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-md-12">
		        					<div class="form-group">
		        						<label>Image</label>
		        						<input type="file" class="form-control" name="file">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>Facebook</label>
		        						<input type="text" class="form-control" name="about_facebook" placeholder="My Facebook" value="<?= $q['about_facebook'] ?>">
		        					</div>
		        				</div>
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>Twitter</label>
		        						<input type="text" class="form-control" name="about_twitter" placeholder="My Twitter" value="<?= $q['about_twitter'] ?>">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>YouTube</label>
		        						<input type="text" class="form-control" name="about_youtube" placeholder="My YouTube" value="<?= $q['about_youtube'] ?>">
		        					</div>
		        				</div>
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>Instagram</label>
		        						<input type="text" class="form-control" name="about_intagram" placeholder="My Instagram" value="<?= $q['about_intagram'] ?>">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>WhatsApp</label>
		        						<input type="text" class="form-control" name="about_whatsapp" placeholder="My WhatsApp" value="<?= $q['about_whatsapp'] ?>">
		        					</div>
		        				</div>
		        				<div class="col-md-6">
		        					<div class="form-group">
		        						<label>GitHub</label>
		        						<input type="text" class="form-control" name="about_github" placeholder="My Github" value="<?= $q['about_github'] ?>">
		        					</div>
		        				</div>
		        			</div>
		        		</div>
		      		</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        		<button type="submit" class="btn btn-primary">Save</button>
		      		</div>
		    	</div>
	    	</form>
	  	</div>
	</div>
<?php endforeach ?>
