let id = 2
document.getElementById('add-more').addEventListener('click', addRow)

function addRow(){
    let allRows = document.getElementsByClassName('exercise-row')
    let row = allRows[allRows.length-1]
    
    let newRowDiv = document.createElement('div')
    newRowDiv.classList.add('row')
    newRowDiv.classList.add('exercise-row')
        
    let newRow = `<div class="col-md-8 exercise-option">
                    <select name="select-exercise${id}" class="select-exercise" id="select-exercise${id}">
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
                    <input type="number" name="numberOfReps${id}" id="numberOfReps${id}">
                </div>                
            <br>`
    
    id++;
        
    newRowDiv.innerHTML = newRow
    console.log(newRowDiv)
    
    let exercisesDiv = document.getElementsByClassName('exercises')[0]
    exercisesDiv.append(newRowDiv)
}
