
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redistration form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">

        <header>Registration form</header>
       <form action="action.php" class="form" method="POST">

        <div class="column">
                
            <div class="input_box">
                <label >F_name</label>
                <input type="text" placeholder="Enter first name" name="Fname" required>
            </div>
            
            <div class="input_box">
                <label >L_name</label>
                <input type="text" placeholder="Enter last name" name="Lname" required>
            </div>
            


        </div>
        <div class="input_box">
            <label >Matricle</label>
            <input type="password" placeholder="Enter password " name="Matricule" required>
        </div>

        <div class="input_box">
            <label >Email address</label>
            <input type="text" placeholder="Enter email " name="Address" required>
        </div>
        
        <div class="column">
            <div class="input_box">
                <label >Phone number</label>
                <input type="number" placeholder="Enter phone number" name="Phone" required>
            </div>
            <div class="input_box">
                <label >DOB</label>
                <input type="date" placeholder="Enter date of birth" name="DOB" required>
            </div>
        </div>
        <div class="input_box">
            <label >Department</label>
            <input type="text" placeholder="Enter Department " name="Department" required>
        </div>
       
        <div class="gender_box">
            <h3>Gender</h3>
            <div class="gender_option">
                <div class="gender">
                    <input type="radio" id="check_male" name="Gender">
                    <label for="check_male">male</label>
                </div>
                <div class="gender">
                    <input type="radio" id="check_female" name="Gender">
                    <label for="check_female">female</label>
                </div>
            </div>
        </div>
        
        <button>submit</button>
       </form> 
       
	
	</section>
</body>
</html>