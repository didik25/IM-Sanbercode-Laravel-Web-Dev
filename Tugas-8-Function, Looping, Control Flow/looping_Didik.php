<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 
            dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini
        echo "<h3>JAWABAN SOAL NO 1</h3>";

        echo "<p>LOOPING PERTAMA</p>";    
        $ulangi = 1;

        while($ulangi < 10){
            echo "<p>I LOVE PHP-$ulangi</p>";
            $ulangi++;
        }
        echo "<p>LOOPING KEDUA</p>";  
        $balik = 10;

        do {
            echo "<p>I LOVE PHP-$balik</p>";
            $balik--;
        } while ($balik > 1);

        echo "<h3>JAWABAN SOAL NO 2</h3>";
         // $numbers = [18, 45, 29, 61, 47, 34];
                        echo "<p>Bilangan Array 18</p>";
                        $bilangan=18;
                        $hasil =  intval($bilangan / 2);
                        $sisa = $bilangan % 2;
                        echo "$bilangan/2 = $hasil Array Sisa Baginya Adalah $sisa <br>";
                        $tmphasil=$hasil;
                        $tmpsisa=$sisa;
                        $stsisa=(string)$sisa;
                        do{
                            $hasil=$tmphasil;
                            $sisa=$tmpsisa;
                            $tmphasil=intval($hasil / 2);
                            $tmpsisa=$hasil % 2;
                            echo "$hasil/2 = $tmphasil sisa : $tmpsisa<br>";
                            $stsisa=$stsisa.(string)$tmpsisa;
                        }
                        while ($tmphasil!=0);
                        echo "<p>Bilangan Array 45</p>";
                          $bilangan=45;
                        $hasil =  intval($bilangan / 2);
                        $sisa = $bilangan % 2;
                        echo "$bilangan/2 = $hasil Array Sisa Baginya Adalah $sisa <br>";
                        $tmphasil=$hasil;
                        $tmpsisa=$sisa;
                        $stsisa=(string)$sisa;
                        do{
                            $hasil=$tmphasil;
                            $sisa=$tmpsisa;
                            $tmphasil=intval($hasil / 2);
                            $tmpsisa=$hasil % 2;
                            echo "$hasil/2 = $tmphasil sisa : $tmpsisa<br>";
                            $stsisa=$stsisa.(string)$tmpsisa;
                        }
                        while ($tmphasil!=0);
                        echo "<p>Bilangan Array 29</p>";
                          $bilangan=29;
                        $hasil =  intval($bilangan / 2);
                        $sisa = $bilangan % 2;
                        echo "$bilangan/2 = $hasil Array Sisa Baginya Adalah $sisa <br>";
                        $tmphasil=$hasil;
                        $tmpsisa=$sisa;
                        $stsisa=(string)$sisa;
                        do{
                            $hasil=$tmphasil;
                            $sisa=$tmpsisa;
                            $tmphasil=intval($hasil / 2);
                            $tmpsisa=$hasil % 2;
                            echo "$hasil/2 = $tmphasil sisa : $tmpsisa<br>";
                            $stsisa=$stsisa.(string)$tmpsisa;
                        }
                        while ($tmphasil!=0);
                        echo "<p>Bilangan Array 61</p>";
                          $bilangan=61;
                        $hasil =  intval($bilangan / 2);
                        $sisa = $bilangan % 2;
                        echo "$bilangan/2 = $hasil Array Sisa Baginya Adalah $sisa <br>";
                        $tmphasil=$hasil;
                        $tmpsisa=$sisa;
                        $stsisa=(string)$sisa;
                        do{
                            $hasil=$tmphasil;
                            $sisa=$tmpsisa;
                            $tmphasil=intval($hasil / 2);
                            $tmpsisa=$hasil % 2;
                            echo "$hasil/2 = $tmphasil sisa : $tmpsisa<br>";
                            $stsisa=$stsisa.(string)$tmpsisa;
                        }
                        while ($tmphasil!=0);
                        echo "<p>Bilangan Array 47</p>";
                          $bilangan=47;
                        $hasil =  intval($bilangan / 2);
                        $sisa = $bilangan % 2;
                        echo "$bilangan/2 = $hasil Array Sisa Baginya Adalah $sisa <br>";
                        $tmphasil=$hasil;
                        $tmpsisa=$sisa;
                        $stsisa=(string)$sisa;
                        do{
                            $hasil=$tmphasil;
                            $sisa=$tmpsisa;
                            $tmphasil=intval($hasil / 2);
                            $tmpsisa=$hasil % 2;
                            echo "$hasil/2 = $tmphasil sisa : $tmpsisa<br>";
                            $stsisa=$stsisa.(string)$tmpsisa;
                        }
                        while ($tmphasil!=0);
                        echo "<p>Bilangan Array 34</p>";
                          $bilangan=34;
                        $hasil =  intval($bilangan / 2);
                        $sisa = $bilangan % 2;
                        echo "$bilangan/2 = $hasil Array Sisa Baginya Adalah $sisa <br>";
                        $tmphasil=$hasil;
                        $tmpsisa=$sisa;
                        $stsisa=(string)$sisa;
                        do{
                            $hasil=$tmphasil;
                            $sisa=$tmpsisa;
                            $tmphasil=intval($hasil / 2);
                            $tmpsisa=$hasil % 2;
                            echo "$hasil/2 = $tmphasil sisa : $tmpsisa<br>";
                            $stsisa=$stsisa.(string)$tmpsisa;
                        }
                        while ($tmphasil!=0);
        echo "<h3>JAWABAN SOAL NO 3</h3>";
        $array = [

                        ["id" => 001, "name" => "Keyboard Logitek", "price" => "60000", "description" => "Mouse yang Mantap Buat Kantor", "source" => "logitek.jpeg"],
                        ["id" => 002, "name" => "Mouse MSI", "price" => "30000", "description" => "Keyboard Gaming MSI Mekanik", "source" => "msi.jpeg"],
                        ["id" => 003, "name" => "Mouse Genius", "price" => "50000", "description" => "Mouse Genius Lebih Pintar", "source" => "genius.jpeg"],
                        ["id" => 004, "name" => "Keyboard MSI", "price" => "30000", "description" => "Mouse yang disukai kucing", "source" => "jerry.jpeg"],
                    ];
        
                        
                        echo "<pre>";
                        print_r($array);
                        echo "</pre>";

        
       echo "<h3>JAWABAN SOAL NO 4</h3>";
                        $bintang=5;
                        for($a=$bintang;$a>0;$a--){
                        for($b=$bintang;$b>=$a;$b--){
                            echo "*";
                        }
                        echo "<br>";
                        }

     ?>  

</body>
</html>

<!-- SOAL -->

        <!-- echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
            Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

            Jangan ubah variabel $items

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
            
        
        // Output: 
        
        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";         -->
    <!-- ?> -->