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
                        <li><a class="nav-link" href="#">Indonesia</a></li>
                        <li><a class="nav-link" href="index2.php">English</a></li>
                    </ul> -->
                </div>
            </nav>
            <div class="container">
            <div class="row">
                <div class="col-md-12 home-weedid text-center animated fadeInDownBig delay-1s">
                    <div style="padding-left: 0%; padding-right: 0%;">
                    <?php
                        include_once('fungsi/koneksi.php');
                        function show_quran($surat, $nama=''){  
                            mb_internal_encoding('UTF-8'); 
                            if (($surat < 1) || ($surat > 114)) exit; 
                            echo '<p align="left"><a href="ian.php">Kembali ke Daftar Surah</a></p>';
                            echo '<h3>'.$nama.'</h3><hr><br/>';
                            if($surat > 1 && $surat != 9) {
                                echo '<p class ="arabic_center">'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
                                echo '<hr />'; 
                            }

                         
                            $data = database("SELECT A.text as arabic, B.text as indonesia FROM ArabicQuran A LEFT OUTER JOIN IndonesianQuran B ON A.index=B.index WHERE A.surat = $surat");
                         
                            $ayat = 1;
                            foreach($data as $d){
                                    $str = mb_strtolower($d['arabic']);
                                    if (($surat >= 11) && ($surat != 27))
                {
                //hilangkan bismillah...
                $search  = array('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ');
                $replace = array('');       
                $str2 = str_replace($search, $replace, $str);
                }
            else
                {
                $str2 = $str;                   
                }
                                echo '<p class ="arabic text-right">'. $str2 .' ﴿'.format_arabic_number($ayat).'﴾</p>';
                                echo '<p class ="latin text-left">'.'['.$ayat.'] '.$d['indonesia'] .'</p>';
                                echo '<hr />'; 
                                $ayat++;
                            }

                            echo '<p align="right"><a href="index.php">Kembali ke Index</a></p>';
                        }
                    ?>
                </div>
            </div>
            </div>
    </div>
    </div>
                        <footer class="page-footer font-small bg-info text-light">
                            <div class="footer-copyright text-center py-2">
                        <p><br>&copy; 2019 - Juz 'Amma HADINI BASNA 170170063</p>
                            </div>
                        </footer>

        </div>
    </div>
    </body>
</html>