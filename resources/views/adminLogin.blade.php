<h1>Admin Login page</h1>

@if(session('user'))
    <h3 style="color:rgb(34, 192, 34)">dear {{ session('user') }} . your account has been created . Please login</h3>
@endif


<form action="user" method="POST">
    @csrf
    <table border="1">
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

        </tr>


    </table>

</form>
