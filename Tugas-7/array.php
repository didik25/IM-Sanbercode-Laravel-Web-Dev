<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Jawaban Soal 1 </h3>";
    
        $trainer1 = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
        print_r($trainer1);
        $trainer2= ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
        print_r($trainer2)."<br>";

     

    echo "Total Nama Anak Yang belum Dewasa : " . count($trainer1)."<br>";
    echo "Total Nama Anak Yang Sudah Dewasa : " . count($trainer2)."<br>";
    
    echo "<h3> Jawaban Soal 2 </h3>";
 
        echo "Total Trainer : ". count($trainer1);
        echo "<ul>";
        echo "<li>" . $trainer1[0] . "</li>";
        echo "<li>" . $trainer1[1] . "</li>";
        echo "<li>" . $trainer1[2] . "</li>";
        echo "<li>" . $trainer1[3] . "</li>";
        echo "<li>" . $trainer1[4] . "</li>";
        echo "<li>" . $trainer1[5] . "</li>";
        echo "</ul>";

 echo "<h3>Jawaban Soal 3 </h3>";
        $arrayMulti = [
            ["id" => "001", "Nama" => "Surya", "Umur" => "19 Tahun", "Status" => "Pelajar"],
            ["id" => "002", "Nama" => "Dinu", "Umur" => "20 Tahun", "Status" => "Pelajar"],
            ["id" => "003", "Nama" => "Muhammad Faisal", "Umur" => "25 Tahun", "Status" => "Menikah"],
            ["id" => "004", "Nama" => "Rio", "Umur" => "21 Tahun", "Status" => "Mahasiswa"],
            ["id" => "004", "Nama" => "Rio", "Umur" => "28 Tahun", "Status" => "Menikah"],
        ];
            echo "<pre>";
            print_r($arrayMulti);
            echo "</pre>";

  
  ?>
</body>

</html>