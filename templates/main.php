<HTML>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title><?php echo $title; ?></title>

    <script>
    window.onload = function(){
      var menuBtn = document.getElementsByClassName('nav-menu-btn')[0];
      menuBtn.onclick = function(){
        var menu = document.getElementsByClassName('nav-pages')[0];
        if (menu.style.display == ""){
          menu.style.display = "block";
        } else {
          menu.style.display = "";
        }
      };
    };
    </script>
  </head>

  <body>
    <div class="header">
      <div class="nav">
        <div class="nav-social">
        <a href="https://github.com/danh98" target="_blank">
          <svg height="40" width="40">
            <circle cx="20" cy="20" r="15" stroke="white" stroke-width="2" fill="none"/>
            <image width="24px" height="24px" x="8" y="8" xlink:href="../assets/github.png">
          </svg>
        </a>

        <a href="https://twitter.com/danh1606" target="_blank">
          <svg height="40" width="40">
            <circle cx="20" cy="20" r="15" stroke="white" stroke-width="2" fill="none"/>
            <image width="24px" height="24px" x="8" y="8" xlink:href="../assets/twitter.png">
          </svg>
        </a>
        </div>
        <div class="nav-menu-btn">&#9776</div>
          <ul class="nav-pages">
            <a href="/home"><li>Home</li></a>
            <a href="/projects"><li>Projects</li></a>
          </ul>
      </div>
      <div class="banner">
          <a href="/home"><div class="banner-title">DAN HARRIS</div></a>

      </div>
    </div>
    <div class="content">
      <?php
        if ($type === "dir"){
        $files = array_slice(scandir($path),2);
        foreach($files as $file){
          $lines = file($path.$file);
          echo "<br>";
          echo '<div class="content-title">';
          echo $lines[0];
          echo "</div>";
          echo '<div class="content-body">';
          for($i = 2;$i<=count($lines);$i++){
            echo $lines[$i]; 
          }
          echo "</div>";
        }
      }
      ?>
    </div>
    <div class="footer">
      <ul class="footer-nav">
        <a href="/downloads"><li>Downloads</li></a> |
        <a href="/sitemap"><li>Sitemap</li></a> |
        <a href="/contact"><li>Contact</li></a>
      </ul>
      <div class="copyright">&copy Dan Harris 2016</div>

    </div>
  </body>
</HTML>
