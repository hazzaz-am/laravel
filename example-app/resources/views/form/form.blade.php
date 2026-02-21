<div>
    <h2>Add New User</h2>

    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Your Name" name="username" value="{{ old('username') }}"
                class="{{ ($errors->first('username') ? 'input-error' : '') }}">
            <p style="color: red">
                @error('username')
                    {{ $message }}
                @enderror
            </p>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Your Email" name="email" value="{{ old('email') }}"
                class="{{ ($errors->first('email') ? 'input-error' : '') }}">
            <p style="color: red">
                @error('email')
                    {{ $message }}
                @enderror
            </p>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter Your City" name="city" value="{{ old('city') }}"
                class="{{ ($errors->first('city') ? 'input-error' : '') }}">
            <p style="color: red">
                @error('city')
                    {{ $message }}
                @enderror
            </p>
        </div>
        <div class="input-wrapper">
            <button>Submit</button>
        </div>
    </form>
</div>

{{-- Style --}}
<style>
    input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        padding: 4px
    }

    .input-error {
        border: red 1px solid;
        color: red
    }

    .input-wrapper {
        margin: 10px
    }

    button {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #fff;
        cursor: pointer
    }
</style>
