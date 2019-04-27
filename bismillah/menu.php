<html>
<head>
<link rel="icon" type="image/png" href="logo.png">
<title>WARUNK SEBLAK HUHA</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="menu.css">
</head>
<body>
<center><h1><font color="yellow" face="comic sans m">MENU</font></h1></center>
<table border="0" cellpadding="2">
    <tr>
        <td align="center" colspan="2" width="15%" bgcolor="black">
 <font color="#FFFFFF"><strong>Menu</strong></font></td>
        <td align="center" colspan="3" bgcolor="black">
 <font color="#FFFFFF"><strong>pilihan menu</strong></font></td>
        <td align="center" bgcolor="black">
 <font color="#FFFFFF"><strong>Total</strong></font></td>
 </font>    </tr>
    <tr>
 <form>
        <td colspan="2" width="15%" bgcolor="black"><font color="#FFFFFF">Makanan : </font></td>
        <td width="25%" bgcolor="grey"><input type="radio"
        name="Bakso Spesial" value="Bakso Spesial" onClick="form.Makanan_value.value= 12000">
 <strong>Seblak Basah</strong> <br><font color="red" size="2">Rp 12,000</font></td>

        <td width="25%" bgcolor="grey"><input type="radio"
        name="Pangsit Spesial" value="Pangsit" onClick="form.Makanan_value.value= 12000">
 <strong>Seblak Kering</strong> <br><font color="red" size="2">Rp 12,000 </font></td>

        <td width="25%" bgcolor="grey"><input type="radio"
        name="Soto Babat" value="Soto Babat" onClick="form.Makanan_value.value= 10000">
 <strong>Seblak Kemasan </strong> <font color="red" size="2"><br>Rp 10,000 </font></td>

        <td width="15%" bgcolor="grey"><input type="text" size="13" 
 name="Makanan_value" value="0"> </td>
 </form>
    </tr>
    <tr>
 <form>
        <td colspan="2" width="15%" bgcolor="black"><font color="#FFFFFF">Minuman : </font></td>
        <td width="15%" bgcolor="grey">
            <p><input type="radio" name="BAkso Spesial" value="Jus Apukat" 
     onclick="form.Minuman_value.value= 10000"><strong><font color="black">Milkshake</font></strong>
           <br> <font color="red" size="2">Rp 10,000</font></p></td>
        <td width="15%" bgcolor="grey">
            <p><input type="radio" name="Bakso Spesial" value="softdrink" 
     onclick="form.Minuman_value.value= 6000"><strong><font color="black">Softdrink</font></strong>
            <br><font color="red" size="2">Rp 6,000</font></p>        </td>
        <td width="15%" bgcolor="grey">
            <p><input type="radio" name="Bakso Spesial" value="Es Dawet"
     onclick="form.Minuman_value.value= 4000"><strong><font color="black">Lemon tea</font></strong>
            <font color="red" size="2"><br>Rp 4,000 </font></p>        </td>
        <td width="15%" bgcolor="grey"><input type="text" size="13" 
 name="Minuman_value" value="0"> </td>
        </form>
    </tr>
    <tr>
 <form>
        <td colspan="2" width="15%" bgcolor="black"><font color="#FFFFFF"> Extra Toping : </font></td>
        <td width="15%" bgcolor="grey">
 <input type="radio" name="Bakso Spesial" value="Bakwan"
        onclick="form.camilan_value.value= 5000"><strong><font color="black">Ceker</font></strong>
        <br><font color="red" size="2">Rp 5000</font></td>

        <td width="15%" bgcolor="grey">
 <input type="radio" name="Bakso Spesial" value="Sayap"
        onclick="form.camilan_value.value= 5000"><strong><font color="black">Sayap</font></strong>
        <br><font color="red" size="2">Rp 5000</font></td>

        <td width="15%" bgcolor="grey"><font color="">
 <input type="radio" name="Bakso Spesial" value="Jamur"
        onclick="form.camilan_value.value= 3000"><strong><font color="black">Jamur</font></strong></font>
 <br><font color="red" size="2">Rp 3000</font></td>

        <td width="15%" bgcolor="grey"><font color=""><input
        type="text" size="13" name="camilan_value" value="0"> </font></td>
 </form>
    </tr>
    <tr>
 <td colspan="4"></td>
 <form>
 <td colspan="1" valign="top" align="center" bgcolor="black">
 <input type=button value="Total Harga" name="total" onClick='
 var total=eval(parseInt(document.forms[0].Makanan_value.value) + parseInt(document.forms[1].Minuman_value.value) + parseInt(document.forms[2].camilan_value.value));
 var diskon=5000;
 form.total_value.value="Rp " + total;
 if(total>20000)
 { 
  totDis=eval(total- diskon);form.diskon.value="Rp "+diskon;
 } 
 else 
 {
  totDis=total;form.diskon.value=0;
 }
 form.total_diskon.value="Rp " + totDis;
 '>
 </td>
 <td bgcolor="black">
 <label><font color="yellow"><b>TOTAL HARGA</b></font></label>
 <input type="text" size=12 name="total_value">
 
 <label><font color="yellow"><b>DISKON</b></font></label>
 <input type="text" name="diskon" size=12 > 
   
 <label><font color="yellow"><b>jumlah dibayar</b></font></label>
 <input type="text" size=12 name="total_diskon">    
 </td>
 </form>
    </tr>
    
</table>
<form action="beli.php" method="POST">
<div class="form-group">
  <button class="btn btn-submit" type="submit">BELI&nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
 </div>

</body>
</html>