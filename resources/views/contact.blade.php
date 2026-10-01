<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - PT Digital Nusantara</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body> <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo"> DIGITAL<span>NUSANTARA</span> </div>
        <div class="nav-menu"> <a href="/">Home</a> <a href="/tentang-kami">Tentang Kami</a> <a
                href="/layanan">Layanan</a> <a href="/kontak">Kontak</a> </div> <a
            href="/kontak" class="nav-button"> Hubungi Kami </a>
    </nav> <!-- HERO KONTAK -->
    <section class="contact-hero">
        <div class="contact-hero-content">
            <p> HUBUNGI KAMI </p>
            <h1> Mari Mulai <span>Kolaborasi</span> </h1>
            <p> Punya ide, pertanyaan, atau ingin berdiskusi mengenai kebutuhan digital bisnis Anda? Kami siap
                mendengarkan dan membantu menemukan solusi yang tepat. </p>
        </div>
    </section> <!-- CONTACT SECTION -->
    <section class="contact-section"> <!-- INFORMASI KONTAK -->
        <div class="contact-info">
            <p class="contact-label"> GET IN TOUCH </p>
            <h2> Kami Siap Membantu </h2>
            <p class="contact-description"> Jangan ragu untuk menghubungi kami. Sampaikan kebutuhan atau ide Anda dan
                mari kita diskusikan bersama. </p> <!-- EMAIL -->
            <div class="contact-item">
                <div class="contact-icon"> @ </div>
                <div>
                    <h3>Email</h3>
                    <p>info@digitalnusantara.com</p>
                </div>
            </div> <!-- PHONE -->
            <div class="contact-item">
                <div class="contact-icon"> # </div>
                <div>
                    <h3>Telepon</h3>
                    <p>+62 812 3456 7890</p>
                </div>
            </div> <!-- ADDRESS -->
            <div class="contact-item">
                <div class="contact-icon"> + </div>
                <div>
                    <h3>Alamat</h3>
                    <p> Jakarta, Indonesia </p>
                </div>
            </div>
        </div> <!-- FORM -->
        <div class="contact-form">
            <h2> Kirim Pesan </h2>
            <p> Isi formulir berikut untuk menghubungi kami. </p>
            <form>
                <div class="form-group"> <label for="nama"> Nama Lengkap </label> <input type="text"
                        id="nama" placeholder="Masukkan nama Anda"> </div>
                <div class="form-group"> <label for="email"> Email </label> <input type="email" id="email"
                        placeholder="Masukkan email Anda"> </div>
                <div class="form-group"> <label for="subjek"> Subjek </label> <input type="text" id="subjek"
                        placeholder="Masukkan subjek pesan"> </div>
                <div class="form-group"> <label for="pesan"> Pesan </label>
                    <textarea id="pesan" rows="6" placeholder="Tuliskan pesan Anda..."></textarea>
                </div> <button type="button" class="contact-button"> Kirim Pesan → </button>
            </form>
        </div>
    </section> <!-- CTA -->
    <section class="contact-cta">
        <p> DIGITAL NUSANTARA </p>
        <h2> Mari Bangun Solusi Digital Bersama </h2> <a href="/" class="btn-secondary"> Kembali ke Home </a>
    </section>
</body>

</html>
