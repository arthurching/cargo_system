@extends('site.layouts.main2')
@section('content')
        <!--BEGIN SLIDER -->
<div class="  m-t-60" >
    <div style=" margin: 0;
        padding: 10px;
        background: #d5eef3;">
    <div style=" margin: 0px auto;
        padding-top: 0px;
        width: 690px;
        color: #3e4e1a !important;
        font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size: 18px;">
        <form>
            <h1 class="center-text">需求單</h1>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">物品名稱</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">長(CM)</label>
                    <input type="text" class="form-control" id="inputlongth" placeholder="長">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">寬(CM)</label>
                    <input type="text" class="form-control" id="inputwidth" placeholder="寬">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">高(CM)</label>
                    <input type="text" class="form-control" id="inputheight" placeholder="高">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">單件材積(CM)</label>
                    <input type="text" class="form-control" id="inputcbm" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">件數</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">重量(KG)</label>
                    <input type="text" class="form-control" id="inputlongth" placeholder="長">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">總材積(CBM)</label>
                    <input type="text" class="form-control" id="inputcbm" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">總重量(KG)</label>
                    <input type="text" class="form-control" id="inputcbm" placeholder="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress2">寄送目的地</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="地址">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">希望到達目的地日期</label>
                    <input type="date" class="form-control" name="start_time" value="請選擇日期">
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group">
                    <label class="control-label">照片上傳</label>
                    <input id="input-b5" name="input-b5[]" type="file" multiple>
                </div>
            </div>
            <div class="form-row col-md-12">
                <div class="form-group">
                    <label for="comment">備註</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>

            <div class="form-row center-text">
            <button type="submit" class="btn btn-primary">送出</button>
            </div>
        </form>

    </div>
</div>
    </div>
<!--END SLIDER

-->
@endsection