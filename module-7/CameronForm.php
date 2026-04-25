<!DOCTYPE html>
<html>
<head>
    <title>Cameron Form</title>
</head>
<body>

<h2>User Information Form</h2>

<form action="CameronResponse.php" method="post">

    <!-- Text -->
    Name: <input type="text" name="name"><br><br>

    <!-- Email -->
    Email: <input type="email" name="email"><br><br>

    <!-- Number -->
    Age: <input type="number" name="age"><br><br>

    <!-- Radio -->
    Gender:
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female<br><br>

    <!-- Dropdown -->
    Favorite Language:
    <select name="language">
        <option value="">Select</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
        <option value="JavaScript">JavaScript</option>
    </select><br><br>

    <!-- Checkbox -->
    Subscribe:
    <input type="checkbox" name="subscribe" value="Yes"><br><br>

    <!-- Textarea -->
    Comments:<br>
    <textarea name="comments"></textarea><br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>