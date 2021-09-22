<html>
<head>
    </head>
<body style="width: 1000px; border: 1px solid;">
    <table>
        <?php
        $liczba_wiersz = $_GET['wiersze'];
        $liczba_kolumn = $_GET['kolumny'];
        
        switch($_GET['kolor']){
            case "r":
            $kolor = "red";
            break;
            case "y":
            $kolor = "yellow";
            break;
            case "g":
            $kolor = "green";
            break;
   }
        
         switch($_GET['just']){
            case "l":
            $justowanie = "left";
            break;
            case "c":
            $justowanie = "center";
            break;
            case "r":
            $justowanie = "right";
            break;
   }
        for ($row=1; $row<=$liczba_wiersz; $row+=1){
            echo("<tr>");
                for ($kol=1; $kol<=$liczba_kolumn; $kol+=1){
                    echo("<td style=\"border: 1px solid; text-align:".$justowanie."  ; color:".$kolor."; \">A</td>");}
            echo("</tr>");
        }
    ?>
    </table>
    
    </body>

</html>