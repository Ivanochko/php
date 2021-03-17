<form action="ivanochko_lab4_example_7.php" method="post" class="form-example" id="form-task4_7">
    <?php echo $questions[0]; ?>
    <br>
    <input type="radio" name="block-host" id="block-host-0" value="Нуль">
    <label for="block-host-0">Нуль</label><br>
    <input type="radio" name="block-host" id="block-host-1" value="Один">
    <label for="block-host-1">Один</label><br>
    <input type="radio" name="block-host" id="block-host-2" value="Два">
    <label for="block-host-2">Два</label><br>
    <input type="radio" name="block-host" id="block-host-3" value="Три">
    <label for="block-host-3">Три</label><br>

    <hr class="horisontal">

    <input type="checkbox" name="alert-block" id="alert-block" checked>
    <label for="alert-block"> <?php echo $questions[1]; ?> </label> <br>

    <hr class="horisontal">

    <?php echo $questions[2]; ?>
    <select name="select" id="select-host">
        <option value="null" selected>Select, please!</option>
        <option value="ezyro.com">ezyro.com</option>
        <option value="byethost33.com">byethost33.com</option>
        <option value="great-site.com">great-site.net</option>
    </select>

    <hr class="horisontal">

    <?php echo $questions[3]; ?>
    <select name="user-wish[]" multiple="multiple">
        <option value="Терпіння">Терпіння</option>
        <option value="Наснаги">Наснаги</option>
        <option value="Міцних нервів">Міцних нервів</option>
        <option value="Не блокування хостингу">Не блокування хостингу</option>
        <option value="Щастя">Щастя</option>
        <option value="Здоров'я">Здоров'я</option>
        <option value="Діточок, як на небі зірочок">Діточок, як на небі зірочок</option>
    </select>
    <hr class="horisontal">

    <input type="reset" value="Reset form" id="reset-sub">
    <input type="submit" name="submit" value="Send it!" id="but-sub"><br>
</form>