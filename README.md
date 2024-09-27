Az alábbi egyszerű alkalmazást kell megtervezned és megvalósítanod PHP nyelven. Adatbázist és admin felületet nem szükséges megvalósítani, a kiinduló adatokat tartalmazhatja egy config file, vagy maga a teszt is (pl. az index.php első soraiban inicializálod az osztályokat és feltöltöd adatokkal). Legfőbb szempont a megfelelő osztályhierarchia kialakítása és OOP nyújtotta lehetőségek magabiztos használata.

A feladat
Készíts el egy "napló alkalmazást" egy egyetemi csoport számára!

Valósítsd meg a következő osztályokat:

-absztrakt ember osztály (tulajdonságok: név, nem, születési év),
-tanuló osztály (tulajdonságok: tagozat, érdemjegyek (egy tömbben elegendő, nem kell tantárgyakra bontani)),
-tanár osztály (tulajdonságok: családi állapot (házas vagy egyedülálló lehetséges)),
-csoport osztály (tulajdonságok: vezető (egy tanár), diákok (tanulók)).

Készíts egy alkalmazást (index.php elég), mely a következőket teszi:

-Létrehoz tanulókat és tanárokat (minden tanulónak legyen 4-5 érdemjegye),
-Létrehoz három csoportot, meghatározott tanárokkal és tanulókkal (hogy ki melyik csoportot vezeti és melyik diák melyik csoportba jár, az teljesen mindegy),
-kiírja a csoportok névsorát (objektumkiíráatással: echo $csoport),
-kiírja egy tanuló adatait (minden adat, jegyei is),
-kiírja egy tanuló átlagát,
-kiírja egy csoport átlagát (a benne szereplő diákok átlagának átlagát).

Megvalósítással kapcsolatos ajánlások (nem kötelező. Ha nem tudod, mik ezek, akkor ne most nézz utána és próbáld használni):

-hibaesetek kezeléséhez használj kivételkezelést,
-mindenhol a megfelelő láthatósági szintet használd,
-tartsd be a cleancode (solid, dry) és az oop alapelveit,
-kövesd a PSR-4 és PSR-12 standard-eket (https://www.php-fig.org/psr/),
-az autoloading-ot a composer által generált autoload.php fájl biztosítsa,