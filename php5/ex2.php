<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta https-equiv="Content-Type" content="text/html; charset = utf-8" />
<title>Tao - ghi va doc file</title>
<style type="text/css">
<!--
.style1{
    color: #FFFFFF;
    font-family: lucidaHandwriting,LucidaCalligraphy;
}
.style6{font-family: Verdana,Arial, Helvetica, sans-serif;font-size: smaller;}
-->
</style>
</head>

<body>
<form id ="form1" name="form1" method="post" action="p2_c4_b2_tao_ghi_file.php">
    <table width ="500" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#DB95B8">
        <tr bgcolor="#BDBAE7">
            <td colspan="2" bgcolor="#CC3366"><h2 align="center" class="style1">TAO - GHI VA DOC FILE VUA TAO</h2>     </td>
        </tr>
        <tr>
        <td width="93"><span class="style6">Ten file: </span></td>
        <td width="393"><label>
            <input name="ten_file" type="text" id="ten_file" value="<?php echo $_POST["ten_file"];?>" />
            </label></td>
            </tr>
            <tr>
                <td valign="top"><span class="style6">Noi dung:</span></td>
                <td>
                    <textarea name="noi_dung" cols="50" rows="4" id="noi_dung"><?php echo $_POST["noi_dung"];?>
                    </textarea>       </td>
                    </tr>
                    <tr>    
                        <td colspan="2"align="center">
                            <input type="submit" name="submit"value="ghi va doc file" />        </td>
                            </tr>
                            </table>
</form>
<?php
            if(isset($_POST["ten_file"])  &&   isset($_POST["noi_dung"]))
            {
                $ten_file = $_POST["ten_file"];
                $noi_dung = $_POST["noi dung"];
                //bl: ghi file
                $file = fopen("$ten_file","w",l);
                fwrite($file,$noi_dung);
                echo "<p align='center' class='style6'><b>Da ghi file thanh cong!</b></p>";
                fclose($file);
                //b2: xuat file vua ghi ra man hinh
                $file = fopen("$ten_file","r");
                echo "<table width='500' align='center' bgcolor='#DB95B8' class='style6'><tr><td>";
                echo "<b>Noi dung cua file:</b><br>";
                while(!feof($file))
                {
                    $noi_dung = fgets($file,1000);
                    echo nl2br($noi_dung);
                }
                echo "<br><b>Doc file thanh cong!</b></br>";
                fclose($file);
            }
            else
                echo "<p align='center'>Hay nhap du ten file va noi dung!</p>";
?>
</body>
</html>