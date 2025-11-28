const translations = {
    hu: {
        nav_about: "Rólunk",
        nav_services: "Szolgáltatások",
        nav_candidates: "Munkavállalóknak",
        nav_contact: "Kapcsolat",
        hero_title: "VERONAJOBS &mdash;<br><span class=\"gold-text\">EXKLUZÍV<br>MUNKAERŐ-<br>KÖZVETÍTÉS</span>",
        hero_subtitle: "Összekötjük a megbízható munkaadókat a gondosan válogatott szakemberekkel Magyarországon és Szlovákiában.<br><br>Diszkréció, bizalom, minőség – ez a Veronajob.",
        hero_btn_partners: "Partnereknek",
        hero_btn_candidates: "Munkát keresek",
        about_title: "RÓLUNK",
        about_text_1: "A Veronajob több mint egy fejvadász cég. Stratégiai partnerek vagyunk, akik hidat képeznek a tehetség és a lehetőség között.",
        about_text_2: "Csapatunk szakértői több éves tapasztalattal rendelkeznek a prémium HR szolgáltatások terén, biztosítva, hogy ügyfeleink csak a legkiválóbb jelöltekkel találkozzanak.",
        services_title: "SZOLGÁLTATÁSAINK",
        service_1_title: "Munkaerő-közvetítés prémium szinten",
        service_1_desc: "Teljes körű toborzási folyamat menedzselése, a specifikációtól a kiválasztásig.",
        service_2_title: "Rugalmas létszámmegoldások",
        service_2_desc: "Időszakos és projektalapú munkaerő biztosítása gyorsan és hatékonyan.",
        service_3_title: "Teljes körű HR támogatás",
        service_3_desc: "Tanácsadás, bérszámfejtés és adminisztrációs terhek átvállalása.",
        service_4_title: "Nemzetközi közvetítés",
        service_4_desc: "Határon átnyúló lehetőségek Magyarország és Szlovákia között.",
        contact_title: "KAPCSOLAT",
        contact_intro: "Lépjen velünk kapcsolatba, és közösen megtaláljuk a legjobb megoldást.",
        form_name: "Név",
        form_name_placeholder: "Az Ön neve",
        form_email: "E-mail cím",
        form_email_placeholder: "email@pelda.hu",
        form_phone: "Telefonszám",
        form_phone_placeholder: "+36 30 123 4567",
        form_submit: "KÜLDÉS",
        footer_rights: "&copy; 2025 VERONAJOBS. Minden jog fenntartva.",
        company_details_title: "Számlázási adatok",
        company_address: "Záhradnícka 997/9, 932 01 Nagymegyer",
        company_phone: "+421 944 384 669",
        company_email: "veronajobs@gmail.com",
        company_ico: "IČO"
    },
    sk: {
        nav_about: "O nás",
        nav_services: "Služby",
        nav_candidates: "Pre uchádzačov",
        nav_contact: "Kontakt",
        hero_title: "VERONAJOBS &mdash;<br><span class=\"gold-text\">EXKLUZÍVNY<br>NÁBOR<br>ZAMESTNANCOV</span>",
        hero_subtitle: "Spájame spoľahlivých zamestnávateľov so starostlivo vybranými odborníkmi v Maďarsku a na Slovensku.<br><br>Diskrétnosť, dôvera, kvalita – to je Veronajob.",
        hero_btn_partners: "Pre partnerov",
        hero_btn_candidates: "Hľadám prácu",
        about_title: "O NÁS",
        about_text_1: "Veronajob je viac než len headhuntingová spoločnosť. Sme strategickí partneri, ktorí tvoria most medzi talentom a príležitosťou.",
        about_text_2: "Odborníci nášho tímu majú dlhoročné skúsenosti v oblasti prémiových HR služieb, čím zabezpečujú, že naši klienti sa stretnú len s tými najlepšími kandidátmi.",
        services_title: "NAŠE SLUŽBY",
        service_1_title: "Prémiový nábor zamestnancov",
        service_1_desc: "Riadenie celého náborového procesu, od špecifikácie až po výber.",
        service_2_title: "Flexibilné personálne riešenia",
        service_2_desc: "Rýchle a efektívne zabezpečenie dočasnej a projektovej pracovnej sily.",
        service_3_title: "Komplexná HR podpora",
        service_3_desc: "Poradenstvo, mzdové účtovníctvo a prevzatie administratívnej záťaže.",
        service_4_title: "Medzinárodné sprostredkovanie",
        service_4_desc: "Cezhraničné príležitosti medzi Maďarskom a Slovenskom.",
        contact_title: "KONTAKT",
        contact_intro: "Kontaktujte nás a spoločne nájdeme to najlepšie riešenie.",
        form_name: "Meno",
        form_name_placeholder: "Vaše meno",
        form_email: "E-mailová adresa",
        form_email_placeholder: "email@priklad.sk",
        form_phone: "Telefónne číslo",
        form_phone_placeholder: "+421 900 123 456",
        form_submit: "ODOSLAŤ",
        footer_rights: "&copy; 2025 VERONAJOBS. Všetky práva vyhradené.",
        company_details_title: "Fakturačné údaje",
        company_address: "Záhradnícka 997/9, 932 01 Veľký Meder",
        company_phone: "+421 944 384 669",
        company_email: "veronajobs@gmail.com",
        company_ico: "IČO"
    }
};

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.getElementById('mobile-menu');
    const navMenu = document.querySelector('.nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    const langButtons = document.querySelectorAll('.lang-btn');

    // Language Handling
    function setLanguage(lang) {
        localStorage.setItem('veronajobs_lang', lang);
        document.documentElement.lang = lang;

        // Update active button state
        langButtons.forEach(btn => {
            if (btn.dataset.lang === lang) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // Update text content
        document.querySelectorAll('[data-i18n]').forEach(element => {
            const key = element.getAttribute('data-i18n');
            if (translations[lang] && translations[lang][key]) {
                element.innerHTML = translations[lang][key];
            }
        });

        // Update placeholders
        document.querySelectorAll('[data-i18n-placeholder]').forEach(element => {
            const key = element.getAttribute('data-i18n-placeholder');
            if (translations[lang] && translations[lang][key]) {
                element.placeholder = translations[lang][key];
            }
        });
    }

    // Initialize Language
    const savedLang = localStorage.getItem('veronajobs_lang') || 'sk';
    setLanguage(savedLang);

    // Language Switcher Event Listeners
    langButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const lang = btn.dataset.lang;
            setLanguage(lang);
        });
    });

    // Toggle Mobile Menu
    mobileMenu.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close Mobile Menu when a link is clicked
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });

    // Add background to Navbar on Scroll
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.padding = '0.5rem 0';
            navbar.style.background = 'rgba(5, 5, 5, 0.98)';
        } else {
            navbar.style.padding = '1rem 0';
            navbar.style.background = 'rgba(5, 5, 5, 0.95)';
        }
    });

    // Simple Form Submission Prevention (for demo)
    // const contactForm = document.getElementById('contactForm');
    // contactForm.addEventListener('submit', (e) => {
    //     e.preventDefault();
    //     const btn = contactForm.querySelector('button');
    //     const originalText = btn.innerText;

    //     // Get current lang for success message
    //     const currentLang = localStorage.getItem('veronajobs_lang') || 'sk';
    //     const successMsg = currentLang === 'hu' ? 'KÜLDVE!' : 'ODOSLANÉ!';

    //     btn.innerText = successMsg;
    //     btn.style.background = 'linear-gradient(45deg, #fff, #ccc)';

    //     setTimeout(() => {
    //         contactForm.reset();
    //         btn.innerText = originalText;
    //         btn.style.background = ''; // Reset to CSS default
    //     }, 3000);
    // });
});
