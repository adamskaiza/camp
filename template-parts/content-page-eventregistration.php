<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>

<style>
.h2 {
    margin: 6rem 0 5rem 0;
}

.registration-static-table {
    border: 0;
    font-weight: bold;
}
.registration-static-table td {
    padding: 1rem;
}
.registration-static-table td:first-child {
    width: 145px;
}
.fc-header-toolbar,
input.bookacti-submit-form,
.bookacti-column-booking_id,
.bookacti-column-actions {
    display: none !important;
}

.crew__link {
    margin-bottom: 5rem;
}
#loginform {
    max-width: 360px;
    min-height: calc(100vh - 571px)
}
#loginform p {
    display: flex;
    justify-content: space-between;
}
.eventregistration__loginlabel {
    margin-bottom: 4rem;
}
/* a.bookacti-cancel-booking-group, a.bookacti-cancel-booking {
    font-weight: bold;
    color: red;
} */
.eventregistration .d1 {
    color: #4fe6b9; //rgb(79, 230, 185)
}
.eventregistration .d2 {
    color: #d4e74f; //rgb(212, 231, 79)
}
.eventregistration .d3 {
    color: #ff8200; //rgb(255, 130, 0)
}
.eventregistration .d4 {
    color: #ffc100; //rgb(255, 193, 0)
}

.eventregistration .d2t {
    color: #d4e74f; //rgb(212, 231, 79)
}
.eventregistration .d2w {
    color: #c9e122; //rgb(201, 225, 34)
}
.eventregistration .d2s1 {
    color: #a3b719; //rgb(163, 183, 25)
}
.eventregistration .d2s2 {
    color: #7b8a13; //rgb(123, 138, 19)
}

</style>

<section id="post-<?php the_ID(); ?>" <?php post_class("eventregistration container"); ?>>

    <header class="entry-header container h2">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content container">

        <?php 
            if (!is_user_logged_in()) :
        ?>
            <p class="eventregistration__loginlabel">
                Zaloguj się używając danych przesłanych mailem pt. CAMP REJESTRACJA
            </p>
        <?php
                wp_login_form(['label_username' => 'Adres e-mail']);
                
            else :
        ?> 

        <p>
            Mamy przyjemność zaprosić Cię do rejestracji na warsztaty i Targi Kariery. Ilość miejsc na każde wydarzenie jest ograniczona i widoczna w prawym dolnym rogu kafelka. 
        </p>
        <p>
            Pierwszego dnia wybierasz z <b class="d1">puli warsztatów TECH SKILL</b>. 
        </p>
        <p>
            Drugi dzień podzielony jest na blok <b class="d2t">Targów Kariery</b> i <b class="d2w">warsztatów SOFT SKILL</b>. To od Ciebie zależy, którą połowę dnia poświęcisz na daną aktywność, natomiast każdą możesz wybrać tylko raz. Jeśli wybierzesz Targi Kariery od rana, przy warsztatach w drugiej połowie dnia musisz określić, którą ścieżką chcesz iść (<b class="d2s1">2x90</b> min lub <b class="d2s2">3x60 min</b>). Gdy zdecydujesz się na <b class="d2t">Targi Kariery</b> po południu, warsztaty poranne wybierasz bez decydowania się na ścieżki, po prostu wypełniasz sloty godzinowe. 
        </p>
        <p>
            Trzeciego dnia ponownie decydujesz się na <b class="d3">warsztaty z puli TECH SKILL</b>. Powodzenia!
        </p>

        <h2 class="h2 d1">5 grudnia</h2>
        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>14.00 - 15.00</td>
                <td>PANEL DYSKUSYJNY: Globalne trendy startupów technologicznych z perspektywy fundusy VC</td>
            </tr>
            <tr>
                <td>14.30 - 16.00</td>
                <td><i>Lunch</i></td>
            </tr>
            <tr>
                <td>16.00 - 16.45</td>
                <td>OTWARCIE WYDARZENIA</td>
            </tr>
            <tr>
                <td>16.45 - 18.15</td>
                <td>WARSZTATY TECH SKILLS - SLOT 1</td>
            </tr>
        </table>

        <?php echo do_shortcode('[bookingactivities_form form="1"]'); ?>
        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>20.00</td>
                <td>Kolacja w Bacówce + integracja</td>
            </tr>
        </table>
        <h2 class="h2 d2">6 grudnia</h2>
        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>7.30 - 8.30</td>
                <td>Zajęcia sportowe</td>
            </tr>
            <tr>
                <td>8.00 - 9.30</td>
                <td><i>Śniadanie</b></td>
            </tr>
            <tr>
                <td>9.30 - 9.45</td>
                <td>Spotkanie organizacyjne</td>
            </tr>
            <tr>
                <td>10.00 - 13.30</td>
                <td>TARGI KARIERY / WARSZTATY SOFT SKILLS</td>
            </tr>
        </table>

        <?php echo do_shortcode('[bookingactivities_form form="2"]'); ?>
        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>20.00</td>
                <td>KOSMICZNA KOLACJA dla uczestniczek, mentorów i gości & Rozdanie dyplomów Programu Mentoringowego IT for SHE</td>
            </tr>
        </table>

        <h2 class="h2 d3">7 grudnia</h2>
        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>7.30 - 8.30</td>
                <td>Zajęcia sportowe</td>
            </tr>
            <tr>
                <td>8.00 - 9.30</td>
                <td>Śniadanie</td>
            </tr>
            <tr>
                <td>9.00 - 11.30</td>
                <td>Finał Programu Mentoringowego IT for SHE 2022 (sesja dla uczestników/-czek programu)</td>
            </tr>
            <tr>
                <td>9.30 - 9.45</td>
                <td>Spotkanie organizacyjne</td>
            </tr>
            <tr>
                <td>10.00 - 11.30</td>
                <td>ROLE MODEL SESSION</td>
            </tr>
            <tr>
                <td>11.30 - 13.00</td>
                <td>SESJA MENTORINGOWA I</td>
            </tr>
            <tr>
                <td>13.00 - 14.30</td>
                <td>SESJA MENTORINGOWA II</td>
            </tr>
            <tr>
                <td>14.30 - 15.30</td>
                <td>Lunch</td>
            </tr>
            <tr>
                <td>15.30 - 17.00</td>
                <td>WARSZTATY TECH SKILLS</td>
            </tr>
        </table>

        <?php echo do_shortcode('[bookingactivities_form form="3"]'); ?>

        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>19.00 - 20.30</td>
                <td>Kolacja</td>
            </tr>
            <tr>
                <td>20.00 - 22.00</td>
                <td>Pool Party!!!</td>
            </tr>
        </table>

        <h2 class="h2 d4">8 grudnia</h2>
        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>7.30 - 9.00</td>
                <td>Śniadanie</td>
            </tr>
            <tr>
                <td>9.00 - 11.00</td>
                <td>SESJA #Tech4Good:  LeaderSHEp Academy Pitching + HYDEPARK</td>
            </tr>
            <tr>
                <td>9.00 - 11.00</td>
                <td>Inauguracja programu stypendialnego AlphaLab - Perspektywy (sesja dla uczestniczek programu)</td>
            </tr>
            <tr>
                <td>11.00 - 12.00</td>
                <td>UROCZYSTE ZAKOŃCZENIE CAMPU - wręczenie dyplomów</td>
            </tr>
            <tr>
                <td>12.00 - 13.30</td>
                <td>Lunch</td>
            </tr>
            <tr>
                <td>od 12.30</td>
                <td>Wyjazd uczestniczek</td>
            </tr>
        </table>

        <a href="#" id="eventregistration__registerall" class="crew__link">Rezerwuj</a>
        <script>
        function registerall(e) {
            e.preventDefault();
            document.querySelectorAll('input.bookacti-submit-form').forEach(button => button.click());
            document.location.reload(true);
        }
        document.getElementById("eventregistration__registerall").addEventListener("click", registerall)
        </script>

        <h3 class="h2">Twój koszyk wrażeń na Women in Tech Camp:</h3>

        <?php echo do_shortcode('[bookingactivities_list]'); ?>

        <?php
            endif;
        ?>

    </div><!-- .entry-content -->
</section>