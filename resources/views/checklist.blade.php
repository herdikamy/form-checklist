<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Checklist Document</title>
</head>

<body>
<table border="1px" style="width: 100%">
      <tr>
         <td rowspan="2"><img src="{{url('/logo.png')}}" alt="Image" /></td>
         <td rowspan="4">No. Dokumen&emsp; : &nbsp; <input type="text" name="nodokumen" autofocus autocomplete="off">
            <br><br>Tgl.Dikeluarkan&nbsp;: &nbsp; <input type="text" name="nodokumen" autocomplete="off">
            <br><br>Halaman &emsp; &emsp; &ensp;: &nbsp; <input type="text" name="nodokumen" autocomplete="off">
            <br><br>No.revisi &emsp; &emsp; &ensp;: &nbsp; <input type="text" name="nodokumen" autocomplete="off">
         </td>
      </tr>
      <tr>
         <!-- <td>Tgl Dikeluarkan</td> -->
      </tr>
      <tr>
        <td rowspan="2"><p style="font-size: 20px; font-family: Arial;"><b>FORM IJIN KERJA AMAN</b></p></td>
        <!-- <td>Halaman</td> -->
      </tr>
      <tr>
        <!-- <td>No Revisi</td> -->
      </tr>
   </table>

   <p style="font-size: 20px; font-family: Arial; color:blue;"><b>Dalam keadaan darurat silahkan hubungi nomor berikut :</b></p>
   <table border="1px" style="width:100%">
    <tr>
        <td><p style="font-size: 15px; font-family: Arial;">Safety Officer</p></td>
        <td><p style="font-size: 15px; font-family: Arial; color:blue;"><b>087781091700</b></p></td>
        <td><p style="font-size: 15px; font-family: Arial;">HR Manager</p></td>
        <td><p style="font-size: 15px; font-family: Arial; color:blue;"><b>0812 8696 5607</b></p></td>
    </tr>
    <tr>
        <td><p style="font-size: 15px; font-family: Arial;">Engineering Manager</p></td>
        <td><p style="font-size: 15px; font-family: Arial;">0812 8518 937</p></td>
        <td><p style="font-size: 15px; font-family: Arial;">QA Manager</p></td>
        <td><p style="font-size: 15px; font-family: Arial;">0813 1075 1544</p></td>
    </tr>
   </table>

   <p style="font-size: 20px; font-family: Arial; color:blue;"><b>Jenis Pekerjaan :</b></p>
   <table border="1px" style="width: 100%;">
    <tr>
        <td><p style="font-size: 15px; font-family: Arial; color:blue;"><b>Kategori 1</b></p></td>
        <td><input type="checkbox" id="mengelas" name="mengelas" value="check_las">&nbsp;Mengelas
            <br><br><input type="checkbox" id="ketinggian" name="ketinggian" value="check_tinggi">&nbsp;Ketinggian
            <br><br><input type="checkbox" id="bahan_kimia" name="bahan_kimia" value="check_bahan_kimia">&nbsp;Bahan Kimia
        </td>
        <td><input type="checkbox" id="menggerinda" name="menggerinda" value="check_menggerinda">&nbsp;Menggerinda
            <br><br><input type="checkbox" id="ruang_terbatas" name="ruang_terbatas" value="check_ruang_terbatas">&nbsp;Ruang Terbatas
            <br><br><input type="checkbox" id="ruang_terbatas" name="ruang_terbatas" value="check_ruang_terbatas">&nbsp;Gas & Explosive Mat
        </td>
        <td><input type="checkbox" id="dekat_air" name="dekat_air" value="check_dekat_air">&nbsp;Dekat Air
            <br><br><input type="checkbox" id="instalasi_listrik" name="instalasi_listrik" value="check_instalasi_listrik">&nbsp;Instalasi Listrik
            <br><br><input type="checkbox" id="mesin_bergerak" name="mesin_bergerak" value="check_mesin_bergerak">&nbsp;Alat/Mesin bergerak
        </td>
    </tr>
    <tr>
        <td><p style="font-size: 15px; font-family: Arial; color:blue;"><b>Kategori 1</b></p></td>
        <td><input type="checkbox" id="inspeksi" name="inspeksi" value="check_inspeksi">&nbsp;Inspeksi/checking
            <br><br><input type="checkbox" id="pek_civil_ringan" name="pek_civil_ringan" value="check_pek_civil_ringan">&nbsp;Pek. Civil ringan
        </td>
        <td><input type="checkbox" id="instalasi" name="instalasi" value="check_instalasi">&nbsp;Instalasi dekorasi
        <br><br><input type="checkbox" id="instalasi_it_ringan" name="instalasi_it_ringan" value="check_instalasi_it_ringan">&nbsp;Instalasi IT ringan
        </td>
        <td><input type="checkbox" id="cleaning_rutin" name="cleaning_rutin" value="check_cleaning_rutin">&nbsp;Cleaning rutin (non-confined space & ketinggian)
        <br><br><input type="checkbox" id="pekerjaan_lainnya" name="pekerjaan_lainnya" value="check_pekerjaan_lainnya">&nbsp;Pekerjaan lainnya non-specific job/non-safety high risk
        </td>
    </tr>
   </table>
</body>

</html>