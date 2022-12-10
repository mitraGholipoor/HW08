<?php
 $fname = $_POST["firstname"];
 $lname = $_POST["lastname"]; 
 $des=$_POST["subject"];
 $email=$_POST["email"];
 for ($x=1; $x<1000; $x++)
 {  
    if(!is_file("texts/$x.txt")){
        $file = fopen("texts/$x.txt","w");
        fwrite($file,"نام: $fname".PHP_EOL);
        fwrite($file,"نام خانوادگی: $lname".PHP_EOL);
        fwrite($file,"ایمیل: $email".PHP_EOL);
        fwrite($file,"توضیحات: $des");
        fclose($file);
        break;
    }
    
 }
 ?>
 <!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>رزومه</title>
    </head>

    <body>
        <header>
            <div class="menu">
                <ul class="nav_bar">
                    <li class="nav_item"><a onclick="show_info()">معرفی</a></li>
                    <li class="nav_item"><a onclick="show_skill()">مهارت ها</a></li>
                    <li class="nav_item"><a onclick="show_achievment()">افتخارات</a></li>
                    <li class="nav_item"><a onclick="show_contact_us()">تماس با ما</a></li>
                </ul>
            </div>
        </header>
        

        <section class="info first_section" id="info">
            <div class="header_text">
                <h2>معرفی</h2>
            </div>
                <div class="topic">
                    <table>
                        <thead>
                            <tr>
                                <td>
                                    <img width="90" src="assets/img/WhatsApp Image 2022-09-21 at 3.27.39 PM.jpeg" alt="" srcset="">
                                </td>
                                <td class="hidden"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="topic_name">بیوگرافی</td>
                                <td class="justify">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                </td>
                            </tr>
                            <tr>
                                <td class="topic_name">تحصیلات</td>
                                <td>
                                    دانشجوی کارشناسی مهندسی کامپیوتر
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
        </section>




        <section class="info first_section" id="contact_us">
            <div class="header_text" onclick="return submit()">
                <h2>تماس با ما</h2>
            </div>
            <div class="container">
                <form id="form" action="http://localhost/CW-HW8-401106363/server.php" method="POST">
              
                  <label for="fname">نام</label>
                  <input type="text" id="fname" name="firstname" placeholder="نام ...">
              
                  <label for="lname">نام خانوادگی</label>
                  <input type="text" id="lname" name="lastname" placeholder="نام خانوادگی ...">
              
                  <label for="email">ایمیل</label>
                  <input type="email" id="email" name="email" placeholder="ایمیل...">


                  <label for="subject">پیام</label>
                  <textarea id="subject" name="subject" placeholder="پیام خود را وارد کنید..." style="height:200px"></textarea>

              
                </form>
                <input type="submit" value="تایید" onclick="submit()">
              </div>
        </section>


        <section class="info first_section" id="skill">
            <div class="header_text">
                <h2>مهارت ها</h2>
            </div>
                <div class="topic">
                    <table>
                        <thead>
                            <tr>
                                <td>دسته ها</td>
                                <td>عناوین</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="topic_name">ورزشی</td>
                                <td>
                                    <ul class="topic_nav">
                                        <li>شنا</li>
                                        <li>والیبال</li>
                                        <li>دوچرخه سواری</li>
                                        <li>تای چی</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="topic_name">کامپیوتر</td>
                                <td>
                                    <ul class="topic_nav">
                                        <li>C</li>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>JS</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </section>



        <section class="info first_section" id="achievment">
            <div class="header_text">
                <h2>دستاورد ها و افتخارات</h2>
            </div>
                <div class="topic">
                    <table>
                        <thead>
                            <tr>
                                <td>
                                    دستاورد ها
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="justify">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                </td>
                            </tr>
                            <tr>
                                <td class="justify">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                </td>
                            </tr>
                            <tr>
                                <td class="justify">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                </td>
                            </tr>
                            <tr>
                                <td class="justify">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </section>


        <footer>
            <div class="contact_info">
                <div class="footer_head">
                    <h2>ارتباط با ما</h3>
                </div>
                
                <p>
                    شماره تماس : 021-56122296<br>
                    ایمیل:mitra@test.ir

                </p>
                <div class="links">
           
                    <a href="https://github.com/mitraGholipoor" class="logo">
                        <img src="./assets/img/25231.png" alt="" srcset="">
                    </a>
                    <a href="https://stackoverflow.com/users/12074941/mitra" class="logo">
                        <img src="./assets/img/2111640.png" alt="" srcset="">
                    </a>
                </div>
            </div>
            
        </footer>
        <script src="script.js"></script>
        <script>
            show_contact_us();
        </script>
    </body>
</html>