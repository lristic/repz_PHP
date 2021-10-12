<script src="<?php echo URL; ?>views/exercises/js/script.js"></script>
<script>
    function handleForm(){
        let form = document.getElementById('exercise-form')
        form.action = 'http://localhost/repz/exercises/exerciseInput/' + document.getElementsByClassName('exercise-row').length;      
    }
    
</script>
</body>
</html>