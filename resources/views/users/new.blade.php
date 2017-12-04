@extends ('layouts.master')

@section ('title')

    Registration

@endsection

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div class="container">

        <h4 class="form-signin-heading">New user</h4>

        {{--@include('layouts.partials.errors')--}}


        <form action="/users/store" method="post"  class="form-signin">

            {{ csrf_field() }}

            <label for="inputFirstName" class="sr-only">First Name</label>
            <input type="text" name="firstName" id="inputTitle" class="form-control" placeholder="First Name" >

            <label for="inputLastName" class="sr-only">Last Name</label>
            <input type="text" name="lastName" id="inputTitle" class="form-control" placeholder="Last Name" >

            <label for="inputEmail" class="sr-only">e-mail</label>
            <input type="text" name="email" id="inputTitle" class="form-control" placeholder="e-mail" >

            <label for="inputPhoneNumber" class="sr-only">Phone number</label>
            <input type="text" name="phoneNumber" id="inputTitle" class="form-control" placeholder="Phone number" >

            <label for="inputCity" class="sr-only">City</label>
            <input type="text" name="city" id="inputTitle" class="form-control" placeholder="City" >


            <p>Date of birth</p>


            <span>
                <select name="day">


                    @for ( $i = 1; $i<=31; $i++ )

                        <option value={{$i}}>{{$i}}</option>

                    @endfor

                </select>
            </span>

            <span>
                <select name="month">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">Jun</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </span>

            <select name="year">


                @for ( $i = \Carbon\Carbon::now()->year; $i>=-100+\Carbon\Carbon::now()->year; $i-- )

                    <option value={{$i}}>{{$i}}</option>

                @endfor

            </select>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputTitle" class="form-control" placeholder="Password" >

            <label for="inputPasswordAgain" class="sr-only">Repeat Password</label>
            <input type="password" name="password_confirmation" id="inputTitle" class="form-control" placeholder="Repeat Password" >

            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>

    </div> <!-- /container -->

    <br>

@endsection