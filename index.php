<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>
<style>
	      * {
        font-family: "Inter", sans-serif;
      }
      section {
        padding-top: 2rem;
        padding-bottom: 2rem;
        padding-left: 7rem;
        padding-right: 7rem;
      }
      .heading {
        font-family: "Montserrat", sans-serif;
        font-weight: 550;
        letter-spacing: 1px;
      }
      .heading span {
        color: #ffc6ac;
      }
      .text {
        font-size: 1.4rem;
        font-weight: 520;
        letter-spacing: 1px;
      }
      .jumbotron {
        padding-top: 10rem;
        font-family: "Montserrat", sans-serif;
        background-color: #ffc6ac;
        padding: 0;
        margin: 0;
      }
      .sponsor {
        background-color: #eee7d1;
        padding-top: 2rem;
        padding-bottom: 2rem;
        padding-left: 20%;
        padding-right: 20%;
      }
      .about {
        background-color: #fff6dc;
      }
      .dokter {
        background-color: #fff6dc;
      }
      .kelebihan {
        background-color: #fff6dc;
      }
      .reviews {
        background-color: #fff6dc;
      }
      .contact {
        background-color: #fff6dc;
        padding-bottom: 5rem;
      }
      .contact form input {
        font-family: "Inter", sans-serif;
        background-color: #ffc6ac;
        border: 5px solid #c4c1a4;
        padding: 1.2rem;
        width: 100%;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
      }
      .contact form input::placeholder {
        color: #fff6dc;
        font-family: "Inter", sans-serif;
        font-size: 1.4rem;
      }
      .contact form button {
        background-color: #c4c1a4;
        color: #9e9fa5;
        font-family: "Inter", sans-serif;
        width: 100%;
        padding: 1.2rem;
        border: none;
        border-radius: 0.5rem;
        font-size: 1.4rem;
      }
      #foot {
        background-color: #dfdcbe;
      }
      .p-6 {
        color: #787551;
        letter-spacing: 0.5px;
      }

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<section class="jumbotron">
      <p class="fs-1 text-center" style="color: white; font-weight: 540">Ketahui Gejala, Temukan Penyebabnya:<br />Kami Memberi Jawaban</p>
      <div class="text">
        <p class="text-center" style="font-size: 1.2rem; color: #9e9fa5; padding-bottom: 1rem">Diagnosis kucing anda segera di aplikasi kami.</p>
      </div>
      <div class="jumbotron-img">
        <img src="img/banner-half.jpg" alt="" style="width: 100%; border-top-right-radius: 45%; border-top-left-radius: 45%" />
      </div>
    </section>
    <section class="sponsor">
      <div class="heading">
        <p class="fs-1 text-center" style="color: #c4c1a4; padding-bottom: 1rem">Our <span>Sponsorship</span></p>
      </div>
      <div class="d-flex align-items-center justify-content-between" id="sp-img">
        <img src="img/royalcanin.png" alt="royalcanin" width="20%" class="img-fluid mb-3" />
        <img src="img/halodoc.png" alt="halodoc" width="20%" class="img-fluid mb-3" />
        <img src="img/meO.png" alt="meO" width="20%" class="img-fluid mb-3" />
        <img src="img/proplan.png" alt="proplan" width="20%" class="img-fluid mb-3" />
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <div class="heading">
              <p class="fs-1" style="color: #c4c1a4; font-weight: 550">About <span>Us</span></p>
            </div>
            <div class="text">
              <p style="color: #9e9fa5; font-size: 1.4rem; font-weight: 520; max-width: 85%">
                Catties memiliki visi untuk membantu pemilik kucing dalam merawat dan menjaga kesehatan kucing mereka. Pemahaman tentang penyakit kucing dan tindakan yang tepat dapat memastikan kesejahteraan dan kebahagiaan kucing Anda.
              </p>
            </div>
          </div>
          <div class="col">
            <img src="img/kucingputih.png" width="100%" style="border-radius: 1rem" />
          </div>
        </div>
      </div>
    </section>
    <section class="dokter">
      <div class="heading">
        <p class="fs-1 text-center" style="color: #c4c1a4; font-weight: 550">Why <span>Choose</span> Us?</p>
      </div>
      <div class="text">
        <p class="text-center" style="color: #9e9fa5; padding-bottom: 1rem">Kami memilih dokter hewan terbaik dalam<br />penelitian diagnosa penyakit ini.</p>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-between">
        <div class="col" style="max-width: 31%">
          <div class="card border border-0" style="background-color: #ffc6ac; padding: 2rem">
            <img src="img/orgcewe1.png" class="card-img-top" style="border-radius: 50%; background-color: #fff6dc" />
            <div class="card-body">
              <p class="card-text text-center" style="color: #9e9fa5; font-size: 1.4rem; font-weight: 600; letter-spacing: 1px">Drh. Hermawan</p>
              <p class="card-text text-center" style="color: #fff6dc; font-size: 1.4rem; font-weight: 520; letter-spacing: 1px">Spesialis Penyakit Dalam.</p>
            </div>
          </div>
        </div>
        <div class="col" style="max-width: 31%">
          <div class="card border border-0" style="background-color: #ffc6ac; padding: 2rem">
            <img src="img/orgcowok.png" class="card-img-top" style="border-radius: 50%; background-color: #fff6dc" />
            <div class="card-body">
              <p class="card-text text-center" style="color: #9e9fa5; font-size: 1.4rem; font-weight: 600; letter-spacing: 1px">Drh. David Beck</p>
              <p class="card-text text-center" style="color: #fff6dc; font-size: 1.4rem; font-weight: 520; letter-spacing: 1px">Spesialis Penyakit Umum.</p>
            </div>
          </div>
        </div>
        <div class="col" style="max-width: 31%">
          <div class="card border border-0" style="background-color: #ffc6ac; padding: 2rem">
            <img src="img/orgcewe2.png" style="border-radius: 50%; background-color: #fff6dc" />
            <div class="card-body">
              <p class="card-text text-center" style="color: #9e9fa5; font-size: 1.4rem; font-weight: 600; letter-spacing: 1px">Drh. Herta</p>
              <p class="card-text text-center" style="color: #fff6dc; font-size: 1.4rem; font-weight: 520; letter-spacing: 1px">Spesialis Kecantikan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="kelebihan">
      <div class="heading">
        <p class="fs-1 text-end" style="color: #c4c1a4; font-weight: 550">Apa Saja <br /><span>Kelebihan</span> Kami?</p>
      </div>
      <div class="text">
        <p class="text-end" style="color: #9e9fa5; padding-bottom: 2rem">Berikut adalah fitur - fitur kami.</p>
      </div>
      <div class="d-flex flex-row mb-3 justify-content-between">
        <div class="p-2 d-flex flex-row align-items-center" style="font-size: 1.2rem; font-weight: bold; letter-spacing: 1px; color: #9e9fa5; max-width: 25%">
          <div style="padding: 1.2rem; background-color: #eee7d1; border-radius: 1rem; margin-right: 1rem"><img src="img/Frame.png" style="width: 3rem" /></div>
          Mendiagnosis Penyakit Kucing
        </div>
        <div class="p-2 d-flex flex-row align-items-center" style="font-size: 1.2rem; font-weight: bold; letter-spacing: 1px; color: #9e9fa5; max-width: 25%">
          <div style="padding: 1.2rem; background-color: #eee7d1; border-radius: 1rem; margin-right: 1rem"><img src="img/home.png" style="width: 3rem" /></div>
          Praktis Melalui Rumah Sendiri
        </div>
        <div class="p-2 d-flex flex-row align-items-center" style="font-size: 1.2rem; font-weight: bold; letter-spacing: 1px; color: #9e9fa5; max-width: 25%">
          <div style="padding: 1.2rem; background-color: #eee7d1; border-radius: 1rem; margin-right: 1rem"><img src="img/heart.png" style="width: 3rem" /></div>
          Membahagiakan Kucing Anda
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="heading">
        <p class="fs-1 text-center" style="color: #c4c1a4; font-weight: 550">Our <span>Happy</span> Clients</p>
      </div>
      <div class="text">
        <p class="text-center" style="color: #9e9fa5; padding-bottom: 2rem">Beberapa komentar pengguna Catties<br />yang kami hormati.</p>
      </div>
      <div class="review">
        <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-between">
          <div class="col" style="max-width: 33%">
            <div class="card border border-0" style="background-color: #c4c1a4; padding: 1rem">
              <div class="card-body" style="background-color: #c4c1a4">
                <p class="card-text" style="color: #fff6dc; font-size: 1.1rem; font-weight: 520; letter-spacing: 1px">
                  <img src="img/kutip.png" style="padding-bottom: 1rem" /><br />Bagus sekali, sangat praktis hanya dengan mengisi survei dan itu akan keluar hasilnya.
                </p>
              </div>
              <div class="card-bottom d-flex align-items-center" style="background-color: #fff6dc; padding: 1rem; border-radius: 0.5rem">
                <img src="img/umji.jpeg" style="border-radius: 50%; width: 5rem" />
                <p class="card-text" style="color: #9e9fa5; font-size: 1.1rem; font-weight: 550; letter-spacing: 1px; margin-left: 1rem">Nabola Fajrin</p>
              </div>
            </div>
          </div>
          <div class="col" style="max-width: 33%">
            <div class="card border border-0" style="background-color: #c4c1a4; padding: 1rem">
              <div class="card-body" style="background-color: #c4c1a4">
                <p class="card-text" style="color: #fff6dc; font-size: 1.1rem; font-weight: 520; letter-spacing: 1px">
                  <img src="img/kutip.png" style="padding-bottom: 1rem" /><br />Bagus sekali, sangat praktis hanya dengan mengisi survei dan itu akan keluar hasilnya.
                </p>
              </div>
              <div class="card-bottom d-flex align-items-center" style="background-color: #fff6dc; padding: 1rem; border-radius: 0.5rem">
                <img src="img/eunha.jpeg" style="border-radius: 50%; width: 5rem" />
                <p class="card-text" style="color: #9e9fa5; font-size: 1.1rem; font-weight: 550; letter-spacing: 1px; margin-left: 1rem">Aqil Rabbani</p>
              </div>
            </div>
          </div>
          <div class="col" style="max-width: 33%">
            <div class="card border border-0" style="background-color: #c4c1a4; padding: 1rem">
              <div class="card-body" style="background-color: #c4c1a4">
                <p class="card-text" style="color: #fff6dc; font-size: 1.1rem; font-weight: 520; letter-spacing: 1px">
                  <img src="img/kutip.png" style="padding-bottom: 1rem" /><br />Bagus sekali, sangat praktis hanya dengan mengisi survei dan itu akan keluar hasilnya.
                </p>
              </div>
              <div class="card-bottom d-flex align-items-center" style="background-color: #fff6dc; padding: 1rem; border-radius: 0.5rem">
                <img src="img/sinb.jpeg" style="border-radius: 50%; width: 5rem" />
                <p class="card-text" style="color: #9e9fa5; font-size: 1.1rem; font-weight: 550; letter-spacing: 1px; margin-left: 1rem">Wulan Shasa</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="rounded d-flex" id="kontak" style="background-color: #ffc6ac; max-width: 100%">
        <div class="object-fit-cover" id="gambarkontak" style="max-width: 40%">
          <img src="img/kucingAbu.jpg" class="rounded object-fit-cover" style="max-width: 100%" />
        </div>
        <div class="container" style="padding: 5%">
          <div class="row justify-content-center">
            <div class="heading">
              <p style="color: #fff6dc; font-weight: 550; font-size: 3.5rem">Contact Us</p>
            </div>
            <form>
              <input type="text" placeholder="Nama" />
              <input type="text" placeholder="Email" />
              <input type="text" placeholder="Pesan" />
              <button type="submit">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
<?=template_footer()?>