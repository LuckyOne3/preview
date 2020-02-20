<?php require "db.php"?>




<div class="container">
    <h2 class="text-center mt-0">Информация о времени создания и удалении виртуальных серверов</h2>
    <hr class="divider my-4">
    <table class="table table-bordered">



        <tbody>
        <tr>
            <th>CurrentDateTime:</th>
            <td class="time"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>TotalUsageTime:</th>
            <td class="timejs"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th >VirtualServerId</th>
            <th>CreateDateTime</th>
            <th>RemoveDateTime</th>
            <th>SelectedForRemove</th>
        </tr>


        <?php


        $servers = mysqli_query($connection, "SELECT * FROM `servers` ORDER BY `id`");


        $datetime1 = date("Y-m-d H:i:s");





        while($server = mysqli_fetch_assoc($servers)) {
            $result = 0;

            if ($server['SelectedForRemove'] !== '+') {


                $datetime2 = date($server['CreateDateTime']);
                $result = $datetime1 > $datetime2;
                if ($result == 1) {
                    $datetime1 = $datetime2;

                }
            }


            $fl = 0;

            if ($server['RemoveDateTime'] && $server['RemoveDateTime'] != 0) {
                $datedif1 = date("Y-m-d H:i:s");
                $datedif2 = date($server['RemoveDateTime']);
                $RemoveDateTime = $datedif2 < $datedif1;

                if ($RemoveDateTime == 1) {
                    $RemoveDateTime = $datedif2;
                    $fl = 1;


                }
            } else {
                $RemoveDateTime = '';
                $fl = 0;


            }

            $selectedForRemove = $server['SelectedForRemove'];


            $datedife1 = date("Y-m-d H:i:s");
            $datedife2 = date($server['CreateDateTime']);
            $CreateDateTime = $datedife2 < $datedife1;

            if ($CreateDateTime == 1) {
                $CreateDateTime = $datedife2;


                ?>


                <tr>


                    <th scope="row"><?php echo $server['id']; ?></th>
                    <td><?php echo $server['CreateDateTime']; ?></td>
                    <td> <?php echo $RemoveDateTime; ?></td>
                    <td class="relative timeDelete" data-id="<?php echo $server['id']; ?>"><?php
                        if ($fl == 0) {
                            echo $selectedForRemove;
                        }


                        if ($selectedForRemove != '+') {

                            ?>
                            <div  ><button type="button" class="btn btn-outline-primary delete" data-id="<?php echo $server['id']; ?>">Remove</button></div>
                            <?php
                        }


                        ?>
                    </td>

                </tr>


                <?php
            }
        }

        ?>

        </tbody>
    </table>

    <button type="button" class="btn btn-outline-primary add" id="add">Add</button>
</div>

<div style="display: none"  class="timephp"><?php
    if($datetime1 == date("Y-m-d H:i:s"))
    {
        $datetime1 = 0;
    }
    else{
        echo $datetime1;
    }
   ?>
</div>

<div  class="elipsed"></div>

<script>

    //при клике на кнопку
    $(".delete").click(

        function () {
            var id = $(this).attr('data-id');
            $('.timeDelete[data-id="'+id+'"]').text('+');

            alert("Сервер будет удален через 3 минуты");

//отправляем ( куда , что (имя / значение) , получаем ответ)
            $.post('delete.php',
                { id: id }
                , function (data) {


            }  );
        }

    );



    $(".add").click(

        function () {
            alert("Сервер будет добавлен через 5 минут");

//отправляем ( куда , что (имя / значение) , получаем ответ)
            $.post('add.php'
                , function (data) {


                }  );
        }

    );

</script>