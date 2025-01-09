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
        <h1>Cybersecurity Made Simple with Sangfor Cyber Command</h1>
        <h2>Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</h2>
        <a href="#form">
            <p>FREE TRIAL</p>
            <img src="{{ asset('images/arrow.png') }}" alt="arrow_right" />
            <div class="arrow_background"></div>
        </a>
    </section>

    <section id="form">
        <div class="about_form_background"></div>

        <div class="about">
            <h1>About Sangfor Cyber Command</h1>
            <div class="about_content">
                <p>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.</p>
                <p>It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.</p>
                <p>The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage.  It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.</p>     
                <p>Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats. </p>
            </div>
        </div>

        <form id="trialForm" action="{{ url('/thank-you') }}" method="GET">
            <div class="form_title">
                <h1>Dapatkan Free Trial selama 1 bulan,</h1>
                <h2>analisa keamanan network anda dan lihat hasilnya!</h2>
            </div>
            <div class="form_input">
                <div class="form_name">
                    <div class="forms">
                        <label>First Name *</label>
                        <input type="text" placeholder="First Name" required />
                    </div>
                    <div class="forms">
                        <label>Last Name *</label>
                        <input type="text" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="forms">
                    <label>Corporate Email *</label>
                    <input type="text" placeholder="email@mail.com" required />
                </div>
                <div class="forms">
                    <label>Job Title *</label>
                    <input type="text" placeholder="Your job" required />
                </div>
                <div class="forms">
                    <label>Company Name *</label>
                    <input type="text" placeholder="Your company" required />
                </div>
                <div class="forms">
                    <label>Industry *</label>
                    <select name="industry" required>
                        <option value="" disabled selected>Select Industry</option>
                        <option value="technology">Technology</option>
                        <option value="finance">Finance</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="education">Education</option>
                        <option value="manufacturing">Manufacturing</option>
                    </select>
                </div>
                <div class="forms">
                    <label>Phone Number *</label>
                    <input type="text" placeholder="Your number" required />
                </div>
            </div>
            <div class="form_checkbox">
                <input type="checkbox" name="checkbox" value="Yes">
                <label>click this box to agree to be contacted by  our team and get great deals on Sangfor for Helios!</label>
            </div>
            <button type="submit">SEND</button>
        </form>
    </section>

    <section class="advantage">
        <div class="advantage_background">
            <div class="advantage_background_gradient"></div>
        </div>
        <h1>Sangfor Cyber Command Advantages</h1>
        <div class="benefits">
            <div class="benefit">
                <img src="{{ asset('images/Virus Scan.png') }}" alt="benefit1" />
                <h2>Advanced Threat Detection</h2>
                <p>Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
            </div>
            <div class="benefit">
                <img src="{{ asset('images/Anti Virus.png') }}" alt="benefit2" />
                <h2>Network Visibility and Control</h2>
                <p>Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
            </div>
            <div class="benefit">
                <img src="{{ asset('images/Upload.png') }}" alt="benefit3" />
                <h2>Cloud Security</h2>
                <p>Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
            </div>
            <div class="benefit">
                <img src="{{ asset('images/Cyber Security.png') }}" alt="benefit4" />
                <h2>Comprehensive Security Management</h2>
                <p>Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
            </div>
        </div>
    </section>

    <section class="features">
        <h1>Sangfor Cyber Command Features</h1>
        <div class="feature_content">
            <div class="up">
                <div class="feature">
                    <img src="{{ asset('images/feature1.png') }}" alt="feature1" />
                    <h2>Threat Intelligence</h2>
                    <p>Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('images/feature2.png') }}" alt="feature2" />
                    <h2>Real-Time Detections</h2>
                    <p>Real-time alert system provides instant notification of potential security incidents.</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('images/feature3.png') }}" alt="feature3" />
                    <h2>Threats Investigation</h2>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
            </div>
            <div class="down">
                <div class="feature">
                    <img src="{{ asset('images/feature4.png') }}" alt="feature4" />
                    <h2>Comprehensive Security Solutions</h2>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('images/feature5.png') }}" alt="feature5" />
                    <h2>Rapid Response</h2>
                    <p>Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="value_background"></div>
        <h1>Sangfor Cyber Command’s Value to Customers</h1>
        <div class="value_content">
            <div class="value">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Detect known dan unknown threats</p>
            </div>
            <div class="value" id="value2" style="width: 653px;">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Much better visibility of security posture of the entire infrastructure</p>
            </div>
            <div class="value" id="value3" style="width: 633px;">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark"> 
                <p>Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
            </div>
            <div class="value">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Faster Response to improve overall security control</p>
            </div>
            <div class="value">
                <img src="{{ asset('images/checkmark.png') }}" alt="checkmark">
                <p>Much more cost effective than other solutions such as SIEM</p>
            </div>
        </div>
    </section>

    <section class="customer">
        <h1>Cyber Command Customers Reference</h1>
        <div class="customer_logo">
            <img src="{{ asset('images/J&T.png') }}" alt="logo1" style="width: 238px; height: 78px;" />
            <img src="{{ asset('images/JRP_Insurance.png') }}" alt="logo2" style="width: 195px; height: 121px;" />
            <img src="{{ asset('images/OK Bank.png') }}" alt="logo3" style="width: 227px; height: 84px;" />
            <img src="{{ asset('images/samudera indonesia.png') }}" alt="logo4" style="width: 307.96px; height: 87.11px;" />
        </div>
    </section>

    <section class="explore">
        <h1>Explore Sangfor Cyber Command with Helios</h1>
        <h2>Helios Informatika Nusantara as Sangfor Distributor will provide</h2>
        <div class="provides">
            <div class="provide">
                <img src="{{ asset('images/provide1.png') }}" alt="provide1" />
                <h3>NDR Implementation</h3>
            </div>
            <div class="provide">
                <img src="{{ asset('images/provide2.png') }}" alt="provide2" />
                <h3>Incident Response and Threat Hunting</h3>
            </div>
            <div class="provide">
                <img src="{{ asset('images/provide3.png') }}" alt="provide3" />
                <h3>Device Security Maintenance</h3>
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
                            <p>Centennial Tower, 12th Floor,</p>
                            <p>Jl. Jendral Gatot Subroto</p>
                            <p>No. Kav 24-25, Jakarta</p>
                            <p>12930 Indonesia</p>
                        </div>
                        <div class="contact_info">
                            <p><b>Phone:</b> +62 21 8062 2220</p>
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