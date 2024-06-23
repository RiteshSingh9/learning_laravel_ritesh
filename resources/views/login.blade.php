<div>
    <style>
        .form-group {
            margin: 10px;
            font-size: 16px;
            width: 300px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-stretch: condensed;
            font-weight: 300;
            font-kerning: none;
            display: flex;
            flex-direction: column;

        }
        .form-group label {
            padding: 5px;
        }
        .form-group input {
            padding: 4px;
            margin: 5px;
            width: 100%;
            border: 1px solid crimson;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 4px 8px;
            font-size: 16px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-stretch: condensed;
            font-weight: 300;
            font-kerning: none;
            color: white;
            background: crimson;
            border: 1px solid transparent;
            border-radius: 5px;
        }
    </style>

    <h1>Login</h1>
    <form action="/login" method="post">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter Username" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter password" />
        </div>

        <div class="form-group">
            <button type="submit">Login</button>
        </div>

    </form>
</div>
