<?php

$page_title = "Login";

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

            <form action="signup" method="post">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-1">
                        <label for="username_register">Nom d'utilisateur</label>
                        <input class="px-3 py-1 rounded-2xl border-2 border-blue-700 transition focus:ring-2 focus:ring-blue-800 border-blue-800 outline-none" type="text" name="username_register" id="username_register" placeholder="PHiBi_is_c00l" required>
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