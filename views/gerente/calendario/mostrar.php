<?php require_once 'views/gerente/templates/header.php'; ?>
<?php require_once 'views/gerente/templates/aside.php'; ?>

<div class="main-panel">
<?php require_once 'views/gerente/templates/navbar.php'; ?>

<div class="content">

<h1 class="title">Calendario Interactivo</h1>

<div class="calendar">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>

    <div class="calendar__week">
        <div class="calendar__day calendar__item">Mon</div>
        <div class="calendar__day calendar__item">Tue</div>
        <div class="calendar__day calendar__item">Wed</div>
        <div class="calendar__day calendar__item">Thu</div>
        <div class="calendar__day calendar__item">Fri</div>
        <div class="calendar__day calendar__item">Sat</div>
        <div class="calendar__day calendar__item">Sun</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>

</div>


<script>
/** @format */

let monthNames = [
	'January',
	'February',
	'March',
	'April',
	'May',
	'June',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December',
];

let currentDate = new Date();
let currentDay = currentDate.getDate();
let monthNumber = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

let dates = document.getElementById('dates');
let month = document.getElementById('month');
let year = document.getElementById('year');

let prevMonthDOM = document.getElementById('prev-month');
let nextMonthDOM = document.getElementById('next-month');

month.textContent = monthNames[monthNumber];
year.textContent = currentYear.toString();

prevMonthDOM.addEventListener('click', () => lastMonth());
nextMonthDOM.addEventListener('click', () => nextMonth());

const writeMonth = (month) => {
	for (let i = startDay(); i > 0; i--) {
		dates.innerHTML += ` <div class="calendar__date calendar__item calendar__last-days">
            ${getTotalDays(monthNumber - 1) - (i - 1)}
        </div>`;
	}

	for (let i = 1; i <= getTotalDays(month); i++) {
		if (i === currentDay) {
			dates.innerHTML += ` <div class="calendar__date calendar__item calendar__today">${i}</div>`;
		} else {
			dates.innerHTML += ` <div class="calendar__date calendar__item">${i}</div>`;
		}
	}
};

const getTotalDays = (month) => {
	if (month === -1) month = 11;

	if (
		month == 0 ||
		month == 2 ||
		month == 4 ||
		month == 6 ||
		month == 7 ||
		month == 9 ||
		month == 11
	) {
		return 31;
	} else if (month == 3 || month == 5 || month == 8 || month == 10) {
		return 30;
	} else {
		return isLeap() ? 29 : 28;
	}
};

const isLeap = () => {
	return (currentYear % 100 !== 0 && currentYear % 4 === 0) || currentYear % 400 === 0;
};

const startDay = () => {
	let start = new Date(currentYear, monthNumber, 1);
	return start.getDay() - 1 === -1 ? 6 : start.getDay() - 1;
};

const lastMonth = () => {
	if (monthNumber !== 0) {
		monthNumber--;
	} else {
		monthNumber = 11;
		currentYear--;
	}

	setNewDate();
};

const nextMonth = () => {
	if (monthNumber !== 11) {
		monthNumber++;
	} else {
		monthNumber = 0;
		currentYear++;
	}

	setNewDate();
};

const setNewDate = () => {
	currentDate.setFullYear(currentYear, monthNumber, currentDay);
	month.textContent = monthNames[monthNumber];
	year.textContent = currentYear.toString();
	dates.textContent = '';
	writeMonth(monthNumber);
};

writeMonth(monthNumber);


</script>

<?php require_once 'views/gerente/templates/footer.php'; ?>

</div>


<?php require_once 'views/gerente/templates/scripts.php'; ?>