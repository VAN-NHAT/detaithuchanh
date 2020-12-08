	<div class="row">
            <div class="panel-group" id="accordion">
            <?php 
			include('connect.php');
			$sl= "select * from menu_doc";
			$exec= mysqli_query($connect,$sl);
			$i=0;
			while($row= mysqli_fetch_array($exec)){
				$i=$i+1;
				switch($i){
					case 1: $num= "One"; break;
					case 2: $num= "Two"; break;
					case 2: $num= "Three"; break;
					case 3: $num= "Four"; break;
					case 4: $num= "Five"; break;
					case 5: $num= "Six"; break;
				}
		?>
                <div class="panel panel-primary" style="margin-left: -16px;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="text-decoration: none;" data-parent="#accordion" href="javascript:void(0)"></a>
                        </h4>
                    </div>
                    <div id="collapse<?php echo $num; ?>" class="panel">
                        <div class="panel-body">
                            <table class="table">
                            <?php if($row['sub_1']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_1_link'].">".$row['sub_1']."</a>
                                    </td>
                                </tr>";}
                            ?>
                            <?php if($row['sub_2']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_2_link'].">".$row['sub_2']."</a>
                                    </td>
                                </tr>";}
                            ?>
                                 <?php if($row['sub_3']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_3_link'].">".$row['sub_3']."</a>
                                    </td>
                                </tr>";}
                            ?>
                                 <?php if($row['sub_4']!=""){echo "    
                                <tr>
                                    <td>
                                        <a href=".$row['sub_4_link'].">".$row['sub_4']."</a>
                                    </td>
                                </tr>";}
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
    </div>
