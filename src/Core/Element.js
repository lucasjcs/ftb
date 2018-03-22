

export default class Element {
  constructor(element) {
    this.name = element.attr("name");
    this.pretty_name = element.attr("data-ftb-input-pretty-name");
  }
}