
<?php
    include('header.php');
?>
    <div class="container mt-5">
        <h2 class="mb-4">Form Submission</h2>
        <form action="process.php" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Enter your name:</label>
                <input name="name" type="text" class="form-control" id="name" required>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Enter your E-Mail:</label>
                <input name="email" type="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <fieldset class="mb-3">
                <legend>Select your gender:</legend>
                <div class="form-check">
                    <input name="gender" type="radio" class="form-check-input" id="male" value="Male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input name="gender" type="radio" class="form-check-input" id="female" value="Female" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check">
                    <input name="gender" type="radio" class="form-check-input" id="prefer-not" value="Prefer not to answer" required>
                    <label class="form-check-label" for="prefer-not">Prefer not to answer</label>
                </div>
                <div class="invalid-feedback">Please select a gender.</div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>