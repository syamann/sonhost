
@extends('layouts.app')
@section('content')

    @if($questions)
        <h1>Soru Listesi</h1>
        <a href="/create">Soru Sor</a><br><br>
        <table class="table" border="1">
            <thead>
            <tr>
                <th>Konu Başlığı</th>
                <th>Konu</th>
                <th>Email</th>
                <th>Açıklama</th>
                <th>Etiket</th>
                <th>Seçenek</th>
            </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{$question->baslik}}</td>
                    <td>{{$question->konu}}</td>
                    <td>{{$question->email}}</td>
                    <td>{{$question->aciklama}}</td>
                    <td>{{$question->label}}</td>
                    <td>
                        <a href="{{route('web.question.edit',$question->id)}}">Düzenle</a>-<a href="{{url('delete',$question->id)}}">Sil</a><br>


                    </td>
                </tr> @endforeach
            </tbody>
        </table>
    @endif
@stop
