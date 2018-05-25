@extends('layout')

@section('title', 'Home')


@section('container-right')
<div class='container-right'>
	<img class='background-img' src='./img/group.jpg'>
</div>
@stop	

@section('img-field')
<div class='img-field'>
	<img class='molde-img' src='./img/molde.svg'>
	<a href='userDetails'><button type="button" class="btn-descubra">DESCUBRA</button></a>
</div>
@stop

@section('texts-field')
<h1 class='intial-font'>
	<p>Com</p>
	<p>qual</p>
	<p>famoso</p>
	<p>você se</p>
	<p>parece?</p>
</h1>
@stop