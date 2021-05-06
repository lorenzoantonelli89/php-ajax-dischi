function initVue() {
    new Vue({
        el: '#app',
        data: {
            'musics': [],
            'selectGenre': 'All',
            'year': '',
            'genres': [],
        },
        // prendo oggetto music da api
        mounted() {
            axios
                .get('../partials_php/main.php', {
                    params: {
                        'genre': this.selectGenre,
                    }
                })
                .then(data => {
                    data.data.forEach(elem => {
                        if(!this.genres.includes(elem.genre)){
                            this.genres.push(elem.genre);
                        }
                    });
                });
            this.filteredMusic();
        },
        methods: {
            // prendo api filtrata da php
            filteredMusic: function () {
                console.log(this.selectGenre);
                axios
                    .get('../partials_php/main.php', {
                        params: {
                            'genre': this.selectGenre,
                        }
                    })
                    .then(data => {
                        this.musics = data.data;
                    });
            },
        },
        computed: {
            // ordino la musica per anno
            orderedMusic: function () {
                const order = this.musics.sort(
                    function (a, b) {
                        var A = a.year;
                        var B = b.year;
                        if (A < B) {
                            return -1;
                        } else if (A > B) {
                            return 1;
                        }
                        return 0;
                    }
                );
                return order;
            }
        }
    });
}

function init() {
    initVue();
}

document.addEventListener('DOMContentLoaded', init);
