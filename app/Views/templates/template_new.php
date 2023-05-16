<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OME courses</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/modules.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/grid.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- bootstrapTour -->
    <link href="bootstrap-tour.min.css" rel="stylesheet">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Montserrat:wght@600&display=swap"
        rel="stylesheet">

</head>

<body class="grid-container" id="bodySection"
    style="background-image: url(<?php echo base_url('public/img/' . $site . '/template/bcg_template.jpg'); ?>);">
    <!-- video background -->
    <?php
        if ($site == 'teens' || $site == 'kids') {
            echo '<video autoplay muted loop id="myVideo">';
            echo '<source src="' . base_url('public/img/' . $site . '/template/video_back.mp4') . '" type="video/mp4">';
            echo 'Your browser does not support HTML5 video.';
            echo '</video>';
        };
    ?>

    <div class="header">
        <div class="container-fluid">
            <div class="d-flex bd-highlight justify-content-between align-content-center mb-3">
                <div class="p-2 bd-highlight">
                    <a href="<?php echo base_url('courses/' . $site); ?>">
                        <img src="<?php echo base_url('public/img/' . $site . '/template/texto_logo.png'); ?>"
                            alt="AdminLTE Logo" class="logo-header">
                    </a>
                </div>
                <div class="p-2 bd-highlight" id="logo">
                    <a href="<?php echo base_url('auth/logout'); ?>">
                        <img src="<?php echo base_url('public/img/mdl_img/logout.svg'); ?>" alt="Logout"
                            class="logo-header">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <?php $clase = ($site == 'teens') ? 'rounded float-left' : ''; ?>
        <div class="mn_2">
            <a href="<?php echo base_url('pdfs/' . $site); ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_1.png'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="mn_3">
            <a href="<?php echo base_url('dict/' . $site);  ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_2.png'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <!-- <div class="mn_2">
            <a href="<?php echo base_url('music/' . $site);  ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_3.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="mn_3">
            <a href="<?php echo base_url('verbs/front/' . $site)  ?>" data-toggle="tooltip" data-placement="left"
                title="APRENDE ESTOS IMPORTANTES VERBOS">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_4.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div> -->
        <div class="mn_1">
            <a href="<?php echo base_url('tutorial/' . $site);  ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/menu_6.png'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
    </div>
    <div class="sidebar">
        <div class="sb_2">
            <a href="#" data-toggle="tooltip" data-placement="right"
                title="MUY PRONTO PODRÁS DESCARGAR TU CERTIFICADO DE PARTICIPACIÓN EN NUESTRO CURSO!">
                <img src="<?php echo base_url('public/img/' . $site . '/template/certificado.png'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <!-- <div class="sb_3">
            <a href="https://api.whatsapp.com/send/?phone=573228315698&text=Quiero+informacion+sobre+las+clases+personalizadas&app_absent=0"
                target="_blank" data-toggle="tooltip" data-placement="left" title="CLASES PERSONALIZADAS !">
                <img src="<?php echo base_url('public/img/' . $site . '/template/clases.svg'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div> -->
        <div class="sb_3">
            <a href="<?php echo base_url('faq/' . $site); ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/faq.png'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div class="sb_4">
            <a href="https://api.whatsapp.com/send/?phone=573228315698&text=Necesito+soporte+de+la+plataforma&app_absent=0"
                target="blank_">
                <img src="<?php echo base_url('public/img/' . $site . '/template/support.png'); ?>"
                    class="img-menu <?php echo $clase; ?>">
            </a>
        </div>
        <div id="soundDivision" class="sb_1 d-flex justify-content-center" data-placement="left"
            data-toggle="tooltip">
            <img id="soundImg" src="<?php echo base_url('public/img/' . $site . '/template/volume_off.png'); ?>" 
                class="btn-sonido" style="width: 70px; height: 70px;  ">
            <audio id="myAudio" allowfullscreen>
                <source src="<?php echo base_url('public/sound/' . $site . '/sound_body_rdc.mp3'); ?>"
                    type="audio/mpeg">
                Your browser does not support the audio element.
            </audio><br>
            <audio id="contentAudio" allowfullscreen>
                <source src="<?php echo base_url('public/sound/' . $site . '/sound_menu.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio><br>
            <audio id="menuAudio" allowfullscreen>
                <source src="<?php echo base_url('public/sound/' . $site . '/sound_content.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio><br>
        </div>
    </div>
    <div class="content">
        <div class="framezone" id="framezone">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper bg-transparent">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <img class="img-fluid" src="<?php //echo base_url('public/img/' . $site . '/template/bienvenidos.png'); 
                                                            ?>" alt="">
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Main content  -->
                <section class="content" id="contentSection">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <?php $this->renderSection('content'); 
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  /.content  -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <div class="navigation">
            <h6 hidden>nav</h6>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tourVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <p id="userVisits" hidden><?php echo $_SESSION['tourVisits'] ?></p>
                <div class="modal-body">
                    <p class="h5">Antes de empezar mira este importante video !</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">                        
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/XddolBGJqM4" title="Video introductorio Plataforma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('public/assets/dist/js/demo.js'); ?>"></script>
    <!-- JS Sound interaction -->
    <script src="<?php echo base_url('public/assets/sound/js/ome_sound.js'); ?>"></script>
    <!-- Bootstrap tour -->
    <script src="<?php echo base_url('public/assets/tour/js/bootstrap-tour.min.js'); ?>"></script>
    <!-- Bootstrap tour logic -->
    <script src="<?php echo base_url('public/assets/tour/js/ome_tour.js'); ?>"></script>
    <!-- Tour visits -->
    <script src="<?php echo base_url('public/assets/tour/js/tourVisit.js'); ?>"></script>
    <!-- fullscreen library -->
    <!-- <script src="<?php echo base_url('public/assets/fullscreen/js/fullScreen.js'); ?>"></script> -->
    <!-- background music  -->
    <script src="<?php echo base_url('public/assets/sound/js/backgroundmusic.js'); ?>"></script>
    <script>
        localStorage.setItem("bgMusicLogoOn", "<?php echo base_url('public/img/' . $site . '/template/volume_on.png'); ?>")    
        localStorage.setItem("bgMusicLogoOff", "<?php echo base_url('public/img/' . $site . '/template/volume_off.png'); ?>")    
        localStorage.setItem("getVisits", "<?php echo base_url('/users/getVisitsbyuser'); ?>")
        localStorage.setItem("setVisit", "<?php echo base_url('/users/setuservisit'); ?>")

        $(window).on('load', function () { 
            tourVisitsRegistered()
        })
    </script>

</body>

</html>