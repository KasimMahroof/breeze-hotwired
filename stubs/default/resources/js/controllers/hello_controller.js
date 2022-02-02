/**
 Example:
  <div data-controller="hello">
    <input data-hello-target="name" type="text">
    <button data-action="click->hello#greet">Greet</button>
  </div>
 */
  import { Controller } from "@hotwired/stimulus"

  export default class extends Controller {
    static targets = ["name"];

    greet() {
      const element = this.nameTarget;
      const name = element.value;
      console.log(`Hello, ${name}!`);
    }
  }
