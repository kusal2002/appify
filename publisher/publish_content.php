<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>

    <?php include_once './layout/sidebar.php' ?>

    <div class="content">
        <div class="containerrrr">
            <div class="left">
            <h2 style="padding-left: 10%;">ADD DETAILS ABOUT YOUR</h2>

                <div class="form">
                    <br><br>
                    <form action="">
                        <label for="name">Content Name :</label><br>
                        <input class="text" type="text" name="cname"><br><br>
                        <label for="catogary">Choose Catogary :</label><br>
                        <select id="catogary" name="catogary">
                            <option selected>Choose Catogary </option>
                            <option value="Games">Games</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Education">Education</option>
                            <option value="Helth">Helth</option>
                        </select><br><br>
                        <label for="description">Description :</label><br>
                        <textarea name="description" id="description" cols="30" rows="2"></textarea><br><br>
                        <label for="tags">Add Tags :</label><br>
                        <input class="text" type="text" name="tags" id="tags" placeholder="Add Your tags Here"><br>
                        <label for="discForTags" id="discForTags">Tags make it easier for people to find your app based
                            on categories</label><br><br>
                        <label for="price">Price :</label><br>
                        <button class="btn">Free</button>
                        <button class="btn">Paid</button><br>
                        <input id="price" type="text" placeholder="   $"><br><br><br>
                        <input type="checkbox" name="terms" id="terms">
                        <label for="terms">I Consent To The Privacy Policy & Terms And Conitions Privacy Policy.</label>

                    </form>
                </div>
            </div>
            <div class="right">
                <div class="uploadfile">
                    <h2 style="padding-left: 10%; padding-top: 5%;">Upload Files Here</h2>
                    <input type="file" style="padding-left: 10%;">
                </div>
                <div class="addimage">
                    <h2 style="padding-left: 10%; padding-top: 5%;">Add Imagess or Video</h2>
                    <input type="file" style="padding-left: 10%;">
                </div>
                <div class="end">
                    <button class="ebtn">Preview</button>
                    <button class="ebtn">Publish</button>
                </div>
            </div>

        </div>

    </div>



</body>

</html>