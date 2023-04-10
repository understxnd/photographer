<?php if($data['user']) { ?>
    Текущий пользователь: <?=$data['user']->login?>
    <br>
    <a href="/logout">Выйти</a>
<?php } else {?>
    <section class="form">
        <div class="container text-center">
            <main class="form-signin w-50 m-auto">
                <form method="post" action="/login">
                    <h1 class="h3 mb-3 fw-normal">Вход в систему</h1>
                    <p>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Логин">
                    </p>
                    <p>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Пароль">
                    </p>
                    <p>
                    <p><input type="submit" value="Войти"></p>
                </form>
            </main>
        </div>
    </section>
<?php }
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="modal fade in" id="messageModal"  tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php if($data['message']){echo $data['message'];} ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
</html>