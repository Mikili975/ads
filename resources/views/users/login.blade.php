@extends ('layouts.master')

@section ('title')

    Prijava

@endsection

@section('content')


    {{--@includeWhen($errors->any(), 'posts.error')--}}



    <div class="container">

        <h4 class="form-signin-heading">Sign in</h4>

        <form action="/check" method="post"  class="form-signin">

            {{ csrf_field() }}

            <label for="inputEmail" class="sr-only">e-mail</label>
            <input type="text" name="email" id="inputTitle" class="form-control" placeholder="E-mail" >

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputTitle" class="form-control" placeholder="Password" >

            <button class="btn btn-lg btn-primary btn-block" type="submit">OK</button>
        </form>


        <h4 class="form-signin-heading">Don't have an account?<a href="/register">Register</a></h4>


    </div> <!-- /container -->

    <br>

@endsection