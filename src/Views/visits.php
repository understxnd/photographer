<?php
require("components/header.php");
require ('src/Views/header.php');
?>
<h1 class="text-white" >Список Записей:</h1>

<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
    </div>
    <?php
    foreach ($data['visits'] as $visit) { ?>
        <h2 class="text-white">Дата:</h2>
        <div class="d-flex text-muted pt-3">

            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                            <strong class="text-white"><?= $visit->session_time?></strong>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <?php
    }
    ?>


</main>





<?php require 'src/Views/footer.php'?>
