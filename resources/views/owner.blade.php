<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleet Management</title>
    <link rel="stylesheet" href="owner.css">
    <style>
       
        
    </style>
</head>
<body>
    <div class="container">
    <h1>Register Vehicle</h1>
    <div class="label">
    <label for="pid"><b>PartnerId</b></label>
    <input class="form-control" type = "text" id="pid" name="pid" placeholder="id" style = "margin-left: 40px" required><br>
    <label for="name"><b>Name</b></label>
    <input class="form-control" type = "text" id="name" name="name" placeholder="Name" style = "margin-left: 70px" required><br>
    <label for="contact"><b>Contact</b></label>
    <input class="form-control" type = "text" id="contact" name="contact" style="margin-left: 55px" placeholder="Contact" required><br>
    <label for="chachis"><b>Address</b></label>
    <input class="form-control" type = "text" id="address" name="address" placeholder="address" style = "margin-left: 55px" required><br>
    <label for="idproof"><b>Id Proof</b></label>
    <select name="idproof" id="idproof">
    <option value="adhar" selected><b>Adhar</b></option>
    <option value="driving"> Driving Licence</option>
    <option value="pan">Pan Card</option>
    </select><br>
    <label for="bank"><b>Bank Acount</b></label> 
    <input class="acount" type = "text" id="bank" name="bank" placeholder="Bank Acount" style = "margin-left: 25px" required><br>
    <input class="submit" Type = "button" id = "create" name = "register" value = "Submit">
    <input class="button" Type = "Reset" id = "create" name = "register" value = "Reset">
    </div>
</div>
</body>
</html>
