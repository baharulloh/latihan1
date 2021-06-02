<form action="" method="POST">
      Input Nilai Anda : <input type="text" name="nilai">
      <input type="submit" value="Hasil">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['nilai'];
        if ($nilai == 'a')
        {
          $output = "2500";
          echo "Hasil Input adalah : " . $output;
        }
        elseif ($nilai == 'b')
        {
          $output = "5000";
          echo "Hasil Input adalah : " . $output;
        }
        elseif ($nilai == 'c')
        {
          $output = "10000";
          echo "Hasil Input adalah : " . $output;
        }
        else{
            echo "Kondisi Tidak Ada";
        }
    }
        
    ?>