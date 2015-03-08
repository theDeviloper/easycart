@extends('app')

@section('headline')
<h1>Kontakt</h1>
@stop

@section('welcome')
Willkommen auf Blah...
@stop

@section('content')
	<div class="container marketing">
      <!-- Drei Spalten Text unter dem Karussell -->
      <div class="row">
		<form action="kontakt" method="post" id="contact_form" novalidate="">
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
          <div class="col-sm-6">
          <label>Vorname*</label>
          <input type="text" name="vorname" id="vorname" class="form-control" value="">
          </div>
        </form>
	  </div><!-- /.row -->
    </div>
@stop