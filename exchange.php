<?php
header("Content-Type: text/html; charset=utf-8");
$date = date("d/m/Y"); // Текущая дата
$content = simplexml_load_file("https://www.cbr.ru/scripts/XML_daily.asp?date_req=".$date);

foreach($content->Valute as $cur) {
    if($cur->NumCode == 036) { $aud = str_replace(",", ".", $cur->Value); } // Австралийский доллар
    if($cur->NumCode == 826) { $gbr = str_replace(",", ".", $cur->Value); } // Фунт стерлингов Соединенного королевства
    if($cur->NumCode == 974) { $byr = str_replace(",", ".", $cur->Value); } // Белорусских рублей
    if($cur->NumCode == 208) { $dkk = str_replace(",", ".", $cur->Value); } // Датских крон
    if($cur->NumCode == 840) { $usd = str_replace(",", ".", $cur->Value); } // Доллар США
    if($cur->NumCode == 978) { $eur = str_replace(",", ".", $cur->Value); } // Евро
    if($cur->NumCode == 352) { $isk = str_replace(",", ".", $cur->Value); } // Исландских крон
    if($cur->NumCode == 398) { $kzt = str_replace(",", ".", $cur->Value); } // Казахстанских тенге
    if($cur->NumCode == 124) { $cad = str_replace(",", ".", $cur->Value); } // Канадский доллар
    if($cur->NumCode == 578) { $nok = str_replace(",", ".", $cur->Value); } // Норвежских крон
    if($cur->NumCode == 960) { $xdr = str_replace(",", ".", $cur->Value); } // СДР (специальные права заимствования)
    if($cur->NumCode == 702) { $sgd = str_replace(",", ".", $cur->Value); } // Сингапурский доллар
    if($cur->NumCode == 949) { $try = str_replace(",", ".", $cur->Value); } // Турецкая лира
    if($cur->NumCode == 980) { $uah = str_replace(",", ".", $cur->Value); } // Украинских гривен
    if($cur->NumCode == 752) { $sek = str_replace(",", ".", $cur->Value); } // Шведских крон
    if($cur->NumCode == 756) { $chf = str_replace(",", ".", $cur->Value); } // Швейцарский франк
    if($cur->NumCode == 392) { $jpy = str_replace(",", ".", $cur->Value); } // Японских иен
}