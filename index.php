<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Digital Uhr</title>

  <link rel="stylesheet" href="clock.css">
</head>
<body>
  <script src="clock.js"></script>

  <div id="clock-container">
    <?php for ($container = 0; $container <= 2; $container++): ?>
        <div class="digit-container">
            <?php for ($digit = 0; $digit <= 1; $digit++): ?>
                <div class="digit">
                    <?php for ($clock = 0; $clock <= 23; $clock++): ?>
                        <div class="clock"><div class="zeiger"></div><div class="zeiger"></div></div>
                    <?php endfor;?>
                </div>
            <?php endfor;?>
        </div>
    <?php endfor; ?>
  </div>

</body>
</html>