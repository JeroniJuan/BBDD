<!DOCTYPE html>
<html>
<title>Formulari</title>

<body>
    <?php include "includes/head.php";
    ?>
    <?php include "includes/header.php";
    ?>
    <div>
        <header>
            <h1>Formulari</h1>
        </header>

        <form method="get">
            <div class=form-group>
                <label>Texto</label>
                <input type="text" name="texto" placeholder="nom" minlength="15" />
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-text" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/file-text</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
   <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
   <line x1="9" y1="9" x2="10" y2="9"></line>
   <line x1="9" y1="13" x2="15" y2="13"></line>
   <line x1="9" y1="17" x2="15" y2="17"></line>
</svg>
</svg>
            </div>
            <div class=form-group>
                <label>Data</label>
                <input type="data" placeholder="AAAA/MM/DD" />
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/calendar</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <rect x="4" y="5" width="16" height="16" rx="2"></rect>
   <line x1="16" y1="3" x2="16" y2="7"></line>
   <line x1="8" y1="3" x2="8" y2="7"></line>
   <line x1="4" y1="11" x2="20" y2="11"></line>
   <line x1="11" y1="15" x2="12" y2="15"></line>
   <line x1="12" y1="15" x2="12" y2="18"></line>
</svg>
            </div>
            <div class=form-group>
                <label>telefon</label>
                <input type="tel" name="telefon" placeholder="0000000" />
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/phone-call</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
   <path d="M15 7a2 2 0 0 1 2 2"></path>
   <path d="M15 3a6 6 0 0 1 6 6"></path>
</svg>
            </div>
            <label>Email</label>
            <input type="email" placeholder="mail" />
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/at</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="12" cy="12" r="4"></circle>
   <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
</svg>
    </div>
    <div>
        <input type="button" value="Enviar" />
    </div>
    </form>
    </div>
    <div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>

</html>