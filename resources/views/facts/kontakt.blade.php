@extends('app')

@section('headline')
<h1>Kontakt</h1>
@stop

@section('welcome')
Sie haben ein Problem mit der Darstellung oder Nutzung der Webseite? 
Sie vermissen eine Funktion, oder möchten aus anderen Gründen Kontakt aufnehmen?
Dann sind Sie hier richtig!

Ticketsystem!
@stop

@section('content')
<div class="container marketing">
<!-- Drei Spalten Text unter dem Karussell -->
  <div class="row">
    <form action="kontakt" method="post" id="contact_form" novalidate="">
      <div class="col-sm-6">
        <label>Betreff*</label>
        <input type="text" name="betreff" id="betreff" class="form-control" value="">
      </div>
      <div class="col-sm-6">
        <label>Vorname*</label>
        <input type="text" name="vorname" id="vorname" class="form-control" value="">
      </div>
      <div class="col-sm-6">
        <label>Nachname*</label>
        <input type="text" name="nachname" id="nachname" class="form-control" value="">
      </div>
      <div class="col-sm-6">
        <label>E-Mail-Adresse*</label>
        <input type="text" name="e-mail" id="e-mail" class="form-control" value="">
      </div>
      <div class="col-sm-12">
        <label>Nachricht*</label>
        <textarea type="text" name="nachricht" id="nachricht" class="form-control"></textarea>
      </div>
      <div class="col-sm-12">
        <label></label>
        <input type="submit" name="absenden" id="absenden" class="form-control" value="Absenden">
      </div>
    </form>
  </div><!-- /.row -->
</div>
@stop
