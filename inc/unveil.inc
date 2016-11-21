<body>

    <script src="js/jquery.unveil.js"></script>

    <script>
   
       $(document).ready(function() {
          
          $(".unveilImg").unveil(200, function() {
              $(this).load(function() {
                this.style.opacity = 1;
              });
            });
        });
    
    </script>

</body>