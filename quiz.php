<?php include 'header.inc'; ?>
<!-- header ends here -->

<!-- Form section for quiz starts here -->
<form method="post" action="https://mercury.swin.edu.au/it000000/formtest.php">
  <fieldset>
    <legend><strong>Student Identification</strong></legend>
    <p>
      <label for="firstname">First Name</label> 
      <input type="text" name="firstname" id="firstname" maxlength="30" pattern="^[a-zA-Z]+$" required="required"/>
    </p>
    <p>
      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" maxlength="30" pattern="^[a-zA-Z]+$" required="required">
    </p>
    <p>
      <label for="studentnumber">Student Number</label>
      <input type="text" name="studentnumber" id="studentnumber" pattern="\d{7,10}" required="required">
    </p>
  </fieldset>
  <fieldset>
    <legend><strong>Quizzes on Ruby on Rails</strong></legend>
    <p>
      <label for="quiz1">Quiz 1. Who invented the Ruby programming language?</label>
      <input type="text" name="quiz1" id="quiz1" maxlength="30" pattern="^[a-zA-Z]+$" required="required">
    </p>
    <p>
      <label for="quiz2">Quiz 2. In what year was Ruby invented?</label>
      <input type="number" name="quiz2" id="quiz2" min="0" max="2022" required="required">
    </p> 
    <p>
      Quiz 3. Which function below prints a result or a text to the screen?<br>
      <label><input type="radio" name="quiz3" value="puts" required="required">puts</label>
      <label><input type="radio" name="quiz3" value="yield">yield</label>
      <label><input type="radio" name="quiz3" value="break">break</label>
      <label><input type="radio" name="quiz3" value="do">do</label>
    </p>
    <p>
      Quiz 4. What are the advantages of Ruby?<br>
      <label><input type="checkbox" name="quiz4" required="required" value="fast execution time">Fast execution time</label>
      <label><input type="checkbox" name="quiz4" required="required" value="huge and active community">Huge and active community</label>
      <label><input type="checkbox" name="quiz4" required="required" value="offer helpful tools and libraries">Offer helpful tools and libraries</label>
      <label><input type="checkbox" name="quiz4" required="required" value="extremely secure">Extremely secure</label>
    </p>
    <p>
      <label for="quiz5">Quiz 5. Which of these data types in Ruby can contain character?</label>
      <select name="quiz5" id="quiz5" required="required">
        <option value="">Please select</option>
        <option value="integer">Integer</option>
        <option value="float">Float</option>
        <option value="string">String</option>
        <option value="boolean">Boolean</option>
      </select>
    </p>
  </fieldset>
  
  <input class="formBtn" type= "submit" value="Register"/>
  <input class="formBtn" type= "reset" value="Reset Form"/>
</form>
<!-- Form section for quiz ends here -->

<!-- footer starts here -->
<?php include 'footer.inc'; ?>