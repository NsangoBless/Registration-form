

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<section class="container">
        
<h2>Registration Form</h2>
    <form id="registrationForm">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <input type="submit" value="Submit">
    </form>
</section>
    <div id="error-message" class="error"></div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Clear any previous error messages
            const errorMessageDiv = document.getElementById("error-message");
            errorMessageDiv.textContent = "";

            // Get form values
            const firstName = document.getElementById("firstName").value.trim();
            const lastName = document.getElementById("lastName").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;

            // Validate inputs
            if (!firstName || !lastName || !email || !password || !confirmPassword) {
                errorMessageDiv.textContent = "All fields are required!";
                return; // Stop the form from submitting
            }

            if (password !== confirmPassword) {
                errorMessageDiv.textContent = "Passwords do not match!";
                return; // Stop the form from submitting
            }

            // If all fields are valid, you can proceed to submit the form
            console.log("First Name:", firstName);
            console.log("Last Name:", lastName);
            console.log("Email:", email);
			
            // Here you would typically send the data to the server using fetch or XMLHttpRequest
            // For example:
            /*
            fetch('/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    firstName,
                    lastName,
                    email,
                    password
                }),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                // Optionally reset the form or show a success message
                document.getElementById("registrationForm").reset();
                errorMessageDiv.textContent = "Registration successful!";
            })
            .catch((error) => {
                console.error('Error:', error);
                errorMessageDiv.textContent = "Registration failed. Please try again.";
            });
            */

            // Clear the form after submission (if you want to reset it)
            document.getElementById("registrationForm").reset();
        });
    </script>

</body>
</html>

