<!DOCTYPE html>
<html lang="en">
<title>assignment</title>
<body>
<h1>Forms</h1>


<form>
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name" required placeholder="John Koomson">
    <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required placeholder="abc@gmail.com">
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
    <br>
    <label for="age">Age</label>
    <input type="number" id="age" name="age" required>
    <br>
    <label for="">Contact</label>
    <input type="tel" id="contact" name="contact" placeholder="(233) 20-404-4047"> <br>

    <label for="dob">Date of birth</label>
    <input type="date" id="dob" name="dob"> <br>


    <label for="Age Range">Age Range</label>

    <input type="radio" name="gender" id="male" value="Kid">
    <label for="male">6-15</label>

    <input type="radio" name="gender" id="female" value="Adult" />

    <label for="female">35-67</label>

    <input type="radio" name="gender" id="female" value="Old Age" />

    <label for="Lesbian">70-75</label>

    <input type="radio" name="gender" id="female" value="dEATH AGE" />

    <label for="Lesbian">90-120</label>

    <br>
    <label for="d">Dtae range</label>
    <select id="country" name="country">
        <option value="">Please select date range</option>
        <option value="Kid">6-15</option>
        <option value="Adult">34-45</option>

    </select>
    <br />

    <label for="Hobbies">Hobbies</label>
    <input type="checkbox" name="hobbies2" id="reading" value="reading" />
    <label for="Reading">Reading</label>

    <input type="checkbox" name="hobbies" id="diving" value="diving" />
    <label for="Diving">Diving</label>


    <br />

    <label for="Message">Message</label>
    <textarea rows="4" cols="50" maxlength="6" style="resize:none;" >

    </textarea>
    <br />

    <input type="submit" value="Submit Survey">
</form>


</body>
</html>

