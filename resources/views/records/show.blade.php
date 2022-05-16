@extends('layouts.app')
@section('title', '利用者名: ' . $patient->name . 'の記録番号:' . $record->id . 'の相談記録')
@section('content')
    <div class="row mt-3">
        <h1 id="title" class="col-sm-12 text-center text-success mt-5 mb-3">{{ $patient->name }} の記録番号 {{ $record->id }}の相談記録詳細</h1>
    </div>
    <table class="table table-bordered table-striped text-center">
            <tr>
                <th>記録番号</th>
                <th>内容</th>
                <th>画像資料</th>
                <th>記録した職員</th>
                <th>記録日時</th>
            </tr>
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->content }}</td>
                <td><img src="/uploads/{{ $record->image }}" alt="画像はありません" id="case_photo"></td>
                <td>{{ $record->user->name }}</td>
                <td>{{ $record->created_at }}</td>
            </tr>
    </table>
@endsection     