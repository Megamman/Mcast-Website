<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">TEXT</h1>
    </div>
</div>

<div class="container">
    <section class="row">
        <div class="spb-column-container col-sm-3">
            <div class="clearfix bigText ">
                <p class="border-bottom border-dark">
                    Cancelled<br>
                    Lectures
                </p>
            </div>
        </div>
    </section>

    <div class="spb-column-container">

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Time</th>

            </tr>
          </thead>
          <tbody>
        <?php foreach($lecturers->result_array() as $lect):?>
            <tr>
              <td><?=$lect['user_name'];?> <?=$lect['user_surname'];?></td>
              <td><?=date('d M Y', $lect['lect_end']);?> </td>
            </tr>
        <?php endforeach; ?>
          </tbody>
        </table>
    </div>

</div>
