export class Loading {
    static item = document.getElementById('loading');

    static show() {
        this.item.classList.add('d-flex');
        this.item.classList.remove('d-none');
    }
    
    static hide() {
        this.item.classList.add('d-none');
        this.item.classList.remove('d-flex');
    }
}
