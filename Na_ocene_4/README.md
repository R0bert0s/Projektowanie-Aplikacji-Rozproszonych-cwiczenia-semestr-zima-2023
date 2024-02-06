# Na ocenę 4

### Spis wybranych serwisów

#### REST API

- https://official-joke-api.appspot.com
- https://cat-fact.herokuapp.com/

#### SOAP API

- http://webservices.oorsprong.org
- https://www.dataaccess.com/

### Listę wykorzystywanych metod

#### Random Joke

```http
  https://official-joke-api.appspot.com/random_joke
```

Przykładowy wynik działań:

```json
{
  "type": "general",
  "setup": "Why did the tomato blush?",
  "punchline": "Because it saw the salad dressing.",
  "id": 340
}
```

#### Cat Facts

```http
  https://cat-fact.herokuapp.com/facts/
```

Przykładowy wynik działań:

```json
[
  {
    "status": { "verified": true, "sentCount": 1 },
    "_id": "58e00b5f0aac31001185ed24",
    "user": "58e007480aac31001185ecef",
    "text": "When asked if her husband had any hobbies, Mary Todd Lincoln is said to have replied \"cats.\"",
    "__v": 0,
    "source": "user",
    "updatedAt": "2020-08-23T20:20:01.611Z",
    "type": "cat",
    "createdAt": "2018-02-19T21:20:03.434Z",
    "deleted": false,
    "used": false
  },
  {
    "status": { "verified": true, "feedback": "", "sentCount": 1 },
    "_id": "5887e1d85c873e0011036889",
    "user": "5a9ac18c7478810ea6c06381",
    "text": "Cats make about 100 different sounds. Dogs make only about 10.",
    "__v": 0,
    "source": "user",
    "updatedAt": "2020-09-03T16:39:39.578Z",
    "type": "cat",
    "createdAt": "2018-01-15T21:20:00.003Z",
    "deleted": false,
    "used": true
  }
]
```

#### Flag for a Country

```http
  http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso
```

Dla zapytania

```xml
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
    <soap:Body>
        <CountryFlag xmlns="http://www.oorsprong.org/websamples.countryinfo">
        <sCountryISOCode>US</sCountryISOCode>
        </CountryFlag>
    </soap:Body>
</soap:Envelope>
```

Wynik:

```xml
<?xml version="1.0" encoding="utf-8"?>;
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">;
    <soap:Body>;
        <m:CountryFlagResponse xmlns:m="http://www.oorsprong.org/websamples.countryinfo">;
        <m:CountryFlagResult>;http://www.oorsprong.org/WebSamples.CountryInfo/Flags/USA.jpg</m:CountryFlagResult>;
        </m:CountryFlagResponse>;
    </soap:Body>;
</soap:Envelope>;
```

#### NumberToWords

```http
  https://www.dataaccess.com/webservicesserver/NumberConversion.wso
```

Dla zapytania

```xml
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <NumberToWords xmlns="http://www.dataaccess.com/webservicesserver/">
      <ubiNum>3627929</ubiNum>
    </NumberToWords>
  </soap:Body>
</soap:Envelope>
```

Wynik:

```xml
<?xml version="1.0" encoding="utf-8"?>;
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">;
  <soap:Body>;
    <m:NumberToWordsResponse xmlns:m="http://www.dataaccess.com/webservicesserver/">;
      <m:NumberToWordsResult>;three million six hundred and twenty seven thousand nine hundred and twenty nine </m:NumberToWordsResult>;
    </m:NumberToWordsResponse>;
  </soap:Body>;
</soap:Envelope>;
```

### Zdjęcie aplikacji

![App Screenshot](https://raw.githubusercontent.com/R0bert0s/Projektowanie-Aplikacji-Rozproszonych-wiczenia-semestr-zima-2023/main/Na_ocene_4/Zrzut_ekranu_strony.png)
