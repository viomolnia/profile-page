<!DOCTYPE html>
<?php
require_once __DIR__ . '/../vendor/autoload.php';
use classes\User;
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Profile Page</title>
    <!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style type="text/css">
            <?php include 'design.css'; ?>
        </style>
    </head>

    <body>

        <div id="header" class="row">
            <div class="col-lg-12">
                <a href="index.php">Profile</a>
            </div>
        </div>

        <div id="main" class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="profile" class="col-md-7">
                        <img src="https://s-media-cache-ak0.pinimg.com/736x/84/a8/bd/84a8bd9619648b1c67e72a7b4a5d06df.jpg" alt="Profile Picture is not available now">
                        <table>
                            <tr>
                                <td class="field-name">Name: </td>
                                <td class="field-value">Anna</td>
                            </tr>

                            <tr>
                                <td class="field-name">Surname: </td>
                                <td class="field-value">Hrunova</td>
                            </tr>
                            <tr>
                                <td class="field-name">Age: </td>
                                <td class="field-value">24</td>
                            </tr>
                            <tr>
                                <td class="field-name">Country: </td>
                                <td class="field-value">Latvia</td>
                            </tr>
                            <tr>
                                <td class="field-name">City: </td>
                                <td class="field-value">Riga</td>
                            </tr>
                            <tr>
                                <td class="field-name">Favourite color: </td>
                                <td class="field-value">Violet</td>
                            </tr>
                            <tr>
                                <td class="field-name">Hobbies: </td>
                                <td class="field-value">Music, Reading, Sport</td>
                            </tr>
                        </table>
                    </div>

                    <div id="friends" class="col-md-5">
                        <ul>
                            <li>
                                <div class="title"><?php $user = new User('Name1 Surname1', 30, 'programmer', 'profileLink-1');
                                    echo $user -> getName() ?></div>
                                <div><a href="#"><?php echo 'Age: '.$user -> getAge().
                                            '; Profession: '.$user -> getProfession().
                                            '; Profile link: '.$user -> getLink()
                                        ?></a></div>
                            </li>
                            <li>
                                <div class="title"><?php $user = new User('Name2 Surname2', 31, 'architect', 'profileLink-2');
                                    echo $user -> getName() ?></div>
                                <div><a href="#"><?php echo 'Age: '.$user -> getAge().
                                            '; Profession: '.$user -> getProfession().
                                            '; Profile link: '.$user -> getLink()
                                        ?></a></div>
                            </li>
                            <li>
                                <div class="title"><?php $user = new User('Name3 Surname3', 32, 'tester', 'profileLink-3');
                                    echo $user -> getName() ?></div>
                                <div><a href="#"><?php echo 'Age: '.$user -> getAge().
                                            '; Profession: '.$user -> getProfession().
                                            '; Profile link: '.$user -> getLink()
                                        ?></a></div>
                            </li>
                            <li>
                                <div class="title"><?php $user = new User('Name4 Surname4', 33, 'manager', 'profileLink-4');
                                    echo $user -> getName() ?></div>
                                <div><a href="#"><?php echo 'Age: '.$user -> getAge().
                                            '; Profession: '.$user -> getProfession().
                                            '; Profile link: '.$user -> getLink()
                                        ?></a></div>
                            </li>
                            <li>
                                <div class="title"><?php $user = new User('Name5 Surname5', 34, 'designer', 'profileLink-5');
                                    echo $user -> getName() ?></div>
                                <div><a href="#"><?php echo 'Age: '.$user -> getAge().
                                            '; Profession: '.$user -> getProfession().
                                            '; Profile link: '.$user -> getLink()
                                        ?></a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="footer" class="col-md-4">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#"><h3>Main</h3></a></li>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Vivamus</a></li>
                            <li><a href="#">Duis fermentum</a></li>
                            <li><a href="#">Cras sollicitudin</a></li>
                        </ul>
                    </div>
                    <div id="footer" class="col-md-4">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#"><h3>About</h3></a></li>
                            <li><a href="#">Product for Windows</a></li>
                            <li><a href="#">Etiam vel</a></li>
                            <li><a href="#">Duis fermentum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                        </ul>
                    </div>
                    <div id="footer" class="col-md-4">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#"><h3>Partners</h3></a></li>
                            <li><a href="#">Donec fermentum</a></li>
                            <li><a href="#">Maecenas et</a></li>
                            <li><a href="#">Maecenas et</a></li>
                            <li><a href="#">Aliquam ultrices</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <form action="http://localhost:8080/form.php?test=GET_PARAM" method="post">
            <br><br>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name: </label>
                <div class="col-sm-10">
                    <label for="focusedInput"></label><input name="name" class="form-control" id="focusedInput" type="text">
                </div>
            </div>

            <label for="score">
                <span>Score: </span>
                <select name="score" class="selectpicker show-tick">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </label> <br><br>

            <label for="friend">
                <span>Common friend: </span><br>
                <input name="friend" type="radio" value="Vivamus Convallis">Vivamus Convallis<br>
                <input name="friend" type="radio" value="Cras Tempor">Cras Tempor<br>
                <input name="friend" type="radio" value="Maecenas Cursus" checked>Maecenas Cursus<br>
            </label><br><br>

            <div class="form-group has-success has-feedback">
                <label class="col-sm-2 control-label" for="inputSuccess">
                    Comment: </label>
                <div class="col-sm-10">
                    <input name="comment" type="text" class="form-control" id="inputSuccess">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                </div>
            </div>

<!--            <label for="comment">-->
<!--                <span>Comment: </span>-->
<!--                <textarea name="comment"></textarea><br>-->
<!--            </label><br><br>-->

<!--            <input type="submit"/>-->
            <input type="submit" class="btn btn-info" value="Submit">
            <input class="btn btn-primary" type="reset" value="Reset">
<!--            <input type="reset"/>-->
        </form>
    </body>
</html>