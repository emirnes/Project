<?php
$url = "https://api.football-data-api.com/league-tables?key=test85g57&league_id=1625";
$json = file_get_contents($url);

$league = json_decode($json,true);
$league = $league['data']['all_matches_table_away'];

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkında</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark"  navbar-fixed-top>
        <a href="mainPage.html" class="navbar-brand">Hakkında</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ">      
                <a href="index.php" class="nav-item nav-link">İlgi Alanlarım</a>
                <a href="miras.html" class="nav-item nav-link">Mirasımız</a>
                <a href="iletisim.html" class="nav-item nav-link">İletişim</a>
                <a href="sehir.html" class="nav-item nav-link">Şehrim</a>
                <a href="login.html" class="nav-item nav-link">Giriş Yap</a>
            </div>
            
        </div>
    </nav>
</head>

<body style="background-image: url('https://images.webapi.gc.avfcservices.co.uk/20fce1c1-4fc1-407b-95d3-abb72b2d199a.png')">
    

<div class="container" >
  <div class="row">
    <div class="col-sm container-sm p-3 mb-2 bg-secondary text-white mt-5 mr-5 ">
    <h1> Premier League 2018/2019 İç Saha Tablosu</h1>

<table class="table">
    <thead>
        <tr>
         <th>Pozisyon</th>
         <th>Takım</th>
         <th>Oynanan Maç</th>
         <th>Galibiyet</th>
         <th>Beraberlik</th>
         <th>Mağlubiyet</th>
         <th>Puan</th>
        </tr>
    </thead>
    <tbody>
        <tbody>
            <?php foreach($league as $key => $team): ?>
                <tr>
                    <td><?php echo $team['position']; ?></td>
                    <td><?php echo $team['name']; ?></td>
                    <td><?php echo $team['matchesPlayed']; ?></td>
                    <td><?php echo $team['seasonWins']; ?></td>
                    <td><?php echo $team['seasonDraws']; ?></td>
                    <td><?php echo $team['seasonLosses_away']; ?></td>
                    <td><?php echo $team['points']; ?></td>
                </tr>
            <?php endforeach ?>    
        </tbody>
    </tbody>
</table>
    </div>
    <div class="col-sm mt-5 ml-5 ">
      <<p class="fs-3 text-light">Premier Lig, İngiliz futbol ligleri arasında en üst klasman ligidir.</p>
      <<p class="fs-3 text-light">İngiltere’nin en büyük 20 takımının mücadele ettiği futbol ligi olma özelliğini de haiz olan bu organizasyon dünya futbol tarihinin en eski ligi olarak da bilinmektedir. 20 kulübün mücadele ettiği İngiltere Premier Ligi’nde herhangi bir play-off sistemi bulunmamaktadır.</p>
      <<p class="fs-3 text-light">20 takımın yer aldığı ligde, takımlar birbirleri ile toplamda iki kez eşleşmekte ve 38 hafta sonucu ligi zirvede bitiren takım şampiyonluk unvanın sahibi olmakla beraber UEFA’nın bir numaralı organizasyonu olan UEFA Şampiyonlar Ligi’ne de doğrudan katılma hakkı elde etmektedir. İngiltere Premier Ligi, dünyada başka bir ülkenin de takımlarının mücadele verdiği tek lig olma özelliğini de taşımaktadır. İngiltere Premier Ligi’nde İngiliz takımlarının yanı sıra, Galler takımları da mücadele edebilmektedir.</p>
    </div>
  </div>
</div>

</body>

