<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Checklist Document</title>
<style>
		section {
			clear: both;			
			padding: 10px;
			/* border: 1px solid black; */
			display: inline-block;
			width: 100%;
			clear: both;
			box-sizing: border-box;
		}

		div {
			float: left;
		}

        .garis_vertikal{
            border: 1px black solid;
            margin-left: 5px;
            height: 1000px;
            width: 0px;
        }

		.div-1 {
			width: 49%;
			/* height: 200px; */
			/* background: dodgerblue; */
		}

		.div-2 {
			width: 2%;
			/* height: 200px; */
			/* background: green; */
		}

        .div-3 {
			width: 49%;
			/* height: 200px; */
			/* background: green; */
		}

	</style>
</head>

<body>
    <section>
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

        <table border="1px" style="width: 100%; background-color:black;">
            <tr>
                <td><p style="font-size: 15px; font-family: Arial; color:white; text-align:center"><b>UNTUK PEKERJAAN KATEGORI 1 LANJUT KE HALAMAN 2</b></p></td>
            </tr>
        </table>
        <div class="div-1">
            <table>
                <tr>
                    <td><b>Hari / Tgl</b></td>
                    <td>:</td>
                    <td><input type="date"></td>
                </tr>
                <tr>
                    <td><b>No Izin Kerja</b></td>
                    <td>:</td>
                    <td><input type="text">(Diisi oleh Bagian HSE)</td>
                </tr>
                <tr>
                    <td><b>Masa Berlaku</b></td>
                    <td>:</td>
                    <td><input type="time"> Jam <input type="time"></td>
                </tr>
                <tr>
                    <td><b>Lokasi / Area</b></td>
                    <td>:</td>
                    <td><input type="text"></td>
                </tr>
            </table>

            <p style="font-size: 15px; font-family:Arial; color:blue"><b>Alat kerja dan pengaman yang akan dipakai :</b></p>

            <table border="1px" style="width:100%;">
                <tr>
                    <th>No</th>
                    <th>Jenis Alat Kerja & Pengaman</th>
                    <th>Kondisi</th>
                </tr>
                @for ($i =1; $i <= 9; $i++)
                    <tr>
                        <td>{{$i}}</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                @endfor 
            </table>

            <p style="font-size: 15px; font-family:Arial; color:blue"><b>Alat Pelindung Diri yang dipakai :</b></p>

            <table border="1px" style="width:100%;">
                <tr>
                    <th>No</th>
                    <th>Jenis Alat Pelindung Diri</th>
                    <th>Kondisi</th>
                </tr>
                @for ($i =1; $i <= 9; $i++)
                    <tr>
                        <td>{{$i}}</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                @endfor 
            </table>

            <p style="font-size: 15px; font-family:Arial; color:blue"><b>Tindakan Pencegahan Lainnya :</b></p>

            <table>
                <tr>
                    <td><input type="checkbox"> <input type="text"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"> <input type="text"></td>
                </tr>
            </table>

            <p style="font-size: 15px; font-family:Arial; color:blue"><b>Nama Petugas Pelaksana :</b></p>
            
            <table border="1px" style="width:100%;">
                <tr>
                    <th>No</th>
                    <th>Nama Pekerja</th>
                    <th>Kondisi Kesehatan</th>
                </tr>
                @for ($i =1; $i <= 9; $i++)
                    <tr>
                        <td>{{$i}}</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                @endfor 
            </table>

            <p style="font-size: 15px; font-family:Arial;"><b>Pekerjaan Dilakukan Oleh :</b></p>

            <table>
                <tr>
                    <td><input type="checkbox"> Karyawan</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> Kontraktor <input type="text"></td>
                </tr>
            </table>
            <hr>
        </div>

        <div class="div-2">
            <div class="garis_vertikal"></div>
        </div>

        <div class="div-3">
            <table>
                <tr>
                    <td></td>
                    <td><p style="font-size: 15px; font-family:Arial; color:blue; text-align:center"><b>Tugas dan Kewajiban</b></p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>1. </b></p></td>
                    <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:justify"><b>Petugas pelaksana : menulis waktu mulai pekerjaan dan menempelkan ijin kerja
di tempat kerja, menulis waktu selesai pekerjaan dan menyerahkan kembali ijin
kerja kepada Safety Manager</b></p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>2. </b></p></td>
                    <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:justify"><b>Safety Manager : melakukan pemeriksaan apakah perlengkapan yang disyaratkan
sesuai dengan standard dan memberikan ijin kerja di area kerja</b></p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>3. </b></p></td>
                    <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:justify"><b>Petugas pemantau kebakaran : melakukan pemeriksaan akhir area kerja
(Mengelas & menggerinda) setelah 4 jam dan menyerahkan ijin kerja kepada
Safety Manager</b></p></td>
                </tr>
            </table>

            <table border="1" style="width:100%">
                <tr>
                    <td colspan="2"><p style="font-size: 15px; font-family:Arial; color:blue; text-align:center"><b>PROSEDUR KESELAMATAN DAN HYGIENE SEBELUM
PEKERJAAN DILAKUKAN</b></p></td>
                </tr>
                <tr>
                    <td>1. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b> Karyawan maupun kontraktor sudah mendapatkan induksi keselamatan kerja dan hygiene
                        : <input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak
                    </b></p></td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b> Dimana Pekerjaan dilakukan :
                        <br><input type="checkbox"> Basic Care &nbsp; <input type="checkbox"> Medium Care
                        <br><input type="checkbox"> High Care &nbsp;&nbsp;&nbsp; <input type="checkbox"> Surounding
                    </br></p></td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Ada process yang di hentikan selama pekerjaan ?
                        <br>Jika ya, process tersebut adalah <input type="text"></b></p></td>
                </tr>
                <tr>
                    <td>4. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Apakah kegiatan memerlukan curtain/ terpal untuk pembatas fisik?
                        <br>Jika ya, bagaimana kondisi terpal <input type="text"></b></p></td>
                </tr>
                <tr>
                    <td>5. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Ada peralatan yang di lepaskan/ di pindahkan dari tempatnya selama perbaikan:<input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</b></p></td>
                </tr>
                <tr>
                    <td>6. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Semua personil terkait sudah mengetahui adanya pekerjaan :<input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</b></p></td>
                </tr>
                <tr>
                    <td>7. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Warning sign yang sesuai sudah di letakan di tempat yang di perlukan :<input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</b></p></td>
                </tr>
                <tr>
                    <td>8. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Apakah pekerjaan sudah memenuhi working permit yang sesuai : :<input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</b></p></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="font-size: 15px; font-family:Arial; text-align:center"><b>HYGIENE WORK PERMIT</b></p></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="font-size: 15px; font-family:Arial; ">PERSYARATAN UMUM</p></td>
                </tr>
                <tr>
                    <td>1. </td>
                    <td><p style="font-size: 12px; font-family:Arial; ">Seragam kontrator sudah sesuai dengan zoning area kerja</p></td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td><p style="font-size: 12px; font-family:Arial; ">Kontraktor tidak menggunakan aksesoris ke area pekerjaan (dalam pabrik)</p></td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td><p style="font-size: 12px; font-family:Arial; ">Kontraktor tidak membawa barang pribadi, rokok, makanan dan minuman ker
area pekerjaan (dalam pabrik)</p></td>
                </tr>
                <tr>
                    <td>4. </td>
                    <td><p style="font-size: 12px; font-family:Arial; ">Kebersihan peralatan sudah sesuai dengan zoning area kerja</p></td>
                </tr>
                <tr>
                    <td>5. </td>
                    <td><p style="font-size: 12px; font-family:Arial; ">Bilamana menggunakan terpal/pembatas fisik,harus dipastikan sudah
mengisolasi area pekerjaan (tertutup rapat dan kondisi baik)</p></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="font-size: 15px; font-family:Arial; text-align:center"><b><u>SERTIFIKASI PERSONIL</u></b></p></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="font-size: 12px; font-family:Arial; "><input type="checkbox"> &nbsp; Memiliki sertifikasi AK3 Umum</p>
                        <p style="font-size: 12px; font-family:Arial; "><input type="checkbox"> &nbsp; Memiliki Sertifikasi petugas Perancah/Ketinggian</p>
                        <p style="font-size: 12px; font-family:Arial; "><input type="checkbox"> &nbsp; Memiliki Sertifikasi petugas confined space</p>
                        <p style="font-size: 12px; font-family:Arial; "><input type="checkbox"> &nbsp; Memiliki Sertifikasi Lainnya (<input type="text">)</p>
                    </td>
                </tr>
            </table>

            <p style="font-size: 10px; font-family:Arial; color:blue;"><b>Petugas Pemantau bisa berasal dari Vendor maupun pihak Indolakto, disepakati saat working permit diajukan ke
bagian Safety.</b></p>

            <table border="1" style="width: 100%;">
                <tr>
                    <td colspan="5"><p style="font-size: 12px; font-family:Arial;">Approval :</p></td>
                </tr>
                <tr>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:center;"><br><br>................<br>Security</p></td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:center;"><br><br>................<br>PIC Area</p></td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:center;"><br><br>................<br>PIC</p></td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:center;"><br><br>................<br>SHE Officer</p></td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:center;"><br><br>................<br>QA/FS</p></td>
                </tr>
            </table>

        </div>
    </section>

    <table border="1px" style="width: 100%; background-color:black;">
        <tr>
            <td><p style="font-size: 15px; font-family: Arial; color:white; text-align:center"><b>MONITOR PEKERJAAN</b></p></td>
        </tr>
    </table>
    <table border="1" style="width:100%;">
        <tr>
            <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>Kebutuhan Monitoring</b></p><br><p style="text-align:center"><input type="checkbox"> Perlu <input type="checkbox"> Tidak Perlu</p></td>
            <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>Frekuensi Monitoring</b></p><br><p style="text-align:center"><input type="checkbox"> Per jam <input type="checkbox"> per shift <input type="checkbox"> per hari</p></td>
            <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>Monitoring Oleh</b></p><br><p style="text-align:center"><input type="checkbox"> Engineering <input type="checkbox"> Produksi <input type="checkbox"> QA <input type="checkbox"> HSE</p></td>
        </tr>
        <tr>
            <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>Metode Monitoring</b></p><br><p style="text-align:center"><input type="checkbox"> Dialogue / cek langsung <br><input type="checkbox"> Lainnya <input type="text"></p></td>
            <td><p style="font-size: 12px; font-family:Arial; color:blue; text-align:center"><b>Hal Yang Dimonitor</b></p><br><p style="text-align:center"><input type="checkbox"> Kerapihan(5S) <br><input type="checkbox"> Keselamatan kerja dan lingkungan <br><input type="checkbox"> Potensi mengkontaminasi produk</p></td>
            <td style="background-color:black;"><p style="font-size: 12px; font-family:Arial; color:white; text-align:center"><b>WARNING!!</b></p><br><p style="font-size: 12px; font-family:Arial; color:white; text-align:center">Tidak diperkenankan bekerja melebihi jam kerja<br>yang telah di persyaratkan dalam peraturan<br>
perundangan & Perusahaan, Atau jika diperlukan<br>maka di ajukan ijin kelebihan jam kerja secara<br>terpisah.
</p></td>
        </tr>
    </table>

    <table border="1px" style="width: 100%; background-color:black;">
        <tr>
            <td><p style="font-size: 15px; font-family: Arial; color:white; text-align:center"><b>SERAH TERIMA KERJA</b></p></td>
        </tr>
    </table>
    <table border="1" style="width:100%;">
        <tr>
            <td colspan="3"><p style="font-size: 12px; font-family:Arial; color:blue;"><b>Syarat setelah pekerjaan selesai</b></p></td>
        </tr>
        <tr>
            <td><p style="font-size: 12px; font-family:Arial; color:blue;"><b>Pembersihan Area Kerja
                <br><input type="checkbox"> &nbsp; Wet Cleaning
                <br><input type="checkbox"> &nbsp; Dry Cleaning
            </br></p></td>
            <td><p style="font-size: 12px; font-family:Arial;"><b>
                <br><input type="checkbox"> &nbsp; Air &nbsp;<input type="checkbox" style="margin-left: 70px;"> &nbsp; Bahan Kimia, sebutkan <input type="text">
                <br><input type="checkbox"> &nbsp; Vacumm cleaner &nbsp;<input type="checkbox" style="margin-left: 12px;"> &nbsp; Lainnya, sebutkan <input type="text">
            </br></p></td>
        </tr>
        <tr>
            <td><p style="font-size: 12px; font-family:Arial; color:blue;"><b>Peralatan bersih
                <br><input type="checkbox"> &nbsp; Wet Cleaning
                <br><input type="checkbox"> &nbsp; Dry Cleaning
            </br></p></td>
            <td><p style="font-size: 12px; font-family:Arial;"><b>
                <br><input type="checkbox"> &nbsp; Air &nbsp;<input type="checkbox" style="margin-left: 70px;"> &nbsp; Bahan Kimia, sebutkan <input type="text">
                <br><input type="checkbox"> &nbsp; Vacumm cleaner &nbsp;<input type="checkbox" style="margin-left: 12px;"> &nbsp; Lainnya, sebutkan <input type="text">
            </br></p></td>
        </tr>
        <tr>
            <td><p style="font-size: 12px; font-family:Arial; color:blue;"><b>Inspeksi final safety & quality</p></td>
            <td><p style="font-size: 12px; font-family:Arial;"><b></b></p></td>
        </tr>
    </table>
</body>

</html>