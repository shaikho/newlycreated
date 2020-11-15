<!-- Stored in resources/views/layouts/master.blade.php -->

<html lang="en">
<head>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>App - @yield('title')</title>
    <style>
        body {
            background-color: #F6F6F6;
            background-image: url('images/brushed-alum-dark.png');
        }
    </style>
</head>
<body>
    <div class="uk-text-center" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-card uk-card-default uk-card-body">
                @yield('content')
            </div>
        </div>
        <div class="uk-width-auto">

            <div class="uk-card uk-card-default uk-card-body uk-text-center">
                <img src="images/image.jpg" width="100px">
                <br>
                <br>
                <ul class="uk-nav-default uk-nav-parent-icon uk-text-cetner "uk-nav>
                    <li class="uk-active"><a href="#">القائمة الرئيسية</a></li>
                    <li class="uk-parent uk-text-left">
                        <a href="#">إدارة حسابات المندوبين</a>
                        <ul class="uk-nav-sub uk-text-left">
                            <li><a href="/representitives">عرض المندوبين</a></li>
                            <li><a href="/addrepresentitive">إضافة المندوبين</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">المجند</a>
                        <ul class="uk-nav-sub uk-text-left">
                            <li><a href="/recruits">عرض المجندين</a></li>
                            <li><a href="/addrecruits">إضافة مجند</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent">
                        <a href="#">خطابات الحوجة</a>
                        <ul class="uk-nav-sub uk-text-left">
                            <li><a href="#">عرض خطابات الحوجة</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"> تسجيل الخروج <span class="uk-margin-small-right" uk-icon="icon: sign-out"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
