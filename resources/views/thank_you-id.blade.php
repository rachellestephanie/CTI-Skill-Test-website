<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="top_bar">
            <div class="language">
                <a href="{{ url('/thank-you/id') }}">ID</a>
                <div class="language_divider"></div>
                <a href="{{ url('/thank-you') }}">EN</a>
            </div>        
        </div>

        <div class="header">
            <div class="logo">
                <a href="https://www.helios.id/" target="_blank"><img class="logo_helios" src="{{ asset('images/helios.png') }}" alt="logo_helios" /></a>
                <a href="https://www.sangfor.com/" target="_blank"><img class="logo_sangfor" src="{{ asset('images/sangfor.png') }}" alt="logo_sangfor" /></a>
            </div>
        </div>
    </header>

    <section class="thank_you">
        <div class="thank_you_background"></div>
        <div class="thank_you_page" style="width: 850px;">
            <img src="{{ asset('images/thank_you.png') }}" alt="Thank You">
            <h1 style="width: 850px;">Terima Kasih atas Ketertarikan Anda</h1>
            <h2 style="width: 650px;">Tim kami akan menghubungi Anda dalam waktu 5 hari kerja</h2>
            <a href="{{ url('/id') }}" style="width: 400px;">KEMBALI KE HALAMAN UTAMA</a>
        </div>
    </section>

    <footer class="footer">
        <div class="contacts">
            <div class="inner">
                <div class="left">
                    <h1>PT. Helios Informatika Nusantara</h1>
                    <div class="contact">
                        <div class="address">
                            <p>Centennial Tower, Lantai 12,</p>
                            <p>Jl. Jendral Gatot Subroto</p>
                            <p>No. Kav 24-25, Jakarta</p>
                            <p>12930 Indonesia</p>
                        </div>
                        <div class="contact_info">
                            <p><b>Telepon:</b> +62 21 8062 2220</p>
                            <p><b>Email:</b> Tencent@helios.id</p>
                        </div>
                    </div>
                    <div class="network">
                        <a href="https://www.facebook.com/HeliosInformatika/" target="_blank"><img src="{{ asset('images/Facebook.png') }}" alt="facebook" /></a>
                        <a href="https://www.instagram.com/heliosinformatika/" target="_blank"><img src="{{ asset('images/ig@2x.png') }}" alt="instagram" /></a>
                        <a href="https://x.com/SANGFOR" target="_blank"><img src="{{ asset('images/Twitter.png') }}" alt="twitter" /></a>
                        <a href="https://youtube.com/@heliosinformatikanusantara4415?si=2cHCVUFiQ4vh0Zdb" target="_blank"><img src="{{ asset('images/Youtube.png') }}" alt="youtube" /></a>
                        <a href="https://www.linkedin.com/company/pt--helios-informatika-nusantara/" target="_blank"><img src="{{ asset('images/Linkedin.png') }}" alt="linkedin" /></a>
                    </div>
                </div>
                <div class="right">
                    <img src="{{ asset('images/worldmap.png') }}" alt="worldmap" />
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="text">
                <img src="{{ asset('images/copyright.png') }}" alt="copyright">
                <p>2023 - PT. Helios Informatika Nusantara - All Right Reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>