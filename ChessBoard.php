<!DOCTYPE html>
        <html>
        <head>
            <style>
                body{
                    background: cadetblue;
                }
                table{
                    
                    height: 500px;
                    width: 500px;
                    margin: 50px;      
                }
                .white{
                    width: 50px;
                    height: 50px;
                    background: whitesmoke;
                    text-align: center;
                    border: 2px solid black
                }
                .black{
                    width: 5px;
                    height: 50px;
                    background: gray;
                    text-align: center;
                    border: 2px solid black
                }
                .label{
                    background-color: cadetblue;
                    width: 50px;
                    height: 50px;
                    text-align: center;
                    
                }
            </style>
        
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <title>Page Title</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
            <script src='main.js'></script>
        </head>
        <body>
            <table>
                <?php
                    $a=" ABCDEFGH ";
                    echo "<tr>";
                    for($i = 8 ; $i>=0 ;$i--){
                        for($j=0 ; $j<=8 ; $j++){
                            $total = $i + $j;
                            if($j==0){
                                if($i==0){
                                    echo "<td class = 'label'>  </td> ";
                                }else{
                                    echo "<td class = 'label'> $i </td> ";                                    

                                }
                            }elseif($i==0){
                                echo "<td class = 'label'> $a[$j] </td> ";                                    
                                
                            }
                            else{
                                if($total%2==1){
                                    echo "<td class = 'black'> $a[$j]$i </td> ";
                                }else{                                
                                    echo "<td class = 'white'> $a[$j]$i </td> ";                                                 
                                }
                            }
                            
        
                        }
                        echo "</tr>";
                    }
                    
        
        
                ?>
                
            </table>
        </body>
        </html>
</body>
</html>