<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <?php 
    function createInputField($title, $inputElement){
        return "
            <div class='input-field'>
                <label class='input-title'>$title:</label>
                <div class='input-field-element'>
                $inputElement
                </div>
            </div>
        ";
    }
    function createForm($title, $inputFields){
        $result = "
            <div class='form-item'>
                <h3 class='form-title'>$title</h3>";
        foreach($inputFields as $title => $inputElement){
                    $result .= createInputField($title, $inputElement);
                }
        return $result."
            </div>
        ";
    }
    $elements = [
        "Employee ID" => "<p>9</p>",
        "Last Name"=> "Jackson",
        "First Name" => "Michael",
    ];
    echo createForm("Basic Info", $elements);
    ?>
    </div>
</body>

</html>