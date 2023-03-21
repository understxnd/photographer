<section>
    <h1 class="text-center">Список ваших записей</h1>
    <div class="list-group w-50 m-auto">
        <?php
        while($item = $Visits->fetch()) {
            if ($item['id_client']== $_SESSION['id_auth_user']){?>
                <a href="../visit.php?visitId=<?= $item['id']?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0"><?=$item['session_time']?> Дата и время начала сеанса</h6>
                            <p class="mb-0 opacity-75"><?=$item['end_of_session']?> Время окончания сеанса</p>
                        </div>

                    </div>
                </a>
                <?php
            }?>
        <?php }?>
    </div>



</section>
