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
.bookacti-column-actions,
.bookacti-column-quantity,
.bookacti-unpick-event-icon {
    display: none !important;
}

.crew__link {
    margin-bottom: 5rem;
}

.crew__link[disabled] {
    background-color: #999;
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

.eventregistration__instruction {
    border: 5px #bd1f2c solid;
    padding: 1rem;
}

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
        <div class="eventregistration__instruction">
            <p>
                Mamy przyjemność zaprosić Cię do rejestracji na warsztaty i Targi Kariery. Ilość miejsc na każde
                wydarzenie jest ograniczona i widoczna w prawym dolnym rogu kafelka.
            </p>
            <p>
                Pierwszego dnia wybierasz z <b class="d1">puli warsztatów TECH SKILL</b>.
            </p>
            <p>
                Drugi dzień podzielony jest na blok <b class="d2t">Targów Kariery</b> i <b class="d2w">warsztatów SOFT
                    SKILL</b>. To od Ciebie zależy, którą połowę dnia poświęcisz na daną aktywność, natomiast każdą
                możesz wybrać tylko raz. Jeśli wybierzesz Targi Kariery od rana, przy warsztatach w drugiej połowie dnia
                musisz określić, którą ścieżką chcesz iść (<b class="d2s1">2x90</b> min lub <b class="d2s2">3x60
                    min</b>). Gdy zdecydujesz się na <b class="d2t">Targi Kariery</b> po południu, warsztaty poranne
                wybierasz bez decydowania się na ścieżki, po prostu wypełniasz sloty godzinowe.
            </p>
            <p>
                Trzeciego dnia ponownie decydujesz się na <b class="d3">warsztaty z puli TECH SKILL</b>. Powodzenia!
            </p>
        </div>


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
                <td>10.00 - 18.30</td>
                <td>TARGI KARIERY / WARSZTATY SOFT SKILLS</td>
            </tr>
        </table>

        <?php echo do_shortcode('[bookingactivities_form form="2"]'); ?>
        <table class="registration-static-table" cellspacing="0" cellpadding="15">
            <tr>
                <td>20.00</td>
                <td>KOSMICZNA KOLACJA dla uczestniczek, mentorów i gości & Rozdanie dyplomów Programu Mentoringowego IT
                    for SHE</td>
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
                <td>15.30 - 18.45</td>
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
                <td>SESJA #Tech4Good: LeaderSHEp Academy Pitching + HYDEPARK</td>
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

        <h3 class="h2" id="registration__timer">Do otwarcia rejestracji pozostało</h3>

        <script>
        let timezero = new Date("Nov 25, 2022 10:00:00");
        let text = 'Do otwarcia rejestracji pozostało - <b>';

        function timer() {
            let now = new Date();
            let seconds = Math.abs(now.getTime() - timezero.getTime()) / 1000;

            if (seconds <= 0) {
                timezero = new Date("Nov 27, 2022 23:59:59");
                text = 'Do zamknięcia rejestracji pozostało - <b>';
                seconds = Math.abs(now.getTime() - timezero.getTime()) / 1000
            }

            let days = Math.floor(seconds / 24 / 60 / 60);
            let hoursLeft = Math.floor((seconds) - (days * 86400));
            let hours = Math.floor(hoursLeft / 3600);
            let minutesLeft = Math.floor((hoursLeft) - (hours * 3600));
            let minutes = Math.floor(minutesLeft / 60);
            let remainingSeconds = Math.floor(seconds % 60);
            document.getElementById('registration__timer').innerHTML = text + days + " dni : " + hours + " godzin : " +
                minutes + " minut : " + remainingSeconds + ' sekund.</b>';
        }
        let countdownTimer = setInterval('timer()', 1000);
        </script>

        <?php 
    $today = new DateTime();
    $registrationStart = new DateTime('2022-11-25T10:00:00P');
    $registrationEnd = new DateTime('2022-11-27T23:59:59P');
        
    if ($today->getTimestamp() > $registrationStart->getTimestamp() && 
     $today->getTimestamp() < $registrationEnd->getTimestamp()) :
?>

        <a href="#" id="eventregistration__registerall" class="crew__link" onclick="registerall(event)">Rezerwuj</a>

        <?php else : ?>

        <a disabled title="Rejestracja będzie aktywna między 25.11 10:00, a 27.11 23:59 ;)"
            class="crew__link">Rezerwuj</a>

        <?php endif; ?>


        <h3 class="h2">Twój koszyk wrażeń na Women in Tech Camp:</h3>

        <?php echo do_shortcode('[bookingactivities_list]'); ?>

        <script>
        const path1 = ['26', '44', '45', '28', '46', '47'];
        const path2 = ['21', '20', '22', '23', '24', '25'];

        const firstPart = ['13', '12', '15', '14', '42', '19', '43', '16', '18', '17']
        const secondPart = path1.concat(path2);

        let registerall = (e) => {
            e.preventDefault();

            let isFirstDayFilled = document.querySelectorAll('.bookacti-calendar.fc')[0].querySelectorAll(
                '.bookacti-event-booked-by-current-user, .bookacti-picked-event').length == 2;

            let isSecondDayFilled = path2.some(id => document.querySelector(
                    `.bookacti-event-booked-by-current-user[data-activity-id="${id}"], .bookacti-picked-event[data-activity-id="${id}"]`
                    )) ?
                document.querySelectorAll('.bookacti-calendar.fc')[1].querySelectorAll(
                    '.bookacti-event-booked-by-current-user, .bookacti-picked-event').length == 4 :
                document.querySelectorAll('.bookacti-calendar.fc')[1].querySelectorAll(
                    '.bookacti-event-booked-by-current-user, .bookacti-picked-event').length == 3;

            let isThirdDayFilled = document.querySelectorAll('.bookacti-calendar.fc')[2].querySelectorAll(
                '.bookacti-event-booked-by-current-user, .bookacti-picked-event').length == 2;

            if (!isFirstDayFilled) {
                document.querySelector('.bookacti-booking-form-1').scrollIntoView();
                alert('Wybierz warsztaty na każdą godzinę w poniedziałek');
                return;
            }
            if (!isSecondDayFilled) {
                document.querySelector('.bookacti-booking-form-2').scrollIntoView();
                alert('Wybierz warsztaty na każdą godzinę we wtorek');
                return;
            }
            if (!isThirdDayFilled) {
                document.querySelector('.bookacti-booking-form-3').scrollIntoView();
                alert('Wybierz wydarzenia na każdą godzinę w środę');
                return;
            }
            document.querySelectorAll('input.bookacti-submit-form').forEach(button => button.click());
            setTimeout(() => document.location.reload(true), 200);
        }

        let workshopsOnLoad = (fn, i = 0) => {
            i++;
            if (document.querySelector('a.fc-timegrid-event')) {
                fn();
            } else {
                if (i < 100) {
                    setTimeout(() => workshopsOnLoad(fn, i), 100);
                } else {
                    alert("Can't load workshops");
                }
            }
        }

        let doOverlap = (dateX1, dateX2, dateY1, dateY2) => {
            dateX1 = new Date(dateX1);
            dateX2 = new Date(dateX2);
            dateY1 = new Date(dateY1);
            dateY2 = new Date(dateY2);
            return (dateX1 < dateY2 && dateX2 > dateY1);
        }

        workshopsOnLoad(() => {

            let workshops = document.querySelectorAll(
                'a.fc-timegrid-event:not(.bookacti-event-booked-by-current-user):not(.bookacti-event-unavailable):not(.bookacti-picked-event)'
                );

            let firstTargiKariery = document.querySelector('.fc-timegrid-event[data-event-id="55"]');
            let secondTargiKariery = document.querySelector('.fc-timegrid-event[data-event-id="56"]');

            workshops.forEach(workshop => {

                let calendar = workshop.parentNode.parentNode;

                workshop.addEventListener('click', (ev) => {

                    let pickedInThatDay = Array.from(calendar.querySelectorAll(
                        '.bookacti-event-booked-by-current-user, .bookacti-picked-event'
                        ));

                    // Jeśli próbuje się odkliknąć Targi Kariery, kiedy w drugiej czesci zarezerwowano warszataty - blokuje i komunikat

                    if (workshop == firstTargiKariery &&
                        workshop.classList.contains('bookacti-picked-event') &&
                        pickedInThatDay.some(p => secondPart.includes(p.getAttribute(
                            'data-activity-id')))) {
                        alert(
                            'Jeśli w drugiej części dnia wybrałaś warsztaty, w pierwszej musisz iść na Targi Kariery ;)');
                        ev.stopImmediatePropagation();
                        return;
                    }

                    if (workshop == secondTargiKariery &&
                        workshop.classList.contains('bookacti-picked-event') &&
                        pickedInThatDay.some(p => firstPart.includes(p.getAttribute(
                            'data-activity-id')))) {
                        alert(
                            'Jeśli w pierwszej części dnia wybrałaś warsztaty, w drugiej musisz iść na Targi Kariery ;)');
                        ev.stopImmediatePropagation();
                        return;
                    }

                    // Jeśli chce się odkliknąć już zaznaczony workshop - nic nie rób

                    if (workshop.classList.contains('bookacti-picked-event')) return;


                    // Jeśli kliknięty event koliduje czasowo z już zarezerwowanym lub zaznaczonym eventem - przerwij akcje i wyświetl monit

                    areThereOverlappingWorkshops = pickedInThatDay.some(p =>
                        doOverlap(
                            workshop.getAttribute('data-event-start'),
                            workshop.getAttribute('data-event-end'),
                            p.getAttribute('data-event-start'),
                            p.getAttribute('data-event-end')
                        )
                    );

                    if (areThereOverlappingWorkshops) {
                        ev.stopImmediatePropagation();
                        alert(
                            'Nie tak łapczywie! Nie możesz zarejestrować się na to wydarzeniem ponieważ pokrywa się z innymi, które już zarezerwowałaś 🙂');
                        return;
                    }

                    // Jeśli zaznaczono TARGI KARIERY drugi raz - przerwij akcje i wyświetl monit

                    isTargiKarieryPickedSecondTime = ((workshop == firstTargiKariery) &&
                            pickedInThatDay.includes(secondTargiKariery)) ||
                        ((workshop == secondTargiKariery) && pickedInThatDay.includes(
                            firstTargiKariery));

                    if (isTargiKarieryPickedSecondTime) {
                        ev.stopImmediatePropagation();
                        alert('Targi Kariery możesz wybrać tylko raz');
                        return;
                    }

                    // Jeśli wybrany już jest workshop z innej ścieżki - przerwij akcje i wyświetl monit

                    isDifferentPathPicked =
                        (pickedInThatDay.some(p => path1.some(id => id == p.getAttribute(
                                'data-activity-id'))) &&
                            path2.some(id => id == workshop.getAttribute('data-activity-id'))
                            ) ||
                        (pickedInThatDay.some(p => path2.some(id => id == p.getAttribute(
                                'data-activity-id'))) &&
                            path1.some(id => id == workshop.getAttribute('data-activity-id')));

                    if (isDifferentPathPicked) {
                        ev.stopImmediatePropagation();
                        alert('Warsztaty z innej ścieżki są już wybrane');
                        return;
                    }

                    // Jeśli wybrano warsztaty w jednej czesci dnia - automatycznie wybiera Targi w drugiej

                    const clickedOnFirstPart = firstPart.some(id => id == workshop.getAttribute(
                        'data-activity-id'));
                    const clickedOnSecondPart = secondPart.some(id => id == workshop
                        .getAttribute('data-activity-id'));

                    if (clickedOnFirstPart && !secondTargiKariery.classList.contains(
                            'bookacti-picked-event')) {
                        secondTargiKariery.click();
                    } else if (clickedOnSecondPart && !firstTargiKariery.classList.contains(
                            'bookacti-picked-event')) {
                        firstTargiKariery.click();
                    }

                }); // clicked workshop

            }); // workshop


        }); // onLoad
        </script>
        <?php
            endif;
        ?>

    </div><!-- .entry-content -->
</section>