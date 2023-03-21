<main class="form-signin w-50 m-auto text-center">
    <div class="container">
        <form method="post" action="../registration.php">
            <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
            <div class="form-floating mb-2">
                <input type="text" name="Name" id="id1" class="form-control" placeholder="Имя">
                <label for="id1" class="text-black">Имя</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="Phone_numb" id="id2" class="form-control" placeholder="Номер телефона">
                <label for="id2" class="text-black">Номер телефона</label>
            </div>
            <div class="mb-2">
                <input type="radio" id="id3" name="role" value="Participant" checked class="form-check-input flex-shrink-0">
                <label for="id3">Клиент</label>
                <input type="radio" id="id4" name="role" value="Host" class="form-check-input flex-shrink-0">
                <label for="id4">Специалист</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="login" id="id5" class="form-control" placeholder="Логин">
                <label for="id5" class="text-black">Логин</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" name="password" id="id6" class="form-control" placeholder="Пароль">
                <label for="id6" class="text-black">Пароль</label>
            </div>
            <p><input type="submit" value="Зарегистрироваться" class="btn btn-lg btn-warning"></p>
        </form>
    </div>
</main>
