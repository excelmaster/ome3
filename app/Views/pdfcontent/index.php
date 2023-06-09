<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template_new');
$this->section('content');
$colvideo = array(
  'a' => 6,
  'b' => 0,
  'c' => 1,
  'd' => 1,
  'e' => 2,
  'f' => 2
);
?>

<!-- Default box -->
<div class="card bg-transparent">
  <div class="card-header">
    <div class="row">
      <div class="col-md-<?php echo $colvideo['a'] ?>">
        <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos.png'); ?>" alt="">
      </div>
      <!-- <div class="col-md-<?php echo $colvideo['b'] ?>">
        <?php
        if ($source == 'video') {
          echo '<a href="#"><img class="bg-gradient-white" src="' . base_url('public/img/' . $site . '/content/videos.gif') . '"></a>';
        } else {
          echo '<img></img>';
        };
        ?>
      </div> -->
      <div class="col-md-<?php echo $colvideo['c'] ?>" <?php if ($activity == '1') echo 'hidden'; ?>>
        <button type="button" class="btn text-blue bg-transparent">
          <h6>Previous<br> Activity</h6>
          <a class="button float-none bg-transparent" style="width: 100px;" href="<?php $retVal = ($url_prev == '0') ? '#' : $url_prev;
                                                                                  echo $retVal; ?>">
            <img src="<?php echo base_url('public/img/' . $site . '/template/flecha_prev.png'); ?>" id="actv_prev" class="btn-sonido" style="width: 70px; height: 70px;  ">
          </a>
        </button>
      </div>
      <div class="col-md-<?php echo $colvideo['d'] ?>" <?php if ($url_next == '0') echo 'hidden'; ?>>
        <button type="button" class="btn text-blue bg-transparent">
          <h6>Next <br>Activity</h6>
          <a class="button float-none bg-transparent" style="width: 100px;" href="<?php echo $url_next; ?>">
            <img src="<?php echo base_url('public/img/' . $site . '/template/flecha_next.png'); ?>" id="actv_next" class="btn-sonido" style="width: 70px; height: 70px;  ">
          </a>
        </button>
        <br><br>
      </div>
      <div class="col-md-<?php echo $colvideo['e'] ?>">
        <div class="col-sm-10 direct-chat-text bg-blue"><?php echo 'PDF Activity  - Activity ' . $activity; ?></div>
      </div>
      <div class="col-md-<?php echo $colvideo['f'] ?>">
        <a href="<?php echo base_url('pdfs/' . $site); ?>"><img src="<?php echo base_url('public/img/' . $site . '/content/back_activities.png'); ?>"></a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-xl-12">
        <?php
        switch ($tipo) {
          case 'hvp':
            echo '<iframe class="embed-responsive-item" src="https://mdl.mundoeducativodigital.com/mod/hvp/embed.php?id=' . $objectId . '" width="900px" height="400px" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          case 'scorm':
            $ruta = 'public/scorm_' . $site . '/m' . $course . '/l' . $lesson . '/' . $lesson . '_' . $activity . '/index.html';
            echo '<iframe src="' . base_url($ruta) . '" class="embed-responsive-item" style="width: 900px;height:530px;"></iframe>';
            break;

          case 'resource':
            echo '<iframe src="' . $urlresource . '" width="900" height="580" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          default:
            # code...
            break;
        }
        ?>
      </div>
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