@extends('home.parent')
@section('content')

<!--banner-->
<div class="banner-top">
    <div class="container">
        <img src="{{ asset('homes/images/logo1.png') }}">
    </div>
</div>
<!--login-->
<div class="container">
        <div class="login">
            <form>
                <div class="col-md-3"></div>
            <div class="col-md-6 login-do">
            <div class="login-mail">
<<<<<<< HEAD
                    <input type="text" placeholder="Name" required="" autofocus>
                    <i  class="glyphicon glyphicon-user"></i>
                </div>
                <div class="login-mail">
                    <input type="text" placeholder="Phone Number" required="">
                    <i  class="glyphicon glyphicon-phone"></i>
                </div>
                <div class="login-mail">
                    <input type="text" placeholder="Email" required="">
                    <i  class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Password" required="">
=======
                    <input type="text" placeholder="Name" name='name' required="" autofocus>
                    <i  class="glyphicon glyphicon-user"></i>
                </div>
                <div class="login-mail">
                    <input type="text" placeholder="Phone Number" name='tel' required="">
                    <i  class="glyphicon glyphicon-phone"></i>
                </div>
                <div class="login-mail">
                    <input type="text" placeholder="Email" name='email' required="">
                    <i  class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Password" name='password' required="">
>>>>>>> zyk
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                   <center>
                    <label class="hvr-skew-backward" style="width:64px;height:38px;">
                        <input type="submit" value="注册" >
                    </label>
                    <a href="{{url('login')}}" class=" hvr-skew-backward">登录</a>
            </div>
            </center>
            
            </div>
            
            <div class="clearfix"> </div>
            </form>
        </div>

</div>

<!--//login-->

            <!--brand-->
        <div class="container">
            <div class="brand">
                <div class="col-md-3 brand-grid">
                    <img src="images/ic.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic1.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic2.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic3.png" class="img-responsive" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
            <!--//brand-->
            </div>
            
        </div>

@endsection
    