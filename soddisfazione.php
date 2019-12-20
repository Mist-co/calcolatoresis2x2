<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta author="Alessandro Russo">
    <title>Risultato</title>
    <link rel="shortcut icon" href="https://digilander.libero.it/Detective_mistery/icon_site.ico">
  	  <script>window.MathJax = { MathML: { extensions: ["mml3.js", "content-mathml.js"]}};</script>
	  <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=MML_HTMLorMML"></script>
  </head>
  <body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
    <h1 align='center'>Soddisfazione di sistemi</h1>
    <h5 align='center'>(© Alessandro Russo - 2019)</h5>
    <?php
      $coeff1x_str =  $_POST["coeff1x"];
      $coeff2x_str =  $_POST["coeff2x"];
      $coeff1y_str =  $_POST["coeff1y"];
      $coeff2y_str =  $_POST["coeff2y"];
      $valnoto1_str =  $_POST["valnoto1"];
      $valnoto2_str =  $_POST["valnoto2"];
      $coeff1x_int =  intval($coeff1x_str);
      $coeff2x_int =  intval($coeff2x_str);
      $coeff1y_int =  intval($coeff1y_str);
      $coeff2y_int =  intval($coeff2y_str);
      $valnoto1_int = intval($valnoto1_str);
      $valnoto2_int = intval($valnoto2_str);
      $segno1=' ';
      $segno2=' ';

      if($coeff1y_int>=0)
      {
        $modcoffy1='+';
        $segno1='+';
      }
      else
      {
        $modcoffy1='-';
      }

      if($coeff2y_int>=0)
      {
        $modcoffy2='+';
        $segno2='+';
      }
      else
      {
        $modcoffy2='-';
      }

      echo ("<table style='height: 66px; width: 187.517px;'>");
        echo ("<tbody>");
          echo ("<tr>");
            echo ("<td style='width: 106.517px;'>");
              echo ("<div><math><munder><menclose notation='none' draggable='true' tabindex='0' contextmenu='matrix-menu' ><mrow><mo>{</mo><mtable rowspacing='0ex' columnalign='right'><mtr><mtd><mrow><mn>" . $coeff1x_int . "</mn><mi>x</mi></mrow></mtd><mtd><mo form='infix'>" . $segno1 . "</mo><mrow><mn>" . $coeff1y_int . "</mn><mi>y</mi></mrow></mtd><mtd></mtd><mtd></mtd><mtd><mo>=</mo></mtd><mtd><mn>" . $valnoto1_int . "</mn></mtd></mtr><mtr><mtd><mrow><mrow><mn>" . $coeff2x_int . "</mn></mrow><mi>x</mi></mrow></mtd><mtd><mo form='infix'>" . $segno2 . "</mo><mrow><mn>" . $coeff2y_int . "</mn><mi>y</mi></mrow></mtd><mtd></mtd><mtd></mtd><mtd><mo>=</mo></mtd><mtd><mn>" . $valnoto2_int . "</mn></mtd></mtr></mtable></mrow></menclose><mtext></mtext></munder></math></div>");
            echo ("</td>");
          echo ("</tr>");
        echo ("</tbody>");
      echo ("</table>");

    $D = ($coeff1x_int*$coeff2y_int)-($coeff1y_int*$coeff2x_int);
    $Dx = ($valnoto1_int*$coeff2y_int)-($coeff1y_int*$valnoto2_int);
    $Dy = ($coeff1x_int*$valnoto2_int)-($valnoto1_int*$coeff2x_int);
    $x = ($Dx/$D);
    $y = ($Dy/$D);

    if($D == 0  && $Dx == 0 && $Dy == 0)
    {
      echo ("SISTEMA INDETERMINATO");
    }
    else if($D == 0 && $Dx != 0)
    {
      echo ("SISTEMA IMPOSSIBILE");
    }
    else if($D != 0)
    {
        echo ("SISTEMA DETERMINATO");
        echo ("<div><math><mi>Δ</mi><mo>=</mo><munder><menclose notation='none' draggable='true' tabindex='0' contextmenu='matrix-menu'><mrow><mo>|</mo><mtable rowspacing='0ex'><mtr><mtd><mn>" . $coeff1x_int . "</mn></mtd><mtd><mn>" . $coeff1y_int . "</mn></mtd></mtr><mtr><mtd><mrow><mn>" . $coeff2x_int . "</mn></mrow></mtd><mtd><mn>" . $coeff2y_int . "</mn></mtd></mtr></mtable><mo>|</mo></mrow></menclose><mtext></mtext></munder><mo>= " . "(" . $coeff1x_int . "*" . $coeff2y_int . ") - (" . $coeff1y_int . "*" . $coeff2x_int . ") =" . "</mo><mn>" . $D . "</mn></math></div>");
        echo ("<div><math><mi>Δ<msub><mi>x</mi></msub></mi><mo>=</mo><munder><menclose notation='none' draggable='true' tabindex='0' contextmenu='matrix-menu'><mrow><mo>|</mo><mtable rowspacing='0ex'><mtr><mtd><mn>" . $valnoto1_int . "</mn></mtd><mtd><mn>" . $coeff1y_int . "</mn></mtd></mtr><mtr><mtd><mrow><mn>" . $valnoto2_int . "</mn></mrow></mtd><mtd><mn>" . $coeff2y_int . "</mn></mtd></mtr></mtable><mo>|</mo></mrow></menclose><mtext></mtext></munder><mo>= " . "(" . $valnoto1_int . "*" . $coeff2y_int . ") - (" . $coeff1y_int . "*" . $valnoto2_int . ") =" .  "</mo><mn>" . $Dx . "</mn></math></div>");
        echo ("<div><math><mi>Δ<msub><mi>y</mi></msub></mi><mo>=</mo><munder><menclose notation='none' draggable='true' tabindex='0' contextmenu='matrix-menu'><mrow><mo>|</mo><mtable rowspacing='0ex'><mtr><mtd><mn>" . $coeff1x_int . "</mn></mtd><mtd><mn>" . $valnoto1_int . "</mn></mtd></mtr><mtr><mtd><mrow><mn>" . $coeff2x_int . "</mn></mrow></mtd><mtd><mn>" . $valnoto2_int . "</mn></mtd></mtr></mtable><mo>|</mo></mrow></menclose><mtext></mtext></munder><mo>= " . "(" . $coeff1x_int . "*" . $valnoto2_int . ") - (" . $valnoto1_int . "*" . $coeff2x_int . ") =" .  "</mo><mn>" . $Dy . "</mn></math></div>");


        if($D < 0 && $Dx < 0)
        {
          $D1 = abs($D);
          $Dx1 = abs($Dx);
          $divisore = mcd($D1, $Dx1);
          $Dopx = $D1/$divisore;
          $Dxopx = $Dx1/$divisore;
          $risultatox = "";
        }
        else if($D < 0 || $Dx < 0)
        {
          $D1 = abs($D);
          $Dx1 = abs($Dx);
          $divisore = mcd($D1, $Dx1);
          $Dopx = $D1/$divisore;
          $Dxopx = $Dx1/$divisore;
          $risultatox = "-";
        }
        else
        {
          $divisore = mcd($D, $Dx);
          $Dopx = $D/$divisore;
          $Dxopx = $Dx/$divisore;
          $risultatox = "";
        }

        if($D < 0 && $Dy < 0)
        {
          $D2 = abs($D);
          $Dy2 = abs($Dy);
          $divisore = mcd($D2, $Dy2);
          $Dopy = $D2/$divisore;
          $Dyopy = $Dy2/$divisore;
          $risultatoy = "";
        }
        else if($D < 0 || $Dy < 0)
        {
          $D2 = abs($D);
          $Dy2 = abs($Dy);
          $divisore = mcd($D2, $Dy2);
          $Dopy = $D2/$divisore;
          $Dyopy = $Dy2/$divisore;
          $risultatoy = "-";
        }
        else
        {
          $divisore = mcd($D, $Dy);
          $Dopy = $D/$divisore;
          $Dyopy = $Dy/$divisore;
          $risultatoy = "";
        }

        $Dabs = abs($D);
        $Dxabs = abs($Dx);
        $Dyabs = abs($Dy);

        if($Dopx == 1 && $Dopy !=1)
        {
          echo ("<ul class='list-unstyled' data-i='1'>");
            echo ("<li><math><mi>x</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>x</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dx . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mfrac><mn>" . $Dxabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mn>" . $Dxopx . "</mn></math></li>");
            echo ("<li><math><mi>y</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>y</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dy . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mfrac><mn>" . $Dyabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mfrac><mn>" . $Dyopy . "</mn><mn>" . $Dopy . "</mn></mfrac></math></li>");
          echo ("</ul>");
        }
        else if($Dopy == 1 && $Dopx !=1)
        {
          echo ("<ul class='list-unstyled' data-i='1'>");
            echo ("<li><math><mi>x</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>x</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dx . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mfrac><mn>" . $Dxabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mfrac><mn>" . $Dxopx . "</mn><mn>" . $Dopx . "</mn></mfrac></math></li>");
            echo ("<li><math><mi>y</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>y</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dy . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mfrac><mn>" . $Dyabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mn>" . $Dyopy . "</mn></math></li>");
          echo ("</ul>");
        }
        else if($Dopx == 1 && $Dopy == 1)
        {
          echo ("<ul class='list-unstyled' data-i='1'>");
            echo ("<li><math><mi>x</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>x</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dx . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mfrac><mn>" . $Dxabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mn>" . $Dxopx . "</mn></math></li>");
            echo ("<li><math><mi>y</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>y</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dy . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mfrac><mn>" . $Dyabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mn>" . $Dyopy . "</mn></math></li>");
          echo ("</ul>");
        }
        else
        {
          echo ("<ul class='list-unstyled' data-i='1'>");
            echo ("<li><math><mi>x</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>x</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dx . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mfrac><mn>" . $Dxabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatox. "</mo><mfrac><mn>" . $Dxopx . "</mn><mn>" . $Dopx . "</mn></mfrac></math></li>");
            echo ("<li><math><mi>y</mi><mo>=</mo><mrow><msub><mi>Δ</mi><mn>y</mn></msub><mo>∕</mo><mi>Δ</mi></mrow><mo>=</mo><mfrac><mn>" . $Dy . "</mn><mn>" . $D . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mfrac><mn>" . $Dyabs . "</mn><mn>" . $Dabs . "</mn></mfrac><mo>=</mo><mo>" . $risultatoy. "</mo><mfrac><mn>" . $Dyopy . "</mn><mn>" . $Dopy . "</mn></mfrac></math></li>");
          echo ("</ul>");
        }
    }

    function mcd($a, $b)
    {
      $resto = $a % $b;
      while($resto != 0)
      {
        $a = $b;
        $b = $resto;
        $resto = $a % $b;
      }
      return $b;
    }
    ?>
  </body>
</html>
