<!-- <?php


//create a form having name , reg no, specialization, dob, address, submit button

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
    <style>
        
        body {
            background-color: blanchedalmond;
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <body>
        <form action="process_form.php" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="reg_no">Registration Number:</label>
            <input type="text" id="reg_no" name="reg_no" required>
            <label for="specialization">Specialization:</label>
            <input type="text" id="specialization" name="specialization" required>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">

    </body>
    <script>
        // Example to validate registration number
        document.getElementById('reg_no').addEventListener('input', function() {
            var regNo = this.value;
            var regex = /^[0-9]{8}$/;
            if (!regex.test(regNo)) {
                this.setCustomValidity('Invalid registration number. Format:12114778');
            } else {
                this.setCustomValidity('');
            }
        });
        // Example to validate address
        document.getElementById('address').addEventListener('input', function() {
            var address = this.value;
            var regex = /^[a-zA-Z0-9\s,-]+$/;
            if (!regex.test(address)) {
                this.setCustomValidity('Invalid address. Only alphanumeric characters, spaces, commas, and hyphens are allowed.');
            } else {
                this.setCustomValidity('');
            }
        });
        // Example to validate date of birth
        document.getElementById('dob').addEventListener('input', function() {
            var dob = this.value;
            var today = new Date();
            var birthDate = new Date(dob);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if (age < 18) {
                this.setCustomValidity('You must be at least 18 years old to submit this form.');
            } else {
                this.setCustomValidity('');
            }
        });
        // Example to prevent form submission if any input field is invalid
        document.querySelector('form').addEventListener('submit', function(event) {
            if (this.checkValidity() === false) {
                event.preventDefault();
            }
        });
        // Example to highlight invalid input fields
        document.querySelector('form').addEventListener('invalid', function(event) {
            event.preventDefault();
            event.target.classList.add('invalid');
        });
        document.querySelector('form').addEventListener('input', function(event) {
            event.target.classList.remove('invalid');
        });
        // Example to display error messages below input fields
        document.querySelector('form').addEventListener('invalid', function(event) {
            var errorMessage = event.target.validationMessage;
            document.getElementById('error-message').textContent = errorMessage;
        });
        document.querySelector('form').addEventListener('input', function(event) {
            document.getElementById('error-message').textContent = '';
        });
        // Example to clear error messages when resetting the form
        document.querySelector('form').addEventListener('reset', function(event) {
            document.getElementById('error-message').textContent = '';
        });
        // Example to display success message after form submission
        document.querySelector('form').addEventListener('submit', function(event) {
            document.getElementById('success-message').style.display = 'block';
        });
        document.getElementById('success-message').addEventListener('click', function(event) {
            event.target.style.display = 'none';
        });
        // Example to prevent form submission if any checkbox is not checked
        document.querySelector('form').addEventListener('submit', function(event) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var atLeastOneChecked = false;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    atLeastOneChecked = true;
                }
            });
            if (!atLeastOneChecked) {
                event.preventDefault();
                alert('Please select at least one checkbox.');
            }
        });
        // Example to display additional information based on selected checkbox
        document.querySelector('form').addEventListener('change', function(event) {
            var checkbox = event.target;
            if (checkbox.type === 'checkbox' && checkbox.name === 'additional_info') {
                var additionalInfo = document.getElementById('additional-info');
                if (checkbox.checked) {
                    additionalInfo.style.display = 'block';
                } else {
                    additionalInfo.style.display = 'none';
                }
            }
        });
        // Example to display a loading spinner while submitting the form
      
    </script>
</head> -->
<!DOCTYPE html>
<head>
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="reg_no">Registration Number:</label>
        <input type="text" id="reg_no" name="reg_no" required>
        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization" required>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>

<head>
    <title>Student Information Form</title>
    <style>
        /* Your existing CSS styles here */
    </style>
</head>
<body>
    <?php
    // Initialize variables to store form data
    $name = $reg_no = $specialization = $dob = $address = "";

    // Define an array to store validation errors
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name (required)
        if (empty($_POST["name"])) {
            $errors[] = "Name is required.";
        } else {
            $name = $_POST["name"];
        }

        // Validate registration number (required)
        if (empty($_POST["reg_no"])) {
            $errors[] = "Registration number is required.";
        } else {
            $reg_no = $_POST["reg_no"];
        }

        // Validate specialization (required)
        if (empty($_POST["specialization"])) {
            $errors[] = "Specialization is required.";
        } else {
            $specialization = $_POST["specialization"];
        }

        // Validate date of birth (required)
        if (empty($_POST["dob"])) {
            $errors[] = "Date of birth is required.";
        } else {
            $dob = $_POST["dob"];
        }

        // Validate address (required)
        if (empty($_POST["address"])) {
            $errors[] = "Address is required.";
        } else {
            $address = $_POST["address"];
        }

        // If no errors, process the form data
        if (empty($errors)) {
            // Process the data (e.g., save to database, send email, etc.)
            // You can add your processing logic here
            echo "Form submitted successfully!";
        } else {
            // Display validation errors
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }
    }
    ?>

   
</body>
</html>
