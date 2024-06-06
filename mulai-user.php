<?php
include 'functions.php';
?>

<?=template_header_user('Read')?>

<style>
  *{
    overflow-y: hidden;
  }
.background-container {
  background-image: url("img/closeup-shot-one-ginger-cat-hugging-licking-other-isolated-white-wall-removebg-preview\ 2.png");
  background-color: #ffc6ac;
  background-size: cover;
  background-position: center;
  height: 91vh;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff6dc;
  text-align: center;
}

h1,
p {
  margin: 0;
}

h1 {
  font-size: 2em;
}

p {
  font-size: 1.2em;
  margin-top: 10px;
}

.container {
  text-align: center;
}

.center-button {
  background-color: #c4c1a4ea;
  color: #ffff;
  padding: 0.8rem 1.5rem;
  border-radius: 6rem;
  font-size: 1rem;
  font-weight: 500;
  border: none;
  cursor: pointer;
  margin: 10px;
  color: white;
  text-decoration: none;
}

.center-button:hover {
  background-color: #dfdcbe;
}
.center-button a{
  color: white;
  text-decoration: none;
}

</style>
<div class="background-container">
  <div class="content">
    <h1>Ketahui Gejala, Temukan Penyebabnya: <br />Kami Memberi Jawaban</h1>
    <br />
    <div class="container">
      <button class="center-button"><a href="pertanyaan.php">Mulai Pertanyaan</a></button>
    </div>
  </div>
</div>
