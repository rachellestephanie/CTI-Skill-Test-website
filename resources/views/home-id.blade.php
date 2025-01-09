<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="top_bar">
            <div class="language">
                <a href="{{ url('/id') }}">ID</a>
                <div class="language_divider"></div>
                <a href="{{ url('/') }}">EN</a>
            </div>        
        </div>

        <div class="header">
            <div class="logo">
            <a href="https://www.helios.id/" target="_blank"><img class="logo_helios" src="{{ asset('images/helios.png') }}" alt="logo_helios" /></a>
            <a href="https://www.sangfor.com/" target="_blank"><img class="logo_sangfor" src="{{ asset('images/sangfor.png') }}" alt="logo_sangfor" /></a>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="banner_background">
            <div class="banner_background_gradient"></div>
        </div>          
        <h1 style="width: 850px;">Keamanan Siber Menjadi Mudah dengan Sangfor Cyber ​​Command</h1>
        <h2 style="width: 850px;">Sederhanakan keamanan siber Anda dengan antarmuka yang mudah digunakan dari Sangfor Cyber ​​Command dan perlindungan ancaman yang komprehensif.</h2>
        <a href="#form">
            <p>UJI COBA GRATIS</p>
            <img src="{{ asset('images/arrow.png') }}" alt="arrow_right" />
            <div class="arrow_background"></div>
        </a>
    </section>

    <section id="form" name="about_and_form">
        <div class="about_form_background"></div>

        <div class="about" style="padding-top: 150px;">
            <h1 style="width: 500px;">Tentang Sangfor Cyber Command</h1>
            <div class="about_content" style="height: 700px;">
                <p>Sangfor Cyber ​​Command termasuk dalam Network Detection & Response (NDR) Solutions yang merupakan platform manajemen keamanan komprehensif yang dirancang untuk melindungi bisnis dari ancaman siber.</p>
                <p>Sangfor Cyber ​​Command menyediakan berbagai solusi keamanan seperti deteksi ancaman, respons insiden, dan manajemen kepatuhan. Dengan Sangfor Cyber ​​Command, organisasi dapat memantau lalu lintas jaringan mereka, menganalisis kejadian keamanan, dan menanggapi insiden dengan cepat dan efisien.</p>
                <p>Platform ini menggunakan algoritma pembelajaran mesin canggih dan analisis data besar untuk mengidentifikasi dan mencegah serangan siber sebelum menyebabkan kerusakan. Platform ini juga menawarkan dasbor yang mudah digunakan yang memungkinkan bisnis melacak postur keamanan mereka secara real-time dan membuat keputusan yang tepat berdasarkan wawasan yang diberikan.</p>
                <p>Secara keseluruhan, Sangfor Cyber ​​Command adalah alat yang ampuh bagi bisnis yang ingin memperkuat pertahanan keamanan siber mereka dan melindungi aset mereka dari ancaman masa kini.</p>
            </div>
        </div>

        <form id="trialForm" action="{{ url('/thank-you/id') }}" method="GET">
            <div class="form_title">
                <h1>Dapatkan Free Trial selama 1 bulan,</h1>
                <h2>analisa keamanan network anda dan lihat hasilnya!</h2>
            </div>
            <div class="form_input">
                <div class="form_name">
                    <div class="forms">
                        <label>Nama Pertama *</label>
                        <input type="text" placeholder="Nama Pertama" required />
                    </div>
                    <div class="forms">
                        <label>Nama Terakhir *</label>
                        <input type="text" placeholder="Nama Terakhir" required />
                    </div>
                </div>
                <div class="forms">
                    <label>Email Perusahaan *</label>
                    <input type="text" placeholder="email@mail.com" required />
                </div>
                <div class="forms">
                    <label>Posisi *</label>
                    <input type="text" placeholder="Pekerjaan Anda" required />
                </div>
                <div class="forms">
                    <label>Nama Perusahaan *</label>
                    <input type="text" placeholder="Perusahaan Anda" required />
                </div>
                <div class="forms">
                    <label>Industri *</label>
                    <select name="industry" required>
                        <option value="">Pilih Industri</option>
                        <option value="technology">Teknologi</option>
                        <option value="finance">Finansial</option>
                        <option value="healthcare">Kesehatan</option>
                        <option value="education">Pendidikan</option>
                        <option value="manufacturing">Manufaktur</option>
                    </select>
                </div>
                <div class="forms">
                    <label>Nomor Telepon *</label>
                    <input type="text" placeholder="Nomor Anda" required />
                </div>
            </div>
            <div class="form_checkbox">
                <input type="checkbox" name="checkbox" value="Yes">
                <label>klik kotak ini untuk setuju dihubungi oleh tim kami dan dapatkan penawaran menarik untuk Sangfor untuk Helios!</label>
            </div>
            <button type="submit">KIRIM</button>
        </form>
    </section>

    <section class="advantage">
        <div class="advantage_background">
            <div class="advantage_background_gradient"></div>
        </div>
        <h1>Keunggulan Sangfor Cyber Command</h1>
        <div class="benefits">
            <div class="benefit">
                <img src="{{ asset('images/Virus Scan.png') }}" alt="benefit1" />
                <h2>Deteksi Ancaman Tingkat Lanjut</h2>
                <p>Sangfor Cyber ​​Command menawarkan kemampuan deteksi ancaman tingkat lanjut yang dapat membantu pengguna mengidentifikasi dan menanggapi potensi ancaman keamanan secara real-time. Ini termasuk mengidentifikasi dan memblokir malware, ransomware, dan jenis ancaman cyber lainnya.</p>
            </div>
            <div class="benefit">
                <img src="{{ asset('images/Anti Virus.png') }}" alt="benefit2" />
                <h2>Visibilitas dan Kontrol Jaringan</h2>
                <p>Sangfor Cyber ​​Command memberi pengguna visibilitas dan kontrol atas infrastruktur jaringan mereka. Ini termasuk memantau lalu lintas jaringan, mengendalikan akses ke sumber daya, dan mengelola kebijakan jaringan.</p>
            </div>
            <div class="benefit">
                <img src="{{ asset('images/Upload.png') }}" alt="benefit3" />
                <h2>Keamanan Cloud</h2>
                <p>Sangfor Cyber ​​Command menawarkan solusi keamanan cloud yang dapat membantu pengguna mengamankan aplikasi dan infrastruktur berbasis cloud mereka. Ini termasuk perlindungan terhadap ancaman khusus cloud seperti pelanggaran data, pembajakan akun, dan ancaman internal.</p>
            </div>
            <div class="benefit">
                <img src="{{ asset('images/Cyber Security.png') }}" alt="benefit4" />
                <h2>Manajemen Keamanan Komprehensif</h2>
                <p>Sangfor Cyber ​​Command menyediakan platform manajemen keamanan komprehensif bagi pengguna yang dapat membantu mereka mengelola dan memantau seluruh infrastruktur keamanan dari satu konsol. Ini termasuk mengelola kebijakan keamanan, melacak peristiwa keamanan, dan membuat laporan.</p>
            </div>
        </div>
    </section>

    <section class="features">
        <h1>Fitur Sangfor Cyber Command</h1>
        <div class="feature_content">
            <div class="up">
                <div class="feature">
                    <img src="{{ asset('images/feature1.png') }}" alt="feature1" />
                    <h2>Intelijen Ancaman</h2>
                    <p>Algoritma AI dan pembelajaran mesin yang canggih memberikan intelijen ancaman yang komprehensif untuk tetap unggul dalam menghadapi ancaman dunia maya terkini.</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('images/feature2.png') }}" alt="feature2" />
                    <h2>Deteksi Waktu Nyata</h2>
                    <p>Sistem peringatan waktu nyata memberikan pemberitahuan instan tentang potensi insiden keamanan.</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('images/feature3.png') }}" alt="feature3" />
                    <h2>Investigasi Ancaman</h2>
                    <p>Kemampuan investigasi ancaman mendalam mengidentifikasi akar penyebab insiden keamanan dan mengambil tindakan yang tepat untuk mencegah kejadian di masa mendatang.</p>
                </div>
            </div>
            <div class="down">
                <div class="feature">
                    <img src="{{ asset('images/feature4.png') }}" alt="feature4" />
                    <h2>Solusi Keamanan Komprehensif</h2>
                    <p>Kemampuan investigasi ancaman mendalam mengidentifikasi akar penyebab insiden keamanan dan mengambil tindakan yang tepat untuk mencegah kejadian di masa mendatang.</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('images/feature5.png') }}" alt="feature5" />
                    <h2>Respons Cepat</h2>
                    <p>Integrasi yang erat dengan solusi keamanan jaringan dan titik akhir memungkinkan respons cepat terhadap potensi insiden keamanan, meminimalkan dampak serangan apapun.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="value_background"></div>
        <h1>Nilai Sangfor Cyber ​​Command bagi Pelanggan</h1>
        <div class="value_content">
            <div class="value">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Mendeteksi ancaman yang diketahui dan tidak diketahui</p>
            </div>
            <div class="value" id="value2" style="width: 874;">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Visibilitas yang jauh lebih baik terhadap postur keamanan seluruh infrastruktur</p>
            </div>
            <div class="value" id="value3" style="width: 874;">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Analisis Dampak Bisnis membantu TI untuk memahami apa yang sudah terganggu dan apa yang perlu diprioritaskan</p>
            </div>
            <div class="value">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Respons Lebih Cepat untuk meningkatkan kontrol keamanan secara keseluruhan</p>
            </div>
            <div class="value">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Jauh lebih hemat biaya dibandingkan solusi lain seperti SIEM</p>
            </div>
        </div>
    </section>

    <section class="customer">
        <h1>Referensi Cyber Command Customers</h1>
        <div class="customer_logo">
            <img src="{{ asset('images/J&T.png') }}" alt="logo1" style="width: 238px; height: 78px;" />
            <img src="{{ asset('images/JRP_Insurance.png') }}" alt="logo2" style="width: 195px; height: 121px;" />
            <img src="{{ asset('images/OK Bank.png') }}" alt="logo3" style="width: 227px; height: 84px;" />
            <img src="{{ asset('images/samudera indonesia.png') }}" alt="logo4" style="width: 307.96px; height: 87.11px;" />
        </div>
    </section>

    <section class="explore">
        <h1>Jelajahi Sangfor Cyber ​​Command dengan Helios</h1>
        <h2 style="width: 1000px;">Helios Informatika Nusantara selaku Distributor Sangfor akan menyediakan</h2>
        <div class="provides">
            <div class="provide">
                <img src="{{ asset('images/provide1.png') }}" alt="provide1" />
                <h3>Implementasi NDR</h3>
            </div>
            <div class="provide">
                <img src="{{ asset('images/provide2.png') }}" alt="provide2" />
                <h3>Respon Insiden dan Perburuan Ancaman</h3>
            </div>
            <div class="provide">
                <img src="{{ asset('images/provide3.png') }}" alt="provide3" />
                <h3>Pemeliharaan Keamanan Perangkat</h3>
            </div>
        </div>
    </section>

    <footer>
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
                        <a href="https://www.facebook.com/HeliosInformatika/" target="_blank"><img src="../images/Facebook.png" alt="facebook" /></a>
                        <a href="https://www.instagram.com/heliosinformatika/" target="_blank"><img src="../images/ig@2x.png" alt="instagram" /></a>
                        <a href="https://x.com/SANGFOR" target="_blank"><img src="../images/Twitter.png" alt="twitter" /></a>
                        <a href="https://youtube.com/@heliosinformatikanusantara4415?si=2cHCVUFiQ4vh0Zdb" target="_blank"><img src="../images/Youtube.png" alt="youtube" /></a>
                        <a href="https://www.linkedin.com/company/pt--helios-informatika-nusantara/" target="_blank"><img src="../images/Linkedin.png" alt="linkedin" /></a>
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
                <p style="width: 740px;">2023 - PT. Helios Informatika Nusantara - Hak Cipta Dilindungi Undang-Undang</p>
            </div>
        </div>
    </footer>
</body>
</html>