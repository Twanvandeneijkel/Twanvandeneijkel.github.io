CREATE TABLE blogs (
                       id INTEGER PRIMARY KEY AUTOINCREMENT,
                       title TEXT NOT NULL,
                       content TEXT NOT NULL,
                       image TEXT,
                       summary TEXT
);

INSERT INTO blogs (title, content, image, summary)
VALUES
    ('Studiekeuze',
     '<p>Als een 6 jarige jongen vond ik het leuk om met elektronische
            apparaten te werken. Ik heb al verschillende telefoons en computers
            opengemaakt met behulp van mijn vader, want ik vond het leuk om het
            ingewikkelde systeem te zien van het moederbord. Ik voelde me thuis
            achter de computers van school. Ik heb tijdens de middelbare school
            veel gebruik gemaakt van de computer.
        </p>

        <p>Ik was tijdens de middelbare school bezig om soort van te "hacken",
            omdat ik dat heel interessant vond. Bijv: op school was het niet de
            bedoeling dat je op CMD kan gaan. Maar ik heb een manier gevonden om
            dat toch te doen. Dat vond ik geweldig natuurlijk, en kon elke
            leerlingnummer zien die op het gehele Calvijn College zat.
            Ik kon ook zien dat er verschillende test accounts waren die ze
            gebruikte om het account systeem waarschijnlijk te testen.
        </p>

        <p>Tijdens de middelbare school had ik eerst bedacht om engineering te
            gaan doen vanwege Mechatronica. Ik was naar een meeloopdag gegaan vanwege
            Mechatronica, maar ik vond het toch niks. Dus ik ging daarna kijken
            voor ICT. Dat klikte direct en was 100% zeker dat ik ICT zou gaan doen.
        </p>

        <p>Dus ik heb voor ICT gekozen omdat ik interessant vind, en het leuk
            vind om het leven efficienter te maken doordat er programma''s het
            voor ons doen, zodat wij meer tijd hebben voor iets anders.
        </p>',
     '/images/studiekeus.jpg',
     'Ik heb voor ICT gekozen omdat ik leuk vind hoe het allemaal werkt'
    ),
    ('SWOT-analyse',
     '<h2>Sterktes</h2>
        <ul>
            <li>Andere mensen helpen</li>
            <li>Op andere letten zodat ze niet erg benadeeld worden</li>
        </ul>

        <h2>Zwaktes</h2>
        <ul>
            <li>Ben niet zo erg weerbaar</li>
            <li>Kan niet goed voor mijzelf opkomen</li>
        </ul>

        <h2>Kansen</h2>
        <ul>
            <li>Mensen die mij willen helpen als ik me niet goed voel (mentaal)</li>
            <li>Kans om vrienden te krijgen</li>
            <li>Sociale vaardigheden aansterken</li>
        </ul>

        <h2>Bedreigingen</h2>
        <ul>
            <li>Ik kan niet heel goed samenwerken op bepaalde punten</li>
            <li>Durf soms niet te zeggen wat ik werkelijk wil</li>
        </ul>',
     '/images/swot.png',
     'Een persoonlijke SWOT-analyse over mijn sterktes, zwaktes, kansen en bedreigingen'),
    ('Programmeer ervaring',
     '<p>Ik heb tijdens de middelbare school veel verschillende programmeer talen ontdekt.</p>

        <p>Visual basic: Ik gebruikte thuis een oude Windows xp computer, waar visual
            studio op stond. Daar ging ik weer mee experimenteren met behulp van youtube
            en internet, waardoor ik boter, kaas en eieren kon maken. Bij deze taal viel
            het me op dat je de elementen zelf eerst moet vorm geven door middel van een
            soort vormen editor, en daarna kan je die vormen een class geven waarmee je
            met de code er logica aan geeft.
        </p>

        <p>Python, Javascript, c++: In klas 1 ging ik veel programmeer talen ontdekken.
            Het waren niet bepaald makkelijke talen waardoor het nogal lastig was waar
            ik mee moest beginnen. Dus ik heb tot nu toe alleen de basissen geleerd
            van die talen. Het gaf me wel veel kennis over de algemene logica die in
            alle programeertalen zit. Waardoor het nu heel makkelijk voor me is om de
            code te "lezen".
        </p>

        <p>TI-basic: Een rekenmachine, wacht even. Een rekenmachine?! Ja op de
            grafische rekenmachine die ik nodig had in havo 4 heb ik ontzettend veel
            geprogrammeerd. Met de weinige functies die het programma had heb ik wel
            veel verschillende soorten tools/games gemaakt.
        </p>

        <p>Dus mijn programmeer ervaring is best oke op basis van het snappen van de
            logica en het lezen van code. Ik ken de basis van het programmeren.
        </p>',
     '/images/program.jpg',
     'Een beetje verstand van de basis principes'),
    ('ICT in het leven',
     '<h1>GPUGate Malware: nieuwe aanvalsmethode gebruikt hardware voor ontsleuteling</h1>

        <p><strong>Beveiligingsonderzoeksbedrijf Arctic Wolf heeft een geavanceerde cyberaanval ontdekt
            die gebruikmaakt van een nieuwe techniek die zij ''GPUGate'' hebben gedoopt. De
            aanvallers misbruiken Google Ads en GitHub om de malware, gericht op gebruikers in
            West-Europa, te verspreiden. Opvallend is dat de malware alleen ontsleuteld wordt op
            systemen met een speciale grafische kaart (GPU).</strong>
        </p>

        <p class="alinea">Volgens een nieuwsbericht van Arctic Wolf Threat Research werd de aanvalsroute op 19 augustus 2025 ontdekt.
            De daders misbruikten de advertentiestructuur van Google en de opslag van GitHub om gebruikers naar een
            kwaadaardige download te lokken, die werd gehost op een vervalst domein. Door een specifieke link in de
            advertentie te verbergen, leek de download afkomstig van een officiële bron, waardoor de argwaan van gebruikers
            werd omzeild.
        </p>

        <p>De malware, een opgeblazen Microsoft Software Installer (MSI) van 128 MB, is ontworpen om de meeste
            beveiligingssandboxes te omzeilen. Het unieke kenmerk van de aanval is de ''GPU-gated'' ontsleutelingsroutine: een
            speciaal proces ontsleutelt de payload alleen op machines met een echte GPU. Hierdoor blijft de schadelijke code
            versleuteld in omgevingen voor beveiligingsanalyse die niet over deze hardware beschikken.
        </p>

        <p><strong>Gericht op de IT-sector.</strong>
            De onderzoekers van Arctic Wolf vermoeden dat de aanvallers zich richten op systemen met specifieke
            hardwareconfiguraties. Dit suggereert een focus op gebruikers die zich bezighouden met softwareontwikkeling,
            gaming of cryptocurrency-mining. De aanval heeft met name gebruikers in West-Europa binnen de IT-industrie als
            doelwit. Het vermoedelijke doel van de campagne is om toegang te krijgen tot organisaties voor kwaadaardige doeleinden zoals diefstal van inloggegevens, infostealing en de inzet van ransomware.
            <a href="https://www.dutchitchannel.nl/research/704157/gpugate-malware-nieuwe-aanvalsmethode-gebruikt-hardware-voor-ontsleuteling"
               target="_blank"
               rel="noopener noreferrer">
                Lees verder hier.
            </a>
        </p>',
     '/images/ransomware.webp',
     'Hacken is tegenwoordig best voorkomend met al die ict systemen'),
    ('Studie keuze deel 2',
     '<p>Nu ik in het derde blok zit van ICT jaar 1, heb ik nieuwe ervaringen opgehaald.
            Die ervaringen zijn best positief.
            Ik heb tijdens het maken van de PCO website veel geleerd, en ook over hoe sommige dingen
            beter kan. (Zoals ik nu bij mijn PCO website denk m.b.t het css gedeelte)
            Daarnaast heb ik ook basis programmeer ervaring gekregen door middel van PBA,
            en computer theorie met CSB, wat ik overigens wat minder interessant vond.
            PBA was heel leuk en ook heel belangrijk als basis voor het programmeren.
            Het blok daarna heb ik OOP gedaan (Object Orientated Programming),
            een hele nieuwe soort van programmeren.
            Wat ik lastig vond toen ik het voor het eerst deed, maar nu wel snap.
            Het OOP project was echt leuk, zeker toen ik zag hoeveel plezier ze hadden
            aan de game en de schoolbezoeken.
            Ik vind het heel leuk ondanks ze wel druk kunnen zijn.
            Als laatst ben ik bezig met FR1, en dat gaat prima.
            Ik vind het best interessant hoe een website van achter de schermen werkt.
            Mijn blik op deze periode terug is nu, heel positief.
            Ik vond alles eigenlijk wel leuk, behalve het professionele gedeelte,
            maar daar wen ik wel aan.
            Ik wil ICT blijven doorstuderen, omdat ik het programmeren en zien
            hoe die code toch best veel kan.
            Ondanks het maar wat variabelen en simpele vergelijkingen zijn.
        </p>',
     '/images/studiekeuspart2.png',
     'Nu ik in het derde blok zit van ICT jaar 1 heb ik nieuwe ervaringen opgehaald');