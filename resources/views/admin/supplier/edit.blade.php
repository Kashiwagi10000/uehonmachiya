
@extends('admin.layouts.app')
@section('content')
        <h1>入庫先の変更</h1>


        <form >
            <div class="form-group">
                <label class="col-sm-4" for="exampleInputsyohin">入庫先名</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyohin" aria-describedby="syohinHelp" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput" >入庫先郵便番号</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">入庫先住所</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">入庫先電話番号(TEL)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">入庫気電話番号(FAX)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">メールアドレス</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">代表者名</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="text-right mr-4">
                <button type="reset" class="btn btn-primary">リセット</button>
                <button type="submit" class="btn btn-primary " >変更</button>
            </div>
        </form>
@endsection

