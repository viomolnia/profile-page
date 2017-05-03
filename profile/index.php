<!DOCTYPE html>
<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    use classes\User;
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Profile Page</title>
        <style type="text/css">
            <?php include 'design.css'; ?>
        </style>
    </head>

    <body>
        <header>
            <a href="index.php">Profile</a>
        </header>

        <article>
            <aside>
                <ul>

<!--                    --><?php
//                        $users = [];
//                        $users[] = new User('Name1 Surname1', 30, 'programmer', 'profileLink-1');
//                        $users[] = new User('Name2 Surname2', 31, 'architect', 'profileLink-2');
//                        $users[] = new User('Name3 Surname3', 32, 'tester', 'profileLink-3');
//                        $users[] = new User('Name4 Surname4', 33, 'manager', 'profileLink-4');
//                        $users[] = new User('Name5 Surname5', 34, 'designer', 'profileLink-5');
//
//                        foreach ($users as $user) { ?>
<!--                            <li>-->
<!--                                <div class="title">--><?php //echo $user -> getName() ?><!--</div>-->
<!--                                <div><a href="#">aaa</a></div>-->
<!--                            </li>-->
<!--                        --><?//} ?>

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
            </aside>

            <section>
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
            </section>

            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </article>

        <footer>
            <table>
                <tr>
                    <td><h3>Main</h3></td>
                    <td><h3>About</h3></td>
                    <td><h3>Partners</h3></td>
                </tr>

                <tr>
                    <td><a href="#">Info</a></td>
                    <td><a href="#">Etiam vel</a></td>
                    <td><a href="#">Donec fermentum</a></td>
                </tr>

                <tr>
                    <td><a href="#">Vivamus</a></td>
                    <td><a href="#">Duis fermentum</a></td>
                    <td><a href="#">Maecenas et</a></td>
                </tr>

                <tr>
                    <td><a href="#">Duis fermentum</a></td>
                    <td><a href="#">Donec quis</a></td>
                    <td><a href="#">Maecenas et</a></td>
                </tr>

                <tr>
                    <td><a href="#">Cras sollicitudin</a></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Aliquam ultrices</a></td>
                </tr>
            </table>
        </footer>

        <form action="http://localhost:8080/form.php?test=GET_PARAM" method="post">
            <br><br>
            <label for="name">
                <span>Name: </span>
                <input type = "text" class="input-field" name="name" value=""/>
            </label><br><br>

            <label for="score">
                <span>Score: </span>
                <select>
                    <option name="score" value="1">1</option>
                    <option name="score" value="2">2</option>
                    <option name="score" value="3">3</option>
                    <option name="score" value="4">4</option>
                    <option name="score" value="5">5</option>
                </select>
            </label><br><br>

            <label for="friend">
                <span>Common friend: </span><br>
                <input name="friend" type="radio" value="Vivamus Convallis">Vivamus Convallis</p>
                <input name="friend" type="radio" value="Cras Tempor">Cras Tempor</p>
                <input name="friend" type="radio" value="Maecenas Cursus" checked>Maecenas Cursus</p>
            </label><br><br>

            <label for="comment">
                <span>Comment: </span>
                <textarea name="comment"></textarea><br>
            </label><br><br>

            <input type="submit"/>
            <input type="reset"/>
        </form>
    </body>
</html>