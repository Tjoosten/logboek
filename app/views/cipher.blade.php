@extends('layouts.application')

@section('content')

<h1>Ciphertool</h1> 

<form id="cipher-form">

<div class="inputs"></div>

<hr>

<textarea cols="50" rows="10" name="source"></textarea>
<textarea cols="50" rows="10" name="target"></textarea>

<p class="pull-right">
<button id="load-button"class="btn btn-success" >Load JSON</button>
<button id="dump-button"class="btn btn-success" >Dump JSON to console</button>
</p>

<input type="submit" value="Decode" class="btn btn-primary" />

</form>

<script src="/js/cipher.js"></script>

@stop
