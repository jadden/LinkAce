export default class OpenLinksInTabs {

  constructor ($el) {
    this.$toggle = $el;
    this.state = false;

    this.$toggle.addEventListener('click', this.onToggleClick.bind(this));
  }

  onToggleClick () {
    const links = document.querySelectorAll('.link-wrapper .link-url');

    links.forEach((link, index) => {
      window.open(link.href);
    });

    const domain = window.location.protocol + "//" + window.location.host;
    console.info(`If only one tab is opening, please allow popups for ${domain} in your browser.`);
  }
}
