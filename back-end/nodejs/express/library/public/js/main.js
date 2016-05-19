var application_form = document.querySelector('.application__form');
var $titulo = document.querySelector('#titulo');
var $limpar = document.querySelector('#limpar');
var $list = document.querySelector('.application__list');

if (!localStorage.getItem('books')) {
	localStorage.setItem('books','[]');
}

function templateBook(name) {
	return '<li class="application__list__item">'+name+'</li>';
}

function renderBooks(books) {
	var books = JSON.parse(books);
	var $html = '';
	for (var i in books) {
		$html += templateBook(books[i].title);
	};
	$list.innerHTML = $html;
}

function saveBook(titulo) {
	var books = JSON.parse(localStorage.getItem('books'));
	books.push({'title':titulo});
	localStorage.setItem('books', JSON.stringify(books));

	renderBooks(localStorage.getItem('books'));
}

function submitApplicationForm(e) {
	e.preventDefault();
	// var save = confirm('Deseja salvar?');
	// if (save) {
		saveBook($titulo.value);
		$titulo.value = '';

	// }
}

application__form.addEventListener('submit', function (e) {
	submitApplicationForm(e);
});

$limpar.addEventListener('click', function () {
	localStorage.setItem('books','[]');
	renderBooks(localStorage.getItem('books'));
});

renderBooks(localStorage.getItem('books'));