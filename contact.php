<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles/main.css" type="text/css" rel="stylesheet"/>
    <title>4C Cafe</title>
  </head>
  
  <body>
    <?php include("includes/navigation.php"); ?>

    <div class="ticket_form">
      <p>For bugs or improvement ideas, please file a ticket using the form below.</p>
      <hr>
      <p>1. How can I help you?</p>
      <select>
        <option>Bug Fix</option>
        <option>Improvement Idea</option>
        <option>General</option>
      </select>
      <p>2. Enter any comments</p>
      <form>
        <textarea name="comments" cols="20" rows="5">Enter your comments...
        </textarea>
      </form>

      <button id="submit" type="submit">Submit</button>
    </div>  

    <?php include("includes/footer.php"); ?>
  </body>
</html>