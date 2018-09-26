 


<table style="border:1px solid #000; border-collapse: collapse; padding: 5px;">
  <?php
   $salary = [1000, 1200, 1500, 5000, 6000, 1000, 2300, 2300];
   foreach($salary as $row) {
       echo "
       <tr>
            <td style='border:1px solid #000;'>Salary</td>
            <td style='border:1px solid #000;'>$row</td>
        </tr>
       ";
   }
    
  ?>
</table>
