const tagName = 'konke-herres';
const template = document.createElement('template');
template.innerHTML = `<iframe src="herres.mp3" allow="autoplay" style="display:none" id="iframeAudio"></iframe> `;

class KonkeHerres extends HTMLElement {
    connectedCallback() {
        if (!this.shadowRoot) {
            this.attachShadow({mode: 'open'});
            this.shadowRoot.appendChild(template.content.cloneNode(true));
        }
    }
}

const register = () => customElements.define(tagName, KonkeHerres);
window.WebComponents ? window.WebComponents.waitFor(register) : register();