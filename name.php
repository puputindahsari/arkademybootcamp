<?php
include "models/m_name.php";

$nm = new name($connection);
?> 
 
 
 <div class="row">
            <div class="col-lg-12">
              <button  class="btn btn-warning left"><i class="fa fa-align-left fa-link"></i>ADD</button>
            </div>
        </div>
        <div class="table-responsive">
        <table  class="table table-bordered table-hover table-striped" >
  <thead>
    <tr class="table-bordered">
      <th scope="col">name</th></th>
      <th scope="col">work</th>
      <th scope="col">salary</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    $no = 1;
    $tampil = $nm->tampil();
    while($data = $tampil->fetch_object()) {
  ?>
    <tr>
    <th><?php echo $no++; ?></th> 
      <th><?php echo $data->name; ?></th>
      <td><?php echo $data->work; ?></td>
      <td><?php echo $data->salary; ?></td>
      <td >
          <button class="btn btn-info btn-xs "><a href=""><i class="fa fa-edit" ></a></i></button>
          <button class="btn  btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>