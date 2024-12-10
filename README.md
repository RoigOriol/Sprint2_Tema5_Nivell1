# Sprint2_Tema5_Nivell1

📄 Descripció - Enunciat de l'exercici
L'objectiu d'aquest exercici és crear una estructura de classes en PHP que representi diferents animals. Es defineix una classe base Animal amb un atribut nom i un mètode makeSound. Posteriorment, es creen dues classes filles: Gos i Gat, que sobreescriuen el mètode makeSound per mostrar sons específics.

Enunciat:
Necessitem un tipus de dades que representi un animal. Els animals tenen un nom, però no tots fan el mateix so. En particular:

Els gossos han de dir "Bup, bup!".
Els gats han de dir "Meu!".
Implementa aquesta funcionalitat utilitzant classes separades i un programa principal que creï instàncies de Gos i Gat, mostrant els seus noms i sons.

💻 Tecnologies Utilitzades
PHP: Llenguatge principal per al desenvolupament de l'exercici.
IDE/Text Editor: Qualsevol editor de codi com Visual Studio Code, PHPStorm o Sublime Text.
Servidor Local: XAMPP, WAMP o un altre servidor PHP per executar el projecte localment.
📋 Requisits
PHP 7.0+ instal·lat al sistema.
Servidor local com XAMPP, WAMP o Laravel Valet per executar codi PHP.
Accés a un terminal per executar scripts PHP.
Coneixements bàsics de PHP i POO (Programació Orientada a Objectes).
🛠️ Instal·lació
Clona el repositori o descarrega els fitxers:

bash
Copiar código
git clone https://github.com/nomusuari/projecte-animals-php.git
cd projecte-animals-php
Configuració del servidor local:

Assegura't que el servidor XAMPP/WAMP està en funcionament.
Col·loca els fitxers dins la carpeta htdocs (per XAMPP) o equivalent.
Estructura dels fitxers:

css
Copiar código
projecte-animals-php/
├── Animal.php
├── Gos.php
├── Gat.php
└── main.php
▶️ Execució
Obre el navegador web.
Accedeix a la URL següent:
arduino
Copiar código
http://localhost/projecte-animals-php/main.php
La sortida hauria de mostrar:
yaml
Copiar código
Rex diu: Bup, bup!
Whiskers diu: Meu!
🌐 Desplegament
Per desplegar aquest projecte en un servidor de producció:

Carrega els fitxers (Animal.php, Gos.php, Gat.php, main.php) al teu servidor.
Assegura't que el servidor té PHP instal·lat.
Accedeix al fitxer main.php a través del navegador utilitzant la URL del teu domini:
arduino
Copiar código
https://elteudomini.com/main.php
🤝 Contribucions
Les contribucions són benvingudes! Si vols millorar aquest projecte:

Fes un fork del repositori.
Crea una nova branca per a les teves modificacions:
bash
Copiar código
git checkout -b feature/nova-funcio
Puja els teus canvis i fes un pull request.
Tots els canvis s'han de centrar en millores del codi, documentació o funcionalitat. 😊