const TITLE = document.querySelector('#bookTitle');
const AUTHOR = document.querySelector('#bookAuthor');
const GENRE = document.querySelector('#bookGenre');
const IMAGE = document.querySelector('#bookImage');

const URL = 'https://openlibrary.org/search.json?q=';

function printer(book) {
    fetch(URL + book)
        .then(r => r.json())
        .then(data => {
            const bookData = data.docs[0];
            TITLE.value = bookData.title ?? '';
            AUTHOR.value = bookData.author_name?.[0] ?? '';
            GENRE.value = bookData.subject?.[0] ?? '';
            IMAGE.value = `https://covers.openlibrary.org/b/id/${bookData.cover_i}-M.jpg`;
        });
}

TITLE.addEventListener('blur', function () {
    printer(this.value);
});