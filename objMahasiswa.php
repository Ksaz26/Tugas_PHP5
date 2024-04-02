<?php 
    require_once ('Mahasiswa.php');

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $kuliah = $_POST['kuliah'];
    $proses = $_POST['proses'];

    if ($nilai >= 85 && $nilai <=100)
         $grade= 'A';

    else if ($nilai >= 70 && $nilai <=84)
         $grade= 'B';
    
    else if ($nilai >= 69)
         $grade='C';
    
    else if ($nilai >= 60 && $nilai <=68) 
         $grade='D';
    
    else $grade='E';

    switch ($grade){
        case 'A':
            $predikat='Sangat Memuaskan';
            break;
            
        case 'B':
            $predikat='Memuaskan';
            break;

        case 'C':
            $predikat='Cukup';
            break;

        case 'D':
            $predikat='Kurang';
            break;

        case 'E':
            $predikat='Buruk';
            break;
        }

    $ns1 = new Mahasiswa($nim, $nama, $nilai , $kuliah, $mata_kuliah);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        background-repeat: no-repeat;
        background-size: 100%;
        background-image: url('https://e1.pxfuel.com/desktop-wallpaper/28/914/desktop-wallpaper-flowing-energy-elegant-blue-motion-dynamic-blue-stream-abstract-elegant-black-background.jpg');
    }
    #form_penilaian {
    background-color: #31363F;
    color: white;
    width: 44% ;
    left: 47%;
    top: 50%;
    margin-left: -20%;
    position: absolute;
    margin-top: -20%;
}
    #table_penilaian {
    width: 60% ;
    left: 40%;
    top: 50%;
    margin-left: -20%;
    position: absolute;
    margin-top: 5%;
}
</style>
</head>
<body>
<h1 align="center" style="color: white;">Form Penilaian Mahasiswa</h1>
<form action="#" id="form_penilaian" method="POST">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kuliah" class="col-4 col-form-label">Kuliah</label> 
    <div class="col-8">
      <select id="kuliah" name="kuliah" class="custom-select">
        <option value="">======Pilih Kampus======</option>
        <option value="Universitas Banten Jaya">Universitas Banten Jaya</option>
        <option value="Universitas Indonesia">Universitas Indonesia</option>
        <option value="Universitas Serang Raya">Universitas Serang Raya</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
        <option value="">======Pilih Matkul======</option>
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="PHP">PHP</option>
        <option value="LARAVEL">LARAVEL</option>
        <option value="JAVASCRIPT">JAVASCRIPT</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php if(isset($proses)){ ?>
<div id="table_penilaian">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Kuliah</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Nilai</th>
                <th scope="col">Grade</th>
                <th scope="col">Predikat</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody align="center">
         <?php
                echo '<tr>';
                echo '<td scope="row">', $ns1->nim ,'</td>';
                echo '<td>', $ns1->nama ,'</td>';
                echo '<td>', $ns1->kuliah ,'</td>';
                echo '<td>', $ns1->mata_kuliah,'</td>';
                echo '<td>', $ns1->nilai ,'</td>';
                echo '<td>', $grade,'</td>';
                echo '<td>', $predikat,'</td>';
                echo '<td>', $ns1->gethasil() ,'</td>';
                echo '</tr>';
         ?>
        </tbody>
    </table>
</div>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
