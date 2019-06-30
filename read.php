<!DOCTYPE html>
<html>
<head>
    <title>Al Qur'an - QuranQue</title>
    <meta charset="utf-8">
    <link rel="icon" type="img/x-icon" href="aset/image/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 user-scalable=no">
    <meta name="author" content="kelompok iii rpl 2019">
    <meta name="keyword" content="alquran,qur'an,koran,al-quran,baca quran,baca alquran">
    <meta name="description" content="dengan QuranQue membaca qur'an dengan mudah">
    <link rel="stylesheet" type="text/css" href="aset/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="aset/style.css">
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
<!--                     <ul class="navbar-nav nav-li-weedid ml-auto">
                        <li><a class="nav-link" href="ian.php">Indonesian</a></li>
                        <li><a class="nav-link" href="#">English</a></li>
                    </ul> -->
                </div>
            </nav>
            <div class="row">
                <div class="col-md-12 home-weedid text-center animated fadeInDownBig delay-1s">
                    <?php
                        include_once('fungsi/koneksi.php');
                        function show_quran($surat, $nama=''){  
                            mb_internal_encoding('UTF-8'); 
                            if (($surat < 1) || ($surat > 114)) exit; 
                            echo '<p align="left"><a href="ian2.php">Back to Suras List</a></p>';
                            echo '<h3>'.$nama.'</h3><hr><br/>';
                            if($surat > 1 && $surat != 9) {
                                echo '<p class ="arabic_center">'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
                                echo '<hr />'; 
                            }

                         
                            $data = database("SELECT A.text as arabic, B.text as english FROM ArabicQuran A LEFT OUTER JOIN en_yusufali B ON A.index=B.index WHERE A.surat = $surat");
                         
                            $ayat = 1;
                            foreach($data as $d){
                                    $str = mb_strtolower($d['arabic']);
                                echo '<p class ="arabic text-right">'. $str .' ﴿'.format_arabic_number($ayat).'﴾</p>';
                                echo '<p class ="latin text-left">'.'['.$ayat.'] '.$d['english'] .'</p>';
                                echo '<hr />'; 
                                $ayat++;
                            }

                            echo '<p align="right"><a href="index2.php">Back To Index</a></p>';
                        }
                    ?>
                </div>
            </div>
    </div>
                <section>
                    <div class="row row-padding-quote row-divider">
                        <div class="col-md-6 offset-md-3 text-center">
                            <h2>Tentang QuranQue</h2>
                            <p>QuranQue adalah Al Qur'an digital yang dibangun untuk memenuhi tugas mata kuliah Rekayasa Perangkat Lunak.</p>
                        </div>
                    </div>  
                </section>
                <section class="row row-divider">
                    <div class="col-md-6 offset-md-3 text-center">
                        <p><br>&copy; 2019 - QuranQue by Kelompok 3</p>
                </section>  

                </div>
    </body>
</html>