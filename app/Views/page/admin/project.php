<?php  
    use App\Models\Project;

    $data = Project::all();
?>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4 font-weight-bold">Project Data</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-12 text-left">
                <button class="btn btn-success btn-md" type="button" data-toggle="modal" data-target="#modal-add">Add Data</button>
            </div>
        </div>
        <table class="table table-responsive table-bordered" id="dt_basic">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Url</th>
                    <th>Year</th>
                    <th>Status</th>
                    <th>Tech</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($data as $d) : ?>
                    <tr>
                        <td><?= $no ++ ?></td>
                        <td><?= $d['project_name'] ?></td>
                        <td><?= $d['project_description'] ?></td>
                        <td><?= $d['project_image'] ?></td>
                        <td><?= $d['project_url'] ?></td>
                        <td><?= $d['project_year'] ?></td>
                        <td><?= $d['project_status'] ?></td>
                        <td><?= $d['project_tech'] ?></td>
                        <td>
                            <button  type="button" data-toggle="modal" data-target="#modal-update-<?= $d['project_id'] ?>" class="btn btn-primary btn-sm">Update</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="modal-add-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?= base_url ?>admin/project/create" enctype="multipart/form-data">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="project_name" placeholder="Project Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="project_description" placeholder="Project Description"></textarea>
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
                                    <label>Url</label>
                                    <input type="text" class="form-control" name="project_url" placeholder="Project Url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="text" class="form-control" name="project_year" placeholder="Project Year">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="project_status">
                                        <option selected disabled="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tech</label>
                                    <input type="text" class="form-control" name="project_tech" placeholder="Project Tech">
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
    <div class="modal fade" id="modal-update-<?= $q['project_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-add-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="<?= base_url ?>admin/project/update" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-add-label">Update Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="project_id" value="<?= $q['project_id'] ?>">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="project_name" placeholder="Project Name" value="<?= $q['project_name'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="project_description" placeholder="Project Description"><?= $q['project_description'] ?></textarea>
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
                                    <label>Url</label>
                                    <input type="text" class="form-control" name="project_url" placeholder="Project Url" value="<?= $q['project_url'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="text" class="form-control" name="project_year" placeholder="Project Year" value="<?= $q['project_year'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="project_status">
                                        <option selected disabled="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tech</label>
                                    <input type="text" class="form-control" name="project_tech" placeholder="Project Tech" value="<?= $q['project_tech'] ?>">
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
