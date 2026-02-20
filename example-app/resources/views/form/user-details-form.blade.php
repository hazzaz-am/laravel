<div>
    <h2>Add New User</h2>
    <form action="details-form" method="post">
        @csrf
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="JAVA" id="java">
            <label for="java">JAVA</label>
        </div>
        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
        </div>
        <div>
            <h4>City</h4>
            <select name="city" id="city">
                <option value="dhaka">Dhaka</option>
                <option value="chittagong">Chittagong</option>
                <option value="cumilla">Cumilla</option>
            </select>
        </div>
        <div>
            <label for="age">Age</label>
            <input type="range" id="age" name="age" min="18" max="40">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
