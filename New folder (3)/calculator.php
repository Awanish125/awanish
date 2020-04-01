<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>LPU</title>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="signup-container">
                <div class="heading">
                    <h3 color="white" style="text-align: center;padding-left: 17px;color:white;">ENTER ALL THE INFORMATION</h3>
                </div>
                <div class="form-container">
                <table style="border-collapse: collapse;border: 0px solid black; width: 160%;color:white;text-align:left;">
                    <form onsubmit="return checkform()" action="./register.php" method="POST">
                    <tr>
                        <div class="form-input">
                        <th> Name: </th><td><input type="text" class="form-element" name="name" id="name" placeholder="Student name" required/></td>
                        </div>
                       </tr> <div class="form-input"><tr>
                       <th>Roll Number: </th><td><input type="text" class="form-element" name="roll" id="roll" placeholder="Roll number" required/></td>
                        </div></tr>
                        <div class="form-input"><tr>
                       <th>
                            Maths: </th><td><input type="text" class="form-element" name="maths" id="maths" placeholder="Maths" required/></td>
                        </div></tr>
                        <div class="form-input"><tr>
                       <th>
                            Science:</th><td><input type="text" class="form-element" name="science" id="science" placeholder="Science" required/>
                            </td>
                        </div></tr>
                        <div class="form-input"><tr>
                       <th>
                            Computer:</th><td><input type="text" class="form-element" name="computer" id="computer" placeholder="Computer" required/>
                            </td>
                        </div></tr>
                        <div class="form-input"><tr>
                       <th>
                            Socail science:</th><td><input type="text" class="form-element" name="socail" id="social" placeholder="Socail science" required/>
                            </td>
                        </div></tr>
                        <div class="form-input"><tr>
                       <th>
                            English:</th><td><input type="text" class="form-element" name="english" id="english" placeholder="English" required/>
                            </td>
                        </div></tr>
                        <div class="form-input"><tr>
                       <th>
                            Total:</th><td> <input type="text" class="form-element" name="total" id="total" placeholder="Click on calculate" readonly required/>
                            </td>
                        </div></tr>
                        <div class="form-input"><tr>
                       <th>
                            Percentage:</th><td> <input type="text" class="form-element" name="per" id="per" placeholder="Click on calculate" readonly required/>
                            </td>
                        </div></tr><tr>
                       <th>
                        <div class="form-input" style="display:flex"> 
                            <input type="submit" class="register_btn" name="register" id="register" value="Register"/></th>
                           <th> <div style="border:1px solid #ccc; width:100px;text-align:center;padding:5px;cursor:pointer" onclick="cal()">Calculate</div></th>
                           </tr>
                           </table>
                        </div>
                    </form>
                </div>
            </div>
            
<script src="./main.js"></script>
</body>
</html>