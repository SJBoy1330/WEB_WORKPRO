<style type="text/css">
      * {
        margin: 0;
        padding: 0;
        text-indent: 0;
      }

      h1 {
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 10pt;
      }

      p {
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
        margin: 0pt;
      }

      .a,
      a {
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      .s1 {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      .s2 {
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      li {
        display: block;
      }

      #l1 {
        padding-left: 0pt;
        counter-reset: c1 1;
      }

      #l1>li>*:first-child:before {
        counter-increment: c1;
        content: counter(c1, upper-roman)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l1>li:first-child>*:first-child:before {
        counter-increment: c1 0;
      }

      #l2 {
        padding-left: 0pt;
        counter-reset: c2 1;
      }

      #l2>li>*:first-child:before {
        counter-increment: c2;
        content: counter(c2, decimal)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l2>li:first-child>*:first-child:before {
        counter-increment: c2 0;
      }

      #l3 {
        padding-left: 0pt;
        counter-reset: c3 1;
      }

      #l3>li>*:first-child:before {
        counter-increment: c3;
        content: counter(c3, lower-latin)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l3>li:first-child>*:first-child:before {
        counter-increment: c3 0;
      }

      #l4 {
        padding-left: 0pt;
        counter-reset: c3 1;
      }

      #l4>li>*:first-child:before {
        counter-increment: c3;
        content: counter(c3, lower-latin)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l4>li:first-child>*:first-child:before {
        counter-increment: c3 0;
      }

      #l5 {
        padding-left: 0pt;
        counter-reset: c2 1;
      }

      #l5>li>*:first-child:before {
        counter-increment: c2;
        content: counter(c2, decimal)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l5>li:first-child>*:first-child:before {
        counter-increment: c2 0;
      }

      #l6 {
        padding-left: 0pt;
        counter-reset: c3 1;
      }

      #l6>li>*:first-child:before {
        counter-increment: c3;
        content: counter(c3, lower-latin)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l6>li:first-child>*:first-child:before {
        counter-increment: c3 0;
      }

      #l7 {
        padding-left: 0pt;
        counter-reset: c3 1;
      }

      #l7>li>*:first-child:before {
        counter-increment: c3;
        content: counter(c3, lower-latin)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l7>li:first-child>*:first-child:before {
        counter-increment: c3 0;
      }

      #l8 {
        padding-left: 0pt;
        counter-reset: d1 2;
      }

      #l8>li>*:first-child:before {
        counter-increment: d1;
        content: counter(d1, decimal)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l8>li:first-child>*:first-child:before {
        counter-increment: d1 0;
      }

      #l9 {
        padding-left: 0pt;
        counter-reset: d2 1;
      }

      #l9>li>*:first-child:before {
        counter-increment: d2;
        content: counter(d2, lower-latin)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l9>li:first-child>*:first-child:before {
        counter-increment: d2 0;
      }

      #l10 {
        padding-left: 0pt;
        counter-reset: c2 1;
      }

      #l10>li>*:first-child:before {
        counter-increment: c2;
        content: counter(c2, decimal)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l10>li:first-child>*:first-child:before {
        counter-increment: c2 0;
      }

      #l11 {
        padding-left: 0pt;
        counter-reset: c2 1;
      }

      #l11>li>*:first-child:before {
        counter-increment: c2;
        content: counter(c2, decimal)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l11>li:first-child>*:first-child:before {
        counter-increment: c2 0;
      }

      #l12 {
        padding-left: 0pt;
        counter-reset: c2 1;
      }

      #l12>li>*:first-child:before {
        counter-increment: c2;
        content: counter(c2, decimal)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l12>li:first-child>*:first-child:before {
        counter-increment: c2 0;
      }

      #l13 {
        padding-left: 0pt;
        counter-reset: c3 1;
      }

      #l13>li>*:first-child:before {
        counter-increment: c3;
        content: counter(c3, lower-latin)". ";
        color: black;
        font-family: Calibri, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 10pt;
      }

      #l13>li:first-child>*:first-child:before {
        counter-increment: c3 0;
      }

      #l14 {
        padding-left: 0pt;
      }

      #l14>li>*:first-child:before {
        content: " ";
        color: black;
        font-family: Symbol, serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 9pt;
      }
</style>
    
<!-- Begin page -->
<main class="h-100">

    <!-- main page content -->
    <div class="main-container container top-20">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-12">
                        <div class="container workpro px-3">
                            <div class="content d-flex flex-column mt-4">
                                <h1 style="text-indent: 0pt;line-height: 12pt; text-align: center;">SYARAT dan KETENTUAN</h1>
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="padding-left: 1pt;text-indent: 0pt;text-align: justify;">Selamat datang di WorkPro. Terima kasih telah mengunduh dan mengunjungi aplikasi WorkPro. Sebelum mengakses dan/atau menggunakan Layanan yang ada di dalam situs dan/atau Aplikasi lunak WorkPro, pastikan Anda membaca dengan cermat dan hati-hati Syarat dan Ketentuan Penggunaan Situs dan Aplikasi Perangkat Lunak WorkPro (“Syarat dan Ketentuan”) yang ada di halaman ini.</p>
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="padding-left: 1pt;text-indent: 0pt;text-align: justify;">Dengan mengunduh dan/atau menggunakan aplikasi WorkPro, Anda setuju bahwa Anda telah membaca, memahami, menerima dan menyetujui serta terikat secara hukum pada Syarat dan Ketentuan ini dan dokumen-dokumen lain sehubungan dengan itu. Jika Anda tidak menyetujui Syarat dan Ketentuan ini, mohon tidak mengakses Situs dan menggunakan Layanan WorkPro.</p>
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="padding-left: 1pt;text-indent: 0pt;text-align: justify;">Syarat dan Ketentuan dalam dokumen ini menggambarkan dan menetapkan ketentuan yang mengendalikan serta mengatur hubungan hukum antara PT. Alpha Tech Indonesiana sebagai penyedia Layanan dan aplikasi WorkPro dan Anda atau User sebagai pengguna WorkPro.</p>
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="padding-left: 1pt;text-indent: 0pt;text-align: justify;">Anda harus membaca Syarat dan Ketentuan dengan hati-hati dan tidak harus menerima Syarat dan Ketentuan atau mendaftar, mengakses atau menggunakan Layanan kecuali Anda setuju dengan Syarat dan Ketentuan ini.</p>
                                <p style="padding-left: 6pt;text-indent: 0pt;text-align: left;" />
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="text-indent: 0pt;text-align: left;" />
                                <ol id="l1">
                                  <li data-list-text="I.">
                                    <p style="padding-top: 2pt;padding-left: 41pt;text-indent: -21pt;line-height: 12pt;text-align: justify;">Informasi Umum</p>
                                    <ol id="l2">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify; margin-top: 10pt;">
                                          <a href="http://www.WorkPro.id/" class="a" target="_blank">Penyedia Layanan adalah WorkPro, sebuah perusahaan yang didirikan berdasarkan hukum Republik Indonesia, sebagai perusahaan pemilik dan penyedia aplikasi berbasis cloud untuk mengelola sumber daya manusia, yaitu WorkPro, yang dapat diakses melalui https://</a>www.WorkPro.id/ (“Situs”) dan diunduh melalui Play Store.
                                        </p>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify;">Layanan adalah Layanan yang tersedia dalam aplikasi WorkPro yang terdiri dari pemantauan kehadiran karyawan, pemantauan lokasi absen, penggunaan sistem deteksi biometrik, pencatatan dan penghitungan jam lembur, pemantauan jam jadwal kerja, dan reimbursement.</p>
                                      </li>
                                      <li data-list-text="3.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify;">User atau Anda merupakan pengguna Layanan dan aplikasi WorkPro yang sesuai dengan konteksnya terdiri dari:</p>
                                        <ol id="l3">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;line-height: 12pt;text-align: justify;">Setiap orang yang mengakses Situs atau mengunduh aplikasi WorkPro;</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Perusahaan, yaitu merupakan badan usaha yang mendaftarkan badan usahanya pada sistem WorkPro; atau</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Karyawan, yaitu tenaga kerja yang didaftarkan oleh Perusahaan untuk diikutsertakan dalam WorkPro.</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="4.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: left;">Hak Kekayaan Intelektual termasuk namun tidak terbatas pada hak cipta dan merek, baik yang terdaftar maupun tidak.</p>
                                      </li>
                                      <li data-list-text="5.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: left;">Waktu Kerja adalah hari saat Penyedia Layanan melakukan kegiatan operasionalnya, yaitu Hari Senin hingga Sabtu, kecuali libur nasional/publik, pukul 08.00- 18.00 WIB.</p>
                                      </li>
                                      <li data-list-text="6.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: left;">Tagihan adalah dokumen yang menuliskan sejumlah biaya yang harus dibayar oleh Perusahaan yang terdiri dari:</p>
                                        <ol id="l4">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Tagihan Layanan Awal adalah tagihan yang harus dibayarkan User pada saat pertama kali mendaftar di WorkPro sesuai dengan harga berdasarkan kuota dan jangka waktu Layanan yang dipilih oleh User atau 7 (tujuh) hari sebelum jangka waktu Layanan Percobaan habis sebagai bentuk penawaran kepada User untuk berlangganan WorkPro ;</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Tagihan Perpanjangan adalah tagihan yang muncul selambat-lambatnya 7 (tujuh) hari sebelum jangka waktu Layanan yang digunakan User berakhir. Apabila User melakukan pembayaran atas Tagihan Perpanjangan, berarti User setuju untuk memperpanjang penggunaan Layanan untuk 1 (satu) bulan berikutnya;</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Tagihan Tambah Kuota adalah Tagihan yang diberikan Penyedia Layanan dan harus dibayar oleh User apabila User bermaksud menambah karyawan yang</p>
                                            <p style="text-indent: 0pt;text-align: left;" />
                                            <p style="padding-top: 1pt;padding-left: 85pt;text-indent: 0pt;text-align: justify;">didaftarkan ke dalam aplikasi WorkPro. Apabila Perusahaan menambah karyawan di tengah periode (sebelum jatuh tempo) maka tagihan yang dikenakan untuk tambahan kuota tersebut adalah pro rata.</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="7.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify;">Data adalah informasi-informasi penting yang harus diberikan oleh Perusahaan kepada WorkPro dalam formulir yang telah disediakan di mana setiap kebenaran informasi yang diberikan merupakan tanggung jawab User.</p>
                                      </li>
                                      <li data-list-text="8.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify;">Kuota Personalia adalah jumlah maksimal Karyawan yang didaftarkan oleh Perusahaan ke dalam akun WorkPro.</p>
                                      </li>
                                    </ol>
                                  </li>
                                  <li data-list-text="II.">
                                    <p style="padding-left: 41pt;text-indent: -24pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Persetujuan</p>
                                    <ol id="l5">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Anda dengan ini menyatakan dan menjamin bahwa:</p>
                                        <ol id="l6">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Anda telah membaca dan menyetujui Syarat dan Ketentuan, Kebijakan Privasi dan Ketentuan Biaya kami;</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Anda akan menggunakan dan/atau mengakses Situs, Layanan, Konten Pengguna Kami hanya untuk tujuan yang sah;</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 85pt;text-indent: -23pt;text-align: justify;">Tidak ada materi apapun yang disampaikan melalui akun Anda atau yang diunggah atau dibagikan oleh Anda melalui Situs, Layanan, dan/atau intercom akan melanggar atau menyalahi hak pihak ketiga manapun, termasuk hak cipta, merek dagang, privasi, publisitas atau hak kepemilikan atau pribadi lainnya; atau mengandung fitnah, pencemaran nama baik atau materi yang melanggar hukum;</p>
                                          </li>
                                          <li data-list-text="d.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Semua informasi yang Anda berikan kepada Penyedia Layanan (termasuk namun tidak terbatas pada informasi data pribadi dan kontak) adalah akurat dan lengkap;</p>
                                          </li>
                                          <li data-list-text="e.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Penyedia Layanan berhak untuk mengubah, memodifikasi, menunda atau menghentikan semua atau sebagian dari Situs, Layanan atau aplikasi WorkPro setiap saat. Penyedia Layanan juga dapat menentukan batas pada fitur-fitur tertentu atau membatasi akses Anda berdasarkan keputusan internal Penyedia Layanan atau peraturan terkait dengan penyelenggaraan Layanan dan aplikasi WorkPro.</p>
                                          </li>
                                          <li data-list-text="f.">
                                            <p style="padding-left: 85pt;text-indent: -22pt;text-align: justify;">Penyedia Layanan dari waktu ke waktu, tanpa memberikan alasan atau pemberitahuan apapun sebelumnya, dapat memperbarui, mengubah, menunda, menghentikan dan/atau mengakhiri semua konten pada situs dan/atau aplikasi WorkPro, secara keseluruhan atau sebagian, termasuk namun tidak terbatas pada desain, teks, gambar grafis, foto, gambar, citra, video, Aplikasi lunak, musk, suara dan file lain, tarif, biaya, kuotasi, data historis, grafik, statistik, artikel, informasi kontak kami, setiap informasi lain, dan pemilihan serta pengaturannya.</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify;">Anda dengan ini menyatakan dan menjamin bahwa :</p>
                                        <ol id="l7">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Anda bertanggung jawab untuk membuat semua pengaturan yang diperlukan agar Anda memiliki akses ke WorkPro. Anda juga bertanggung jawab untuk memastikan bahwa semua orang yang mengakses WorkPro melalui koneksi internet Anda mengetahui dan mematuhi Syarat dan Ketentuan ini serta ketentuan lain yang berlaku.</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">Internet dapat mengalami gangguan, pemadaman transmisi, penundaan transmisi karena lalu lintas internet atau transmisi data yang salah sebagaimana hal-hal tersebut melekat pada internet yang bersifat terbuka bagi publik.</p>
                                          </li>
                                        </ol>
                                      </li>
                                    </ol>
                                  </li>
                                  <li data-list-text="III.">
                                    <p style="padding-left: 41pt;text-indent: -26pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Penggunaan Layanan dan Aplikasi</p>
                                    <p style="text-indent: 0pt;text-align: left;">
                                      <br />
                                    </p>
                                    <p style="padding-left: 27pt;text-indent: 0pt;text-align: left;">Dengan Anda melanjutkan penggunaan atau pengaksesan WorkPro, berarti Anda telah menyatakan dan menjamin kepada kami bahwa:</p>
                                    <p style="padding-left: 40pt;text-indent: 0pt;text-align: left;" />
                                    <p style="text-indent: 0pt;text-align: left;">
                                      <br />
                                    </p>
                                    <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify;">1. Anda hanya diperkenankan untuk mengakses dan/atau menggunakan WorkPro untuk keperluan Perusahaan dan non-komersil, yang berarti bahwa Situs ini hanya boleh diakses dan digunakan secara langsung oleh Perusahaan yang sedang mencari produk atau Layanan untuk mengelola sumber daya manusia. Akses dan penggunaan Situs di luar keperluan Perusahaan atau non-komersil dilarang, dan melanggar Syarat dan Ketentuan ini.</p>
                                    <p style="padding-left: 60pt;text-indent: -16pt;text-align: left;" />
                                    <ol id="l8">
                                      <li data-list-text="2.">
                                        <p style="padding-left: 68pt;text-indent: -24pt;line-height: 12pt;text-align: justify;">Anda tidak diperkenankan menggunakan WorkPro untuk hal sebagai berikut:</p>
                                        <ol id="l9">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">untuk menyakiti, menyiksa, mempermalukan, memfitnah, mencemarkan nama baik, mengancam, mengintimidasi atau mengganggu orang atau bisnis lain, atau appaun yang melanggar privasi atau yang Penyedia Layanan anggap penuh kebencian, tidak senonoh, tidak patut, tidak pantas, atau diskriminatif;</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;line-height: 12pt;text-align: justify;">dengan cara yang melawan hukum, menipu, atau tindakan komersil;</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">dengan melanggar atau menyalahi hak orang lain, termasuk tanpa terkecuali hak paten, merek dagang, hak cipta, rahasia dagang, publisitas, dan hak milik lainnya;</p>
                                          </li>
                                          <li data-list-text="d.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">untuk membuat, memeriksa, memperbarui, mengubah atau memperbaiki database, rekaman, atau direktori Anda ataupun orang lain;</p>
                                          </li>
                                          <li data-list-text="e.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;text-align: justify;">menggunakan kode komputer otomatis, proses atau sistem “screen scraping”, program, robot, net crawler, spider, pemrosesan data, trawling atau kode komputer; dan/atau</p>
                                          </li>
                                          <li data-list-text="f.">
                                            <p style="padding-left: 85pt;text-indent: -16pt;line-height: 12pt;text-align: justify;">melanggar Syarat dan Ketentuan, atau petunjuk lainnya yang ada pada WorkPro.</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="3.">
                                        <p style="padding-left: 68pt;text-indent: -16pt;text-align: justify;">Penyedia Layanan tidak bertanggung jawab atas kehilangan akibat kegagalan dalam mengakses WorkPro atau metode penggunaan WorkPro yang di luar kendali kami.</p>
                                      </li>
                                      <li data-list-text="4.">
                                        <p style="padding-left: 68pt;text-indent: -16pt;text-align: justify;">Penyedia Layanan tidak bertanggung jawab atau dapat disalahkah atas kehilangan atau kerusakan yang di luar perkiraan saat Anda mengakses atau menggunakan WorkPro. Kehilangan termasuk kehilangan penghematan biaya yang diharapkan, kehilangan bisnis atau kesempatan bisnis, kehilangan pemasukan atau keuntungan, atau kehilangan atau kerusakan apapun yang Anda alami akibat penggunaan WorkPro.</p>
                                      </li>
                                    </ol>
                                  </li>
                                  <li data-list-text="IV.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt">Layanan Percobaan</p>
                                    <ol id="l10">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify; margin-top: 10pt;">Perusahaan dapat memperoleh uji coba akses penggunaan aplikasi WorkPro bebas biaya (“Layanan Percobaan”) untuk maksimal selama 7 (tujuh) hari kalender. Layanan Percobaan diberikan kepada Perusahaan yang disetujui oleh Penyedia Layanan. Layanan Percobaan ini diberikan dengan maksud untuk membantu Perusahaan mengambil keputusan apakah akan menjadi User berlangganan WorkPro.</p>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify;">Selambat-lambatnya 2 (dua) hari sebelum jangka waktu Layanan Percobaan berakhir, Penyedia Layanan akan mengirimkan tagihan kepada Perusahaan sebagai bentuk penawaran kepada Perusahaan untuk menjadi User berlangganan. Apabila Perusahaan membayar tagihan tersebut, berarti Perusahaan telah setuju untuk menjadi User berlangganan WorkPro dan terikat pada Syarat dan Ketentuan ini.</p>
                                      </li>
                                    </ol>
                                  </li>
                                  <li data-list-text="V.">
                                    <p style="padding-left: 41pt;text-indent: -25pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Jangka Waktu Berlangganan</p>
                                    <ol id="l11">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify; margin-top: 10pt;">Perusahaan dapat berlangganan WorkPro untuk per 1 (satu) bulan, 6 (enam) bulan, atau 12 (dua belas) bulan.</p>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;text-align: justify;">Apabila Perusahaan ingin berlangganan WorkPro untuk jangka waktu lebih dari 6 (enam) bulan, maka Perusahaan dapat berkomunikasi dengan Penyedia Layanan melalui unit terkait untuk menuangkan kesepakatan berlangganan ke dalam Perjanjian Penggunaan Layanan. Perjanjian Penggunaan Layanan tersebut secara umum mengacu pada isi dalam Syarat dan Ketentuan ini dengan tidak menutup kemungkinan adanya kesepakatan-kesepakatan lebih spesifik lainnya.</p>
                                      </li>
                                    </ol>
                                  </li>
                                  <li data-list-text="VI.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Kewajiban User</p>
                                    <ol id="l12">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Kewajiban Pembayaran Layanan</p>
                                        <ol id="l13">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 73pt;text-indent: -16pt;text-align: justify;">Tagihan untuk Biaya Layanan WorkPro akan dibuat setiap bulan, mulai satu bulan dari tanggal User mulai berlangganan untuk Layanan WorkPro.</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 73pt;text-indent: -16pt;text-align: justify;">Perusahaan wajib membayarkan seluruh biaya yang ditagihkan sesuai dengan jumlah Karyawan yang didaftarkan pada WorkPro dengan ketentuan mengenai biaya yang ada di Situs melalui bank yang ditunjuk oleh WorkPro.</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 73pt;text-indent: -23pt;line-height: 12pt;text-align: justify;">Skema pembayaran yang dapat dipilih oleh Perusahaan adalah;</p>
                                            <ul id="l14">
                                              <li data-list-text="">
                                                <p style="padding-left: 94pt;text-indent: -21pt;line-height: 12pt;text-align: left;">Pembayaran setiap 1 (satu) bulan;</p>
                                              </li>
                                              <li data-list-text="">
                                                <p style="padding-left: 94pt;text-indent: -21pt;line-height: 12pt;text-align: left;">Pembayaran setiap 6 (enam) bulan; atau</p>
                                              </li>
                                              <li data-list-text="">
                                                <p style="padding-left: 94pt;text-indent: -21pt;line-height: 12pt;text-align: left;">Untuk skema pembayaran 6 (enam) bulan atau 12 (dua belas) bulan, User dapat menandatangani Perjanjian Penggunaan Layanan dengan Penyedia Layanan.</p>
                                              </li>
                                            </ul>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Kewajiban User untuk menghormati Hak Kekayaan Intelektual WorkPro.</p>
                                        <p style="padding-left: 60pt;text-indent: 0pt;text-align: justify; margin-top: 10pt;">Semua Hak Kekayaan Intelektual dalam WorkPro ini dimiliki oleh Penyedia Layanan. Semua informasi dan bahan, termasuk namun tidak terbatas pada, Aplikasi lunak, teks, data, grafik, citra, merek dagang, logo, ikon, kode html dan kode lainnya dalam Website ini dilarang untuk dipublikasikan, dimodifikasi, disalin, direproduksi, digandakan atau diubah dengan cara apa pun tanpa izin yang dinyatakan oleh Penyedia Layanan. Jika User melanggar hak-hak ini, Penyedia Layanan berhak untuk membuat gugatan perdata untuk jumlah keseluruhan kerusakan atau kerugian yang diderita. Pelanggaran-pelanggaran ini juga bisa merupakan tindak pidana sebagaimana diatur oleh peraturan perundang-undangan yang berlaku.</p>
                                      </li>
                                      <li data-list-text="3.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Ganti Rugi</p>
                                        <p style="padding-left: 60pt;text-indent: 0pt;text-align: justify; margin-top: 10pt;">User setuju untuk mengganti rugi Penyedia Layanan dan petugasnya terhadap semua
                                        kerugian, pajak, biaya, biaya hukum, dan kewajiban (saat ini, di masa yang akan datang,
                                        kontingensi, atau apapun yang berbasis ganti rugi), yang diderita oleh Penyedia Layanan
                                        sebagai hasil atau hubungan dari pelanggaran Syarat dan Ketentuan ini atau dokumen
                                        terkait lainnya yang dilakukan oleh User dan/atau tindakan yang dilakukan oleh Penyedia
                                        Layanan ketika terjadi pelanggaran Syarat dan Ketentuan ini atau dokumen terkait
                                        lainnya.</p>
                                      </li>
                                    </ol>
                                  </li>
                                  <li data-list-text="VII.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Penghentian Layanan</p>
                                    <ol id="l12">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -24pt;line-height: 12pt;text-align: justify; margin-top:10pt">Penyedia Layanan dapat menghentikan pemberian Layanan dan akses WorkPro kepada
                                        User atau mengakhiri Perjanjian Penggunaan Layanan dengan User dengan alasan antara
                                        lain sebagai berikut:</p>
                                        <ol id="l13">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 77pt;text-indent: -16pt;text-align: justify;">User tidak melakukan pembayaran Tagihan Perpanjangan;</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 77pt;text-indent: -16pt;text-align: justify;">User melanggar sebagian atau seluruh isi Syarat dan Ketentuan ini; dan/atau</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 77pt;text-indent: -16pt;text-align: justify;">User melanggar sebagian atau seluruh dokumen yang berlaku lainnya.</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -24pt;line-height: 12pt;text-align: justify;">User dapat menghentikan penggunaan Layanan dan aplikasi WorkPro dengan membuat
                                        surat penghentian Layanan yang ditujukan kepada WorkPro pada alamat:</p>
                                        <ol id="l13">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 77pt;text-indent: -16pt;text-align: justify;">Aliyan Business Centre A 5th Floor</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 77pt;text-indent: -16pt;text-align: justify;">Jl. Hasanudin 66 Sidoarjo 61215</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 77pt;text-indent: -16pt;text-align: justify;">Sidoarjo – Indonesia</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="3.">
                                        <p style="padding-left: 60pt;text-indent: -24pt;line-height: 12pt;text-align: justify;">Apabila User masih dalam waktu kerjasama / kontrak yang telah disepakati dan memiliki
                                        dana setelah User menghentikan penggunaan WorkPro atau User mengakhiri Perjanjian Penggunaan Layanan atau Layanan diberhentikan oleh Penyedia Layanan atas alasanalasan di Bagian VII. 1, maka User tidak akan memperoleh kembali Deposit tersebut (norefund). </p>
                                      </li>
                                    </ol>
                                  </li>
                                  <li data-list-text="VIII.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top:10pt">Perjanjian Tingkat Layanan</p>
                                    <ol id="l12">

                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -24pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Target Ketersediaan Layanan</p>
                                        <p style="padding-left: 47pt;text-indent: 0pt;text-align: justify; margin-top: 10pt;">WorkPro memberikan jaminan sehubungan dengan reliabilitas sistem semaksimal mungkin dan pengawalan 24 jam customer service untuk setiap bulan kalender.</p>
                                      </li>

                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -24pt;line-height: 12pt;text-align: justify;">Pengecualian</p>
                                        <p style="padding-left: 47pt;text-indent: 0pt;text-align: justify; margin-top: 10pt;">Sistem mengalami kegagalan tidak menjadi tanggung jawab Penyedia Layanan apabila kegagalan sistem tersebut disebabkan oleh:</p>
                                        <ol id="l13">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Penggunaan Layanan oleh User dengan cara yang tidak diizinkan dalam Syarat dan Ketentuan atau Perjanjian Penggunaan Layanan yang berlaku;</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Masalah internet umum, kejadian force majeure atau faktor lain di luar kendali Penyedia Layanan;</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Kegagalan atau malfungsi pada peralatan User termasuk namun tidak terbatas pada Aplikasi lunak, koneksi jaringan atau infrastruktur lainnya; atau</p>
                                          </li>
                                          <li data-list-text="d.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Kegagalan atau malfungsi sistem, tindakan atau kelalaian pihak ketiga; atau pemeliharaan terjadwal atau perawatan darurat yang wajar. </p>
                                          </li>
                                        </ol>
                                      </li>

                                      <li data-list-text="3.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify;">User menghubungi Penyedia Layanan untuk memperoleh bantuan penggunaan WorkPro hanya melalui layanan chat intercom yang tersedia pada Situs di Waktu Kerja. </p>
                                      </li>
                                    </ol>
                                  </li>

                                  <li data-list-text="IX.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Hubungan dengan Pihak Ketiga</p>
                                    <ol id="l12">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Penyedia Layanan tidak akan memberikan Data User kepada pihak ketiga kecuali diwajibkan oleh hukum dan/atau atas perintah peraturan perundang-undangan atau lembaga pemerintah, atau atas persetujuan User. </p>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify;">WorkPro tidak bertanggung jawab atas Layanan pihak ketiga yang bermitra dengan WorkPro. </p>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -16pt;line-height: 12pt;text-align: justify;">Seluruh resiko yang terjadi apabila diakibatkan oleh Layanan pihak ketiga yang bermitra dengan WorkPro merupakan tanggung jawab pihak ketiga</p>
                                      </li>
                                    </ol>
                                  </li>

                                  <li data-list-text="X.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Transmisi Elektronik</p>
                                    <p style="padding-left: 27pt;text-indent: -0pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Syarat dan Ketentuan ini, dan setiap amandemennya, dengan cara apa pun yang diterima, harus diperlakukan sebagai kontrak sebagaimana mestinya dan harus dianggap memiliki akibat hukum yang mengikat sama seperti versi asli yang ditandatangani secara langsung</p>
                                  </li>

                                  <li data-list-text="XI.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Force Majeure</p>
                                    <p style="padding-left: 27pt;text-indent: -0pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Dalam hal ini apabila WorkPro tidak dapat melaksanakan kewajiban baik sebagian maupun seluruhnya yang diakibatkan oleh hal-hal diluar kekuasaan atau kemampuan WorkPro, termasuk namun tidak terbatas pada bencana alam, perang, huru-hara, adanya larangan pemerintah yang tidak memperbolehkan WorkPro untuk beroperasi dibawah jurisdiksi hukum Indonesia, serta kejadian-kejadian atau peristiwa-peristiwa diluar kekuasaan atau kemampuan WorkPro, maka dengan ini User membebaskan WorkPro dalam segala macam tuntutan dalam bentuk apapun terkait dengan hal kondisi tersebut dimana Penyedia Layanan tidak dapat melakukan kewajibannya baik sebagian maupun keseluruhan. </p>
                                  </li>

                                  <li data-list-text="XII.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Penyelesaian Sengketa</p>
                                    <ol id="l12">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 60pt;text-indent: -20pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Dalam hal terjadi sengketa atau perselisihan yang timbul dari atau sehubungan dengan Syarat dan Ketentuan ini, Penyedia Layanan dan Perusahaan melakukan pembahasan dengan itikad baik untuk mencapai penyelesaian berdasarkan kesepakatan bersama dalam waktu 30 (tiga puluh) Hari Kerja sejak tanggal pemberitahuan perselisihan. Namun, jika perselisihan tersebut tidak dapat diselesaikan melalui musyawarah dalam waktu 30 (tiga puluh) Hari Kerja, maka sengketa atau perselisihan tersebut akan diselesaikan melalui Pengadilan Negeri Sidoarjo. </p>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 60pt;text-indent: -20pt;line-height: 12pt;text-align: justify;">Syarat dan Ketentuan ini menggunakan hukum atau jurisdiksi negara Republik Indonesia.</p>
                                      </li>
                                    </ol>
                                  </li>

                                  <li data-list-text="XIII.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Ketentuan Lain-lain</p>
                                    <ol id="l12">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 51pt;text-indent: -24pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Disclaimer</p>
                                        <ol id="l13">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">WorkPro dalam hal ini tidak bertanggung jawab terhadap segala macam bentuk kelalaian yang dilakukan oleh User.</p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Dengan menggunakan Layanan WorkPro, User secara otomatis mengikuti sistem yang terdapat pada fitur-fitur Layanan WorkPro. </p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">User bertanggung jawab untuk memastikan kebenaran, keabsahan dan kejelasan dokumen-dokumen untuk pendaftaran WorkPro, dan dengan ini User membebaskan WorkPro dari segala gugatan, tuntutan dan atau ganti rugi dari pihak manapun sehubungan dengan ketidakbenaran informasi, data, keterangan, kewenangan dan atau kuasa yang diberikan oleh User.</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 51pt;text-indent: -24pt;line-height: 12pt;text-align: justify;">Perubahan</p>
                                        <p style="padding-left: 42pt;text-indent: 0pt;text-align: justify; margin-top: 10pt;">Dengan memberikan pemberitahuan sebelumnya kepada User, sesuai dengan ketentuan yang berlaku, User dengan ini setuju bahwa setiap saat WorkPro berhak mengubah maupun memperbaiki, menambah atau mengurangi ketentuan dalam Syarat dan Ketentuan terikat pada seluruh perubahan yang dilakukan oleh WorkPro. </p>
                                      </li>

                                      <li data-list-text="2.">
                                        <p style="padding-left: 51pt;text-indent: -24pt;line-height: 12pt;text-align: justify;">Komunikasi:</p>
                                        <p style="padding-left: 42pt;text-indent: 0pt;text-align: justify; margin-top: 10pt;">User dapat menghubungi pihak WorkPro melalui:</p>
                                        <ol id="l13">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">E-mail: support@alphatechin.id </p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Telepon: (031) 9972-4999</p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Kantor WorkPro (PT. Alpha Tech Indonesiana) : Aliyan Business Centre A 5th Floor Jl. Hasanudin 66 Sidoarjo 61215 – Indonesia</p>
                                          </li>
                                        </ol>
                                      </li>
                                    </ol>
                                  </li>

                                  <li data-list-text="XIV.">
                                    <p style="padding-left: 41pt;text-indent: -27pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Dokumen Lain yang Berlaku</p>
                                    <ol id="l12">
                                      <li data-list-text="1.">
                                        <p style="padding-left: 51pt;text-indent: -24pt;line-height: 12pt;text-align: justify; margin-top: 10pt;">Sebagai tambahan dari Syarat dan Ketentuan ini, hal-hal berikut juga berlaku terhadap penggunaan Layanan dan aplikasi WorkPro oleh User;</p>
                                        <ol id="l13">
                                          <li data-list-text="a.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Kebijakan Privasi, yang menetapkan ketentuan-ketentuan yang berlaku ketika Penyedia Layanan mengolah setiap Data yang dikumpulkan dari User, atau yang User berikan kepada Penyedia Layanan. Dengan menggunakan WorkPro, Anda setuju dengan pengumpulan, penggunaan, pengungkapan Data Anda dan Anda menjamin bahwa semua Data yang Anda berikat adalah akurat; </p>
                                          </li>
                                          <li data-list-text="b.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Perjanjian Penggunaan Layanan, yang berlaku untuk User atas penggunaan Layanan dan aplikasi WorkPro untuk jangka waktu di atas 6 (enam) bulan. </p>
                                          </li>
                                          <li data-list-text="c.">
                                            <p style="padding-left: 77pt;text-indent: -24pt;text-align: justify;">Perjanjian Pengguna Akhir.</p>
                                          </li>
                                        </ol>
                                      </li>
                                      <li data-list-text="2.">
                                        <p style="padding-left: 51pt;text-indent: -24pt;line-height: 12pt;text-align: justify;">Apabila terdapat perbedaan pada Syarat dan Ketentuan ini dengan Perjanjian Penggunaan
                                        Layanan, maka ketentuan-ketentuan dalam Syarat dan Ketentuan inilah yang berlaku.</p>
                                      </li>
                                    </ol>
                                  </li>
                                </ol>

                                <p style="padding-left: 1pt;text-indent: 0pt;text-align: left;">Dengan menggunakan WorkPro, Anda mengakui bahwa Anda telah membaca, memahami, dan menyetujui Syarat dan Ketentuan ini.</p>
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="padding-left: 1pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Hubungi kami</p>
                                <p style="padding-left: 6pt;text-indent: 0pt;text-align: left;" />
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="padding-top: 3pt;padding-left: 1pt;text-indent: 0pt;line-height: 173%;text-align: left;">
                                  <a href="http://www.workpro.id/" class="a" target="_blank">https://www.workpro.</a>
                                  <a href="mailto:support@alphatechin.id" class="a" target="_blank">id </a>
                                  <a href="mailto:support@alphatechin.id" target="_blank">support@alphatechin.id</a>
                                </p>
                                <p style="padding-left: 1pt;text-indent: 0pt;text-align: left;">Jl. Hasanudin No.66, Plipir, Sekardangan, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61215</p>
                                <p style="text-indent: 0pt;text-align: left;">
                                  <br />
                                </p>
                                <p style="padding-left: 1pt;text-indent: 0pt;text-align: left; margin-bottom: 10pt;">Dokumen ini terakhir diperbarui pada 9 November 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->


</main>
<!-- Page ends-->