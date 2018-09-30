<div class="block_buttons">
    <b id="title1"><a href="categoryMan">مردانه</a></b>
    <b id="title2"><a href="categoryWomen">زنانه</a></b>
    <b id="title3"><a href="categoryChildren">بچه گانه</a></b>
    <b id="title4">ورزشی</b>
    <b id="title5">تخفیف</b>
    <b id="title6">برندها</b>
    <img id="nav_line" src="pictures/nav_line.png">
</div>

<div class="navigation">
    <a id="navigation_member_button" style="text-decoration:none;" href="{{ url('/register') }}">عضویت</a>
    {{--<button id="navigation_member_button" onclick="memberFunc()">عضویت</button>--}}
    <a id="navigation_login_button" style="text-decoration:none;" href="{{ url('/login') }}">ورود</a>
    {{--<button id="navigation_login_button" onclick="loginFunc()">ورود</button>--}}

    <img id="clothster" src="pictures/clothster.png">
    <div class="container">
        <input id="search" dir ="rtl" type="text" size="35"/>
        <div class="magnifier"><img src="pictures/magnifier2.png"></div>
        <div class="magnifier2"><img src="pictures/magnifier2.png"></div>
    </div>
</div>

<div id="myModal" class="modal">
    <div class="modal_content">
        <div id="box">
            {{--{!! Form::open(['enctype'=>'multipart/form-data'])  !!}--}}
            <form method="post" action="/login">
                <input type="hidden" value="{!! csrf_token() !!}">
                <span class="close" onclick="closeFunc()">&times;</span>
                <p id="modal_enter">ورود</p>
                <b id="phone_email">شماره تلفن یا ایمیل</b>
                <input name="phone_email" id="phone_email_field" dir ="ltr" type="text" size="35" value="برای مثال mahtab.ezzaty@gmail.com"/>
                <b id="password">رمز عبور</b>
                <input name="password" type="password" id="password_field" dir ="rtl" size="35"/>
                <b id="forget_password">رمز عبور خود را فراموش کرده اید؟</b>
                <b id="click">کلیک کنید</b>
                <button id="enter_button" type="submit" name="form1">ورود</button>
            </form>
            {{--<!--{!! Form::close() !!}-->--}}
        </div>
    </div>
</div>

<div id="myModal1" class="modal1">
    <div class="modal_content1">
        <div id="box1">

            {{--{!! Form::open(['enctype'=>'multipart/form-data'])  !!}--}}
            <form method="post" action="register">
                {!! csrf_field() !!}
                <span class="close1" onclick="closeFunc1()">&times;</span>
                <p id="modal_enter1">ثبت نام</p>
                <b id="phone_email1">شماره تلفن یا ایمیل</b>
                <input name="phone_email1" id="phone_email_field1" dir ="ltr" type="text" size="35" value="برای مثال mahtab.ezzaty@gmail.com"/>
                <b id="password1">رمز عبور</b>
                <input name="password1" type="password" id="password_field1" dir ="rtl" size="35"/>
                <b id="forget_password1">رمز عبور خود را فراموش کرده اید؟</b>
                <b id="click1">کلیک کنید</b>
                <button id="enter_button1" type="submit" name="form2">ثبت نام</button>
                {{--{!! Form::close() !!}--}}
            </form>

        </div>
    </div>
</div>
