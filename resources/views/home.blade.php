<!--extend layout master.blade.php -->
@extends('layouts.master')
 
<!--sets value for section title to "Mini Bücher Kollektion" (section title is used in messages.blade.php) -->
@section('title', 'Home')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Bücher Kollektion" (section content is used in messages.blade.php) -->

@section('content1')

<h1>Welcome</h1>
<h3>Ziel:<br>
● Einen Überblick über ihre Bücher verschaffen und Feedback und
Ideen zu ihrer Sammlung austauschen.<br>
● Die Bücher im DB nach folgenden Kriterien (Genre, Titel, Autor,
Erscheinungsdatum und Kurzbeschreibung) organisieren<br>
● Die Möglichkeit der Veränderung oder Delete der DB auf der Webseite
haben</h3>



@endsection
