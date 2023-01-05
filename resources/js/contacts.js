import { Config } from './config';
import { Loading } from './loading';

export class Contacts {
    static page = 1;
    static lastPage = 1;
    static list = document.getElementById('list');
    static copy = document.getElementById('copy');
    static loadMore = document.getElementById('loadMore');

    static start() {
        this.load();
        this.triggerButton();
    }

    static triggerButton() {
        this.loadMore.onclick = () => {
            this.page += 1;
            this.load();
        }
    }

    static load() {
        Loading.show();

        const url = new URL(Config.host),
            query = {
                json: true
            };

        query.page = this.page;
        Object.keys(query).forEach(key => url.searchParams.append(key, query[key]));

        fetch(url, {method: "GET"})
            .then((response) => response.json())
            .then((object) => {
                Loading.hide();

                object.data.forEach(item => {
                    const clone = copy.cloneNode(true);
                    clone.removeAttribute('id');
                    clone.classList.remove('d-none');
                    clone.querySelector('.card-title').innerHTML = item.name;
                    clone.querySelector('.email').innerHTML = item.mail;
                    clone.querySelector('.phone').innerHTML = item.phone;
                    this.list.append(clone);
                });

                if (this.page == object.last_page)
                    this.loadMore.style.display = 'none';
            })
            .catch((error) => {
                Loading.hide();
                console.log(error.message);
            });
    }
}