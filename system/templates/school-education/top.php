<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<?php echo $headers; ?>
<link rel="stylesheet" href="<?php echo $templateRoot; ?>styles/layout.css" type="text/css" />
<script type="text/javascript" src="<?php echo $templateRoot; ?>scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="<?php echo $templateRoot; ?>scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="<?php echo $templateRoot; ?>scripts/jquery.cycle.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Nullamlacus dui ipsum</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="topbox">
        <h2>Teachers Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="teachername">Username:
              <input type="text" name="teachername" id="teachername" value="" />
            </label>
            <label for="teacherpass">Password:
              <input type="password" name="teacherpass" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>Pupils Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Pupils Login Form</legend>
            <label for="pupilname">Username:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Log In Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><?php echo $siteName; ?></h1>
      <p><?php echo $slogan; ?></p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="style-demo.html">Style Demo</a></li>
        <li><a href="full-width.html">Full Width</a></li>
        <li><a href="#">Link Text</a></li>
        <li class="last"><a href="#">A Long Link Text</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images/demo/450x300.gif" alt="" /></a>
      <div class="floater">
        <h2>1. Aliquatjusto quisque nam</h2>
        <p>Orcimagna rhoncus et a nec antesque sed temportor pellus nibh conseque. Accumstsemper wisi pretium feugiat non ut eleifendrerisque at et condisse sce. Iaculumorci congue nam mollis odio id cras orci vestique euisquet at. Donecconsectetus lacilis ac pellus nam nibh curabitur sed anterdum nectetus adipis. Pretiummagnisse antes nunc pretium convallis tincidunt non at rutrumt.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/450x300.gif" alt="" /></a>
      <div class="floater">
        <h2>2. Aliquatjusto quisque nam</h2>
        <p>Duisvest lacus pellus purus temper maurisus et sodalesuada loreet sapiente et. Quissociis magnisl orci dui nulla ut antesque malesuada sed pede et. Idlacus ridiculisi nec cursus enim ac tur urnar nunc pellus pellenterdum. Necelisi aliquat curabiturpiscing semportortor sed et velit convallis quat adipiscing cursus. Rutrumeget id ipsum et sed maurisuspendimentum auctor siti.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/450x300.gif" alt="" /></a>
      <div class="floater">
        <h2>3. Dapiensociis temper donec</h2>
        <p>Pharetiumurna habitur et enim pellentesque phasellus aliquam nunc quis justo nam. Lobortororci dapibulum ac intesquet ut id sed intesque nec alique congue. Liberoaenec vest maurisus libero pede nisl ligula cursus vitae dis metus. Aeneanaccumsan orci nasce ac pulvinare enim tor quis antesque cumsan in. Justomontesque sem ac dolor iaculum dolor orci elit lacus et vestibulum.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/450x300.gif" alt="" /></a>
      <div class="floater">
        <h2>4. Dapiensociis temper donec</h2>
        <p>Pharetiumurna habitur et enim pellentesque phasellus aliquam nunc quis justo nam. Lobortororci dapibulum ac intesquet ut id sed intesque nec alique congue. Liberoaenec vest maurisus libero pede nisl ligula cursus vitae dis metus. Aeneanaccumsan orci nasce ac pulvinare enim tor quis antesque cumsan in. Justomontesque sem ac dolor iaculum dolor orci elit lacus et vestibulum.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/demo/450x300.gif" alt="" /></a>
      <div class="floater">
        <h2>5. Nullain convallis ris elis</h2>
        <p>Nullamcorpervivamus nisl in sed adipit donec feugiat lor vel velit volutpat. Wisihabitur diculisi ac curabitur cursuspendreris sociis sed eger ipsum condisse laculis. Curabiturid non eu curabitae nibh por nullamcorper at nibh elis fring. Vestnibh congue praesenenatis justo et maecenasceleifend senterdum malesuada at dolor amet. Turisristibulum curabitae eros leo at interd.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
  </div>
</div>
<div class="wrapper col3">
<div id="container">