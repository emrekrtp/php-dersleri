<?php
$kategoriler = [
    "Programlama",
    "Web Geliştirme",
    "Mobil Uygulamalar",
    "Ofis Uygulamalar"
];
$kurslar = [
    [
        "id" => 1,
        "baslik" => "Web Geliştirme",
        "aciklama" => "guzel bir kurs",
        "resim" => "img/1.jpg",
        "onay" => true,
    ],
    [
        "id" => 2,
        "baslik" => "Python Kursu",
        "aciklama" => "guzel bir kurs",
        "resim" => "img/2.jpg",
        "onay" => true,
    ],
    [
        "id" => 3,
        "baslik" => "Javascript Kursu",
        "aciklama" => "guzel bir kurs",
        "resim" => "img/3.jpg",
        "onay" => false,
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="/" class="navbar-brand">CourseApp</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Kurslar</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container my-3">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
            <?php foreach($kategoriler as $kategori): ?>    
            <a href="#" class="list-group-item list-group-item-action">
                <?php echo $kategori; ?>
            </a>
            <?php endforeach; ?>    
            </div>
        </div>
            <div class="col-9">
                <?php foreach($kurslar as $kurs): ?>
                    <?php if($kurs["onay"]): ?>
                        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $kurs["resim"]; ?>" class="img-fluid rounded-start" alt="Web Geliştirme">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $kurs["baslik"]; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $kurs["aciklama"]; ?>
                        </p>
                    </div>
                </div>
            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
