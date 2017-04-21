<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Small Business - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="http://mcs.drury.edu/GameOfPhones/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="http://mcs.drury.edu/GameOfPhones/css/small-business.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- JQuery initialization -->
        <script src="js/jquery-1.9.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </head>
    
    <body>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="q_type">Question Type: </label>
                    <select class="form-control" id="q_type=" onchange="questionType()">
                        <option value="multiplechoice">Multiple Choice</option>
                        <option value="shortanswer">Short Answer</option>
                        <option value="truefalse">True/False</option>
                        <option value="graphical">Graphical</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="q_text">Question Text: </label>
                    <textarea class="form-control" rows="5" id="q_text"></textarea>
                </div>
                <div class="form-group hidden" id="multchoice">
                    Test text
                </div>
            </form>
        </div>
    </body>
    
    <script>
        window.onload = questionType();
        
        function questionType() {
            var qType = document.getElementById("q_Type")
            var qTypeValue = qType.options[qType.selectedIndex].value;
            if (qTypeValue == "multiplechoice") {
                alert("multiple choice!");
                document.getElementById("multchoice").removeAttribute("hidden");
            }
        }
    </script>
</html>