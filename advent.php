<?php

$day = intval(htmlspecialchars($_GET["day"]));

$title_pre = "";
$url_appendix = "";
$img_file = "generic";

if ($day >= 1 && day <= 24) {
  $title_pre = "Day $day - ";
  $url_appendix = "?day=$day";
  $img_file = $day;
}

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Safe Crossing - Advent Calendar</title>
  <meta name="description" content="Safe Crossing Advent Calendar">
  <meta name="author" content="ZUG">

  <meta property="og:title" content="<?=$title_pre ?>Safe Crossing Advent Calendar">
  <meta property="og:site_name" content="Safe Crossing by ZUG (Zentrum fir Urban Gerechtegkeet)">
  <meta property="og:url" content="https://www.zug.lu/safe-crossing/advent.php<?=$url_appendix ?>">
  <meta property="og:description" content="The Safe Crossing Advent Calendar showcases a selection of possibly more than 32🤭 unsafe crossings in Luxembourg-City">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://zug.lu/safe-crossing/img/advent_link_previews/<?=$img_file ?>.png">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@zug_lu">
  <meta name="twitter:creator" content="@zug_lu">
  <meta name="twitter:title" content="<?=$title_pre ?>Safe Crossing Advent Calendar">
  <meta name="twitter:description" content="The Safe Crossing Advent Calendar showcases a selection of possibly more than 32🤭 unsafe crossings in Luxembourg-City">
  <meta name="twitter:image" content="https://zug.lu/safe-crossing/img/advent_link_previews/<?=$img_file ?>.png">

  <style>
    body {
      padding: 0;
      margin: 0;
    }
    html, body, .calendar-frame {
      height: 100%;
      width: 100%;
    }
  </style>
</head>
<body>
  <iframe src="https://calendar.myadvent.net/?id=1789a3686bdd0f7e2c1d4611760faa1b" class="calendar-frame" frameBorder="0"></iframe>
</body>
</html>
