<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>

    <form method="POST" action="/welcome">
        <!-- CSRF Token -->
        <?php echo csrf_field(); ?>

        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>

        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>

        <p>Nationality:</p>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="English">English</option>
            <option value="Other">Other</option>
        </select><br>

        <p>Languages Spoken:</p>
        <input type="checkbox" name="languages[]" value="Indonesian"> Bahasa Indonesia<br>
        <input type="checkbox" name="languages[]" value="English"> English<br>
        <input type="checkbox" name="languages[]" value="Other"> Other<br>

        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
