<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td bgcolor="#CC0066">
        <?php 
    $file = fopen("tap_tin\sang_thang_nam.txt","r",l);
    if (!$file)
    {
        echo "<br> Khong the mo duoc file nay.<br>";
        exit;
    }
    else
    {
        echo "<p align = 'center' class = 'style1'><font color = '#FFFFFF'";
        echo "<b></b><br>";
        while(!feof($file))
        {

            $noi_dung = fgets($file);
            echo nl2br($noi_dung);
        }
        echo "<br><b>Mo va doc file thanh cong!</b>";
        echo "</font></p>";
    }
    fclose($file);
    ?>
    </td>
</tr>
</table>
</body>
</html>