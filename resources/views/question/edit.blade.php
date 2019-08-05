@extends('layouts.app')
@section('content')

<h1>Soru Değiştir</h1>
<form action="{{route('web.question.update',$question->id)}}" method="POST">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="POST">
    <input type="text" name="baslik" placeholder="Baslik" value="{{$question->baslik}}">
    <input type="text" name="konu" placeholder="Konu" value="{{$question->konu}}">
    <input type="email" name="email"  placeholder="Email adresinizi giriniz" value="{{$question->email}}">
    <input type="longtext" name="aciklama" placeholder="Sorunuzu yazınız" value="{{$question->aciklama}}">
    <input type="submit"  value="Kaydet">
</form>
@stop
