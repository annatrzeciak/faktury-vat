<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Wystawianie faktur elektronicznych | Program do fakturowania </title>
    <meta NAME="keywords" content="Program do wystawiania faktur, fakturowanie online, faktura VAT, Faktura elektroniczna, plik JPK, program do wysyłania JPK">
    <meta name="DESCRIPTION" content="Program do wystawiania faktur elektronicznych, baza dokumentów i kontrahentów, wysyłanie przypomnień i wezwań, zlecenie windykacji">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body <?php echo ($_SERVER[ 'REQUEST_URI']=='/' )? 'class="d-flex flex-column justfity-content-beetwen img-background"': 'class="d-flex flex-column justfity-content-beetwen"' ?> >
