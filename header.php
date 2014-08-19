<?php 
    require("config.php"); 
    $submitted_login = ''; 
    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                id, 
                login, 
                password,  
                email 
            FROM client 
            WHERE 
                login = :login
        "; 
        $query_params = array( 
            ':login' => $_POST['login'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Erreur dans la requête: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = $_POST['password']; 
            if($check_password == $row['password']){
                $login_ok = true;
            } 
        } 

        if($login_ok){ 
            
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: accueil.php"); 
            die("Redirecting to: accueil.php"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_login = htmlentities($_POST['login'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?> 

<header>
  <div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand">Location des voitures</a>
       <div class="nav-collapse collapse">
        <ul class="nav pull-right">
          <li><a href="register.php">S'inscrire</a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">S'authentifier <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                <form action="index.php" method="post"> 
                    Login:<br /> 
                    <input type="text" name="login" value="<?php echo $submitted_login; ?>" /> 
                    <br /><br /> 
                    Password:<br /> 
                    <input type="password" name="password" value="" /> 
                    <br /><br /> 
                    <input type="submit" class="btn btn-info" value="Login" /> 
                </form> 
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

</header>