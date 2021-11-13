<link href="../assets/templetBackend/css/arbre/jquery.bracket.min.css" rel="stylesheet" />
<script src="../assets/templetBackend/js/arbre/jquery.min.js"></script>
<script src="../assets/templetBackend/js/arbre/jquery.bracket.min.js"></script>

<div class="tournament"></div>
<script>
      var minData = {
         teams : [
            ["Frédérick","François"],
            ["Romain","Antho"],
            ["Houss","Jonathan"],
            ["Denis","David"]
         ],
         results : [
            [[3,1], [4,6], [11,3], [7,5]],
            [[5,3], [1,2]],
            [[3,5], [7,8]]
         ]
      }

      $('.tournament').bracket({
         init: minData
      });
</script>