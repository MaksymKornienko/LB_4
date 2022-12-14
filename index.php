<?php
        $filename = "123.txt";
        $fp = @fopen($filename, "r");
        if ($fp) {
          $counter = fread($fp, filesize($filename));
          fclose($fp);
        }
        else {
          $counter = 0;
        }
        $counter++;
        echo "<img src = '1.png' alt = 'eye icon' width = '20px'> <b><i>Просмотрено: </i></b>".$counter." <b><i>страниц</b></i>";
        $fp = @fopen($filename, "w");
        if ($fp) {
          $conter = fwrite($fp, $counter);
          fclose($fp);
        }
        $last_symbol = substr($counter, -1);
        if ($last_symbol == 1) {
          echo "<b><i>а</i></b>";
        }
         elseif ($last_symbol == 2 || $last_symbol == 3 || $last_symbol == 4) {
           echo "<b><i>ы</i></b>"; 
         }
         
        