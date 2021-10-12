<br><br>
<div class="container">
   <center>
    <div class="row">
        <div class="col-md-12 exercises-naslov">
            <h1>Choose your exercises and number of repz<br> <a href="http://localhost/repz/cardio" class="add-cardio">or add cardio</a></h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form action='' id="exercise-form" method="post">
               <div class="container">
               <div class="exercises">
                <div class="row exercise-row">
                    <div class="col-md-8 exercise-option">
                        <select name="select-exercise1" class="select-exercise" id="select-exercise1">
                            <option selected disabled>-- Select an exercise --</option>
                            <option value="wide_pushups">Wide push ups</option>
                            <option value="narrow_pushups">Narrow push ups</option>
                            <option value="diamond_pushups">Diamond push ups</option>
                            <option value="wide_pullups">Wide pull ups</option>
                            <option value="narrow_pullups">Narrow pull ups</option>
                            <option value="wide_chinups">Wide chin ups</option>
                            <option value="basic_chinups">Basic chin ups</option>
                            <option value="dips">Dips</option>
                            <option value="biceps">Biceps</option>
                            <option value="abs">Abs</option>
                        </select>
                    </div>
                    <div class="col-md-4 reps-number">
                        <input type="number" name="numberOfReps1" id="numberOfReps">
                    </div>
                </div>
                </div>
                
                <br>
                <div class="row">
                    <div class="col-md-10" style="text-align: right;padding-right:20px;">
                        <a href="#" class="add-more-button" id="add-more">Add more</a>
                    </div>
                </div>
                </div>
                
                <br><br>
                
                
                
                <input type="submit" name="submit" class="form-submit-button" onclick="handleForm()" id="submit" value="Submit">
            </form>
        </div>
    </div>
    </center>

</div>