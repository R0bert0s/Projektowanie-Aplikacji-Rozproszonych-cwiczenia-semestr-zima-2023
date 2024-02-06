<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
    body{
      font-family: 'Roboto', sans-serif;
    }
    .response-box{
      border: 2px dashed #434343; 
      margin: 10px 10px 30px 10px; 
      padding: 10px 15px 20px 15px; 
      border-radius: 3px; 

    }
    code{
      display: inline-block;
      background: #f1f1f1;
      border-radius: 4px;
      padding: 20px;
      border: 2px solid #434343;
      left: 0px;
      position: relative;
    }
    pre {
      white-space: pre-wrap;
      width: 100%;
      display: flex;
      align-content: left;
    }
  </style>
</head>
<body>
  <div style="width: 1200px; margin: auto; ">
    <h1>Robert Komendarek 157157</h1>
    <b>Projektowanie Aplikacji Rozproszonych
ćwiczenia, semestr zima 2023</b>
<br><br>
    <h2 style='text-align: center'>REST API</h2>
    <div class="response-box">
      <h3>#1 Random Joke </h3>
      <a href='https://official-joke-api.appspot.com/random_joke' target='_blanc'>https://official-joke-api.appspot.com/random_joke</a> <br> <br>
      <b>Odpowiedź API:</b> <br>
      <?php
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://official-joke-api.appspot.com/random_joke',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($response);
      ?>
      <pre>
          <code>
<?php echo $response ?>
          </code>
      </pre> 
      
      <b>Sformatowane:</b> <br>
      <?php
        echo $res->{'setup'}."<br>";
        echo $res->{'punchline'}."<br>";
        echo "<small>(id: ".$res->{'id'}.")</small><br>";
      ?>
    </div>
    <div class="response-box">
      <h3>#2 Cat Facts </h3>
      <a href='https://cat-fact.herokuapp.com/facts/' target='_blanc'>https://cat-fact.herokuapp.com/facts/</a> <br> <br>
      <b>Odpowiedź API:</b> <br>
      <?php
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://cat-fact.herokuapp.com/facts/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($response);
      ?>
        <pre>
          <code>
<?php echo $response ?>
          </code>
      </pre><br>
      <b>Sformatowane:</b> <br> 
      <ul>
        <?php
          foreach ($res as &$fact){
              echo  "<li>".$fact->{'text'}." <small>(Data powstania: ".$fact->{'createdAt'}.")</small></li>";
          }
        ?>
      </ul>
    </div>
    <br><br><hr> <br>
    <h2 style='text-align: center'>SOAP API</h2>
    <div class="response-box">
      <h3>#1 Flag for a Country </h3>
      <a href='http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso' target='_blanc'>http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso</a> <br> <br>
      <b>Zapytanie do API:</b> <br>
      <pre>
          <code>
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"&gt;
  &lt;soap:Body&gt;
    &lt;CountryFlag xmlns="http://www.oorsprong.org/websamples.countryinfo"&gt;
      &lt;sCountryISOCode&gt;US&lt;/sCountryISOCode&gt;
    &lt;/CountryFlag&gt;
  &lt;/soap:Body&gt;
&lt;/soap:Envelope&gt;
        </code>
      </pre><br>
      <?php
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
        <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
          <soap:Body>
            <CountryFlag xmlns="http://www.oorsprong.org/websamples.countryinfo">
              <sCountryISOCode>US</sCountryISOCode>
            </CountryFlag>
          </soap:Body>
        </soap:Envelope>',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: text/xml; charset=utf-8'
          ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $displaye_res = str_replace('<', '&lt;',$response);
        $displaye_res = str_replace('>', '&gt;;',$displaye_res);
        ?>
        <b>Odpowiedź API:</b> <br>
        <pre>
          <code>
<?php echo $displaye_res?>
          </code>
        </pre>
        <?php
        $xml = simplexml_load_string($response);
        $res = $xml->children('soap', true)->Body->children('m', true)->CountryFlagResponse->CountryFlagResult;
        echo " <br><b>Sformatowane:</b> <br>";
        echo "<img src='".$res ."'/>";
      ?>
    </div>

    <div class="response-box">
      <h3>#2 NumberToWords</h3>
      <a href='https://www.dataaccess.com/webservicesserver/NumberConversion.wso' target='_blanc'>https://www.dataaccess.com/webservicesserver/NumberConversion.wso</a> <br> <br>
      <b>Zapytanie do API:</b> <br>
      <pre>
        <code>
&lt;soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"&gt;
  &lt;soap:Body&gt;
    &lt;NumberToWords xmlns="http://www.dataaccess.com/webservicesserver/"&gt;
      &lt;ubiNum&gt;3627929&lt;/ubiNum&gt;
    &lt;/NumberToWords&gt;
  &lt;/soap:Body&gt;
&lt;/soap:Envelope&gt;
        </code>
      </pre><br>
      <b>Odpowiedź API:</b> <br>
      <?php
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://www.dataaccess.com/webservicesserver/NumberConversion.wso',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="utf-8"?>
        <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
          <soap:Body>
            <NumberToWords xmlns="http://www.dataaccess.com/webservicesserver/">
              <ubiNum>3627929</ubiNum>
            </NumberToWords>
          </soap:Body>
        </soap:Envelope>',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: text/xml; charset=utf-8'
          ),
        ));

        $response = curl_exec($curl);
        $displaye_res = str_replace('<', '&lt;',$response);
        $displaye_res = str_replace('>', '&gt;;',$displaye_res);
        
        curl_close($curl);
        $xml = simplexml_load_string($response);
        $res =  $xml->children('soap',true)->Body->children('m', true)->NumberToWordsResponse->NumberToWordsResult;
        ?>
        <pre>
          <code>
<?php echo $displaye_res?>
          </code>
        </pre><br>
        <?php
        echo " </b><b>Sformatowane:</b> <br>";
        echo "<b style='color: yellow; background: black;'><i><u>".$res."</u></i></b>";
      ?>
    </div>
  </div>
</body>
</html>