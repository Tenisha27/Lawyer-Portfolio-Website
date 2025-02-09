<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <!-- Link to Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .services {
            text-align: center;
            padding: 50px 0;
        }

        .services h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            position: relative;
        }

        .services h2::after {
            content: "";
            display: block;
            width: 100px;
            height: 3px;
            background: #007bff;
            margin: 10px auto 0;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
            padding: 0 20px;
        }

        .service {
            padding: 20px;
            border-radius: 8px;
            transition: background 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out;
            text-align: center;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .service:hover {
            background: #007bff;
            color: #fff;
            transform: scale(1.05);
        }

        .service h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .service p {
            font-size: 0.9em;
            color: #333;
        }

        .service:hover p {
            color: #fff;
        }

        .service .icon {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #007bff;
        }

        .service:hover .icon {
            color: #fff;
        }

        .extra-info {
            display: none;
            margin-top: 10px;
            font-size: 0.9em;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .service:hover .extra-info {
            color: #fff;
        }

        .extra-info.show {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include('navbar.php');?>

    <section class="services" id="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service">
                <i class="fas fa-gavel icon"></i>
                <h3>Legal Opinions</h3>
                <p>Expert legal opinions and advice tailored to your needs.</p>
                <div class="extra-info">
                    We provide thorough analysis and tailored advice for various legal issues
                    Legal opinions for mortgage the property, Deposit of title deeds, etc.
                </div>
            </div>
            <div class="service">
                <i class="fas fa-file-alt icon"></i>
                <h3>Affidavits</h3>
                <p>Preparation and filing of affidavits for legal purposes.</p>
                <div class="extra-info">
                    Comprehensive affidavit preparation services to support your legal needs and ensure proper filing. 
                    Affidavit for name change, old age pension, widow pension, paper publication, succession certificate, noc affidavit,  bhagya Laxmi affidavit, parents  consent affidavit, general power of attorney.
                </div>
            </div>
            <div class="service">
                <i class="fas fa-file-contract icon"></i>
                <h3>Agreement Drafting</h3>
                <p>Drafting and reviewing agreements to protect your interests.</p>
                <div class="extra-info">
                    We offer expert drafting and reviewing of agreements to ensure your interests are well protected and legally sound.
                    Agreement for rent agreement, lease agreement, contract agreement, sale deed agreement, loan agreement.
                </div>
            </div>
            <div class="service">
                <i class="fas fa-file-signature icon"></i>
                <h3>Document Registration</h3>
                <p>Assistance with registration of various legal documents.</p>
                <div class="extra-info">
                    Our service includes assistance with registering various types of legal documents, ensuring compliance with legal requirements.
                    Document Registration for sale deed, gift deed, release deed, loan clearance, GPA registration, partition deed, will registration etc.
                </div>
            </div>
            <div class="service">
                <i class="fas fa-ring icon"></i>
                <h3>Marriage Registration</h3>
                <p>Legal support and guidance for marriage registration.</p>
                <div class="extra-info">
                    We provide comprehensive guidance and support for registering marriages, ensuring all legal requirements are met.
                    Marriage registration for Hindu marriage, special marriage.
                </div>
            </div>
            <div class="service">
                <i class="fas fa-balance-scale icon"></i>
                <h3>Civil and Criminal Cases</h3>
                <p>Representation and defense in civil and criminal litigation.</p>
                <div class="extra-info">
                    Expert representation and defense in both civil and criminal cases, focusing on achieving the best possible outcome.
                    Civil case property suit, criminal case, dowry case, roberry case, cheating case etc
                </div>
            </div>
            <div class="service">
                <i class="fas fa-car-crash icon"></i>
                <h3>Accident Cases</h3>
                <p>Legal assistance and representation in accident cases.</p>
                <div class="extra-info">
                    We offer specialized legal assistance for accident cases, including representation and guidance throughout the legal process.
                    Accident case for major and minor injury to the petitioner. In death cases dependents gets compensation, vehicle damage compensation.
                </div>
            </div>
            <div class="service">
                <i class="fas fa-divide icon"></i>
                <h3>Divorce Cases</h3>
                <p>Support and guidance for divorce proceedings.</p>
                <div class="extra-info">
                    Comprehensive support for divorce cases, including legal advice and representation to navigate the complexities of divorce proceedings.
                    Divorce case for mutual consent and contest case
                </div>
            </div>
            <div class="service">
                <i class="fas fa-cogs icon"></i>
                <h3>Other Legal Services</h3>
                <p>Customized legal services to meet your specific needs.</p>
                <div class="extra-info">
                    Tailored legal services designed to address your unique needs and circumstances, providing personalized solutions.
                    Other legal services,legal advice for parties etc
                </div>
            </div>
        </div>
    </section>
    <script>
        // JavaScript to handle the click event
        document.querySelectorAll('.service').forEach(service => {
            service.addEventListener('click', () => {
                // Toggle visibility of the extra-info
                const extraInfo = service.querySelector('.extra-info');
                extraInfo.classList.toggle('show');
            });
        });
    </script>
</body>
</html>
