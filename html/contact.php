<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue !</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="title-page"> <i class="far fa-calendar-check reminder"></i>
        <span> <a href="../index.html"> Mon pense bête</a></span> </div>
        <ul>
            
            <li> <a href="/html/liste-courses.html">Liste Courses</a></li>
            <li> <a href="/html/rdv.html">Rdv importants</a></li>
            <li> <a href="/html/ce_week-end.html">On fait quoi Ce week-end</a></li>
            <li> <a href="/html/ne_pas_oublier.html">A ne pas Oublier</a></li>
            <li> <a href="/html/todolist.html">To do list</a></li>
            <li> <a href="/html/repas_du_soir.html">On mange quoi ce soir</a></li>
            <li> <a href="/html/contact.html">Contact</a></li>
        </ul>
    </header>
    <main>
        <h1>Pour me contacter</h1>
        <p><!-- trait horizontal noir --></p>
        <div class="contact-form">
            <form method="post" action="https://formsubmit.co/contact.brahimjday@gmail.com">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Name" required />
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email Address" required />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Your message" required rows="4"></textarea>
                    </div>
                   
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </form>
        </div>
    </main>
</body>

</html>