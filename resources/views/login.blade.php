<h1>Login page</h1>
@if(session('message'))
    <h3 style="color:rgb(34, 192, 34)"> {{ session('message') }}</h3>
@endif
<form action="signin" method="POST">
    @csrf

    <table>
        <tr>
            <td><label for="email">E-mail : </label><br></td>
            <td><input placeholder="example@gmail.com" type="email" name="email" id="email"><br>
                <span style="color:red">
                @error('first_name')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="password">Password : </label><br></td>
            <td><input type="password" name="password" id="password"><br>
                <span style="color:red">
                @error('first_name')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit_bt" value="login" id="submit_bt"></td>
            <td><a href="signup"> Don't have any account? Create one </a></td>
        </tr>


    </table>

</form>
