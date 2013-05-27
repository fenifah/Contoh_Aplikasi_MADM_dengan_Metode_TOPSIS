<?php

//start rumus cari R
$jumlahPangkatC1 = sqrt(($isiDataSingle['a1c1'] * $isiDataSingle['a1c1']) + ($isiDataSingle['a2c1'] * $isiDataSingle['a2c1']) + ($isiDataSingle['a3c1'] * $isiDataSingle['a3c1']));
$jumlahPangkatC2 = sqrt(($isiDataSingle['a1c2'] * $isiDataSingle['a1c2']) + ($isiDataSingle['a2c2'] * $isiDataSingle['a2c2']) + ($isiDataSingle['a3c2'] * $isiDataSingle['a3c2']));
$jumlahPangkatC3 = sqrt(($isiDataSingle['a1c3'] * $isiDataSingle['a1c3']) + ($isiDataSingle['a2c3'] * $isiDataSingle['a2c3']) + ($isiDataSingle['a3c3'] * $isiDataSingle['a3c3']));
$jumlahPangkatC4 = sqrt(($isiDataSingle['a1c4'] * $isiDataSingle['a1c4']) + ($isiDataSingle['a2c4'] * $isiDataSingle['a2c4']) + ($isiDataSingle['a3c4'] * $isiDataSingle['a3c4']));
$jumlahPangkatC5 = sqrt(($isiDataSingle['a1c5'] * $isiDataSingle['a1c5']) + ($isiDataSingle['a2c5'] * $isiDataSingle['a2c5']) + ($isiDataSingle['a3c5'] * $isiDataSingle['a3c5']));
//end   rumus cari R
//
        //start fungsi Y min max
$y1a = $isiDataSingle['a1c1'] / $jumlahPangkatC1 * $isiDataSingle['w1'];
$y1b = $isiDataSingle['a2c1'] / $jumlahPangkatC1 * $isiDataSingle['w1'];
$y1c = $isiDataSingle['a3c1'] / $jumlahPangkatC1 * $isiDataSingle['w1'];
$y2a = $isiDataSingle['a1c2'] / $jumlahPangkatC2 * $isiDataSingle['w2'];
$y2b = $isiDataSingle['a2c2'] / $jumlahPangkatC2 * $isiDataSingle['w2'];
$y2c = $isiDataSingle['a3c2'] / $jumlahPangkatC2 * $isiDataSingle['w2'];
$y3a = $isiDataSingle['a1c3'] / $jumlahPangkatC3 * $isiDataSingle['w3'];
$y3b = $isiDataSingle['a2c3'] / $jumlahPangkatC3 * $isiDataSingle['w3'];
$y3c = $isiDataSingle['a3c3'] / $jumlahPangkatC3 * $isiDataSingle['w3'];
$y4a = $isiDataSingle['a1c4'] / $jumlahPangkatC4 * $isiDataSingle['w4'];
$y4b = $isiDataSingle['a2c4'] / $jumlahPangkatC4 * $isiDataSingle['w4'];
$y4c = $isiDataSingle['a3c4'] / $jumlahPangkatC4 * $isiDataSingle['w4'];
$y5a = $isiDataSingle['a1c5'] / $jumlahPangkatC5 * $isiDataSingle['w5'];
$y5b = $isiDataSingle['a2c5'] / $jumlahPangkatC5 * $isiDataSingle['w5'];
$y5c = $isiDataSingle['a3c5'] / $jumlahPangkatC5 * $isiDataSingle['w5'];

//variabel type
$type1=$isiDataSingle['typec1'];
$type2=$isiDataSingle['typec2'];
$type3=$isiDataSingle['typec3'];
$type4=$isiDataSingle['typec4'];
$type5=$isiDataSingle['typec5'];

//kriteria 1
if ($isiDataSingle['typec1']=="cost"){

    $statusy1="min";
    $status2y1="max";
    

    //y1
    if ($y1a < $y1b && $y1a < $y1c) {
        $y1 = $y1a;
    } else if ($y1b < $y1a && $y1b < $y1c) {
        $y1 = $y1b;
    } else if ($y1c < $y1a && $y1c < $y1b) {
        $y1 = $y1c;
    }
    //y1m
    if ($y1a > $y1b && $y1a > $y1c) {
        $y1m = $y1a;
    } else if ($y1b > $y1a && $y1b > $y1c) {
        $y1m = $y1b;
    } else if ($y1c > $y1a && $y1c > $y1b) {
        $y1m = $y1c;
    }
    
    

    
    
} else if ($isiDataSingle['typec1']=="benefit"){
    $statusy1="max";
    $status2y1="min";
   
    //y1
    if ($y1a > $y1b && $y1a > $y1c) {
        $y1 = $y1a;
    } else if ($y1b > $y1a && $y1b > $y1c) {
        $y1 = $y1b;
    } else if ($y1c > $y1a && $y1c > $y1b) {
        $y1 = $y1c;
    }
    //y1m
    if ($y1a < $y1b && $y1a < $y1c) {
        $y1m = $y1a;
    } else if ($y1b < $y1a && $y1b < $y1c) {
        $y1m = $y1b;
    } else if ($y1c < $y1a && $y1c < $y1b) {
        $y1m = $y1c;
    }

    
    
    
   
}

if ($isiDataSingle['typec2']=="cost"){
    $statusy2="min";
    $status2y2="max";
    if ($y2a < $y2b && $y2a < $y2c) {
        $y2 = $y2a;
    } else if ($y2b < $y2a && $y2b < $y2c) {
        $y2 = $y2b;
    } else if ($y2c < $y2a && $y2c < $y2b) {
        $y2 = $y2c;
    }
    if ($y2a > $y2b && $y2a > $y2c) {
        $y2m = $y2a;
    } else if ($y2b > $y2a && $y2b > $y2c) {
        $y2m = $y2b;
    } else if ($y2c > $y2a && $y2c > $y2b) {
        $y2m = $y2c;
    }
} else if ($isiDataSingle['typec2']=="benefit"){
    $statusy2="max";
    $status2y2="min";
    if ($y2a > $y2b && $y2a > $y2c) {
        $y2 = $y2a;
    } else if ($y2b > $y2a && $y2b > $y2c) {
        $y2 = $y2b;
    } else if ($y2c > $y2a && $y2c > $y2b) {
        $y2 = $y2c;
    }

    if ($y2a < $y2b && $y2a < $y2c) {
        $y2m = $y2a;
    } else if ($y2b < $y2a && $y2b < $y2c) {
        $y2m = $y2b;
    } else if ($y2c < $y2a && $y2c < $y2b) {
        $y2m = $y2c;
    }
}

if ($isiDataSingle['typec3']=="cost"){
    $statusy3="min";
    $status2y3="max";
    if ($y3a < $y3b && $y3a < $y3c) {
        $y3 = $y3a;
    } else if ($y3b < $y3a && $y3b < $y3c) {
        $y3 = $y3b;
    } else if ($y3c < $y3a && $y3c < $y3b) {
        $y3 = $y3c;
    }

    if ($y3a > $y3b && $y3a > $y3c) {
        $y3m = $y3a;
    } else if ($y3b > $y3a && $y3b > $y3c) {
        $y3m = $y3b;
    } else if ($y3c > $y3a && $y3c > $y3b) {
        $y3m = $y3c;
    }
} else if ($isiDataSingle['typec3']=="benefit"){
    $statusy3="max";
    $status2y3="min";
    if ($y3a > $y3b && $y3a > $y3c) {
        $y3 = $y3a;
    } else if ($y3b > $y3a && $y3b > $y3c) {
        $y3 = $y3b;
    } else if ($y3c > $y3a && $y3c > $y3b) {
        $y3 = $y3c;
    }
    if ($y3a < $y3b && $y3a < $y3c) {
        $y3m = $y3a;
    } else if ($y3b < $y3a && $y3b < $y3c) {
        $y3m = $y3b;
    } else if ($y3c < $y3a && $y3c < $y3b) {
        $y3m = $y3c;
    }

}

if ($isiDataSingle['typec4']=="cost"){
    $statusy4="min";
    $status2y4="max";
    if ($y4a < $y4b && $y4a < $y4c) {
        $y4 = $y4a;
    } else if ($y4b < $y4a && $y4b < $y4c) {
        $y4 = $y4b;
    } else if ($y4c < $y4a && $y4c < $y4b) {
        $y4 = $y4c;
    }
    if ($y4a > $y4b && $y4a > $y4c) {
        $y4m = $y4a;
    } else if ($y4b > $y4a && $y4b > $y4c) {
        $y4m = $y4b;
    } else if ($y4c > $y4a && $y4c > $y4b) {
        $y4m = $y4c;
    }
} else if ($isiDataSingle['typec4']=="benefit"){
    $statusy4="max";
    $status2y4="min";
    if ($y4a > $y4b && $y4a > $y4c) {
        $y4 = $y4a;
    } else if ($y4b > $y4a && $y4b > $y4c) {
        $y4 = $y4b;
    } else if ($y4c > $y4a && $y4c > $y4b) {
        $y4 = $y4c;
    }

    if ($y4a < $y4b && $y4a < $y4c) {
        $y4m = $y4a;
    } else if ($y4b < $y4a && $y4b < $y4c) {
        $y4m = $y4b;
    } else if ($y4c < $y4a && $y4c < $y4b) {
        $y4m = $y4c;
    }
}

if ($isiDataSingle['typec5']=="cost"){
    $statusy5="min";
    $status2y5="max";
    if ($y5a < $y5b && $y5a < $y5c) {
        $y5 = $y5a;
    } else if ($y5b < $y5a && $y5b < $y5c) {
        $y5 = $y5b;
    } else if ($y5c < $y5a && $y5c < $y5b) {
        $y5 = $y5c;
    }

    if ($y5a > $y5b && $y5a > $y5c) {
        $y5m = $y5a;
    } else if ($y5b > $y5a && $y5b > $y5c) {
        $y5m = $y5b;
    } else if ($y5c > $y5a && $y5c > $y5b) {
        $y5m = $y5c;
    }

} else if ($isiDataSingle['typec5']=="benefit"){
    $statusy5="max";
    $status2y5="min";
     if ($y5a > $y5b && $y5a > $y5c) {
        $y5 = $y5a;
    } else if ($y5b > $y5a && $y5b > $y5c) {
        $y5 = $y5b;
    } else if ($y5c > $y5a && $y5c > $y5b) {
        $y5 = $y5c;
    }
    if ($y5a < $y5b && $y5a < $y5c) {
        $y5m = $y5a;
    } else if ($y5b < $y5a && $y5b < $y5c) {
        $y5m = $y5b;
    } else if ($y5c < $y5a && $y5c < $y5b) {
        $y5m = $y5c;
    }
}
//end   fungsi Y min max
//
        //start fungsi D
$d1 = sqrt((($y1 - $y1a) * ($y1 - $y1a)) + (($y2 - $y2a) * ($y2 - $y2a)) + (($y3 - $y3a) * ($y3 - $y3a)) + (($y4 - $y4a) * ($y4 - $y4a)) + (($y5 - $y5a) * ($y5 - $y5a)));
$d2 = sqrt((($y1 - $y1b) * ($y1 - $y1b)) + (($y2 - $y2b) * ($y2 - $y2b)) + (($y3 - $y3b) * ($y3 - $y3b)) + (($y4 - $y4b) * ($y4 - $y4b)) + (($y5 - $y5b) * ($y5 - $y5b)));
$d3 = sqrt((($y1 - $y1c) * ($y1 - $y1c)) + (($y2 - $y2c) * ($y2 - $y2c)) + (($y3 - $y3c) * ($y3 - $y3c)) + (($y4 - $y4c) * ($y4 - $y4c)) + (($y5 - $y5c) * ($y5 - $y5c)));

$d1m = sqrt((($y1m - $y1a) * ($y1m - $y1a)) + (($y2m - $y2a) * ($y2m - $y2a)) + (($y3m - $y3a) * ($y3m - $y3a)) + (($y4m - $y4a) * ($y4m - $y4a)) + (($y5m - $y5a) * ($y5m - $y5a)));
$d2m = sqrt((($y1m - $y1b) * ($y1m - $y1b)) + (($y2m - $y2b) * ($y2m - $y2b)) + (($y3m - $y3b) * ($y3m - $y3b)) + (($y4m - $y4b) * ($y4m - $y4b)) + (($y5m - $y5b) * ($y5m - $y5b)));
$d3m = sqrt((($y1m - $y1c) * ($y1m - $y1c)) + (($y2m - $y2c) * ($y2m - $y2c)) + (($y3m - $y3c) * ($y3m - $y3c)) + (($y4m - $y4c) * ($y4m - $y4c)) + (($y5m - $y5c) * ($y5m - $y5c)));
//end   fungsi D
//
        //start fungsi hasil
$v1 = $d1m / ($d1 + $d1m);
$v2 = $d2m / ($d2 + $d2m);
$v3 = $d3m / ($d3 + $d3m);
if ($v1 > $v2 && $v1 > $v3) {
    $hasil = $v1;
    $alternatif = "Pertama";
} else if ($v2 > $v1 && $v2 > $v3) {
    $hasil = $v2;
    $alternatif = "Kedua";
} else if ($v3 > $v1 && $v3 > $v2) {
    $hasil = $v3;
    $alternatif = "Ketiga";
}
//end   fungsi hasil
?>