<?php 
$current_page = "index.php";

$title = "Тимошин Никита Игоревич, Группа 211-362, Лабораторная работа №3";
date_default_timezone_set("Europe/Moscow");
$date = date("d.m.y");  
$time = date("h:m:s"); 

$isEven = (int) date("s") % 2;

if ($isEven == 0) {
  $main_pic = "../assets/main.png";
} else {
  $main_pic = "../assets/other_main.png";
}

$array = ['<div class="album">
<a class="album-title" name="warlord">Warlord (2016)</a>
<div class="album-container">
  <img src="../assets/warlord_album.png">
  <div>
    <p>
      In short, <span class="colored">Warlord</span> is unhinged. This album was
      produced in the midst of manic hallucinations
      and spells of chaos that eventually sent Lean to
      the mental hospital.
    </p>
    <p>
      Despite the chaotic energy that is prevalent on
      the album, Warlord maintains balance. The synthesis
      is a timeless album that I consider to be Lean’s
      best work.
    </p>
    <p>
      Songs that are worth checking out in
      particular include the wrathful “Hoover”, the
      unearthly “Miami Ultras”, and magical “Pearl Fountain”.
    </p>
  </div>
</div>
</div>', '<div class="album">
<a class="album-title" name="starz">Starz (2020)</a>
<div class="album-container">
  <img src="../assets/starz_album.png">
  <div>
    <p>
      <span class="colored">Starz</span> is arguably Yung Lean’s most cohesive work
      to date. The sixteen song album is sinister in tone,
      like a slow fog creeping into the bay. As the album
      progresses however, you can feel a shift where Lean
      finds liberation in the darkness rather than being
      consumed by it like he once was.
    </p>
    <p>
      Some of the notable songs from
      this project include “Violence” and the opening
      track “My Agenda”. What holds this album back in
      terms of ranking has more to do with exemplary
      features of Lean’s other work and less to do with
      flaws within Starz.
    </p>
  </div>
</div>
</div>', '<div class="album">
<a class="album-title" name="unknownmemory">Unknown Memory (2014)</a>
<div class="album-container">
  <img src="../assets/memory_album.png">
  <div>
    <p>
      <span class="colored">Unknown Memory</span> is the closest thing I can imagine
      to being trapped in a futuristic fighting video
      game from the point of view of an underworld criminal.
      The production is electric and Lean’s energy is palpable.
    </p>
    <p>
      This album is best known for the track “Yoshi City,”
      and for good reason. Few songs have been ahead of their
      time quite like this one. Other highlights include “Ghosttown”
      featuring Travi$ Scott from the days where he still sported a
      dollar sign in his name, and “Monster”
    </p>
  </div>
</div>
</div>', '<div class="album">
<a class="album-title" name="poisonivy">Poison Ivy (2018)</a>
<div class="album-container">
  <img src="../assets/ivy_album.png">
  <div>
    <p>
      <span class="colored">Poison Ivy</span> is another project on the shorter side,
      in which Lean worked closely with producer Whitearmor
      to create a gloomy spectacle that evokes images of a
      ravaged Yung Lean walking through desolate paths and
      post-apocalyptic landscapes.
    </p>
    <p>
      There is certainly a
      unique melancholy flavor that is consistent in this
      album and displays the growing maturity of Lean as an
      artist. The mixtape is consistently gorgeous and feels really revolutionary.
      A few personal favorites include the tracks “silicon wings” and “trashy”.
    </p>
  </div>
</div>
</div>']

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title><?php echo $title?></title>
</head>

<body>
  <?php include 'header.php' ?>

  <main class="container">
    <div class="intro">
      <img src="<?php echo $main_pic?>">
      <div class="intro-info">
        <pre>September 17, 2022      Music, Opinion</pre>
        <h1><span class="colored">Ranked</span>: Yung Lean</h1>
      </div>
    </div>
    <div class="description">
      <h2>
        Swedish artist Jonatan Leandoer, otherwise known to
        listeners as <span class="colored">Yung Lean</span>, is certainly a polarizing
        figure amongst music fans. It’s a difficult task to
        put Lean in a box. His projects typically feature
        dreary vocals supported by backgrounds of sometimes
        metallic grunge, and other times dreamlike concoctions.
      </h2>
      <h2>
        Despite what your stance might be regarding Lean’s
        sound, there is no doubt that many contemporaries
        have drawn upon him as an influence, either directly
        or indirectly. With the release of the 25 year old’s
        most recent mixtape, Stardust (which will remain
        unranked for now), let’s take a closer look at Lean’s
        entire discography and attempt to rank his projects
        from worst to best.
      </h2>
    </div>

    <div class="albums">
      <?php for($i = 0; $i < count($array); $i++) {
        echo $array[$i];
      }?>
    </div>

  </main>
  <footer class="page-footer">
    <div class="info">
      <a name="contacts"><span class="colored">Follow us</span></a>
      <p>Instagram Facebook Twitter</p>
      <p class="copyright">© Ranked, 2022. All rights reserved.</p>
      <p><?php echo 'Сформировано ',  $date, " в ", $time ?></p>
    </div>
  </footer>
</body>

</html>
