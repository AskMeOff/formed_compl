<?php include 'connection.php'; ?>
<?php
    $query = "SELECT * FROM `archive_anesteziologiya-reanimatologiya`";
    $result=mysqli_query($con, $query) or die ( mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>


<div class="col-12">




            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Анестезиология и реаниматология</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Номер принятия</th>
                    <th>Название нормативного правового акта</th>
                    <th>Дата принятия</th>
                    <th>Приказ МЗ РБ</th>
                  </tr>
                  </thead>
                   <tbody>

                    <?php

                    foreach ($data as $user) {
                        $stroka = $user['file'];
                        $pos = strrpos($stroka, '.', 0);
                        $len = strlen($stroka) - $pos;
                        $ext = substr($stroka, 0 - $len, $len);
                        ?>

                        <tr onclick="showModalFiles('<?= $user['file'] ?>','<?= $ext?>')" style="cursor: pointer;">

                        <td><?= $user['num_akt'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['date_prik'] ?></td>
                        <td><?= $user['type'] ?></td>

                        </tr>
                                       <?php
                                            }
                                        ?>

                                    </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


<script>
    let baseNPA = document.getElementById("baseNPA");
    baseNPA.className = "nav-item menu-is-opening menu-open";
    let baseNPAtree = document.getElementById("baseNPAtree");
    baseNPAtree.style = "display: block;";
    let itemLi = baseNPAtree.children[4];
    itemLi.className = "nav-item menu-is-opening menu-open";
    let itemMenu = document.querySelector("[href='index.php?anesteziologiya-reanimatologiya']");
    itemMenu.style = "color: #148A8A;";

</script>
