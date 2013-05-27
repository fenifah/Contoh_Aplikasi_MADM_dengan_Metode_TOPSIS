<p>
Suatu perusahaan di Daerah Istimewa Yogyakarta 
(DIY) ingin membangun sebuah gudang yang akan 
digunakan sebagai tempat untuk menyimpan 
sementara hasil produksinya. 
Ada 3 lokasi yang akan menjadi alternatif, yaitu: 
<ul>
<li>A1 = Ngemplak,</li> 
<li>A2 = Kalasan, </li>
<li>A3 = Kota Gedhe. </li>
</ul>
</p>
<form method="post">
    <h2 align="center">Aplikasi MADM dengan Metode TOPSIS untuk Kasus Pemilihan Lokasi Gudang</h2>
    <a href="index.php?page=data"><h4>Lihat Data</h4></a>
    <table align="center" border="1">
        <tr style="background-color: greenyellow">
            <th rowspan="2">Alternantif</th>
            <th colspan="5">Kriteria</th>
        </tr>
        <tr style="background-color: greenyellow">
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
        </tr>
        <tr style="background-color: yellow">
            <td align="center">A1</td>
            <td><input type="text" class="inputan" name="a1c1"/></td>
            <td><input type="text" class="inputan" name="a1c2"/></td>
            <td><input type="text" class="inputan" name="a1c3"/></td>
            <td><input type="text" class="inputan" name="a1c4"/></td>
            <td><input type="text" class="inputan" name="a1c5"/></td>
        </tr>
        <tr style="background-color: yellow">
            <td align="center">A2</td>
            <td><input type="text" class="inputan" name="a2c1"/></td>
            <td><input type="text" class="inputan" name="a2c2"/></td>
            <td><input type="text" class="inputan" name="a2c3"/></td>
            <td><input type="text" class="inputan" name="a2c4"/></td>
            <td><input type="text" class="inputan" name="a2c5"/></td>
        </tr>
        <tr style="background-color: yellow">
            <td align="center">A3</td>
            <td><input type="text" class="inputan" name="a3c1"/></td>
            <td><input type="text" class="inputan" name="a3c2"/></td>
            <td><input type="text" class="inputan" name="a3c3"/></td>
            <td><input type="text" class="inputan" name="a3c4"/></td>
            <td><input type="text" class="inputan" name="a3c5"/></td>
        </tr>
        <tr style="background-color:yellowgreen">
            <td align="center">Type</td>
            <td>
                <input type="radio" name="type1" value="benefit"/>Benefit<br/>
                <input type="radio" name="type1" value="cost"/>Cost
            </td>
            <td>
                <input type="radio" name="type2" value="benefit"/>Benefit<br/>
                <input type="radio" name="type2" value="cost"/>Cost
            </td>
            <td>
                <input type="radio" name="type3" value="benefit"/>Benefit<br/>
                <input type="radio" name="type3" value="cost"/>Cost
            </td>
            <td>
                <input type="radio" name="type4" value="benefit"/>Benefit<br/>
                <input type="radio" name="type4" value="cost"/>Cost
            </td>
            <td>
                <input type="radio" name="type5" value="benefit"/>Benefit<br/>
                <input type="radio" name="type5" value="cost"/>Cost
            </td>
        </tr>
    </table><br/>
    <div style="padding:5px;background-color:orange">
    <ul class="samping">
        <li><div class="wwww">W1= <input type="text" name="w1"/></div></li>
        <li><div class="wwww">W2= <input type="text" name="w2"/></div></li>
        <li><div class="wwww">W3= <input type="text" name="w3"/></div></li>
        <li><div class="wwww">W4= <input type="text" name="w4"/></div></li>
        <li><div class="wwww">W5= <input type="text" name="w5"/></div></li>
        <div style="clear: both"></div>
    </ul>
    </div>
<br/>
      <center><input name="proses" style="padding: 5px;width: 200px;height: 70px;font-size: 20pt" type="submit" value="Simpan"/></center>
</form>
<?php
if (isset($_POST['proses'])) {
    mysql_query("insert into data 
                        (
                        
                        a1c1,
                        a1c2,
                        a1c3,
                        a1c4,
                        a1c5,
                        
                        a2c1,
                        a2c2,
                        a2c3,
                        a2c4,
                        a2c5,
                        
                        a3c1,
                        a3c2,
                        a3c3,
                        a3c4,
                        a3c5,
                        
                        w1,
                        w2,
                        w3,
                        w4,
                        w5,

                        typec1,
                        typec2,
                        typec3,
                        typec4,
                        typec5
                        
                        )
                        values 
                        
                        (
                        '$_POST[a1c1]',
                        '$_POST[a1c2]',
                        '$_POST[a1c3]',
                        '$_POST[a1c4]',
                        '$_POST[a1c5]',
                        
                        '$_POST[a2c1]',
                        '$_POST[a2c2]',
                        '$_POST[a2c3]',
                        '$_POST[a2c4]',
                        '$_POST[a2c5]',
                        
                        '$_POST[a3c1]',
                        '$_POST[a3c2]',
                        '$_POST[a3c3]',
                        '$_POST[a3c4]',
                        '$_POST[a3c5]',
                        
                        '$_POST[w1]',
                        '$_POST[w2]',
                        '$_POST[w3]',
                        '$_POST[w4]',
                        '$_POST[w5]',

                        '$_POST[type1]',
                        '$_POST[type2]',
                        '$_POST[type3]',
                        '$_POST[type4]',
                        '$_POST[type5]'
                        )
                        ");
    echo '<script>alert("Data Berhasil di Simpan")</script>';
    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php?page=data">';
}
?>