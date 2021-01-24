<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/sliderstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600&display=swap" rel="stylesheet">
    <title>Developer.WTF | Survey</title>
</head>
<body>
    <header>
        <div>
            <img src="images/logo.png" alt="developers.wtf-logo" height="50px">
        </div>
        <div>
            <h1>Developers.WTF | Survey</h1>
        </div>
    </header>
    <section class="form-section">
        <form action="submit.php">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Question</th>
                </tr>

                <?php

                include('includes/dbconnect.php');

                $get_questions = "SELECT * FROM languages";
                $run_query = mysqli_query($conn, $get_questions);
                while($row_query = mysqli_fetch_array($run_query)){
                    $sl_no = $row_query['slno'];
                    $language = $row_query['name'];
                    echo "
                    <tr>
                    <td rowspan='3'>$sl_no</td>
                    <td>
                        <h4>$language</h4>
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Your knowledge in $language</p>
                            <input type='range' min='0' max='10' value='0' name='$language-val' class='slider' id='myRange'>
                        </td>
                    </tr>
                        <td>
                            <p>Your interest in $language</p>
                            <input type='range' min='0' max='10' value='0' class='slider' id='myRange'>
                        </td>
                    </tr>
                    ";
                }

                ?>
                <tr>
                    <td>
                        <input type="submit" value="Submit" name="submit">
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>