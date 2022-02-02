require('./bootstrap');

import * as Turbo from "@hotwired/turbo"
import { Application } from "@hotwired/stimulus";
import { definitionsFromContext } from "@hotwired/stimulus-webpack-helpers";
import Dropdown from "stimulus-dropdown";

window.Stimulus = Application.start();
window.Stimulus.register("dropdown", Dropdown);
const context = require.context("./controllers", true, /\.js$/);
Stimulus.load(definitionsFromContext(context));
