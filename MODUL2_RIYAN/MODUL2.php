<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanggar Tari Bandung - Pilih Kelas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- buat logika php disini -->
     <?php
     if ($_POST) {
        $usia = $_POST["age"];
        $jenis_kelamin = $_POST["gender"];
     }

      $hasil='';
     
     if ($jenis_kelamin = "male") {
     }
        if ($usia <= 5){
            $hasil = "Anak - anak";
        } elseif ($usia <= 11 && $usia >= 17){
            $hasil = "Remaja";
        } elseif ($usia <= 18){
            $hasil = "Dewasa";
        }
        
    if ($jenis_kelamin = "female") {
    }
        if ($usia <= 6){
            $hasil = "Anak - anak";
        } elseif ($usia <= 12 && $usia >= 20){
            $hasil = "Remaja";
        } elseif ($usia <= 21){
            $hasil = "Dewasa";
        }    
    ?>

</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sistem Pemilihan Kelas Tari</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Masukkan Usia Anda
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="age" class="form-label">Usia</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="gender" >
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Cek Kelas</button>
                        </form>
                        <div class="mt-3">
                            <!-- Pesan atau hasil dapat ditampilkan di sini -->
                            <?= $hasil?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
    </body>
</html>