document.addEventListener('DOMContentLoaded', fetchData);

        async function fetchData() {
            try {
                const response = await fetch('api/livro/list');
                const data = await response.json();
                console.log(data.results);
            } catch (error) {
                console.error('Erro ao buscar dados:', error);
            }
        }
