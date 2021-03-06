@extends('layouts.auth')

@section('content')
<div class="login-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 m-auto col-sm-8 col-12">
                <div class="log-box">
                    <div class="row">
                        <div class="col-xl-5 col-sm-5 col-12 pad-right-0">
                            <div class="logo-back">

                            </div>
                        </div>
                        <div class="col-xl-7 col-sm-7 col-12 pad-left-0">
                            <form action="" method="post">
                                <div class="log-content">
                                    <h1>LOGIN </h1>
                                    <div class="log-body">
                                        <div class="form-group myr-top">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input name="username" type="text" class="form-control custom" id="email"
                                                placeholder="Username" required>
                                        </div>
                                        <div class="form-group myr-top">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input name="password" type="password" class="form-control custom"
                                                id="password" placeholder="Password" required>
                                        </div>
                                        <div style="margin-top:50px;" class="log-btn text-center">
                                            <input type="submit" class="btn btn-theme1" value="Login">
                                        </div>
                                        <div class="log-bottom-cotent">
                                            <p>Creat an account<a href=""> Sign Up</a><br>
                                                <a href="#" class="pull-right">Forgot Password</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
