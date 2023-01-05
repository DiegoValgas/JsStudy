export class Config {
    static host = window.location.href;

    static get token() {
        const token = document.querySelector('meta[name=csrf-token]');
        return token ? token.content : token;
    }
}