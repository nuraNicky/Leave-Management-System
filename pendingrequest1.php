<html>
    <body>
        <form method="post" action="delete.php" > 

       <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
               <thead>
                          <tr>
                                <th>appoinment ID</th>
                              <th>Date</th>
                                <th>time</th>
                              <th>teacher</th>
                             <th>parent</th>
                              <th> accept/reject </th>
                              <th>label</th>
                            </tr>
                   </thead>
                   <tbody>
                        <?php 
                            $query=mysqli_query($conn, "select * from `app` left join `par` on par.par_id=app.par_id
                            left join `tea` on tea.tea_id=app.tea_id
                            ORDER BY app_id DESC");

                                if($query === false)
                                {
                                    throw new Exception(mysql_error($conn));
                                }
                                while($row=mysqli_fetch_array($query))
                                {
                                    $ann_id=$row['app_id'];
                                    $date=$row['date'];
                                    $msg=$row['time'];

                                    $username = $row['username'];
                                     $username = $row['p_username'];
                        ?>
                <tr>
                    <td><?php echo $row['app_id'] ?></td>
                     <td> <?php echo date('j/m/y',strtotime($row['date'])); ?></td>
                    <td><?php echo $row['time'] ?></td>
                   <td><?php echo $row['p_username'] ?></td>
                <td><?php echo $row['username'] ?></td>

                    <td>
        <a href="#" class="reject">reject</a> 
        <a href="#" class="accept">accept</a>
    </td>
    <td>
        <div class="chgtext">PENDING</div>
    </td>

                </tr>

                        <?php   
                                }

                       ?>

                  </tbody>
              </table>
         
      </form>
    </body>
</html>
