@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <form method="POST" action="{{route('contact.store')}}">
                            @csrf
                            氏名
                            <input type="text" name="your_name" class="form-control" id="exampleFormControlInput1">
                            <br>
                            件名
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                            <br>
                            メールアドレス
                            <input type="email" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            <br>
                            ホームページ
                            <input type="url" name="url" class="form-control" id="exampleFormControlInput1">
                            <br>
                            性別
                            <div class="form-check">
                                <input type="radio" name="gender" class="form-check-input" id="flexRadioDefault1" value="0"></input>
                                <label class="form-check-label" for="flexRadioDefault1">男性</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gender" class="form-check-input" id="flexRadioDefault2" value="1"></input>
                                <label class="form-check-label" for="flexRadioDefault2">女性</label>
                                <br>
                            </div>
                            <br>
                            年齢
                            <div class="form-floating">
                                <select name="age" id="floatingSelect" class="form-select" aria-label="Floating label select example">
                                    <option selected>選択して下さい</option>
                                    <option value="1">~19歳</option>
                                    <option value="2">20歳~29歳</option>
                                    <option value="3">30歳~39歳</option>
                                    <option value="4">40歳~49歳</option>
                                    <option value="5">50歳~59歳</option>
                                    <option value="6">~60歳</option>
                                </select>
                            </div>
                            <br>
                            お問合せ内容
                            <textarea name="contact" id="" cols="30" rows="10" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" id="flexRadioDefault2" type="checkbox" name="caution" value="1">注意事項に同意する</input>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary" value="登録する"></input>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
