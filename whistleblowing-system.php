<?php include 'layout/header.php';?>
<style>
table {
  margin-bottom:5%;
  width: 70%;
  font-size:12px;
  box-shadow: 0px 20px 40px #00000014;
  border-color:red;
}

th {
  height: 60px;
  color: #121212;
}
td {
  text-align: left;
  height: 40px;
  width:2px;
  color: #121212;;
}
tr:nth-child(even){
    background-color: #FCD1161A;
}

th {
  background-color: #FCD116;
  color: #0F2B5B;
}

</style>

<section id="img-header" class="img-header">
<img src="asset/slider9.png">
<ul class="breadcrumb">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Tentang Kami</li>
  <li>Whistleblowing System</li>
</div>
</ul>
</section>

<div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4>Whistleblowing System</h4>
        <p><small>Nasabah dan mitra kerja yang terhormat, </p><p> Mantap berkomitmen membangun lingkungan bisnis yang sehat, berintegritas, dan bertujuan untuk menjadi Bank terpercaya dalam memberikan layanan berkualitas. Untuk menjaga komitmen tersebut, kami memiliki sarana pelaporan whistleblowing system (WBS). WBS memberikan kesempatan bagi Anda untuk melaporkan dugaan pelanggaran hukum atau fraud, pelanggaran kode etik, maupun pelanggaran benturan kepentingan yang dilakukan oleh internal Bank Mantap. </small>
        </p>
        <p> <small>Kami akan memproses lebih lanjut pengaduan yang memenuhi syarat dan kriteria, apabila pelapor memberikan informasi identitas diri berupa nama (diperbolehkan anonim) serta nomor telepon/e-mail yang bisa dihubungi. Kami menjamin kerahasiaan data diri pelapor. </p>
        <p>Pelapor sekurangnya harus dapat menjelaskan apa yang terjadi (what), pihak yang terlibat (who), waktu kejadian (when), lokasi kejadian (where), dan bagaimana terjadinya (how).</small></p>
       
        </div>
      <div class="col-sm-5">
        <img src="asset/whistle.png"  alt="Logo" width="550px" style="left: 686px; height: 360px; margin-bottom:8%;">
      </div>
    </div>
</div>

<div class="container">

<h5>Fraud</h5>
<p><small>Tindakan penyimpangan atau pembiaran yang sengaja dilakukan untuk mengelabui, menipu atau memanipulasi Bank, nasabah, atau pihak lain yang terjadi di lingkungan Bank dan/atau menggunakan sarana Bank sehingga mengakibatkan Bank, nasabah, atau pihak lain menderita kerugian dan/atau pelaku fraud memperoleh keuntungan keuangan baik secara langsung maupun tidak langsung.</small></p>
 
<table>
<thead>
  <tr>
  <th class="pl-4" style="border-radius: 16px 16px 0px 0px;" colspan="2">Jenis-jenis perbuatan yang tergolong fraud adalah</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td class="text-right" style="width:5%;">1.</td>
    <td>Kecurangan</td>
  </tr>
  <tr>
    <td class="text-right">2.</td>
    <td style=>Penipuan</td>
  </tr>
  <tr>
    <td  class="text-right">3.</td>
    <td>Pengelapan Aset</td>
  </tr>
  
  <tr>
    <td  class="text-right">4.</td>
    <td>Pembocoran Informasi</td>
  </tr>
  
  <tr>
    <td  class="text-right">5.</td>
    <td>Tindak pidana perbankan (tipibank) dan tindakan-tindakan lainnya yang dapat dipersamakan dengan itu (SP strategi Anti Fraud)</td>
  </tr>
</tbody>

</table>


<h5>Kode etik</h5>
<p><small>Perilaku jajaran Bank yang tidak sesuai dengan budaya perusahaan yang telah dirumuskan untuk mencapai visi dan misi Bank.</small></p>
 

<h5>Benturan Kepentingan</h5>
<p><small>Suatu kondisi dimana anggota jajaran Bank dalam menjalankan tugas dan kewajibannya mempunyai kepentingan diluar kepentingan dinas, baik yang menyangkut kepentingan pribadi, keluarga, maupun kepentingan pihak-pihak lain sehingga anggota jajaran Bank tersebut dimungkinkan kehilangan objektivitasnya dalam mengambil keputusan dan kebijakan sesuai kewenangan yang telah diberikan Bank kepadanya. (Arsitektur Kebijakan Bank Mantap).</small></p>
 

<h5>Gratifikasi</h5>
<p><small>penerimaan/pemberian dalam arti luas, antara lain penerimaan/pemberian uang atau yang dapat dipersamakan dengan uang, barang, rabat (discount), membership, komisi, pinjaman tanpa bunga, tiket (perjalanan/wisata/konser dan lain-lain), fasilitas penginapan, paket perjalanan (wisata/ibadah/dinas dan lain-lain), beasiswa, pengobatan cuma-cuma dan fasilitas lainnya baik yang diterima di dalam negeri maupun di luar negeri, yang dilakukan dengan menggunakan sarana elektronik atau tanpa sarana elektronik. (SP Gratifikasi).</small></p>

<h5>Kirimkan laporan WBS Anda melalui e-Form di bawah ini.</h5>
<p><small>Terima kasih atas kepedulian dan kepercayaan Anda kepada kami.</small></p>
<p><small>Salam</small></p>
 
        <div class="card card-body mb-5 mt-5">
        <h4 class="text-center mb-3 mt-3">Formulir Pelaporan Whistleblowing System Bank Mantap</h5>
        <div class="container" style="padding: 6px 5%;">
        <form action="whistleblowing-system-respond.php" method="post">
          <div class="mb-3">
            <label class="form-label">Nama Pelapor*</label>
            <input type="text" name="nama_pelapor" class="form-control" placeholder="Nama lengkap pelapor" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Telepon*</label>
            <input type="text" class="form-control" placeholder="Nomor telepon hp, rumah tau kantor" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email*</label>
            <input type="email" class="form-control" placeholder="Misal: joko@gmail.com" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Tindakan/Perbuatan yang dilaporkan</label>
            <br>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" selected>
              <label class="form-check-label" for="inlineRadio1">Fraud</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Pelanggaran Kode Etik</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Gratifikasi</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Pelanggaran Hukum Lainnya</label>
            </div>
          </div>

          <hr>

          <div class="mb-3">
            <label class="form-label">Nama Terlapor*</label>
            <input type="text" class="form-control" placeholder="Nama lengkap terlapor" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jabatan Terlapor*</label>
            <input type="text" class="form-control" placeholder="Jabatan terlapor" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Waktu Kejadian (tanggal dan periode)*</label>
            <input type="text" class="form-control" placeholder="Contoh: 5-20 januari 2018 atau selama bulan December di tahin 2018" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Lokasi Kejadian*</label>
            <input type="text" class="form-control" placeholder="Contoh: Sekitar bundaran HI Jakarta" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Kronologis Kejadian*</label>
            <textarea class="form-control" rows="3" placeholder="Ceritakan detail kejadian" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Nominal*</label>
            <input type="number" class="form-control" placeholder="Contoh: kurang lebih 10 juta rupiah" required>
          </div>

          
          <img src="asset/recaptcha.gif" width="590px"> <!-- this area for google reCapthca Script -->
          <button type="submit" class="btn btn-lg btn-more">Kirim </button> 
        </form>
        </div>
        </div>

     <br/>
</div>
<?php include 'layout/footer.php';?>