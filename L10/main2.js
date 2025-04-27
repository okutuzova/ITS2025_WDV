const NAME = document.querySelector('#serieName');
const RATING = document.querySelector('#serieRating');
const GENERE = document.querySelector('#serieGenere');
const IMAGE = document.querySelector('#serieImage');
 

const URL = 'https://api.tvmaze.com/singlesearch/shows?q=';


function printer(show) {
    fetch(URL + show)
    .then(risposta => risposta.json())
    .then(serie => {
            console.log(serie);
            NAME.value = serie.name;
            RATING.value = serie.rating.average;
            GENERE.value = serie.genres.join(', ');
            IMAGE.value = serie.image.medium;
        }
    )
}

NAME.addEventListener( 'blur', function () {
    printer(this.value);
})

// arrow function will not work because of different behaviour of this
// NAME.addEventListener( 'blur',  () => printer(this.value));

