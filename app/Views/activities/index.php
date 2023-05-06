<?php
$activos = 0;
$inactivos = 0;
$data = [$course, $lesson];
$this->extend('templates/template_new', $data);
$this->section('content');
?>
<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-3">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.png'); ?>" alt="">
                
            </div>
            <div class="col-sm-7">
                <div class="direct-chat-msg">
                    <p class="direct-chat-text text-primary h5"><b> <?php echo 'CURSO ' . $course . '   >>   LECCIÓN ' . $lesson; ?></b></p>
                </div>
                <p class="col-sm-10 direct-chat-text bg-blue">ELIGE LA ACTIVIDAD QUE QUIERES ESTUDIAR!</p>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo base_url('lessons/' . $site . '/' . $courseId . '/' . $course); ?>"><img src="<?php echo base_url('public/img/' . $site . '/activities/back_lessons.png'); ?>"></a>
            </div>
        </div>
        <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div> -->
    </div>
    <div class="card-body bg-transparent">
        <div class="row  content-container">
            <?php
            foreach ($lessons as $c) {
            ?>
                <div class="col-sm-2 lesson-card">
                    <div class="text-blue bg-transparent lesson-content">
                        <p class="text-center h5">Actividad <?php echo $c['activityNumber']; ?></p>
                        <img class="card-img-top bg-transparent" src="holder.js/100px180/" alt="">
                        <form action="contenido.html" method="post"></form>
                        <?php
                        echo '<a type="button" class="btn bg-transparent" href="' . base_url('content/' . $site . '/' . $c['objectId'] . '/' . $c['lessonId'] . '/' . $course . '/' . $lesson . '/' . $courseId . '/' . $c['tipo'] . '/' . $c['activityNumber']) .'/'.str_replace('.png','',$c['img_path']). '">';
                        ?>
                        <img src="<?php echo base_url('public/img/' . $site . '/activities/cards/' . $c['img_path']) ?>" alt="" class="img-fluid rounded " style="width:185px;height: 150px;">
                        </a>
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