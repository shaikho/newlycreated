@extends('master')

@section('title', 'Page Title')

@section('content')

<ul class="uk-breadcrumb uk-text-right">
    <li><a>المجندين</a></li>
    <li><a>إضافه مجند</a></li>
</ul>
<hr class="uk-divider-icon">
<form class="uk-form-stacked uk-margin-auto uk-width-2xlarge uk-text-center" method="POST" action="/performaddrecruit">
    @csrf
    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" name="" for="form-stacked-text">أسم المجند
        </label>
        <div class="uk-form-controls">
            <input name="name" class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...الإسم">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">الولاية
        </label>
        <div class="uk-form-controls">
            <select class="uk-select">
                <option>الخرطوم</option>
                <option>الجزيرة</option>
                <option>الشمالية</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">المحلية
        </label>
        <div class="uk-form-controls">
            <select class="uk-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">التخصص
        </label>
        <div class="uk-form-controls">
            <select class="uk-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">المنطقة
        </label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...الرقم الوطني">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">المؤهل العلمي
        </label>
        <div class="uk-form-controls">
            <select class="uk-select">
                <option class="uk-text-right">Option 01</option>
                <option>Option 02</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">الرقم الوطني
        </label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...كلمة المرور">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">رقم الهاتف
        </label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...تأكيد كلمة المرور">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">كلمة المرور
        </label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...تأكيد كلمة المرور">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">تأكيد كلمة المرور
        </label>
        <div class="uk-form-controls">
            <input class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...تأكيد كلمة المرور">
        </div>
    </div>
        <button class="uk-button uk-button-primary uk-width-1-4" uk-margin>إضافه</button>
    <br>
    <br>
</form>
@endsection
