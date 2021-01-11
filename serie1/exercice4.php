<?php
  $serie = '1';
  $exercice = '4';
  include('../template/header.php');
?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
            <h1><?php echo "Série $serie - Exercice $exercice"; ?></h1>
            </div>
            <div class="col-sm">
            </div>
        </div>
        <br>
        <div class="card text-center">
          <div class="card-header">
            Jeu du démineur
          </div>
          <div class="card-body">
            <div class="table-responsive-xl">
                <table class="table">
                  <tbody>
                  <tr>
                  <?php
                    $nbLigne = 15;
                    $nbColonne = 15;
                    $nbCases = $nbLigne*$nbColonne;
                    $nbMine = 5;

                    $mines = array();
                    for($i = 1;$i <= $nbMine;$i++)
                    {
                      array_push($mines, random_int(0,$nbCases));
                    }
                    echo("<div class=\"alert alert-primary\" role=\"alert\">
                    Tableau des emplacements des mines:<br>");
                    print_r($mines);
                    echo("</div>");

                    for($j = 1; $j <= $nbCases; $j++){
                      if(is_int($j/$nbColonne+1)){
                        if(in_array($j, $mines)){
                          echo("<td><b><img width=\"20\" height=\"20\" src=\"data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjMDAwMDAwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4NC42IDg0LjYiIHg9IjBweCIgeT0iMHB4Ij48dGl0bGU+Ym9zcy1pY29ucy1saW55LWV4cG9ydDwvdGl0bGU+PHBhdGggZD0iTTgyLjEsMzkuOEg3MC44OGEyOC41MywyOC41MywwLDAsMC02LjYtMTZsMi41NC0yLjUzYTIuNSwyLjUsMCwxLDAtMy41NC0zLjUzbC0yLjUzLDIuNTNhMjguNTMsMjguNTMsMCwwLDAtMTYtNi42VjIuNWEyLjUsMi41LDAsMCwwLTUsMFYxMy43MWEyOC40NywyOC40NywwLDAsMC0xNS45NCw2LjYxbC0yLjUzLTIuNTNhMi41LDIuNSwwLDAsMC0zLjU0LDMuNTNsMi41NCwyLjU0QTI4LjQ3LDI4LjQ3LDAsMCwwLDEzLjcyLDM5LjhIMi41YTIuNSwyLjUsMCwwLDAsMCw1SDEzLjcyYTI4LjY4LDI4LjY4LDAsMCwwLDYuNiwxNS45NGwtMi41MywyLjUzYTIuNTIsMi41MiwwLDAsMCwwLDMuNTQsMi41MSwyLjUxLDAsMCwwLDMuNTQsMGwyLjUzLTIuNTNhMjguNjgsMjguNjgsMCwwLDAsMTUuOTQsNi42VjgyLjFhMi41LDIuNSwwLDAsMCw1LDBWNzAuODhhMjguNDcsMjguNDcsMCwwLDAsMTUuOTQtNi42MWwyLjU0LDIuNTRhMi40OSwyLjQ5LDAsMCwwLDEuNzcuNzMsMi40NSwyLjQ1LDAsMCwwLDEuNzYtLjczLDIuNSwyLjUsMCwwLDAsMC0zLjU0bC0yLjUzLTIuNTNBMjguNDcsMjguNDcsMCwwLDAsNzAuODksNDQuOEg4Mi4xYTIuNSwyLjUsMCwwLDAsMC01Wm0tNDIuNzUtNGE1LjkyLDUuOTIsMCwwLDEtMy41NywzLjUsNS44MSw1LjgxLDAsMCwxLTIsLjM3LDYsNiwwLDAsMS02LTYsNS44Myw1LjgzLDAsMCwxLC4zNy0yQTUuOTEsNS45MSwwLDAsMSwzMS41NywyOGE1Ljc2LDUuNzYsMCwwLDEsMi4xNi0uNDEsNiw2LDAsMCwxLDYsNkE1Ljc2LDUuNzYsMCwwLDEsMzkuMzUsMzUuODFaIj48L3BhdGg+PC9zdmc+\"/></b></td>");
                        } else {
                          echo("<td>O</td>");
                        }
                        echo("</tr><tr>");
                      } else {
                        if(in_array($j, $mines)){
                          echo("<td><b><img width=\"20\" height=\"20\" src=\"data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjMDAwMDAwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4NC42IDg0LjYiIHg9IjBweCIgeT0iMHB4Ij48dGl0bGU+Ym9zcy1pY29ucy1saW55LWV4cG9ydDwvdGl0bGU+PHBhdGggZD0iTTgyLjEsMzkuOEg3MC44OGEyOC41MywyOC41MywwLDAsMC02LjYtMTZsMi41NC0yLjUzYTIuNSwyLjUsMCwxLDAtMy41NC0zLjUzbC0yLjUzLDIuNTNhMjguNTMsMjguNTMsMCwwLDAtMTYtNi42VjIuNWEyLjUsMi41LDAsMCwwLTUsMFYxMy43MWEyOC40NywyOC40NywwLDAsMC0xNS45NCw2LjYxbC0yLjUzLTIuNTNhMi41LDIuNSwwLDAsMC0zLjU0LDMuNTNsMi41NCwyLjU0QTI4LjQ3LDI4LjQ3LDAsMCwwLDEzLjcyLDM5LjhIMi41YTIuNSwyLjUsMCwwLDAsMCw1SDEzLjcyYTI4LjY4LDI4LjY4LDAsMCwwLDYuNiwxNS45NGwtMi41MywyLjUzYTIuNTIsMi41MiwwLDAsMCwwLDMuNTQsMi41MSwyLjUxLDAsMCwwLDMuNTQsMGwyLjUzLTIuNTNhMjguNjgsMjguNjgsMCwwLDAsMTUuOTQsNi42VjgyLjFhMi41LDIuNSwwLDAsMCw1LDBWNzAuODhhMjguNDcsMjguNDcsMCwwLDAsMTUuOTQtNi42MWwyLjU0LDIuNTRhMi40OSwyLjQ5LDAsMCwwLDEuNzcuNzMsMi40NSwyLjQ1LDAsMCwwLDEuNzYtLjczLDIuNSwyLjUsMCwwLDAsMC0zLjU0bC0yLjUzLTIuNTNBMjguNDcsMjguNDcsMCwwLDAsNzAuODksNDQuOEg4Mi4xYTIuNSwyLjUsMCwwLDAsMC01Wm0tNDIuNzUtNGE1LjkyLDUuOTIsMCwwLDEtMy41NywzLjUsNS44MSw1LjgxLDAsMCwxLTIsLjM3LDYsNiwwLDAsMS02LTYsNS44Myw1LjgzLDAsMCwxLC4zNy0yQTUuOTEsNS45MSwwLDAsMSwzMS41NywyOGE1Ljc2LDUuNzYsMCwwLDEsMi4xNi0uNDEsNiw2LDAsMCwxLDYsNkE1Ljc2LDUuNzYsMCwwLDEsMzkuMzUsMzUuODFaIj48L3BhdGg+PC9zdmc+\"/></b></td>");
                        } else {
                          echo("<td>O</td>");
                        }
                      }
                    }
                  ?>  
                  </tbody>
                </table>
              </div>            
          </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
