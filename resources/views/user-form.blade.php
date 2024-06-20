<div class="container">
    <h2>Add New User</h2>

    {{-- {{ print_r($errors) }} --}}
    {{-- @if($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                {{ $error }}
            </div>
        @endforeach
    @endif --}}

    <form action="user/add" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Enter user name" name="username" />
            <br/>
            <span style="color: saddlebrown">
                @error('username')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <input type="email" class="form-input" placeholder="Enter your Email..." name="email" />
            <br/>
            <span style="color: saddlebrown">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <input type="checkbox" id="php" class="form-input" name="skills[]" value="php" />
            <label for="php">PHP</label>
            <input type="checkbox" id="node" class="form-input" name="skills[]" value="node" />
            <label for="node">Node</label>
            <input type="checkbox" id="java" class="form-input" name="skills[]" value="java" />
            <label for="java">Java</label>
            <br/>
            <span style="color: saddlebrown">
                @error('skills')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <input type="radio" name="gender" value="male" id="male" />
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female" />
            <label for="female">Female</label>

        </div>
        <div class="form-group">
            <select name="city" class="form-select" id="city">
                <option value="delhi">Delhi</option>
                <option value="noida">Noida</option>
                <option value="gurugram">Gurugram</option>
                <option value="mumbai">Mumbai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="range" name="age" id="age" min="18" max="100" />
        </div>
        <div class="form-group">
            <button type="submit" class="submitBtn">Add New User</button>
        </div>
    </form>
</div>

<style>
    html,
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        width: 400px;
        height: 500px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgb(255, 185, 185);
    }
    form {
        width: 400px;
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .form-group {
        margin: 10px 5px;
    }
    .form-input {
        padding: 5;
        font-size: 14px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        border: 2px solid orange;
        border-radius: 5px;
    }
    .submitBtn {
        background-color: transparent;
        color: saddlebrown;
        font-size: 14px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        padding: 10px;
        border: 2px solid saddlebrown;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.4s ease-out
    }
    .submitBtn:hover {
        background: saddlebrown;
        color: white;
        transition: all 0.4s ease-in;
    }
    .form-select {
        width: 100%;
        padding: 4px 20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 16px;
        border-radius: 5px;
    }
</style>
