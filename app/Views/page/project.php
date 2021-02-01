<?php  
    use App\Models\Project;

    $project = new Project;
    $data = $project->select('*')
    ->orderBy('project_year', 'desc')
    ->get();
?>

<section class="ftco-section-2">
    <div class="photograhy">
        <div class="row no-gutters">
            <?php foreach($data as $q) : ?>
                <div class="col-md-3">
                    <a href="<?= $q['project_url'] ?>" <?= ($q['project_url'] !== '#') ? 'target="_blank"' : '' ?>  class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url('<?= base_url ?>project/<?= $q['project_image'] ?>');">
                        <div class="overlay"></div>
                        <div class="text text-center">
                            <h3><?= $q['project_name'] ?></h3>
                            <p><?= $q['project_year'] ?> : <?= $q['project_description'] ?></p>
                            <span><?= $q['project_tech'] ?></span>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>