-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 06 apr 2021 om 17:40
-- Serverversie: 10.3.27-MariaDB-cll-lve
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitcheljansen_alienexpress`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'https://via.placeholder.com/500',
  `level` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `text1` longtext DEFAULT NULL,
  `text2` longtext DEFAULT NULL,
  `text3` longtext DEFAULT NULL,
  `text4` longtext DEFAULT NULL,
  `text5` longtext DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `courses`
--

INSERT INTO `courses` (`id`, `slug`, `title`, `image`, `level`, `type`, `duration`, `text`, `text1`, `text2`, `text3`, `text4`, `text5`, `author`, `created`) VALUES
(7, 'alien-ict-medewerker', 'Alien ICT Medewerker', 'https://alienexpress.mitcheljansen.nl/foto3.jpg', 'Niveau 2', 'BOL', '2 jaar', 'Werk jij graag aan netwerken, computers, elektra en domotica? Vind je het leuk om mensen te helpen bij het oplossen van hun ICT-problemen? Meld je dan aan voor de opleiding Medewerker ICT bij MBO Utrecht.\r\n\r\nLet op: deze opleiding heeft maar een beperkt aantal opleidingsplaatsen en zit inmiddels vol. Je kunt je helaas niet meer aanmelden.', 'Tijdens de opleiding leer je van alles wat met ICT en Elektro te maken heeft: elektro-installatietechniek, datanetwerken, domotica, software, en hoe een computer in elkaar zit. Ook ontwikkel je tijdens je studie vaardigheden om andere computergebruikers te kunnen helpen. We besteden aandacht aan de nieuwste technologieÃ«n op het gebied van elektro en ICT.\r\n&lt;br/&gt;&lt;br/&gt;\r\nAls je een techneut bent en graag met je handen werkt, kun je als medewerker ICT alle kanten uit. Waar je ook voor kiest: jij zorgt ervoor dat ICT-voorzieningen goed blijven werken en helpt gebruikers als ze er problemen mee hebben.', 'Tijdens de opleiding leer je van alles wat met ICT en Elektro te maken heeft: elektro-installatietechniek, datanetwerken, domotica, software, en hoe een computer in elkaar zit. Ook ontwikkel je tijdens je studie vaardigheden om andere computergebruikers te kunnen helpen. We besteden aandacht aan de nieuwste technologieën op het gebied van elektro en ICT. <br/><br/> Als je een techneut bent en graag met je handen werkt, kun je als medewerker ICT alle kanten uit. Waar je ook voor kiest: jij zorgt ervoor dat ICT-voorzieningen goed blijven werken en helpt gebruikers als ze er problemen mee hebben.', 'In één jaar tijd leiden we je op tot medewerker ICT. Op de academie ben je voornamelijk aan het werk op en in de computer en krijg je de volgende vakken: <br/><br/> - Hardware en software<br/> - Elektro en installatietechniek<br/> - Netwerken en netwerkbeheer<br/> - Servicedesk en beroepshouding<br/> - Web development (keuzedeel)<br/> - Digitale vaardigheden (keuzedeel)<br/> - Oriëntatie op ondernemerschap (keuzedeel)<br/> - Elektrische installaties (keuzedeel)<br/> - Algemene vakken zoals Nederlands, Engels, rekenen en burgerschap', 'Geen informatie bekend.', 'Geldt één van de onderstaande situaties voor jou? Dan mag je je aanmelden voor deze opleiding: <br/><br/> - Je hebt een diploma vmbo basis<br/> - Je hebt een diploma van de Entreeopleiding (MBO niveau 1)', 'hmjansenjr@outlook.com', '2006-04-21 14:12:28'),
(8, 'alien-software-developer', 'Alien Software Developer', 'https://alienexpress.mitcheljansen.nl/foto1.jpg', 'Niveau 4', 'BOL', '3 jaar', 'Werk jij graag aan netwerken, computers, elektra en domotica? Vind je het leuk om mensen te helpen bij het oplossen van hun ICT-problemen? Meld je dan aan voor de opleiding Medewerker ICT bij MBO Utrecht.\r\n\r\nLet op: deze opleiding heeft maar een beperkt aantal opleidingsplaatsen en zit inmiddels vol. Je kunt je helaas niet meer aanmelden.', 'Tijdens de opleiding leer je van alles wat met ICT en Elektro te maken heeft: elektro-installatietechniek, datanetwerken, domotica, software, en hoe een computer in elkaar zit. Ook ontwikkel je tijdens je studie vaardigheden om andere computergebruikers te kunnen helpen. We besteden aandacht aan de nieuwste technologieÃ«n op het gebied van elektro en ICT.\r\n&lt;br/&gt;&lt;br/&gt;\r\nAls je een techneut bent en graag met je handen werkt, kun je als medewerker ICT alle kanten uit. Waar je ook voor kiest: jij zorgt ervoor dat ICT-voorzieningen goed blijven werken en helpt gebruikers als ze er problemen mee hebben.', 'Tijdens de opleiding leer je van alles wat met ICT en Elektro te maken heeft: elektro-installatietechniek, datanetwerken, domotica, software, en hoe een computer in elkaar zit. Ook ontwikkel je tijdens je studie vaardigheden om andere computergebruikers te kunnen helpen. We besteden aandacht aan de nieuwste technologieën op het gebied van elektro en ICT. <br/><br/> Als je een techneut bent en graag met je handen werkt, kun je als medewerker ICT alle kanten uit. Waar je ook voor kiest: jij zorgt ervoor dat ICT-voorzieningen goed blijven werken en helpt gebruikers als ze er problemen mee hebben.', 'In één jaar tijd leiden we je op tot medewerker ICT. Op de academie ben je voornamelijk aan het werk op en in de computer en krijg je de volgende vakken: <br/><br/> - Hardware en software<br/> - Elektro en installatietechniek<br/> - Netwerken en netwerkbeheer<br/> - Servicedesk en beroepshouding<br/> - Web development (keuzedeel)<br/> - Digitale vaardigheden (keuzedeel)<br/> - Oriëntatie op ondernemerschap (keuzedeel)<br/> - Elektrische installaties (keuzedeel)<br/> - Algemene vakken zoals Nederlands, Engels, rekenen en burgerschap', 'Geen informatie bekend.', 'Geldt één van de onderstaande situaties voor jou? Dan mag je je aanmelden voor deze opleiding: <br/><br/> - Je hebt een diploma vmbo basis<br/> - Je hebt een diploma van de Entreeopleiding (MBO niveau 1)', 'hmjansenjr@outlook.com', '2017-03-21 13:04:12'),
(9, 'alien-zorg-en-welzijn', 'Alien Zorg en Welzijn', 'https://alienexpress.mitcheljansen.nl/foto2.JPG', 'Niveau 2', 'BOL', '3 jaar', 'Werk jij graag aan netwerken, computers, elektra en domotica? Vind je het leuk om mensen te helpen bij het oplossen van hun ICT-problemen? Meld je dan aan voor de opleiding Medewerker ICT bij MBO Utrecht.\r\n\r\nLet op: deze opleiding heeft maar een beperkt aantal opleidingsplaatsen en zit inmiddels vol. Je kunt je helaas niet meer aanmelden.', 'Tijdens de opleiding leer je van alles wat met ICT en Elektro te maken heeft: elektro-installatietechniek, datanetwerken, domotica, software, en hoe een computer in elkaar zit. Ook ontwikkel je tijdens je studie vaardigheden om andere computergebruikers te kunnen helpen. We besteden aandacht aan de nieuwste technologieÃ«n op het gebied van elektro en ICT.\r\n&lt;br/&gt;&lt;br/&gt;\r\nAls je een techneut bent en graag met je handen werkt, kun je als medewerker ICT alle kanten uit. Waar je ook voor kiest: jij zorgt ervoor dat ICT-voorzieningen goed blijven werken en helpt gebruikers als ze er problemen mee hebben.', 'Tijdens de opleiding leer je van alles wat met ICT en Elektro te maken heeft: elektro-installatietechniek, datanetwerken, domotica, software, en hoe een computer in elkaar zit. Ook ontwikkel je tijdens je studie vaardigheden om andere computergebruikers te kunnen helpen. We besteden aandacht aan de nieuwste technologieën op het gebied van elektro en ICT. <br/><br/> Als je een techneut bent en graag met je handen werkt, kun je als medewerker ICT alle kanten uit. Waar je ook voor kiest: jij zorgt ervoor dat ICT-voorzieningen goed blijven werken en helpt gebruikers als ze er problemen mee hebben.', 'In één jaar tijd leiden we je op tot medewerker ICT. Op de academie ben je voornamelijk aan het werk op en in de computer en krijg je de volgende vakken: <br/><br/> - Hardware en software<br/> - Elektro en installatietechniek<br/> - Netwerken en netwerkbeheer<br/> - Servicedesk en beroepshouding<br/> - Web development (keuzedeel)<br/> - Digitale vaardigheden (keuzedeel)<br/> - Oriëntatie op ondernemerschap (keuzedeel)<br/> - Elektrische installaties (keuzedeel)<br/> - Algemene vakken zoals Nederlands, Engels, rekenen en burgerschap', 'Geen informatie bekend.', 'Geldt één van de onderstaande situaties voor jou? Dan mag je je aanmelden voor deze opleiding: <br/><br/> - Je hebt een diploma vmbo basis<br/> - Je hebt een diploma van de Entreeopleiding (MBO niveau 1)', 'hmjansenjr@outlook.com', '2017-03-21 13:04:28');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `highscore` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `game`
--

INSERT INTO `game` (`id`, `username`, `highscore`) VALUES
(1, 'Mitchel Jansen', '500'),
(2, 'Bo TxlentedFR', '550'),
(4, 'Demo', '525');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`id`, `slug`, `title`, `image`, `message`, `author`, `created`) VALUES
(1, 'start-bouw-onderwijsboulevard-mbo-utrecht', 'Start Bouw Onderwijsboulevard MBO Utrecht', 'https://www.mboutrecht.nl/wp-content/uploads/2021/03/Persbericht-start-bouw-onderwijsboulevard-MBO-Utrecht-1024x819.jpg', 'Mbo-wethouder Klaas Verschuure van de gemeente Utrecht verzorgde vandaag samen met een student en een wijkbewoner de ceremoniële start van de bouw. Al meer dan veertig jaar wordt op deze strip aan de Australiëlaan beroepsonderwijs gegeven. Om ook in de toekomst eigentijds onderwijs te kunnen geven in moderne gebouwen is het plan voor de Onderwijsboulevard ontstaan. De bestaande gebouwen worden gerenoveerd en er komen nieuwe bouwdelen bij.\r\n\r\nOp de Onderwijsboulevard heeft elke opleiding zijn eigen plek en identiteit, maar ook toegang tot de overdekte binnenstraat met (horeca)faciliteiten, praktijklokalen, een theaterzaal, podia en verblijfsruimtes. Joany Krijt, bestuursvoorzitter MBO Utrecht: “We vinden het belangrijk dat we de kleinschalige school blijven die we zijn, waarin je als student voelt dat je gezien en gekend wordt en je thuis voelt. Tegelijkertijd stimuleren we ontmoetingen tussen de studenten van verschillende opleidingen. In de binnenstraat ontmoet straks een artiest van de Herman Brood Academie een verpleegkundige in opleiding aan. Hoe meer diversiteit en ontmoeting, hoe rijker de leerervaring van onze studenten. Dat willen we ze, naast een goede opleiding, ook meegeven.”\r\n\r\nIn verbinding met de wijk en de woonboulevard\r\n\r\nMBO Utrecht opent zich met de bouw van de Onderwijsboulevard nog meer naar de wijk. De school staat straks niet alleen in verbinding met de woonboulevard, maar ook met de wijk. Zodat bedrijven en bewoners van Kanaleneiland de weg naar de school weten te vinden. En studenten ook van betekenis kunnen zijn voor de wijk. Krijt: “Denk aan onze opleidingen op het gebied van zorg, welzijn en kinderopvang die samen met de wijk mooie en leerzame projecten kunnen opzetten die de studenten zowel praktijk- als levenservaring geven. Daarmee halen we de wijk en de praktijk in onze school.”', 'Mitchel', '2021-04-06 16:07:17');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `insertion` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `bsn` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `housenumber` varchar(255) DEFAULT NULL,
  `housenumberadd` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `precourse` varchar(255) DEFAULT NULL,
  `nextcourse` varchar(255) DEFAULT NULL,
  `motivation` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `registration`
--

INSERT INTO `registration` (`id`, `status`, `firstname`, `insertion`, `lastname`, `email`, `phonenumber`, `bsn`, `gender`, `birthday`, `street`, `housenumber`, `housenumberadd`, `zipcode`, `city`, `precourse`, `nextcourse`, `motivation`) VALUES
(1, '2', 'asd', 'asd', 'asd', 'asd', 'asd', 'ads', NULL, 'asd', 'asd', 'asd', 'das', 'das', 'daads', 'ads', 'ads', 'adads'),
(2, '2', 'sddfsdf', 'sdfdfs', 'dfsdf', 'sdffd@fsfsf.nl', '0638243450', '32434234234', NULL, '1997-06-18', '', 'sdfsdfsdf', 'sdfsdfsdf', 'sdffsdf', 'sdfsdfdsf', 'Option 02', 'Option 01', 'sdfsdfdsfsdf'),
(3, '3', 'sdfsdf', 'sdfdsf', 'sdfsdfsdf', 'sdfsdfsfdsfd@sdfsfffsd.nl', '0638243450', '4234234243234', NULL, '1997-06-18', 'sfsdfsd', 'fdsfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'Option 01', 'Option 01', 'fsfsdfsdf'),
(4, '2', 'Mitchel', 'abc', 'Jansen', 'mitchel@mexter.nl', '0638243450', '199234789', 'Man', '1997-06-18', 'Gisbert Bromlaan', '32', '11', '3571AK', 'Utrecht', 'Option 02', 'Option 02', 'Dit is mijn motivatie.'),
(5, '3', 'Rens', '', 'Baart', 'rensishomo@hoi.nl', '0638243450', '12992391239', 'Man', '1997-06-18', 'dasdsdsads', '10', '10', 'dasdsdsads', 'Friesland', 'Theoretische leerweg', 'Alien ICT Medewerker', 'dasdsdsadsdasdsdsadsdasdsdsadsdasdsdsadsdasdsdsads'),
(6, '3', 'dsfasfsdsa', 'safsfs', 'assaffas', 'saffsafs@sfsfafsfsa.nl', 'safsdsd', 'asdsdsd', 'Vrouw', '1971-03-31', 'adsdasd', 'asdsd', '', 'asdasd', 'Flevoland', 'Basisberoepsgerichte leerweg', 'Alien Software Developer', 'asdsadds'),
(7, '2', 'Mitchel', '', 'Jansen', '324712@student.mboutrecht.nl', '0638243450', '121212121', 'Man', '1997-06-18', 'Straat', '10', '', '3554 TR', 'Utrecht', 'HAVO', 'Alien ICT Medewerker', 'Hier mijn motivatie.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL DEFAULT 1,
  `firstname` varchar(255) DEFAULT NULL,
  `insertion` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `rank_id`, `firstname`, `insertion`, `lastname`, `email`, `password`, `date`) VALUES
(1, 1, 'Mitchel', '', 'Jansen', 'hmjansenjr@outlook.com', '368d26b4245e16e69aef4e57d371fabe', '2021-02-10 15:36:45'),
(6, 1, 'Rens', '', 'Baart', '123@gmail.com', 'c06db68e819be6ec3d26c6038d8e8d1f', '2021-03-17 09:57:25'),
(7, 1, 'Demo', 'le', 'Demo', 'demo@demo.nl', 'fe01ce2a7fbac8fafaed7c982a04e229', '2021-04-06 16:19:04');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
