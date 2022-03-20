<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="/CSS/Style.css">

    <title>Simple Calculator</title>

</head>

<body>

    <div class="Calculator">
        <h2 class="heading">Simple Calculator</h2>
        <a href="" class="identity">Abdullah Azzam | 20.01.013.075</a>
        <form method="POST" action="/Calculator/hitung">
            <input name="bil1" type="text"  class="number" autocomplete="off" placeholder="Input The Number">
            <input name="bil2" type="text"  class="number" autocomplete="off" placeholder="Input The Number">
            <select class="oprtn" name="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="submit" name= "hitung"  value="count" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])) { ?>
            <input type="text" value="<?php echo $bil1. " " .$operasi. " " .$bil2. " = " .$hasil; ?>" class="number">
        <?php } else { ?>
            <input type="text" value="0" class="number">
        <?php } ?>
    </div>

</body>

</html>