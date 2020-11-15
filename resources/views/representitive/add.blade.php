@extends('master')

@section('title', 'Page Title')

@section('content')

<ul class="uk-breadcrumb uk-text-right">
    <li><a>المندوبين</a></li>
    <li><a>إضافه مندوب</a></li>
</ul>

<form class="uk-form-stacked uk-margin-auto uk-width-2xlarge uk-text-center" method="POST" action="/performaddrepresentitve">
    @csrf
    @include('helper.messages')
    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" name="" for="form-stacked-text">أسم المندوب
        </label>
        <div class="uk-form-controls">
            <input name="name" class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...الإسم">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">الوحدة الأدارية
        </label>
        <div class="uk-form-controls">
            <input name="managementunit" class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...الوحدة">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">رقم الهاتف
        </label>
        <div class="uk-form-controls">
            <input name="phonenumber" class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...رقم الهاتف">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">أسم المؤسسة
        </label>
        <div class="uk-form-controls">
            <input name="organaizationunit" class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...أسم المؤسسة">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">الرقم الوطني
        </label>
        <div class="uk-form-controls">
            <input name="nationalnumber" class="uk-input uk-text-right" id="form-stacked-text" type="text" placeholder="...الرقم الوطني">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">كلمة المرور
        </label>
        <div class="uk-form-controls">
            <input name="password" class="uk-input uk-text-right" id="form-stacked-text" type="password" placeholder="...كلمة المرور">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label uk-text-right" for="form-stacked-text">تأكيد كلمة المرور
        </label>
        <div class="uk-form-controls">
            <input name="repassword" class="uk-input uk-text-right" id="form-stacked-text" type="password" placeholder="...تأكيد كلمة المرور">
        </div>
    </div>
        <button class="uk-button uk-button-primary uk-width-1-4" uk-margin>إضافه</button>
    <br>
    <br>
</form>
@endsection
