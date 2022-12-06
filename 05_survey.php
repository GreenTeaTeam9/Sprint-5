<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow, nosnippet">
<meta name="viewport" content="width=device-width">
<title>Survey Page</title>

  <!--w3school-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script&display=swap" rel="stylesheet">

  <link href="style.css" rel="stylesheet" type="text/css"/>

</head>     
<body>

<!--https://getbootstrap.com/docs/4.0/components/navbar/-->
  <nav class="navbar navbar-expand-sm logo">
    <div class = "desc-wrapper">
      <a href="05_survey.php">
        <img src="https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/4ee74135-1a9c-47a5-ad20-3c796b60ef0c/WRNEWLOGOnobkground.png?format=1500w" class="d-inline-block align-top logo" alt="Walnut Ridge Wedding Rentals" width=200px>
      </a>
    <!-- <p class style="white-space:pre-wrap">Pick Your Set</p> -->
    </div>
  </nav>

  <!--container-fluid-->
  <div class="container-fluid">

  <div class = "row">
      <div class = "col-lg-12 breadcrumbcontainer">
          <!-- breadcrumb -->
          <ol class = "breadcrumb">
            <li class = "breadcrumb-active breadcrumb-item">Survey</li>
          </ol>
      </div>
    </div>
    
    <div class = "row">
      </div> <!-- end of col --> 
      <div class = "col-lg-12 testbox">
      <form action="/">
        <h1>Feedback Survey</h1>
        <p>Thank you for taking the time to fill in our online feedback form. By providing us your feedback, you are helping us understand what we do well 
            and what improvements we need to implement.</p>
        <h4>Name</h4>
        <input class="first-name" type="text" name="name" placeholder="First" />
        <input type="text" name="name" placeholder="Last" />
        <h4>Email<span>*</span></h4>
        <input type="text"/>
        <h4>How satisfied were you with:<span>*</span></h4>
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Very Satisfied</th>
            <th>Satisfied</th>
            <th>Unsatisfied</th>
            <th>Very Unsatisfied</th>
          </tr>
          <tr>
            <td class="first-col">Our Rental Selection</td>
            <td><input type="radio" value="none" name="point#2" /></td>
            <td><input type="radio" value="none" name="point#2" /></td>
            <td><input type="radio" value="none" name="point#2" /></td>
            <td><input type="radio" value="none" name="point#2" /></td>
          </tr>
          </tr>
          <tr>
            <td class="first-col">Our Rental Cost</td>
            <td><input type="radio" value="none" name="point#2" /></td>
            <td><input type="radio" value="none" name="point#2" /></td>
            <td><input type="radio" value="none" name="point#2" /></td>
            <td><input type="radio" value="none" name="point#2" /></td>
          </tr>
          <tr>
            <td class="first-col">Our Site Navigation</td>
            <td><input type="radio" value="none" name="point#3" /></td>
            <td><input type="radio" value="none" name="point#3" /></td>
            <td><input type="radio" value="none" name="point#3" /></td>
            <td><input type="radio" value="none" name="point#3" /></td>
          </tr>
          <tr>
            <td class="first-col">Our Response Time</td>
            <td><input type="radio" value="none" name="point#4" /></td>
            <td><input type="radio" value="none" name="point#4" /></td>
            <td><input type="radio" value="none" name="point#4" /></td>
            <td><input type="radio" value="none" name="point#4" /></td>
          </tr>
          <tr>
            <td class="first-col">Our Rental's Conditions</td>
            <td><input type="radio" value="none" name="point#5" /></td>
            <td><input type="radio" value="none" name="point#5" /></td>
            <td><input type="radio" value="none" name="point#5" /></td>
            <td><input type="radio" value="none" name="point#5" /></td>
          </tr>
        </table>
        <h4>Feel free to add any other comments or suggestions:</h4>
        <textarea rows="5"></textarea>
        <small>* The information given within the Feedback Form will be used for service improvement only and are strictly confidential.</small>
        <div class="btn-block">
          <button class="survey_button "type="submit" href="/">Send Feedback</button>
        </div>
      </form>
      </div> <!-- end of col --> 
    </div>  <!-- end of row -->
  </div> <!-- end of CF -->
  <div class = "row">
  <div class = "col-12">

  
  <!--Footer-->
  <div class = "row">
    <div class = "col footer-style">
      <div class = "contact">
        <a href="#">CONTACT US</a>
      </div> <!-- end of contact div -->
    <div class = "company">
      <p>WALNUT RIDGE LEATHER COMPANY<br>
      ORRVILLE, OHIO</p>
    </div> <!-- end of company div -->
    <div class = "email">
      <a href="mailto:Walnutreidgeleathercompany@gmail.com" target="_blank"><u>WALNUTRIDGELEATHERCOMPANY@GMAIL.COM</u></a>
    </div> <!-- end of email div --> 
  </div> <!--End row-->

  
  <script type="text/javascript">
    window.onload=function(){
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("Date")[0].setAttribute('min', today);
    }
  </script>

<script>
    function myFun(){
      var correct_way =  /[0-9]/g;
      var a = document.getElementById("username").value;
      if(a.match(correct_way)){
          document.getElementById("errUsername").innerHTML = "Error: Only Alphabets are allowed!";
          return false;
      }
    }
  </script>

 

</body>
</html>