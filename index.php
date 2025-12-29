<?php
$data = json_decode(file_get_contents(__DIR__."/data/data.json"), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= htmlspecialchars($data["personal"]["name"]); ?> | CV Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
  <img src="<?= htmlspecialchars($data["profile"]["photo"]); ?>" class="avatar">
  <h1><?= htmlspecialchars($data["personal"]["name"]); ?></h1>
  <p class="role"><?= htmlspecialchars($data["personal"]["role"]); ?></p>
  <p class="contact">
    📧 <?= htmlspecialchars($data["personal"]["email"]); ?> |
    📞 <?= htmlspecialchars($data["personal"]["phone"]); ?> |
    📍 <?= htmlspecialchars($data["personal"]["location"]); ?>
  </p>
</header>

<section class="section">
<h2>Professional Summary</h2>
<p><?= htmlspecialchars($data["personal"]["summary"]); ?></p>
</section>

<section class="section">
<h2>Resume Highlights</h2>
<ul>
<?php foreach($data["highlights"] as $h): ?><li><?= htmlspecialchars($h); ?></li><?php endforeach; ?>
</ul>
</section>

<section class="section">
<h2>Skills</h2>
<ul>
<?php foreach($data["skills"] as $s): ?><li><?= htmlspecialchars($s); ?></li><?php endforeach; ?>
</ul>
</section>

<section class="section">
<h2>Services</h2>
<?php foreach($data["services"] as $s): ?>
<p><strong><?= htmlspecialchars($s["title"]); ?>:</strong> <?= htmlspecialchars($s["desc"]); ?></p>
<?php endforeach; ?>
</section>

<section class="section">
<h2>Education</h2>
<?php foreach($data["education"] as $e): ?>
<p><strong><?= htmlspecialchars($e["qualification"]); ?></strong> – <?= htmlspecialchars($e["school"]); ?> (<?= htmlspecialchars($e["period"]); ?>)</p>
<ul>
<?php foreach($e["details"] as $d): ?><li><?= htmlspecialchars($d); ?></li><?php endforeach; ?>
</ul>
<?php endforeach; ?>
</section>

<section class="section">
<h2>Experience</h2>
<?php foreach($data["experience"] as $ex): ?>
<p><strong><?= htmlspecialchars($ex["role"]); ?></strong> – <?= htmlspecialchars($ex["company"]); ?> (<?= htmlspecialchars($ex["period"]); ?>)</p>
<ul>
<?php foreach($ex["details"] as $d): ?><li><?= htmlspecialchars($d); ?></li><?php endforeach; ?>
</ul>
<?php endforeach; ?>
</section>

<section class="section">
<h2>Languages</h2>
<?php foreach($data["languages"] as $l): ?>
<p><strong><?= htmlspecialchars($l["name"]); ?> (<?= htmlspecialchars($l["level"]); ?>)</strong> – <?= htmlspecialchars($l["details"]); ?></p>
<?php endforeach; ?>
</section>

<section class="section">
<h2>Interests</h2>
<?php foreach($data["interests"] as $i): ?>
<p><strong><?= htmlspecialchars($i["title"]); ?>:</strong> <?= htmlspecialchars($i["details"]); ?></p>
<?php endforeach; ?>
</section>

<section class="section">
<h2>FAQ</h2>
<?php foreach($data["faq"] as $f): ?>
<p><strong><?= htmlspecialchars($f["q"]); ?></strong><br><?= htmlspecialchars($f["a"]); ?></p>
<?php endforeach; ?>
</section>

<footer class="footer">
  <div class="footer-line"></div>

  <div class="footer-grid">

    <div class="footer-box">
      <h3>👤 About Me</h3>
      <p>
        <?= htmlspecialchars($data["personal"]["name"]); ?> is a beginner web developer
        focused on building clean, responsive, and secure websites.
        Always learning and improving with real-world experience.
      </p>
    </div>

    <div class="footer-box">
      <h3>📞 Contact</h3>
      <p>📧 <?= htmlspecialchars($data["personal"]["email"]); ?></p>
      <p>📞 <?= htmlspecialchars($data["personal"]["phone"]); ?></p>
      <p>📍 <?= htmlspecialchars($data["personal"]["location"]); ?></p>
    </div>

    <div class="footer-box">
      <h3>⚡ Availability</h3>
      <p>✅ Freelance: Available</p>
      <p>🕒 Part-time: Available</p>
      <p>🌍 Remote Work: Yes</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p><?= htmlspecialchars($data["footer"]["tagline"]); ?></p>
    <small><?= htmlspecialchars($data["footer"]["note"]); ?></small>
    <div class="copyright">
      © <?= date("Y"); ?> <?= htmlspecialchars($data["personal"]["name"]); ?> — All Rights Reserved
    </div>
  </div>
</footer>

<script src="effects.js"></script>
</body>
</html>
