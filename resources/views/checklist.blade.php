<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Checklist Document</title>
<style>
        @media print {
            #printbtn {
                display :  none;
            }
        }

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
            height: 1600px;
            width: 0px;
        }

        .garis_vertikal_2{
            border: 1px black solid;
            margin-left: 5px;
            height: 2290px;
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
    <!-- <section> -->
        <table border="1px" style="width: 100%">
            <tr>
                <td rowspan="2"><img src="{{url('/logo.png')}}" alt="Image" /></td>
                <td rowspan="4">No. Dokumen&emsp; : &nbsp; <input type="text" name="nodokumen" autofocus autocomplete="off">
                    <br><br>Tgl.Dikeluarkan&nbsp;: &nbsp; <input type="date" name="nodokumen" autocomplete="off">
                    <br><br>Halaman &emsp; &emsp; &ensp;: &nbsp; 1 /4
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
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Ada peralatan yang di lepaskan/ di pindahkan dari tempatnya selama perbaikan:<br><input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</br></p></td>
                </tr>
                <tr>
                    <td>6. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Semua personil terkait sudah mengetahui adanya pekerjaan :<br><input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</br></p></td>
                </tr>
                <tr>
                    <td>7. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Warning sign yang sesuai sudah di letakan di tempat yang di perlukan :<br><input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</br></p></td>
                </tr>
                <tr>
                    <td>8. </td>
                    <td><p style="font-size: 12px; font-family:Arial; text-align:justify"><b>Apakah pekerjaan sudah memenuhi working permit yang sesuai : <br><input type="checkbox"> Ya &nbsp; <input type="checkbox"> Tidak</br></p></td>
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
    <!-- </section> -->

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
            <td><p style="font-size: 12px; font-family:Arial; color:blue;"><b>Inspeksi final safety & quality</b></p></td>
            <td><p style="font-size: 12px; font-family:Arial;"><b></b></p></td>
        </tr>
    </table>

    <section>
        <table border="1px" style="width: 100%">
            <tr>
                <td rowspan="2"><img src="{{url('/logo.png')}}" alt="Image" /></td>
                <td rowspan="4">No. Dokumen&emsp; : &nbsp; <input type="text" name="nodokumen" autofocus autocomplete="off">
                    <br><br>Tgl.Dikeluarkan&nbsp;: &nbsp; <input type="date" name="nodokumen" autocomplete="off">
                    <br><br>Halaman &emsp; &emsp; &ensp;: &nbsp; 3 /4
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
        <br>
        <table border="1" style="width: 100%; height:20px;">
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>

        <p style="font-size: 20px; font-family: Arial; text-align:center;"><b>Harap mengisi form ini dengan benar, jangan mengabaikan potensi resiko yang ada, karena sebagai
    bagian dari manajemen kebijakan keselamatan & kesehatan kerja dan lingkungan</b></p>
        <p style="font-size: 25px; font-family: Arial; text-align:center;"><b>“Peranan anda sangat penting dalam menciptakan zero accident”</b></p>
        <hr style="border: 2px solid black;">

        <div class="div-1">
            <p style="font-size: 20px; font-family:Arial; color:blue;"><b>CHECKLIST UMUM YANG DIPERSYARATKAN</b></p>
            
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Alat-alat kerja dan pengaman digunakan dalam kondisi baik dan <br>&emsp;&emsp;&nbsp;memadai</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Alat pelindung diri digunakan sesuai dan baik</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pekerja memahami pekerjaan akan dilakukan dan potensi bahaya di <br>&emsp;&emsp;&nbsp;area kerja</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Ada petugas mengawasi pekerjaan & petugas pemantau yang <br>&emsp;&emsp;&nbsp;terlatih & paham akan tugasnya</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Menjaga kebersihan area kerja dan membuang limbah yang <br>&emsp;&emsp;&nbsp;dihasilkan pada tempat sesuai</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Lembar ijin kerja dipasang di area kerja & dijaga kondisinya</p>
            <hr style="border: 2px solid black;">
            <!-- A -->
            <p style="font-size: 20px; font-family:Arial;"><b>A.&nbsp;&nbsp;Mengelas dan Menggerinda / terkait api</b></p>
            
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Alat pemadam api ringan (APAR) siap untuk digunakan di lokasi <br>&emsp;&emsp;&nbsp;pekerjaan & dalam kondisi baik & siap pakai</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Material (cairan, debu, udara & kain-kain dan buangan oli) mudah <br>&emsp;&emsp;&nbsp;terbakar & meledak telah disingkirkan & dilindungi</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Area kerja dalam kondisi bersih dan aman pada radius 10 meter</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Lantai mudah terbakar dibasahi, ditutup dengan pasir lembab atau <br>&emsp;&emsp;&nbsp;penutup tahan api, selimut atau tirai basah dibentangkan di bawah <br>&emsp;&emsp;&nbsp;dan di sekitar pekerjaan</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Semua lubang di lantai dan tembok ditutup</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Tutup atau matikan pipa-pipa dan ban berjalan mungkin membawa <br>&emsp;&emsp;&nbsp;percikan bunga api ke bahan-bahan mudah terbakar jauh dari lokasi</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Konstruksi bangunan tidak mudah terbakar dan tanpa penutup atau <br>&emsp;&emsp;&nbsp;penyekat mudah terbakar</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Tabung diikat (jika menggunakan) dengat erat</p>
            <hr style="border: 2px solid black;">
            <!-- B -->
            <p style="font-size: 20px; font-family:Arial;"><b>B.&nbsp;&nbsp;Dekat air</b></p>
            
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pasang LOTO / Safety padlock</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pekerja telah terlatih bekerja dekat air & bisa berenang</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;APD lengkap & dalam kondisi berfungsi baik</p>
            <hr style="border: 2px solid black;">
            <!-- C -->
            <p style="font-size: 20px; font-family:Arial;"><b>C.&nbsp;&nbsp;Ketinggian (area kerja diberi pembatas)</b></p>
            <p style="font-size: 17px; font-family:Arial; color:blue;"><b>&emsp;&nbsp;&nbsp;&nbsp;Scaffolding / Perancah</b></p>
            
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;kaki / sepatu / alas kaki dasar kokoh dan baik</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Batang besi penopang baik, kuat dan bebas korosi</p>
            
            <!-- lanjutan E. Instalasi Listrik  -->
            <br>
            <br>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Area kerja dalam kondisi bersih dan kering</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;kelengkapan alat kerja lengkap dan berfungsi dengan baik (test pen, <br>&emsp;&emsp;&nbsp;obeng min dan plus, tang potong - lancip - kombinasi & AVO meter)</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pastikan power / sumber listrik mesin / alat dalam kondisi mati & <br>&emsp;&emsp;&nbsp;telah di LOTO serta ada verifikasi dr petugas berwenang</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Jika dekat air, pastikan support menggunakan bahan isolator</p>
            <hr style="border: 2px solid black;">

            <!-- F -->
            <p style="font-size: 20px; font-family:Arial;"><b>F.&nbsp;&nbsp;Bahan Kimia, Gas & mudah meledak</b></p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Alat pemadam api ringan (APAR) dalam kondisi baik & siap untuk <br>&emsp;&emsp;&nbsp;digunakan di lokasi pekerjaan</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Udara di area kerja dalam kondisi bisa bersirkulasi dgn baik</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pekerja & petugas pengawas memahami terhadap MSDS material <br>&emsp;&emsp;&nbsp;yang dihandlingnya</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Perlengkapan kerja & APD memadai, dalam kondisi baik & <br>&emsp;&emsp;&nbsp;digunakan dgn semestinya</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Sumber listrik & bahan-2 lain yang kontradiktif dengan bahan yang <br>&emsp;&emsp;&nbsp;sedang dikerjakan telah disingkirkan</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Harus ada back up plan/rencana tindakan pengamanan untuk <br>&emsp;&emsp;&nbsp;kondisi darurat (missal : spill kit, safety shower, eye wash, dsb)</p>
            <hr style="border: 2px solid black;">

            <!-- G -->
            <p style="font-size: 20px; font-family:Arial;"><b>G.&nbsp;&nbsp;Alat/ Mesin Bergerak</b></p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Terapkan LOTO & diverifikasi oleh petugas berwenang</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;APD lengkap, dalam kondisi baik & digunakan dengan benar</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pekerja & petugas pengawas memahami terhadap mekanisme <br>&emsp;&emsp;&nbsp;teknis alat/mesin bergerak dikerjakannya</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pastikan area kerja tidak diganggu / diintervensi oleh pihak manapun <br>&emsp;&emsp;&nbsp;yang bisa mempengaruhi alat / mesin yang sedang dikerjakan</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Perlengkapan pendukung lainnya sudah dicek, lengkap, dalam <br>&emsp;&emsp;&nbsp;kondisi baik & bisa digunakan</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Harus ada komunikasi & informasi dengan pihak-pihak terkait</p>
            <hr style="border: 2px solid black;">

            <!-- H -->
            <p style="font-size: 20px; font-family:Arial;"><b>H.&nbsp;&nbsp;Galian</b></p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Peta gambar tersedia</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Penggalian dilakukan dengan alat / manual yang tepat dan dalam <br>&emsp;&emsp;&nbsp;kondisi baik serta layak digunakan (termasuk ada ijin bagi alat-alat <br>&emsp;&emsp;&nbsp;tertentu)</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Tanda / baricade / tali pembatas tersedia</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Diketahui & disetujui pihak terkait termasuk pihak elektrik</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pasang LOTO jika berhubungan untuk memproteksi sumber energi</p>
            <hr style="border: 2px solid black;">
        </div>

        <div class="div-2">
            <div class="garis_vertikal_2"></div>
        </div>

        <div class="div-3">
            <!-- Lanjutan C. Ketinggian (area kerja diberi pembatas) -->
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Penopang terpasang dengan baik</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Perancah rata dan tegak lurus</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Posisi ke atas dan samping aman pada radius 10 meter</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Tidak memakai perlengkapan sementara</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Dilengkapi pengaman orang sekitar</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Dilengkapi jaring / terpal jika perlu</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pijakan / papan dalam kondisi baik & diikat dengan aman</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pengaman scaffolding kokoh, aman dan nyaman</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Bebas dari barang berlebihan,maksimum beban = 250 kg</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Rem roda (jika ada) berfungsi dengan baik</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Penggunaan Scafolding wajib “Bertagging”</p>

            <p style="font-size: 17px; font-family:Arial; color:blue;"><b>&emsp;&nbsp;&nbsp;&nbsp;Tangga tetap / portabel</b></p>

            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Anak tangga harus baik dan lengkap</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Tidak terdapat paku, baut / apapun menonjol dan tajam</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Tangga tidak retak, renggang atau patah baik pada kaki maupun <br>&emsp;&emsp;&nbsp; anak tangganya</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Engsel dalam keadaan baik dan tidak bengkok</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Tangga harus stabil, kokoh, bersih & tali dalam kondisi baik</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pekerjaan dilakukan minimal 2 orang</p>
            <hr style="border: 2px solid black;">
            
            <!-- D -->
            <p style="font-size: 20px; font-family:Arial;"><b>D.&nbsp;&nbsp;Ruang Terbatas</b></p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Valve bagian bawah tangki di buka (di tangki)</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Uji gas di area terbatas sebelum bekerja (minimum oksigen 19,8 %),<br>&emsp;&emsp;&nbsp; uji kadar oksigen sebelum bekerja = <input type="number"> %</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Udara kerja sudah dibersihkan dari gas berbahaya</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Operator telah terlatih bekerja di area terbatas dan menggunakan <br>&emsp;&emsp;&nbsp; APD</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pasang LOTO & ada verifikasi dari petugas berwenang</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Pekerjaan dilakukan Minimal 2 Orang (1 Bekerja dan 1 Orang <br>&emsp;&emsp;&nbsp;Memantau kondisi Pekerja)</p>
            <hr style="border: 2px solid black;">
            
            <!-- E -->
            <p style="font-size: 20px; font-family:Arial;"><b>E.&nbsp;&nbsp;Instalasi Listrik</b></p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Alat pemadam api ringan (APAR) siap untuk digunakan di lokasi <br>&emsp;&emsp;&nbsp;pekerjaan</p>
            <p style="font-size: 15px; font-family:Arial;"><input type="checkbox">&emsp;Udara menyebabkan ketidak nyamanan bekerja di daerah itu telah <br>&emsp;&emsp;&nbsp;dihilangkan</p>
            
        </div>
    </section>

    <button id="printbtn" onclick="window.print();">PRINT</button>

    <script>
        function myFunction() {
        document.getElementById("page-break").style.pageBreakAfter = "always";
        window.print();
        }
    </script>
</body>

</html>