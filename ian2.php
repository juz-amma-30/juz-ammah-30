<!DOCTYPE html>
<html>
<head>
    <title>Al Qur'an - Juz 'Amma</title>
    <meta charset="utf-8">
    <link rel="icon" type="img/x-icon" href="aset/image/Quran2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 user-scalable=no">
    <meta name="author" content="kelompok iii rpl 2019">
    <meta name="keyword" content="alquran,qur'an,koran,al-quran,baca quran,baca alquran">
    <meta name="description" content="dengan QuranQue membaca qur'an dengan mudah">
    <link rel="stylesheet" type="text/css" href="aset/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="aset/style.css">
    <link rel="stylesheet" type="text/css" href="aset/style-sura.css">
    <link rel="stylesheet" type="text/css" href="aset/js/animate/animate.min.css">
    <script type="text/javascript" src="aset/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="aset/js/popper.min.js"></script>
    <script type="text/javascript" src="aset/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script> 
</head>
    <body>
        <div class="wrap-container">
        <div class="container">
            <nav class="navbar navbar-weedid navbar-expand-sm navbar-light">
                <a href="#" class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menukita">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menukita">
                    <ul class="navbar-nav nav-li-weedid ml-auto">
                        <li><a class="nav-link" href="ian.php">Indonesia</a></li>
                        <li><a class="nav-link" href="#">English</a></li>
                    </ul>
                </div>
            </nav>
            </div>
            <div>
                <div class="container">
                <div class="col-md-12 home-weedid text-center">
                        <img src="aset/image/banner12.png" width="60%" />
                        <br><br>
                    </div>
                    <h3 style="margin-top: 10px;" class="surah-title text-center">THE SURAS</h3><hr>
                    <div class="col-md-6 offset-md-3 head-section text-center">
                            <?php
                            include_once('fungsi/koneksi.php');
                            function show_daftar(){
                            mb_internal_encoding('UTF-8'); 
                            $data = database("SELECT `index`, english, arabic, latin, ayah FROM quran_surah");
                            foreach($data as $d)
                                {
                                    echo 
                                    '
                                    <div class="list-group" style="padding-bottom:10px;">
                                    <a href="read.php?surat='.$d['index'].'&nama='.$d['latin'].'" class="list-group-item sura">
                                    <div class="row row-border animated fadeIn delay-2s">
                                    <div class="col-md-2 suraAngka">
                                    <div class="nomor-surah">'.$d['index'].'</div></div>
                                    <div class="col-md-6 suraList text-center"><div>'.$d['latin'].'</div>
                                    <div style="font-weight: normal;"><small>'.$d['english'].'</small></div></div>
                                    <div class="col-md-4 suraArab"><div class="sura-arabic">'.$d['arabic'].'</div>
                                    </div></div></a></div>';
                                }

                            }

                            ?>     
            <br><br>
            </div>
                
            </div>

        </div>
                    <section class="row row-divider">
                    <div class="col-md-6 offset-md-3 text-center">
                        <p><br>&copy; 2019 - Juz 'Amma HADINI BASNA 170170063</p>
                    </section>  
    </div>
</div>
    </body>
