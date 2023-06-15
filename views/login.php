<?php
session_start();
require_once __DIR__ . '/../utils/mysql.php';
$page_title = "Login";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    header('Location: /');
    exit;
}

// connexion
if(isset($_POST['email_login']) && isset($_POST['password_login'])) {
    $email = $_POST['email_login'];
    $password = $_POST['password_login'];
    $hashed_password = sha1($password . $email);

    $sql = "SELECT * FROM user WHERE email = :email and password = :password";
    $parameters = array(':email' => $email, ':password' => $hashed_password);
    $result = execute_sql($sql, $parameters);

    if(count($result) > 0) {
        $user = $result[0];
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $user['id_user'];
        $_SESSION["name_user"] = $user['name_user'];
        $_SESSION["is_admin"] = $user['is_admin'];
        header("location: /");
    } else {
        echo "Wrong password";
    }
}

// inscription
if(isset($_POST['name_user_register']) && isset($_POST['email_register']) && isset($_POST['password_register'])) {
    $name_user = $_POST['name_user_register'];
    $email = $_POST['email_register'];
    $password = $_POST['password_register'];

    $sql = "SELECT * FROM user WHERE email = :email";
    $parameters = array(':email' => $email);
    $result = execute_sql($sql, $parameters);

    if(count($result) == 0) {
        $hashed_password = sha1($password . $email);
        $sql = "INSERT INTO user (name_user, email, password) VALUES (:name_user, :email, :hashed_password)";
        $parameters = array(':name_user' => $name_user, ':email' => $email, ':hashed_password' => $hashed_password);
        execute_sql($sql, $parameters);

    // Login the user
    // Redirect to myAccount in order to fill the rest with the profile information
    // such as name, address, social media, etc.
    header("location: /myAccount");
    } else {
        echo "Email already used";
    }
}

include_once '../includes/header.php';
?>
<body>
    <?php include_once '../includes/navbar.php'; ?>

    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 md:gap-6 lg:gap-8 py-4 md:py-6 lg:py-8 w-11/12 max-w-screen-xl mx-auto">
        <div class="flex flex-col gap-4 px-6 py-3 rounded-2xl border-4 border-blue-300 bg-blue-100 mb-auto md:col-span-2">
            <h2 class="text-2xl font-bold">Se connecter</h2>

            <form action="login" method="post">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1">
                        <label for="email_login">Adresse email</label>
                        <input class="px-3 py-1 rounded-2xl border-2 border-blue-700 transition focus:ring-2 focus:ring-blue-800 border-blue-800 outline-none" type="email" name="email_login" id="email_login" placeholder="example@gmail.com" required>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="password_login">Mot de passe</label>
                        <input class="px-3 py-1 rounded-2xl border-2 border-blue-700 transition focus:ring-2 focus:ring-blue-800 border-blue-800 outline-none" type="password" name="password_login" id="password_login" placeholder="" required>
                    </div>

                    <input type="submit" value="Se connecter" class="btn btn-blue my-1 py-2 w-2/3 mx-auto bg-purple-500 text-white rounded-3xl">
                </div>
            </form>
        </div>

        <div class="flex flex-col gap-4 px-6 py-3 rounded-2xl border-4 border-purple-300 bg-purple-100 md:col-span-3">
            <h2 class="text-2xl font-bold">S'inscrire</h2>

            <form action="login" method="post">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1">
                        <label for="name_user_register">Nom d'utilisateur</label>
                        <input class="px-3 py-1 rounded-2xl border-2 border-blue-700 transition focus:ring-2 focus:ring-blue-800 border-blue-800 outline-none" type="text" name="name_user_register" id="name_user_register" placeholder="PHiBi_is_c00l" required>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="email_register">Adresse email</label>
                        <input class="px-3 py-1 rounded-2xl border-2 border-blue-700 transition focus:ring-2 focus:ring-blue-800 border-blue-800 outline-none" type="email" name="email_register" id="email_register" placeholder="example@gmail.com" required>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="password_register">Mot de passe</label>
                        <input class="px-3 py-1 rounded-2xl border-2 border-blue-700 transition focus:ring-2 focus:ring-blue-800 border-blue-800 outline-none" type="password" name="password_register" id="password_register" placeholder="" required>
                    </div>

                    <input type="submit" value="S'inscrire" class="btn btn-blue my-1 py-2 w-2/3 lg:w-1/2 mx-auto bg-purple-500 text-white rounded-3xl">
                </div>
            </form>
        </div>
    </div>

    <?php include_once '../includes/footer.php'; ?>
</body>
</html>