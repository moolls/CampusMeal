<?php
session_start();

if(isset($_POST['submit'])){
    $db = new SQLite3 ("pg18.db");
    $user= preg_replace('/\s+/', '', $_POST['user']);
    $pass=$_POST['pass'];
    $email=strtolower($_POST['email']);
   
    $hash_method= PASSWORD_DEFAULT;
    $hashPass=password_hash($pass, $hash_method);

    $result = $db->query('SELECT user from User');
    $row = $result->fetchArray();

    while ($row = $result->fetchArray()) {
        if ($row['user'] == $user) {
            header("Location: registration.php?isValid=true");
            exit;
        }
    }

    if(AddUser($user,$hashPass,$email)) {
        session_start();
        $_SESSION['user'] = $user;

        $sql = ('SELECT email from User where user=:user');
        $stmt = $db->prepare($sql); 
        $stmt->bindValue (':user', $user, SQLITE3_TEXT);
        $result=$stmt->execute();

        if($row = $result->fetchArray()) 
        {
            $email = $row['email'];
            $_SESSION['email'] = $email;
        }

        header("Location: session.php");
        exit;
    }
    else {
        header("Location: registration.php?sameEmail=true");
        exit;
    }
}   

if(isset($_POST["LogIn"])) {
    
    $db = new SQLite3 ("pg18.db");
    $userN=$_POST["username"];
    $uPass=$_POST["password"];

    if (empty(trim($userN))){

        header("Location: inloggning.php");
        exit;
        print($username_error = "Field username is empty");
    
    }
    else {
        if (empty(trim($uPass))) {
            header("Location: inloggning.php");
            exit;
            print($password_error = "Password field is empty");
        }
        else {
            if (ValidateUser(trim($userN), trim($uPass)) == true) {
                $logInSuccess = true;
                session_start();
                $_SESSION['user'] = $userN;

                $sql = ('SELECT email from User where user=:user');
                $stmt = $db->prepare($sql); 
                $stmt->bindValue (':user', $userN, SQLITE3_TEXT);
                $result=$stmt->execute();

                if($row = $result->fetchArray()) 
                {
                    $email = $row['email'];
                    $_SESSION['email'] = $email;
                }

                if ($userN == "Admin" && $uPass == "OnlyAdmin!") {
                    header("Location: admin-posts.php");
                    exit;
                }
                else {
                    header("Location: index.php");
                    exit;
                }

            }
            
          
            else {
                echo "Den blev false";
                header("Location: inloggning.php");
                exit;
                
            }
        }
    }
}  

if(isset($_POST['logOut'])){
    unset($_SESSION['user']);
    unset($_SESSION['email']);
    session_destroy();
    session_abort();
    header("Location: index.php");
}   


if(isset($_POST['add-post'])){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category = $_POST["food-type"];
    //$img = $_POST["img"]; <-------- fråga om hjälp sen

    print_r($_POST);
    var_dump($_POST);

    AddPost($title, $content, $category);
}

function AddPost ($title , $content, $category) {
    $db = new SQLite3 ("pg18.db");
    $email = $_SESSION['email'];
    $sql = "INSERT INTO 'Posts' ('title', 'content', 'user', 'category') VALUES (:title, :content, :user, :category)";
    $stmt = $db->prepare ($sql); 
    $stmt->bindParam (':title', $title, SQLITE3_TEXT);
    $stmt->bindParam (':content', $content, SQLITE3_TEXT);
    $stmt->bindParam (':user', $email, SQLITE3_TEXT);
    $stmt->bindParam (':category', $category, SQLITE3_TEXT);
    
    if($stmt->execute()){

        header('Location: posts.php');
        echo '<p> Upload.</p>';
    }
    else{

       include 'header.php';
       echo '<p> Unsuccesful upload of post.</p>';
       echo '<a href="posts.php"> Go back </a>';

    }
}




function AddUser ($user, $hashPass, $email) {
    $db = new SQLite3 ("pg18.db");
    $sql = "INSERT INTO 'User' ('user', 'pass', 'email') VALUES (:user, :pass, :email)";
    $stmt = $db->prepare ($sql); 
    $stmt->bindParam (':user', $user, SQLITE3_TEXT);
    $stmt->bindParam (':pass', $hashPass, SQLITE3_TEXT);
    $stmt->bindParam (':email', $email, SQLITE3_TEXT);
    if($stmt->execute()){
        $db->close();
        return true;
    }
    else{
        $db->close();
        return false;
    }
}


function ValidateUser($userN, $uPass) {
    $db = new SQLite3 ("pg18.db");
    
    $result = $db->query('SELECT user, pass from User');
    $row = $result->fetchArray();

    while ($row = $result->fetchArray()) {
        if ($row['user'] == $userN) {
            echo "We found the right user" . " " . $row['user'];
            
            if (password_verify($uPass, $row['pass'])) {
                echo "The password matches";
                return true;
            }
            else {
                echo "The password does NOT match";
                return false;
            }
        }
    }
}
?>