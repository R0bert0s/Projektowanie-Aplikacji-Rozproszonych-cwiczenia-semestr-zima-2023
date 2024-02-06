# Na ocenę 5

## Protokoły sieciowe

W projekcie wykorzystujemy protokół XML-RPC do komunikacji między klientem a serwerem. XML-RPC jest prostym protokołem komunikacyjnym opartym na XML, który umożliwia zdalne wywoływanie procedur przez sieć.

## Protokół wymiany informacji

Protokół wymiany informacji jest oparty na standardzie XML-RPC. Klient wysyła żądania do serwera za pomocą odpowiednio sformułowanych zapytań XML-RPC, a serwer odpowiada na te żądania również za pomocą XML-RPC.

## Publiczne interfejsy

- losowa_liczba(minimum, maximum) : Funkcja zwraca losową liczbę z podanego przedziału
- losowe_imie() : Funkcja zwraca losowe imię
- losowa_data() : Funkcja zwraca losową datę w formacie m/d/y
- losowy_przedmiot() : Funkcja zwraca losowy przedmiot
- losowy_kolor() : Funkcja zwraca losowy kolor
- losowa_ulica() : Funkcja zwraca losową ulicę
- losowa_godzina() : Funkcja zwraca losową godzinę

## Zadania serwer

Zadaniami serwera jest nasłuchiwanie wywyołania funkcji przez klienta oraz zawrócenie mu wartości wywułanej funkcji

## Zadanie klienta

Korzystanie z udostępnionych przez serwer funkcji

## Testy

Testy można przeprowadzić za pomocą prostych scenariuszy, w których klient wysyła różne żądania do serwera, a następnie sprawdzane są otrzymane wyniki.

## DEMO

### Serwer

![](https://github.com/R0bert0s/Projektowanie-Aplikacji-Rozproszonych-wiczenia-semestr-zima-2023/blob/main/Nac_ocene_5/Server_demo.gif?raw=true)

### Klient

![](https://github.com/R0bert0s/Projektowanie-Aplikacji-Rozproszonych-wiczenia-semestr-zima-2023/blob/main/Nac_ocene_5/Klient_demo.gif?raw=true)
