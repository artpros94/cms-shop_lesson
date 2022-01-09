<header>
    <div id="header_wrapper">


        <div id="log_bar">
            <div id="log_bar_wrapper">

                <?php include_once "login_reg_form.php"?>

                <div id="log_bar_choice_wrapper">
                    <form  action="" method="post">
                        <button type="submit">Авторизация</button>
                        <input type="hidden" name="log" value="auth"></input>
                    </form>
                    <form action="" method="post">
                        <button type="submit">Регистрация</button>
                        <input type="hidden" name="log" value="reg"></input>
                    </form>
                </div>
            </div>
        </div>

        <div id="nav_bar">
            <form action="" method="post">
                <button type="submit">Главная</button>
                <input type="hidden" name="link" value="home"></input>
            </form>

            <form action="" method="post">
                <button type="submit">Информация</button>
                <input type="hidden" name="link" value="info"></input>
            </form>

            <form action="" method="post">
                <button type="submit">Контакты</button>
                <input type="hidden" name="link" value="contacts"></input>
            </form>
        </div>

    </div>
</header>