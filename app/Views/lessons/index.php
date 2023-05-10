<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template_new');
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-4">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.png'); ?>" alt="">
            </div>
            <div class="col-sm-2">
                <div class="col-sm-10 direct-chat-text bg-blue">
                    <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/lessons/mensaje_lecciones_kids.svg'); ?>" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo base_url('courses/' . $site); ?>"><img src="<?php echo base_url('public/img/' . $site . '/lessons/back_button.png'); ?>"></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row  content-container">
            <?php
            foreach ($lessons as $c) {
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 lesson-card">                   
                    <div class="lesson-content"> 
                        <div><p class="ome-title h5"><?php echo $c['descripcion'] ?></p></div>
                        <div><a type="button" href="<?php echo base_url('activities/' . $site . '/' . $c['id'] . '/' . $course . '/' . $c['lesson_number'] . '/' . $courseId); ?>">
                            <img src="<?php echo base_url('public/img/' . $site . '/lessons/' . $c['img_url']); ?>" alt="" class="img-fluid rounded">
                        </a></div>
                    </div>
                </div>
            <?php
                $activos += 1;
            }
            $inactivos = $activos + 1;
            ?>

        </div>

    </div>

    <!-- /.card-body -->
    <div class="card-footer">
        <!-- Footer -->
    </div>

    <!-- /.card-footer-->
</div>

<!-- /.card -->


<?php
$this->endSection();
?>