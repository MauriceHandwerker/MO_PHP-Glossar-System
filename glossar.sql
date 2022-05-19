CREATE TABLE main_glossary
(
    name        text PRIMARY KEY,
    description text
);

CREATE TABLE time_info
(
    heading     text PRIMARY KEY,
    date        text (25),
    info        date
);

INSERT INTO main_glossary VALUES 
    ('Assembler', 'Ein Assembler übersetzt in Assemblersprache verfassten Code direkt in Binärcode, wobei der Code manuell oder maschinell erstellt sein kann. Manche Compiler wandeln Programmcode beispielsweise zunächst in Assemblercode um und rufen anschließend einen Assembler auf.'),
    ('C#', 'C# steht für "C Sharp". Sie ist eine Programmiersprache und von C abgeleitet. Bekannt geworden ist sie durch Unity da sie dort haubtsählich Benutzt wird.'),
    ('C++', 'C++ ist eine von der ISO genormte Programmiersprache. Sie wurde ab 1979 von Bjarne Stroustrup bei AT&T als Erweiterung der Programmiersprache C entwickelt.'),
    ('HTML', 'HTML steht für "Hypertext Markdown Language". Sie wird benutzt um Webseiten und Oberflächen zu Designen.'),
    ('HTTP', 'HTTP steht für "Hypertext Transfer Protocol". Es wird Benutzt um HTML Seiten im Insternet Anzeigen zu lassen.'),
    ('HTTPS', 'HTTPS steht für "Hypertext Transfer Protocol Secure". Es wird Benutzt um HTML Seiten im Insternet Anzeigen zu lassen nur das dieses Protokol besser Gesichert ist und besser für Besucher der Webseite ist.'),
    ('LAN-Netzwerk', 'LAN ist eines der Bekanntesten Netzwerke und steht für “Local Area Network”. Es ist so bekannt weil das WLAN ein LAN Netzwerk ist. LAN Netzwerke sind mit am meisten benutzt weil diese viele Geräte aufnehmen können und viel reichweite haben. Zum LAN gehören auch Ethernet Kabel.'),
    ('MAN-Netzwerk', 'MAN Steht für “Metropolitan Area Network”. Der job eines MAN Netzwerkes ist mehrere geräte in einem Geographischen bereich zu verbinden. Am meisten werde MAN Netzwerke in Städten, Universitäten und Firmen benutzt. Ein MAN Netzwerk schließt einfach mehrere LAN Netzwerke zusammen und verknüpft diese miteinander. So können zum beispiel mehrere Kleine und Verteilte Büros miteinander Verbunden sein.'),
    ('MOTD', 'MOTD steht für "Message of the Day". Damit kann man beim Einloggen auf ein Server den Status des Systems & Geräts anzeigen.'),
    ('Multiuser', 'Ein Mehrbenutzersystem oder Multiuser-System ist ein Betriebssystem, das die Möglichkeit bietet, Arbeitsumgebungen für verschiedene Benutzer bereitzustellen und voneinander abzugrenzen. '),
    ('Multisession', 'Wenn gleichzeitig verschiedenen Benutzern eigene Arbeitsumgebungen zur Verfügung stehen, spricht man von Multisession. Systeme, die nicht nur multiuserfähig, sondern auch multitaskingfähig sind, benötigen in der Regel ein Speicherschutzkonzept. '),
    ('Multitasking', 'Multitasking ist die Fähigkeit eines Betriebssystems, mehrere Tasks, d.h. mehrere Anwendungsprogramme oder Teile von Anwendungsprogrammen, parallel ausführen zu können. Vereinfacht gesagt bestimmt jedes Programm selbst, wie schnell es die Kontrolle an das Betriebssystem zurückgibt.'),
    ('Multiprocessing', 'Multiprocessing ist die Verwendung von zwei oder mehr Zentraleinheiten innerhalb eines einzelnen Computersystems. Der Begriff bezieht sich auch auf die Fähigkeit eines Systems, mehr als einen Prozessor zu unterstützen, oder auf die Fähigkeit, Aufgaben zwischen ihnen zuzuweisen.'),
    ('Netzwerk', 'Ein Netzwerk ist eine verbindung von mindestens zwei Geräten. Es gibt mehrere Arten von Netzwerken. Innerhalb eines Netzwerkes können alle geräte untereinander kontakt aufnehmen und so daten Übertragen. Ein Netzwerk kann einmal Kabellos sein aber auch mit Kabel Verbunden werden.'),
    ('PAN-Netzwerk', 'PAN steht für “Personal Area Network”. Die bekannteste PAN Netzwerk ist Bluetooth. PAN ist ein Netzwerk mit geringer Reichweite und Wenigen Geräten Verbunden.'),
    ('PostgreSQL', 'PostgreSQL ist ein DBMS. Es wird benutzt um Daten und Varriablen zu Speichern und zu Sortieren.')



INSERT INTO time_info VALUES
    ('BBS-ME | Information technology assistant', '2021-09-02', 'Training to become a information technology assistant and learn programming.'),
    ('C++ Basics Certification | Programming Hub', '2021-11-18', ''),
    ('Start of Project WEB-CAD | GitHub', '2022-01-20', 'A project of mine to learn PHP and help new FiveM servers. By creating a Open-Source Police CAD/MDT the server owner dont need to py so much for a server.'),
    ('HTML Advanced Certification | Programming Hub', '2022-02-06')