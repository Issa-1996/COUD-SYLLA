<?php
    header('Content-Type: application/force-download');
    header('Content-disposition: attachment; filename=sylla.xls');
    //Fix for crappy IE bug in download.
    header("Pragma: ");
    header("Cache-Control: ");
    echo $_REQUEST['datatodisplay'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table border="1" id="ReportTable" class="myClass">
      <thead>
          <th>ID</th>
          <th>Rubrique1</th>
          <th>Rubrique2</th>
          <th>Rubrique3</th>
          <th>Rubrique4</th>
          <th>Rubrique5</th>
          <th>Rubrique6</th>
          <th>Rubrique7</th>
          <th>Rubrique8</th>
          <th>Rubrique9</th>
          <th>Rubrique10</th>
          <th>Rubrique11</th>
      </thead>
      <tbody>
          <?php
              for($i=1; $i<100000; $i++){
                  ?>
                  <tr>
                      <td> <?php echo $i; ?></td>
                      <td>test2</td>
                      <td>test3</td>
                      <td>Test5</td>
                      <td>Test6</td>
                      <td>Test7</td>
                      <td>Test8</td>
                      <td>Test9</td>
                      <td>Test10</td>
                      <td>Test11</td>
                      <td>Test12</td>
                      <td>Test13</td>
                  </tr>
                  <?php 
              }
          ?>                        
      </tbody>
    </table>
</body>
</html>