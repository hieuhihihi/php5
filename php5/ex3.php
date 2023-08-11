<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ex3.php">
        <span>Ten file:</span>
        <input type="text" name="ten_file" id="ten_file" value="<?php echo $_POST["ten_file"];?>"/>
        <span>Ten hàng: </span>
        <input type="text" name="ten_hang" id="ten_hang" value="<?php echo $_POST["ten_hang"];?>"/>
        <span>So luong: </span>
        <input type="number" name="so_luong" id="so_luong" value="<?php echo $_POST["so_luong"];?>"/>
        <span>Don gia: </span>
        <input type="number" name="don_gia" id="don_gia" value="<?php echo $_POST["don_gia"];?>"/>
        <input type="submit" name="Submit" value="Ghi va doc file"/>
    </form>
    <?php 
        if(isset($_POST["ten_file"])){
            $ten_file = $_POST["ten_file"];
            $ten_hang = $_POST["ten_hang"];
            $so_luong = $_POST["so_luong"];
            $don_gia = $_POST["don_gia"];
            $thanh_tien = $so_luong * $don_gia;
            // ghi file
                $file = fopen("$ten_file", "a+");
                $san_pham = $ten_hang."\t".$so_luong."\t".$don_gia."\t".$thanh_tien."\n";
                fwrite($file, $san_pham);
                echo "ghi file thanh cong";
                fclose($file);
            // xuat file vua ghi ra man hinh
                $file = fopen("$ten_file", "r");
                    echo "<table width='350' border='0' align='center' cellpadding='2' cellspacing='2' bgcolor='#DB95B8' class='style6'";
                    echo "<tr><td>";
                    echo "<p align='center'><b>Noi dung cua file: </b><br></p>";
                    echo "<table border='1' width='100%'>";
                    echo "<tr>";
                        echo "<td>Ten hang</td>";
                        echo "<td>So luong</td>";
                        echo "<td>Don gia</td>";
                        echo "<td>Thanh tien</td>";
                        echo "</tr>";
                while(!feof($file)){
                    echo "<tr>";
                    $noi_dung = fgets($file, 1000);

                    $mang = explode("\t", $noi_dung);
                    echo "<td>$mang[0]</td>";
                    echo "<td>$mang[1]</td>";
                    echo "<td>$mang[2]</td>";
                    echo "<td>$mang[3]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "Doc file thanh cong";
                echo "</p>";
                fclose($file);
                echo "</tr></td>";
        }
        else
            echo "Hay nhap day du noi dung"
    ?>
</body>
</html>