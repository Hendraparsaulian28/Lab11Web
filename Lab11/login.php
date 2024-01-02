<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/login.css');?>">
</head>
<body>
    <div class="login-wrapper"> 
    <br>
    <?php if(session()->getFlashdata('flash_msg')):?>
        <div class="alert alert-danger"><?=
        session()->getFlashdata('flash_msg') ?>
        </div>
        <?php endif;?>             
        <form action="" method="post">                 
            <div class="mb-3">  
                <h1>Sign In</h1>                    
                <label for="InputForEmail" class="form-label">Email address</label>                     
                <input type="email" name="email" placeholder="Enter your email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">                 
                 <br>                
                <label for="InputForPassword" class="form-label">Password</label>                     
                <input type="password" name="password" placeholder="Enter your password" class="form-control" id="InputForPassword">                 
            <br>        
            <button type="submit" class="btn btn-primary">Login</button>
            </div>                       
            </form>     
        </div>
    </body>
</html>